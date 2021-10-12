<?php

namespace Mrzen\Tigerbay\Tests;
use Mrzen\Tigerbay\Models\TourCacheSearchRequest;
use Mrzen\Tigerbay\Models\TourCacheStats;

class ClientTest extends ClientTestCase
{
    public function testStats()
    {
        $client = $this->getTestClient();

        /**
         * @var TourCacheStats $stats
         */
        $stats = $client->stats();

        static::assertInstanceOf(TourCacheStats::class, $stats);
        static::assertGreaterThan(0, $stats->getItemCount());
        static::assertGreaterThan(0, $stats->getAverageAgeSeconds());
    }

    public function testTourSearch()
    {
        $client = $this->getTestClient();

        $start = new \DateTimeImmutable();
        $end   = $start->add(new \DateInterval('P1M'));
        $request = (new TourCacheSearchRequest())->setStartDate($start)->setEndDate($end);

        $results = $client->tourSearch($request);

        static::assertIsArray($results);

        $first = current($results);

        static::assertIsString($first->getId());
        static::assertIsInt($first->getInventorySummary()->getAllocation());
    }
}
