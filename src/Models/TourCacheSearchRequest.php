<?php

namespace Mrzen\Tigerbay\Models;

use DateTimeInterface;

class TourCacheSearchRequest
{

    /**
     * @var DateTimeInterface|null $startDate
     */
    private $startDate;

    /**
     * @var DateTimeInterface|null $endDate
     */
    private $endDate;

    /**
     * @return DateTimeInterface|null
     */
    public function getStartDate(): DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param DateTimeInterface|null $startDate
     * @return TourCacheSearchRequest
     */
    public function setStartDate(DateTimeInterface $startDate): TourCacheSearchRequest
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getEndDate(): DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param DateTimeInterface|null $endDate
     * @return TourCacheSearchRequest
     */
    public function setEndDate(DateTimeInterface $endDate): TourCacheSearchRequest
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function toArray(): array
    {
        $v = [];

        if ($this->getStartDate() !== null) {
            $v['searchQuery.serviceDateRange.from'] = $this->getStartDate()->format('y-m-d');
        }

        if ($this->getEndDate() !== null) {
            $v['searchQuery.serviceDateRange.to'] = $this->getEndDate()->format('y-m-d');
        }

        return $v;
    }


}
