<?php

namespace Mrzen\Tigerbay\Middleware;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
class Logger
{
    /**
     * Logging Middleware
     *
     * Uses the ZenLogger class if it is defined
     *
     * @return callable Logging middleware
     */
    public static function logger(): callable
    {
        // If the ZenLogger class does not exist, do not log
        if (!class_exists('ZenLogger')) {
            return function(callable $handler) {
                return function(RequestInterface $request, array $options) use ($handler) {
                    $promise = $handler($request, $options);
                    return $promise->then(function (ResponseInterface $response) {
                        return $response;
                    });
                };
            };
        }

        // Create a logger and start logging interactions
        $logger = new \ZenLogger('libraries/tigerbay');

        return function(callable $handler) use ($logger) {
            return function(RequestInterface $request, array $options) use ($handler, $logger) {
                $start = microtime(true);
                $promise = $handler($request, $options);
                return $promise->then(
                    function (ResponseInterface $response) use ($logger, $request, $start) {
                        $end = microtime(true);
                        $delta = $end - $start;

                        $level = $response->getStatusCode() >= 400 ? \ZenLogger::ERROR : \ZenLogger::INFO;

                        $logger->log(
                            "Request: {$request->getMethod()} \"{$request->getUri()->getPath()}{$request->getUri()->getQuery()}\" ".
                            $response->getStatusCode() . " " . number_format($delta*1000, 0) . 'ms',
                            [
                                'request' => $request,
                                'response' => $response
                            ],
                            $level
                        );
                    }
                );
            };
        };
    }
}
