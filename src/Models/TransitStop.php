<?php

namespace Mrzen\Tigerbay\Models;

/**
 * Transit Stop
 *
 * Represents a stop point on a transit route, such as an Airport or Train Station.
 */
class TransitStop
{
    /**
     * @var int Transit stop ID
     */
    private $setupId;

    /**
     * @var string Transit stop name
     */
    private $name;

    /**
     * @var string Transit stop reference
     */
    private $reference;

    /**
     * @var bool Is Domestic
     */
    private $isDomestic;

    /**
     * @return int
     */
    public function getSetupId(): int
    {
        return $this->setupId;
    }

    /**
     * @param int $setupId
     * @return TransitStop
     */
    public function setSetupId(int $setupId): TransitStop
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
     * @return TransitStop
     */
    public function setName(string $name): TransitStop
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
     * @return TransitStop
     */
    public function setReference(string $reference): TransitStop
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDomestic(): bool
    {
        return $this->isDomestic;
    }

    /**
     * @param bool $isDomestic
     * @return TransitStop
     */
    public function setIsDomestic(bool $isDomestic): TransitStop
    {
        $this->isDomestic = $isDomestic;
        return $this;
    }
}
