<?php

namespace Mrzen\Tigerbay\Models;

use DateTimeInterface;

class TourCacheSearchRequest
{

    /**
     * @var DateTimeInterface|null $startDate
     */
    private $startDate = null;

    /**
     * @var DateTimeInterface|null $endDate
     */
    private $endDate = null;

    /**
     * @var string|null $tourCode
     */
    private $tourCode = null;

    /**
     * @return DateTimeInterface|null
     */
    public function getStartDate(): ?DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param DateTimeInterface|null $startDate
     * @return TourCacheSearchRequest
     */
    public function setStartDate(?DateTimeInterface $startDate): TourCacheSearchRequest
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getEndDate(): ?DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param DateTimeInterface|null $endDate
     * @return TourCacheSearchRequest
     */
    public function setEndDate(?DateTimeInterface $endDate): TourCacheSearchRequest
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTourCode(): ?string
    {
        return $this->tourCode;
    }

    /**
     * @param string|null $tourCode
     * @return $this
     */
    public function setTourCode(?string $tourCode): TourCacheSearchRequest
    {
        $this->tourCode = $tourCode;
        return $this;
    }

    public function toArray(): array
    {
        $v = [];

        if ($this->getStartDate() !== null) {
            $v['searchQuery.serviceDateRange.from'] = $this->getStartDate()->format('Y-m-d');
        }

        if ($this->getEndDate() !== null) {
            $v['searchQuery.serviceDateRange.to'] = $this->getEndDate()->format('Y-m-d');
        }

        if ($this->getTourCode() !== null) {
            $v['searchQuery.tourCode'] = $this->getTourCode();
        }

        return $v;
    }


}
