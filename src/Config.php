<?php

class Config
{
    /**
     * API Base URL
     *
     * @var string $baseURL
     */
    private $baseURL;

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
     * @return string
     */
    public function getBaseURL()
    {
        return $this->baseURL;
    }

    /**
     * @param string $baseURL
     * @return Config
     */
    public function setBaseURL($baseURL)
    {
        $this->baseURL = $baseURL;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     * @return Config
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     * @return Config
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
        return $this;
    }
}
