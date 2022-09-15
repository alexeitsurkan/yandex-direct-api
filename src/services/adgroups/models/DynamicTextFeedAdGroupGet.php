<?php


namespace directapi\services\adgroups\models;

use directapi\common\models\AutotargetingCategories;
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
     * @var AutotargetingCategories
     */
    public $AutotargetingCategories;
}
