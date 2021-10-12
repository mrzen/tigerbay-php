<?php

use http\Env\Response;

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
     * @var GuzzleHttp\Client $client
     */
    private $client;

    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->client = new GuzzleHttp\Client([
            'timeout' => $config->getTimeout(),
            'base_uri' => $config->getBaseURL()
        ]);
    }

    /**
     * API HTTP Request
     *
     * @param string $method Request Method
     * @param string $path Request Path
     * @return Response HTTP Response
     */
    public function request(string $method, string $path, array $query = null): Response
    {
        $opts = [];

        if ($query) {
            $opts['query'] = $query;
        }

        $this->client->request($method, $path, $opts);
    }

    /**
     * @return Config
     */
    public function getConfig(): Config
    {
        return $this->config;
    }
}
