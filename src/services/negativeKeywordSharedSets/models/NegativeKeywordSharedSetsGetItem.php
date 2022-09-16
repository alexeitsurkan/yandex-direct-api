<?php

namespace directapi\services\negativeKeywordSharedSets\models;

use directapi\components\Model;

class NegativeKeywordSharedSetsGetItem extends Model
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var string
     */
    public $Name;

    /**
     * @var string[]
     */
    public $NegativeKeywords;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Associated;
}