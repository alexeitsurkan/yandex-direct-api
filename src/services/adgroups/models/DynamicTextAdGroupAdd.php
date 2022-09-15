<?php

namespace directapi\services\adgroups\models;

use directapi\common\models\AutotargetingCategories;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class DynamicTextAdGroupAdd extends Model
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *      max = 100
     * )
     */
    public $DomainUrl;

    /**
     * @var AutotargetingCategories
     */
    public $AutotargetingCategories;
}
