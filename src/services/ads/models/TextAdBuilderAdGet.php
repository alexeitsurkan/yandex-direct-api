<?php

namespace directapi\services\ads\models;

use directapi\components\Model;

class TextAdBuilderAdGet extends Model
{
    /**
     * @var AdBuilderAdGetItem
     */
    public $Creative;

    /**
     * @var string
     */
    public $Href;

    /**
     * @var int
     */
    public $TurboPageId;

    public function getDescription(): ?string
    {
        return $this->Creative->getDescription();
    }
}
