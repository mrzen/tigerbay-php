<?php

namespace Mrzen\Tigerbay\Tests;

use PHPUnit\Framework\TestCase;

abstract class ClientTestCase extends TestCase
{
    protected function getTestClient(): \Mrzen\Tigerbay\Client
    {
        $config = (new \Mrzen\Tigerbay\Config())->setClientId('website')
            ->setSecret('Secret')
            ->setTimeout(10.0)
            ->setBaseURL('https://hfholidays-preview.ontigerbay.co.uk');

        return new \Mrzen\Tigerbay\Client($config);
    }
}
