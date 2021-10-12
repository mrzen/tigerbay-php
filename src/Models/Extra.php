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
}
