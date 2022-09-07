<?php

namespace Mrzen\Tigerbay\Models;

class InventorySummary
{

    /**
     * @var int $allocation
     */
    private $allocation;

    /**
     * @var int $available
     */
    private $available;

    /**
     * @var int $confirmed
     */
    private $confirmed;

    /**
     * @var int $optioned
     */
    private $optioned;

    /**
     * @var bool $isOnRequest
     */
    private $isOnRequest;

    /**
     * @var bool $isAllocationOnRequest
     * @since v1.3.0 Added `isAllocationOnRequest` field
     */
    private $isAllocationOnRequest;

    /**
     * @var bool $isSupplierStopSale
     */
    private $isSupplierStopSale;

    /**
     * @var bool $isCompanyStopSale
     */
    private $isCompanyStopSale;

    /**
     * @var bool $isReleaseStopSale
     * @since v1.2.0
     */
    private $isReleaseStopSale;

    /**
     * @var bool $isClosed
     */
    private $isClosed;

    /**
     * @var bool $isFreeSell
     */
    private $isFreeSell;

    /**
     * @return int
     */
    public function getAllocation(): int
    {
        return $this->allocation;
    }

    /**
     * @param int $allocation
     * @return InventorySummary
     */
    public function setAllocation(int $allocation): InventorySummary
    {
        $this->allocation = $allocation;
        return $this;
    }

    /**
     * @return int
     */
    public function getAvailable(): int
    {
        return $this->available;
    }

    /**
     * @param int $available
     * @return InventorySummary
     */
    public function setAvailable(int $available): InventorySummary
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @return int
     */
    public function getConfirmed(): int
    {
        return $this->confirmed;
    }

    /**
     * @param int $confirmed
     * @return InventorySummary
     */
    public function setConfirmed(int $confirmed): InventorySummary
    {
        $this->confirmed = $confirmed;
        return $this;
    }

    /**
     * @return int
     */
    public function getOptioned(): int
    {
        return $this->optioned;
    }

    /**
     * @param int $optioned
     * @return InventorySummary
     */
    public function setOptioned(int $optioned): InventorySummary
    {
        $this->optioned = $optioned;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOnRequest(): bool
    {
        return $this->isOnRequest;
    }

    /**
     * @param bool $isOnRequest
     * @return InventorySummary
     */
    public function setIsOnRequest(bool $isOnRequest): InventorySummary
    {
        $this->isOnRequest = $isOnRequest;
        return $this;
    }

    /**
     * @return bool
     * @since v1.3.0
     */
    public function isAllocationOnRequest(): bool
    {
        return $this->isAllocationOnRequest;
    }

    /**
     * @param bool $isAllocationOnRequest
     * @since v1.3.0
     */
    public function setIsAllocationOnRequest(bool $isAllocationOnRequest): void
    {
        $this->isAllocationOnRequest = $isAllocationOnRequest;
    }

    /**
     * @return bool
     */
    public function isSupplierStopSale(): bool
    {
        return $this->isSupplierStopSale;
    }

    /**
     * @param bool $isSupplierStopSale
     * @return InventorySummary
     */
    public function setIsSupplierStopSale(bool $isSupplierStopSale): InventorySummary
    {
        $this->isSupplierStopSale = $isSupplierStopSale;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCompanyStopSale(): bool
    {
        return $this->isCompanyStopSale;
    }

    /**
     * @param bool $isCompanyStopSale
     * @return InventorySummary
     */
    public function setIsCompanyStopSale(bool $isCompanyStopSale): InventorySummary
    {
        $this->isCompanyStopSale = $isCompanyStopSale;
        return $this;
    }

    /**
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->isClosed;
    }

    /**
     * @param bool $isClosed
     * @return InventorySummary
     */
    public function setIsClosed(bool $isClosed): InventorySummary
    {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFreeSell(): bool
    {
        return $this->isFreeSell;
    }

    /**
     * @param bool $isFreeSell
     * @return InventorySummary
     */
    public function setIsFreeSell(bool $isFreeSell): InventorySummary
    {
        $this->isFreeSell = $isFreeSell;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReleaseStopSale(): bool
    {
        return $this->isReleaseStopSale;
    }

    /**
     * @param bool $isReleaseStopSale
     */
    public function setIsReleaseStopSale(bool $isReleaseStopSale): void
    {
        $this->isReleaseStopSale = $isReleaseStopSale;
    }
}
