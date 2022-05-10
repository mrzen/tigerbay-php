<?php

namespace Mrzen\Tigerbay\Models;

class FlightGroup
{

    /**
     * @var int $setupId
     */
    private $setupId;

    /**
     * @var PriceSummary $priceSummary
     */
    private $priceSummary;

    /**
     * @var Flight[] $flights
     */
    private $flights;


    /**
     * Determines if the flight group is included by default
     *
     * @var bool $isDefault
     * @since 2022-05-10 Moved from {@see Flight}
     */
    private $isDefault = false;

    /**
     * @return int
     */
    public function getSetupId(): int
    {
        return $this->setupId;
    }

    /**
     * @param int $setupId
     * @return FlightGroup
     */
    public function setSetupId(int $setupId): FlightGroup
    {
        $this->setupId = $setupId;
        return $this;
    }

    /**
     * @return PriceSummary
     */
    public function getPriceSummary(): PriceSummary
    {
        return $this->priceSummary;
    }

    /**
     * @param PriceSummary $priceSummary
     * @return FlightGroup
     */
    public function setPriceSummary(PriceSummary $priceSummary): FlightGroup
    {
        $this->priceSummary = $priceSummary;
        return $this;
    }

    /**
     * @return Flight[]
     */
    public function getFlights(): array
    {
        return $this->flights;
    }

    /**
     * @param Flight[] $flights
     * @return FlightGroup
     */
    public function setFlights(array $flights): FlightGroup
    {
        $this->flights = $flights;
        return $this;
    }

    /**
     * Get flight inclusion
     *
     * @return bool
     * @since 2022-05-10 Moved from {@see Flight}
     */
    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @param bool $isDefault
     */
    public function setIsDefault(bool $isDefault): void
    {
        $this->isDefault = $isDefault;
    }
}
