<?php

namespace Mrzen\Tigerbay\Models;

use DateTimeInterface;

class TourCacheSearchResult
{
    /**
     * @var string $id
     */
    private $id;

    /**
     * @var int $departureSetupId
     */
    private $departureSetupId;

    /**
     * @var int $priceSetId
     */
    private $priceSetId;

    /**
     * @var int $tourId
     */
    private $tourId;

    /**
     * @var DateTimeInterface $generated
     */
    private $generated;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $code
     */
    private $code;

    /**
     * @var DateTimeInterface $startDate
     */
    private $startDate;

    /**
     * @var DateTimeInterface $endDate
     */
    private $endDate;

    /**
     * @var int $duration
     */
    private $duration;

    /**
     * @var InventorySummary $inventorySummary
     */
    private $inventorySummary;

    /**
     * @var TravellerUnit[] $singleTravellerUnits
     */
    private $singleTravellerUnits;

    /**
     * @var TravellerUnit[] $groupTravellerUnits
     */
    private $groupTravellerUnits;

    /**
     * @var Extra[] $extras
     */
    private $extras;

    /**
     * @var Location[]|null $locations
     */
    private $locations;

    /**
     * @var Price $tourPrice
     */
    private $tourPrice;

    /**
     * @var Price $perPersonSingleTravellerTotalPrice
     */
    private $perPersonSingleTravellerTotalPrice;

    /**
     * @var Price $perPersonGroupTravellerTotalPrice
     */
    private $perPersonGroupTravellerTotalPrice;

    /**
     * @var Price $perPersonSingleTravellerTotalDiscount
     */
    private $perPersonSingleTravellerTotalDiscount;

    /**
     * @var Price $perPersonGroupTravellerTotalDiscount
     */
    private $perPersonGroupTravellerTotalDiscount;

    /**
     * @var Promotion[] $singleTravellerPromos
     */
    private $singleTravellerPromos;

    /**
     * @var Promotion[] $groupTravellerPromos
     */
    private $groupTravellerPromos;

    /**
     * @var FlightGroup[] $flightGroups
     */
    private $flightGroups;

    /**
     * @var string $refreshId
     */
    private $refreshId;

    /**
     * @var int $minimumSingleRooms
     */
    private $minimumSingleRooms;

    /**
     * @var int $minimumTwinRooms
     */
    private $minimumTwinRooms;

    /**
     * @var int $minimumTripleRooms
     */
    private $minimumTripleRooms;

    /**
     * @var string[] $tags
     */
    private $tags;


    /**(
     * @var bool $isGuaranteed
     */
    private $isGuaranteed;

    public function isGuaranteed(): bool
    {
        return $this->isGuaranteed;
    }

    public function setIsGuaranteed(bool $isGuaranteed): TourCacheSearchResult
    {
        $this->isGuaranteed = $isGuaranteed;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return TourCacheSearchResult
     */
    public function setId(string $id): TourCacheSearchResult
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getDepartureSetupId(): int
    {
        return $this->departureSetupId;
    }

    /**
     * @param int $departureSetupId
     * @return TourCacheSearchResult
     */
    public function setDepartureSetupId(int $departureSetupId): TourCacheSearchResult
    {
        $this->departureSetupId = $departureSetupId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriceSetId(): int
    {
        return $this->priceSetId;
    }

    /**
     * @param int $priceSetId
     * @return TourCacheSearchResult
     */
    public function setPriceSetId(int $priceSetId): TourCacheSearchResult
    {
        $this->priceSetId = $priceSetId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTourId(): int
    {
        return $this->tourId;
    }

    /**
     * @param int $tourId
     * @return TourCacheSearchResult
     */
    public function setTourId(int $tourId): TourCacheSearchResult
    {
        $this->tourId = $tourId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return TourCacheSearchResult
     */
    public function setName(string $name): TourCacheSearchResult
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return TourCacheSearchResult
     */
    public function setCode(string $code): TourCacheSearchResult
    {
        $this->code = $code;
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
     * @return TourCacheSearchResult
     */
    public function setStartDate(DateTimeInterface $startDate): TourCacheSearchResult
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getEndDate(): DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param DateTimeInterface $endDate
     * @return TourCacheSearchResult
     */
    public function setEndDate(DateTimeInterface $endDate): TourCacheSearchResult
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return TourCacheSearchResult
     */
    public function setDuration(int $duration): TourCacheSearchResult
    {
        $this->duration = $duration;
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
     * @return TourCacheSearchResult
     */
    public function setInventorySummary(InventorySummary $inventorySummary): TourCacheSearchResult
    {
        $this->inventorySummary = $inventorySummary;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getGenerated(): DateTimeInterface
    {
        return $this->generated;
    }

    /**
     * @param DateTimeInterface $generated
     * @return TourCacheSearchResult
     */
    public function setGenerated(DateTimeInterface $generated): TourCacheSearchResult
    {
        $this->generated = $generated;
        return $this;
    }

    /**
     * @return TravellerUnit[]
     */
    public function getSingleTravellerUnits(): array
    {
        return $this->singleTravellerUnits;
    }

    /**
     * @param TravellerUnit[] $singleTravellerUnits
     * @return TourCacheSearchResult
     */
    public function setSingleTravellerUnits(array $singleTravellerUnits): TourCacheSearchResult
    {
        $this->singleTravellerUnits = $singleTravellerUnits;
        return $this;
    }

    /**
     * @return TravellerUnit[]
     */
    public function getGroupTravellerUnits(): array
    {
        return $this->groupTravellerUnits;
    }

    /**
     * @param TravellerUnit[] $groupTravellerUnits
     * @return TourCacheSearchResult
     */
    public function setGroupTravellerUnits(array $groupTravellerUnits): TourCacheSearchResult
    {
        $this->groupTravellerUnits = $groupTravellerUnits;
       return $this;
    }

    /**
     * @return Extra[]
     */
    public function getExtras(): array
    {
        return $this->extras;
    }

    /**
     * @param Extra[] $extras
     * @return TourCacheSearchResult
     */
    public function setExtras(array $extras): TourCacheSearchResult
    {
        $this->extras = $extras;
        return $this;
    }

    /**
     * @return Location[]|null
     */
    public function getLocations(): ?array
    {
        return $this->locations;
    }

    /**
     * @param Location[]|null $locations
     * @return TourCacheSearchResult
     */
    public function setLocations(?array $locations): TourCacheSearchResult
    {
        $this->locations = $locations;
        return $this;
    }

    /**
     * @return Price
     */
    public function getTourPrice(): Price
    {
        return $this->tourPrice;
    }

    /**
     * @param Price $tourPrice
     * @return TourCacheSearchResult
     */
    public function setTourPrice(Price $tourPrice): TourCacheSearchResult
    {
        $this->tourPrice = $tourPrice;
        return $this;
    }

    /**
     * @return Price
     */
    public function getPerPersonSingleTravellerTotalPrice(): Price
    {
        return $this->perPersonSingleTravellerTotalPrice;
    }

    /**
     * @param Price $perPersonSingleTravellerTotalPrice
     * @return TourCacheSearchResult
     */
    public function setPerPersonSingleTravellerTotalPrice(Price $perPersonSingleTravellerTotalPrice): TourCacheSearchResult
    {
        $this->perPersonSingleTravellerTotalPrice = $perPersonSingleTravellerTotalPrice;
        return $this;
    }

    /**
     * @return Price
     */
    public function getPerPersonGroupTravellerTotalPrice(): Price
    {
        return $this->perPersonGroupTravellerTotalPrice;
    }

    /**
     * @param Price $perPersonGroupTravellerTotalPrice
     * @return TourCacheSearchResult
     */
    public function setPerPersonGroupTravellerTotalPrice(Price $perPersonGroupTravellerTotalPrice): TourCacheSearchResult
    {
        $this->perPersonGroupTravellerTotalPrice = $perPersonGroupTravellerTotalPrice;
        return $this;
    }

    /**
     * @return Price
     */
    public function getPerPersonSingleTravellerTotalDiscount(): Price
    {
        return $this->perPersonSingleTravellerTotalDiscount;
    }

    /**
     * @param Price $perPersonSingleTravellerTotalDiscount
     * @return TourCacheSearchResult
     */
    public function setPerPersonSingleTravellerTotalDiscount(Price $perPersonSingleTravellerTotalDiscount): TourCacheSearchResult
    {
        $this->perPersonSingleTravellerTotalDiscount = $perPersonSingleTravellerTotalDiscount;
        return $this;
    }

    /**
     * @return Price
     */
    public function getPerPersonGroupTravellerTotalDiscount(): Price
    {
        return $this->perPersonGroupTravellerTotalDiscount;
    }

    /**
     * @param Price $perPersonGroupTravellerTotalDiscount
     * @return TourCacheSearchResult
     */
    public function setPerPersonGroupTravellerTotalDiscount(Price $perPersonGroupTravellerTotalDiscount): TourCacheSearchResult
    {
        $this->perPersonGroupTravellerTotalDiscount = $perPersonGroupTravellerTotalDiscount;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefreshId(): string
    {
        return $this->refreshId;
    }

    /**
     * @param string $refreshId
     * @return TourCacheSearchResult
     */
    public function setRefreshId(string $refreshId): TourCacheSearchResult
    {
        $this->refreshId = $refreshId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumSingleRooms(): int
    {
        return $this->minimumSingleRooms;
    }

    /**
     * @param int $minimumSingleRooms
     * @return TourCacheSearchResult
     */
    public function setMinimumSingleRooms(int $minimumSingleRooms): TourCacheSearchResult
    {
        $this->minimumSingleRooms = $minimumSingleRooms;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumTwinRooms(): int
    {
        return $this->minimumTwinRooms;
    }

    /**
     * @param int $minimumTwinRooms
     * @return TourCacheSearchResult
     */
    public function setMinimumTwinRooms(int $minimumTwinRooms): TourCacheSearchResult
    {
        $this->minimumTwinRooms = $minimumTwinRooms;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumTripleRooms(): int
    {
        return $this->minimumTripleRooms;
    }

    /**
     * @param int $minimumTripleRooms
     * @return TourCacheSearchResult
     */
    public function setMinimumTripleRooms(int $minimumTripleRooms): TourCacheSearchResult
    {
        $this->minimumTripleRooms = $minimumTripleRooms;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param string[] $tags
     * @return TourCacheSearchResult
     */
    public function setTags(array $tags): TourCacheSearchResult
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return FlightGroup[]
     */
    public function getFlightGroups(): array
    {
        return $this->flightGroups;
    }

    /**
     * @param FlightGroup[] $flightGroups
     * @return TourCacheSearchResult
     */
    public function setFlightGroups(array $flightGroups): TourCacheSearchResult
    {
        $this->flightGroups = $flightGroups;
        return $this;
    }

    /**
     * @return Promotion[]
     */
    public function getSingleTravellerPromos(): array
    {
        return $this->singleTravellerPromos;
    }

    /**
     * @param Promotion[] $singleTravellerPromos
     * @return TourCacheSearchResult
     */
    public function setSingleTravellerPromos(array $singleTravellerPromos): TourCacheSearchResult
    {
        $this->singleTravellerPromos = $singleTravellerPromos;
        return $this;
    }

    /**
     * @return Promotion[]
     */
    public function getGroupTravellerPromos(): array
    {
        return $this->groupTravellerPromos;
    }

    /**
     * @param Promotion[] $groupTravellerPromos
     * @return TourCacheSearchResult
     */
    public function setGroupTravellerPromos(array $groupTravellerPromos): TourCacheSearchResult
    {
        $this->groupTravellerPromos = $groupTravellerPromos;
        return $this;
    }
}
