<?php


namespace directapi\services\adgroups\models;

use directapi\components\Model;

class TextAdGroupFeedParamsAdd extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $FeedId;

    /**
     * @var null|array
     * @Assert\NotBlank()
     */
    public $FeedCategoryIds;
}
