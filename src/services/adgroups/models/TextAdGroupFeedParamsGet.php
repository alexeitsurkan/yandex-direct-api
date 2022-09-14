<?php


namespace directapi\services\adgroups\models;

use directapi\components\Model;

class TextAdGroupFeedParamsGet extends Model
{
    /**
     * @var int
     */
    public $FeedId;

    /**
     * @var null|array
     */
    public $FeedCategoryIds;
}
