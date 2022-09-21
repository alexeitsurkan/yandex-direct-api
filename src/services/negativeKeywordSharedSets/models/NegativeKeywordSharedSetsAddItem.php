<?php

namespace directapi\services\negativeKeywordSharedSets\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

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