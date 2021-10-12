<?php

namespace Mrzen\Tigerbay\Models;

class PriceSummary
{
    /**
     * @var Price $adultPrice
     */
    private $adultPrice;

    /**
     * @return Price
     */
    public function getAdultPrice(): Price
    {
        return $this->adultPrice;
    }

    /**
     * @param Price $adultPrice
     * @return PriceSummary
     */
    public function setAdultPrice(Price $adultPrice): PriceSummary
    {
        $this->adultPrice = $adultPrice;
        return $this;
    }
}
