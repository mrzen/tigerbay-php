<?php

namespace Mrzen\Tigerbay\Models;

class Accommodation
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
     * @var Location $location
     */
    private $location;

    /**
     * @return int
     */
    public function getSetupId(): int
    {
        return $this->setupId;
    }

    /**
     * @param int $setupId
     * @return Accommodation
     */
    public function setSetupId(int $setupId): Accommodation
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
     * @return Accommodation
     */
    public function setName(string $name): Accommodation
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * @param Location $location
     * @return Accommodation
     */
    public function setLocation(Location $location): Accommodation
    {
        $this->location = $location;
        return $this;
    }
}
