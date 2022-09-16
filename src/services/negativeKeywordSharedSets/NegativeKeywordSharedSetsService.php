<?php

namespace directapi\services\negativeKeywordSharedSets;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\services\BaseService;
use directapi\services\negativeKeywordSharedSets\models\NegativeKeywordSharedSetsAddItem;
use directapi\services\negativeKeywordSharedSets\models\negativeKeywordSharedSetsGetItem;
use directapi\services\negativeKeywordSharedSets\models\NegativeKeywordSharedSetsUpdateItem;

class NegativeKeywordSharedSetsService extends BaseService
{
    public function get(IdsCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page = null): array
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];
        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'NegativeKeywordSharedSets', NegativeKeywordSharedSetsGetItem::class);
    }

    /**
     * @param NegativeKeywordSharedSetsAddItem[] $NegativeKeywordSharedSets
     * @return array
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function add(array $NegativeKeywordSharedSets): array
    {
        $params = [
            'NegativeKeywordSharedSets' => $NegativeKeywordSharedSets
        ];
        return parent::doAdd($params);
    }

    /**
     * @param NegativeKeywordSharedSetsUpdateItem[] $NegativeKeywordSharedSets
     * @return array
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function update(array $NegativeKeywordSharedSets): array
    {
        $params = [
            'NegativeKeywordSharedSets' => $NegativeKeywordSharedSets
        ];
        return parent::doUpdate($params);
    }

    public function delete(IdsCriteria $SelectionCriteria): array
    {
        return parent::doDelete($SelectionCriteria);
    }


    protected function getName(): string
    {
        return 'negativekeywordsharedsets';
    }

    public function toUpdateEntities(array $entities): array
    {
        // TODO: Implement toUpdateEntities() method.
    }
}