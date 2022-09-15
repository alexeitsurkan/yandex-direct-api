<?php


namespace directapi\services\adgroups\models;

use directapi\common\models\AutotargetingCategories;
use directapi\components\Model;

class DynamicTextAdGroupGet extends Model
{
    /**
     * @var string
     */
    public $DomainUrl;

    /**
     * @var \directapi\common\enum\ProcessingStatusEnum
     */
    public $DomainUrlProcessingStatus;

    /**
     * @var AutotargetingCategories
     */
    public $AutotargetingCategories;
}
