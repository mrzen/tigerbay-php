<?php

namespace Mrzen\Tigerbay\Models;

/**
 * Represents details of a promotion
 *
 */
class Promotion
{
    /**
     * @var string|null $name
     */
    private $name;

    /**
     * @var string|null description
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
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return Promotion
     */
    public function setName($name): Promotion
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return Promotion
     */
    public function setDescription($description): Promotion
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
