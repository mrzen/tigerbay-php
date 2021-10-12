<?php

namespace Mrzen\Tigerbay\Models;

use Symfony\Component\Serializer\Annotation\SerializedName;

class TourCacheStats
{
    /**
     * @var int $itemCount
     */
    private $itemCount;

    /**
     * @var int $averageAgeSeconds
     */
    private $averageAgeSeconds;

    /**
     * @return int
     */
    public function getItemCount(): int
    {
        return $this->itemCount;
    }

    /**
     * @param int $itemCount
     * @return TourCacheStats
     */
    public function setItemCount(int $itemCount): TourCacheStats
    {
        $this->itemCount = $itemCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getAverageAgeSeconds(): int
    {
        return $this->averageAgeSeconds;
    }

    /**
     * @param int $averageAgeSeconds
     * @return TourCacheStats
     */
    public function setAverageAgeSeconds(int $averageAgeSeconds): TourCacheStats
    {
        $this->averageAgeSeconds = $averageAgeSeconds;
        return $this;
    }
}
