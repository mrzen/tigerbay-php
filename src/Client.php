<?php

namespace Mrzen\Tigerbay;

use Doctrine\Common\Annotations\AnnotationReader;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\HandlerStack;
use Mrzen\Tigerbay\Middleware\Authentication;
use Mrzen\Tigerbay\Middleware\Logger;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * TigerBay API Client
 */
class Client
{
    /**
     * Configuration
     *
     * @var Config $config
     */
    private $config;

    /**
     * HTTP Client
     * @var \GuzzleHttp\Client $client
     */
    private $client;

    /**
     * Serializer
     *
     * @var SerializerInterface $serializer
     */
    private $serializer;

    public function __construct(Config $config)
    {
        $this->config = $config;


        $this->serializer = new Serializer(
            [
                new DateTimeNormalizer(),
                new ArrayDenormalizer(),
                new ObjectNormalizer(
                    new ClassMetadataFactory(
                        new AnnotationLoader(new AnnotationReader()
                        )
                    ),
                    null,
                    null,
                    new ReflectionExtractor()
                ),
            ],
            [new JsonDecode(), new JsonEncode()]
        );

        $stack = HandlerStack::create();
        $stack->push(Logger::logger());

        $tokenUrl = $config->getBaseURL() . '/auth/web/connect/token';
        $stack->push(Authentication::oauth2($tokenUrl, $config->getClientId(), $config->getSecret(), $this->serializer));

        $this->client = new \GuzzleHttp\Client([
            'handler' => $stack,
            'timeout' => $config->getTimeout(),
            'base_uri' => $config->getBaseURL() . '/nimble'
        ]);
    }

    /**
     * API HTTP Request
     *
     * @param string $method Request Method
     * @param string $path Request Path
     * @param ?array $options Request Options
     * @return ResponseInterface HTTP Response
     * @throws GuzzleException
     */
    public function request(string $method, string $path, array $options = []): ResponseInterface
    {
        return $this->client->request($method, $path, $options);
    }

    /**
     * JSON Request
     *
     * @param string $method HTTP Method
     * @param string $path Request Path
     * @param string $t    Return Type
     * @param array  $options Request options
     * @return mixed
     * @throws GuzzleException
     */
    public function json(string $method, string $path, string $t, array $options = [])
    {
        $rsp = $this->request($method, $path, $options);
        $content = $rsp->getBody()->getContents();
        return $this->serializer->deserialize($content, $t, 'json');
    }

    use TourCache;

    /**
     * @return Config
     */
    public function getConfig(): Config
    {
        return $this->config;
    }
}
