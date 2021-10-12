<?php

namespace Mrzen\Tigerbay\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class AuthenticationResponse
{

    /**
     * @var string $accessToken
     */
    private $accessToken;


    /**
     *
     * @var int $expiresIn
     */
    private $expiresIn;

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return AuthenticationResponse
     */
    public function setAccessToken(string $accessToken): AuthenticationResponse
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    /**
     * @param int $expiresIn
     * @return AuthenticationResponse
     */
    public function setExpiresIn(int $expiresIn): AuthenticationResponse
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }
}
