<?php

namespace directapi\services\keywords\models;

use directapi\common\models\AutotargetingCategories;
use directapi\components\Model;

class KeywordAddItem extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $AdGroupId;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=4096
     * )
     */
    public $Keyword;

    /**
     * @var int
     */
    public $Bid;

    /**
     * @var int
     */
    public $ContextBid;

    /**
     * @var \directapi\common\enum\PriorityEnum
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\PriorityEnum")
     */
    public $StrategyPriority;

    /**
     * @var string
     * @Assert\Length(
     *     max=255
     * )
     */
    public $UserParam1;

    /**
     * @var string
     * @Assert\Length(
     *     max=255
     * )
     */
    public $UserParam2;

    /**
     * @var AutotargetingCategories
     */
    public $AutotargetingCategories;
}
