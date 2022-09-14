<?php


namespace directapi\services\adgroups\models;

use directapi\components\Model;

class DynamicTextFeedAdGroupGet extends Model
{
    /**
     * @var string
     */
    public $Source;

    /**
     * @var int
     */
    public $FeedId;

    /**
     * @var \directapi\services\adgroups\enum\SourceTypeEnum
     */
    public $SourceType;

    /**
     * @var \directapi\common\enum\ProcessingStatusEnum
     */
    public $SourceProcessingStatus;

    /**
     * @var null|array
     */
    public $AutotargetingCategories;
}
