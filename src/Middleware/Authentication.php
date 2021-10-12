<?php

namespace Mrzen\Tigerbay\Middleware;

use GuzzleHttp\Client;
use Mrzen\Tigerbay\Models\AuthenticationResponse;
use Psr\Http\Message\RequestInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Authentication middleware
 */
class Authentication
{
    public static function oauth2(string $tokenUrl, string $clientId, string $secret, SerializerInterface $serializer): callable
    {

        $ac = new Client([
            'base_uri' => $tokenUrl,
        ]);

        $token = '';
        $expires = 0;

        return function(callable $handler) use ($ac, $clientId, $secret, $token, $expires, $serializer) {
            return function (RequestInterface $request, array $options) use ($handler, $ac, $clientId, $secret, $token, $expires, $serializer) {

                if ($expires <= time() || $token === '') {
                    $rsp = $ac->request('POST','', [
                        'form_params' => [
                            'client_id' => $clientId,
                            'client_secret' => $secret,
                            'grant_type' => 'client_credentials'
                        ]
                    ]);

                    /**
                     * @var AuthenticationResponse $data
                     */
                    $data = $serializer->deserialize($rsp->getBody(), AuthenticationResponse::class, 'json');

                    $token = $data->getAccessToken();
                    $expires = time() + $data->getExpiresIn();
                }

                $request = $request->withHeader('Authorization', 'Bearer ' . $token);
                return $handler($request, $options);
            };
        };
    }
}
