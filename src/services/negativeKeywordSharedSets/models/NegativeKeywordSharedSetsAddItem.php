<?php

namespace directapi\services\negativeKeywordSharedSets\models;

use directapi\components\Model;

class NegativeKeywordSharedSetsAddItem extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *      max = 255
     * )
     */
    public $Name;

    /**
     * @var string[]
     * @Assert\NotBlank()
     */
    public $NegativeKeywords;

}