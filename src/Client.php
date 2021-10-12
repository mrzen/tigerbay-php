<?php

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

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @return Config
     */
    public function getConfig(): Config
    {
        return $this->config;
    }
}
