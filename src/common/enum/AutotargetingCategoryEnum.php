<?php

namespace directapi\common\enum;

use directapi\components\Enum;

class AutotargetingCategoryEnum extends Enum
{
    public const EXACT = 'EXACT';
    public const ALTERNATIVE = 'ALTERNATIVE';
    public const COMPETITOR = 'COMPETITOR';
    public const BROADER = 'BROADER';
    public const ACCESSORY = 'ACCESSORY';
}