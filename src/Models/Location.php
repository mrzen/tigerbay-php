<?php

namespace Mrzen\Tigerbay\Models;

class Location
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
     * @var string $type
     */
    private $type;

    /**
     * @var bool $isDomestic
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
     * @return Location
     */
    public function setSetupId(int $setupId): Location
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
     * @return Location
     */
    public function setName(string $name): Location
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
     * @return Location
     */
    public function setReference(string $reference): Location
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Location
     */
    public function setType(string $type): Location
    {
        $this->type = $type;
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
     * @return Location
     */
    public function setIsDomestic(bool $isDomestic): Location
    {
        $this->isDomestic = $isDomestic;
        return $this;
    }
}
