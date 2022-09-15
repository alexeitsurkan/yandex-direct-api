<?php

namespace directapi\services\ads\models;

use directapi\components\Model;

class MobileAppCpcVideoAdBuilderAdGet extends Model
{
    /**
     * @var AdBuilderAdAddItem
     */
    public $Creative;

    /**
     * @var string
     */
    public $TrackingUrl;

    public function getDescription(): ?string
    {
        return $this->Creative->getDescription();
    }
}
