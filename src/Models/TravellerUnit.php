<?php

namespace Mrzen\Tigerbay\Models;

use DateTimeInterface;

class TravellerUnit
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var int $setupId
     */
    private $setupId;

    /**
     * @var DateTimeInterface $startDate
     */
    private $startDate;

    /**
     * @var Accommodation $accommodation
     */
    private $accommodation;


    /**
     * @var PriceSummary $priceSummary
     */
    private $priceSummary;

    /**
     * @var InventorySummary $inventorySummary
     */
    private $inventorySummary;

    /**
     * @var bool $isDefault
     */
    private $isDefault;

    /**
     * @var bool $isMandatory
     */
    private $isMandatory;

    /**
     * @var string $travellerType
     */
    private $travellerType;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return TravellerUnit
     */
    public function setName(string $name): TravellerUnit
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getSetupId(): int
    {
        return $this->setupId;
    }

    /**
     * @param int $setupId
     * @return TravellerUnit
     */
    public function setSetupId(int $setupId): TravellerUnit
    {
        $this->setupId = $setupId;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getStartDate(): DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param DateTimeInterface $startDate
     * @return TravellerUnit
     */
    public function setStartDate(DateTimeInterface $startDate): TravellerUnit
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return Accommodation
     */
    public function getAccommodation(): Accommodation
    {
        return $this->accommodation;
    }

    /**
     * @param Accommodation $accommodation
     * @return TravellerUnit
     */
    public function setAccommodation(Accommodation $accommodation): TravellerUnit
    {
        $this->accommodation = $accommodation;
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
     * @return TravellerUnit
     */
    public function setPriceSummary(PriceSummary $priceSummary): TravellerUnit
    {
        $this->priceSummary = $priceSummary;
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
     * @return TravellerUnit
     */
    public function setInventorySummary(InventorySummary $inventorySummary): TravellerUnit
    {
        $this->inventorySummary = $inventorySummary;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @param bool $isDefault
     * @return TravellerUnit
     */
    public function setIsDefault(bool $isDefault): TravellerUnit
    {
        $this->isDefault = $isDefault;
        return $this;
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
     * @return TravellerUnit
     */
    public function setIsMandatory(bool $isMandatory): TravellerUnit
    {
        $this->isMandatory = $isMandatory;
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
     * @return TravellerUnit
     */
    public function setTravellerType(string $travellerType): TravellerUnit
    {
        $this->travellerType = $travellerType;
        return $this;
    }
}
