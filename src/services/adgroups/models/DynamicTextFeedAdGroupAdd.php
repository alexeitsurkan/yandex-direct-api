<?php


namespace directapi\services\adgroups\models;

use directapi\common\models\AutotargetingCategories;
use directapi\components\Model;

class DynamicTextFeedAdGroupAdd extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $FeedId;

    /**
     * @var AutotargetingCategories
     * @Assert\NotBlank()
     */
    public $AutotargetingCategories;
}
