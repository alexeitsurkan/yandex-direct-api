<?php

namespace directapi\services\ads\models;

use directapi\components\Model;

class TextAdGet extends Model
{
    /**
     * @var string|null
     */
    public $Title;

    /**
     * @var string
     */
    public $Title2;

    /**
     * @var string
     */
    public $Text;

    /**
     * @var string|null
     */
    public $Href;

    /**
     * @var string
     */
    public $DisplayDomain;

    /**
     * @var string
     */
    public $DisplayUrlPath;

    /**
     * @var \directapi\common\models\ExtensionModeration
     */
    public $DisplayUrlPathModeration;

    /**
     * @var \directapi\common\enum\YesNoEnum|null
     */
    public $Mobile;

    /**
     * @var int
     */
    public $VCardId;

    /**
     * @var int
     */
    public $SitelinkSetId;

    /**
     * @var string
     */
    public $AdImageHash;

    /**
     * @var \directapi\common\models\ExtensionModeration
     */
    public $VCardModeration;

    /**
     * @var \directapi\common\models\ExtensionModeration
     */
    public $SitelinksModeration;

    /**
     * @var \directapi\common\models\ExtensionModeration
     */
    public $AdImageModeration;

    /**
     * @var AdExtensionAdGetItem[]
     */
    public $AdExtensions;

    /**
     * @var \directapi\services\adextensions\models\VideoExtensionGetItem|null
     */
    public $VideoExtension;

    /**
     * @var \directapi\services\adextensions\models\PriceExtensionGetItem|null
     */
    public $PriceExtension;

    public function getDescription(): ?string
    {
        return $this->Title;
    }

    /**
     * @var int|null
     */
    public $TurboPageId;

    /**
     * @var int
     */
    public $BusinessId;

    /**
     * @var \directapi\common\enum\YesNoEnum
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $PreferVCardOverBusiness;

}
