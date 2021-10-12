<?php

namespace Mrzen\Tigerbay\Models;

class ExtraType
{
    /**
     * @var int $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string[] $tags
     */
    private $tags;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ExtraType
     */
    public function setId(int $id): ExtraType
    {
        $this->id = $id;
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
     * @return ExtraType
     */
    public function setName(string $name): ExtraType
    {
        $this->name = $name;
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
     * @return ExtraType
     */
    public function setTags(array $tags): ExtraType
    {
        $this->tags = $tags;
        return $this;
    }
}
