<?php

namespace Mrzen\Tigerbay\Models;

class Extra
{
    /**
     * @var int $setupId
     */
    private $setupId;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $reference
     */
    private $reference;

    /**
     * @var InventorySummary $inventorySummary
     */
    private $inventorySummary;

    /**
     * @var PriceSummary $priceSummary
     */
    private $priceSummary;

    /**
     * @var ExtraType $type
     */
    private $type;

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
     * @var bool $isSpecial
     */
    private $isSpecial;

    /**
     * @return int
     */
    public function getSetupId(): int
    {
        return $this->setupId;
    }

    /**
     * @param int $setupId
     * @return Extra
     */
    public function setSetupId(int $setupId): Extra
    {
        $this->setupId = $setupId;
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
     * @return Extra
     */
    public function setName(string $name): Extra
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return Extra
     */
    public function setReference(string $reference): Extra
    {
        $this->reference = $reference;
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
     * @return Extra
     */
    public function setInventorySummary(InventorySummary $inventorySummary): Extra
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
     * @return Extra
     */
    public function setPriceSummary(PriceSummary $priceSummary): Extra
    {
        $this->priceSummary = $priceSummary;
        return $this;
    }

    /**
     * @return ExtraType
     */
    public function getType(): ExtraType
    {
        return $this->type;
    }

    /**
     * @param ExtraType $type
     * @return Extra
     */
    public function setType(ExtraType $type): Extra
    {
        $this->type = $type;
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
     * @return Extra
     */
    public function setIsDefault(bool $isDefault): Extra
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
     * @return Extra
     */
    public function setIsMandatory(bool $isMandatory): Extra
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
     * @return Extra
     */
    public function setTravellerType(string $travellerType): Extra
    {
        $this->travellerType = $travellerType;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSpecial(): bool
    {
        return $this->isSpecial;
    }

    /**
     * @param bool $isSpecial
     * @return Extra
     */
    public function setIsSpecial(bool $isSpecial): Extra
    {
        $this->isSpecial = $isSpecial;
        return $this;
    }
}
