<?php

namespace Mrzen\Tigerbay\Models;

/**
 * Represents details of a promotion
 *
 */
class Promotion
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var string $salesChannel
     */
    private $salesChannel;

    /**
     * @var PriceSummary $priceSummary
     */
    private $priceSummary;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Promotion
     */
    public function setName(string $name): Promotion
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Promotion
     */
    public function setDescription(string $description): Promotion
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesChannel(): string
    {
        return $this->salesChannel;
    }

    /**
     * @param string $salesChannel
     * @return Promotion
     */
    public function setSalesChannel(string $salesChannel): Promotion
    {
        $this->salesChannel = $salesChannel;
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
     * @return Promotion
     */
    public function setPriceSummary(PriceSummary $priceSummary): Promotion
    {
        $this->priceSummary = $priceSummary;
        return $this;
    }
}
