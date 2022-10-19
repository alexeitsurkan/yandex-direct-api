<?php

namespace directapi\common\models\clients;

use directapi\components\Model;

class BonusesGet extends Model
{
    /**
     * @var int
     */
    public $AwaitingBonus;

    /**
     * @var int
     */
    public $AwaitingBonusWithoutNds;
}
