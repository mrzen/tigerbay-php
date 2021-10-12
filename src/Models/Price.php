<?php

namespace Mrzen\Tigerbay\Models;

class Price
{

    /**
     * @var float $value
     */
    private $value;

    /**
     * @var string $currencyCode
     */
    private $currencyCode;

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return Price
     */
    public function setValue(float $value): Price
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return Price
     */
    public function setCurrencyCode(string $currencyCode): Price
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
}
