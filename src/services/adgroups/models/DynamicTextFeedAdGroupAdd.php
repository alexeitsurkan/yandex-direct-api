<?php


namespace directapi\services\adgroups\models;

use directapi\components\Model;

class DynamicTextFeedAdGroupAdd extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $FeedId;

    /**
     * @var array
     * @Assert\NotBlank()
     */
    public $AutotargetingCategories;
}
