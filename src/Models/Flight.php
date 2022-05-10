<?php

namespace Mrzen\Tigerbay\Models;

use DateTimeInterface;

class Flight
{

    /**
     * @var int $setupId
     */
    private $setupId;

    /**
     * @var InventorySummary $inventorySummary
     */
    private $inventorySummary;

    /**
     * @var PriceSummary $priceSummary
     */
    private $priceSummary;

    /**
     * @var DateTimeInterface $departureDateTime
     */
    private $departureDateTime;

    /**
     * @var DateTimeInterface $arrivalDateTime
     */
    private $arrivalDateTime;

    /**
     * @var bool $isMandatory
     */
    private $isMandatory;

    /**
     * @var bool $isInternal
     */
    private $isInternal;

    /**
     * @var string $travellerType
     */
    private $travellerType;

    /**
     * @var string $flightNumber
     */
    private $flightNumber;

    /**
     * @return int
     */
    public function getSetupId(): int
    {
        return $this->setupId;
    }

    /**
     * @param int $setupId
     * @return Flight
     */
    public function setSetupId(int $setupId): Flight
    {
        $this->setupId = $setupId;
        return $this;
    }

    /**
     * @return InventorySummary
     */
    public function getInventorySummary(): InventorySummary
    {
        return $this->inventorySummary;
    }

    /**
     * @param InventorySummary $inventorySummary
     * @return Flight
     */
    public function setInventorySummary(InventorySummary $inventorySummary): Flight
    {
        $this->inventorySummary = $inventorySummary;
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
     * @return Flight
     */
    public function setPriceSummary(PriceSummary $priceSummary): Flight
    {
        $this->priceSummary = $priceSummary;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDepartureDateTime(): DateTimeInterface
    {
        return $this->departureDateTime;
    }

    /**
     * @param DateTimeInterface $departureDateTime
     * @return Flight
     */
    public function setDepartureDateTime(DateTimeInterface $departureDateTime): Flight
    {
        $this->departureDateTime = $departureDateTime;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getArrivalDateTime(): DateTimeInterface
    {
        return $this->arrivalDateTime;
    }

    /**
     * @param DateTimeInterface $arrivalDateTime
     * @return Flight
     */
    public function setArrivalDateTime(DateTimeInterface $arrivalDateTime): Flight
    {
        $this->arrivalDateTime = $arrivalDateTime;
        return $this;
    }

    /**
     * @return bool
     * @deprecated Since 2022-05-10: Removed form upstream API 2022-05-06
     *             This function now always returns false for compatibility.
     */
    public function isDefault(): bool
    {
        return false;
    }
    /**
     * @return bool
     */
    public function isMandatory(): bool
    {
        return $this->isMandatory;
    }

    /**
     * @param bool $isMandatory
     * @return Flight
     */
    public function setIsMandatory(bool $isMandatory): Flight
    {
        $this->isMandatory = $isMandatory;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInternal(): bool
    {
        return $this->isInternal;
    }

    /**
     * @param bool $isInternal
     * @return Flight
     */
    public function setIsInternal(bool $isInternal): Flight
    {
        $this->isInternal = $isInternal;
        return $this;
    }

    /**
     * @return string
     */
    public function getTravellerType(): string
    {
        return $this->travellerType;
    }

    /**
     * @param string $travellerType
     * @return Flight
     */
    public function setTravellerType(string $travellerType): Flight
    {
        $this->travellerType = $travellerType;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlightNumber(): string
    {
        return $this->flightNumber;
    }

    /**
     * @param string $flightNumber
     * @return Flight
     */
    public function setFlightNumber(string $flightNumber): Flight
    {
        $this->flightNumber = $flightNumber;
        return $this;
    }
}
