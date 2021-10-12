<?php

namespace Mrzen\Tigerbay;

use GuzzleHttp\Exception\GuzzleException;
use Mrzen\Tigerbay\Models\TourCacheSearchRequest;
use Mrzen\Tigerbay\Models\TourCacheSearchResult;
use Mrzen\Tigerbay\Models\TourCacheStats;

trait TourCache
{
    /**
     * Get statistics about the tour cache
     *
     * @return TourCacheStats
     * @throws GuzzleException
     */
    public function stats(): TourCacheStats
    {
        return $this->json('GET', 'nimble/toursearch/cache/status', TourCacheStats::class);
    }

    /**
     * @param TourCacheSearchRequest $params
     * @return TourCacheSearchResult[] Results
     * @throws GuzzleException
     */
    public function tourSearch(TourCacheSearchRequest $params): array
    {
        return $this->json(
            'GET',
            'nimble/toursearch/departures',
            TourCacheSearchResult::class . '[]',
            ['query' => $params->toArray()]
        );
    }
}
