<?php

namespace Mrzen\Tigerbay;

class Config
{
    /**
     * API Base URL
     *
     * @var string $baseURL
     */
    private $baseURL;

    /**
     * OAuth2 Token Request URL
     *
     * @var ?string $tokenURL
     */
    private $tokenURL = null;

    /**
     * OAuth Client ID
     *
     * @var string $clientId
     */
    private $clientId;

    /**
     * OAuth Client Secret
     *
     * @var string $secret
     */
    private $secret;

    /**
     * Timeout
     *
     * @var float $timeout
     */
    private $timeout = 5.0;

    /**
     * @return string
     */
    public function getBaseURL(): string
    {
        return $this->baseURL;
    }

    /**
     * @param string $baseURL
     * @return Config
     */
    public function setBaseURL(string $baseURL): Config
    {
        $this->baseURL = $baseURL;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     * @return Config
     */
    public function setClientId($clientId): Config
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     * @return Config
     */
    public function setSecret(string $secret): Config
    {
        $this->secret = $secret;
        return $this;
    }

    /**
     * @return float
     */
    public function getTimeout(): float
    {
        return $this->timeout;
    }

    /**
     * @param float $timeout
     * @return Config
     */
    public function setTimeout(float $timeout): Config
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function getTokenURL(): ?string {
        return $this->tokenURL;
    }

    public function setTokenURL(?string $value): Config
    {
        $this->tokenURL = $value;
        return $this;
    }
}
