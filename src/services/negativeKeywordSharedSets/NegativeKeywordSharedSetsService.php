<?php

namespace directapi\services\negativeKeywordSharedSets;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\exceptions\DirectAccountNotExistException;
use directapi\exceptions\DirectApiException;
use directapi\exceptions\DirectApiNotEnoughUnitsException;
use directapi\exceptions\RequestValidationException;
use directapi\services\BaseService;
use directapi\services\negativeKeywordSharedSets\criterias\NegativeKeywordSharedSetsSelectionCriteria;
use directapi\services\negativeKeywordSharedSets\enum\NegativeKeywordSharedSetsFieldEnum;
use directapi\services\negativeKeywordSharedSets\models\NegativeKeywordSharedSetsAddItem;
use directapi\services\negativeKeywordSharedSets\models\NegativeKeywordSharedSetsGetItem;
use directapi\services\negativeKeywordSharedSets\models\NegativeKeywordSharedSetsUpdateItem;

class NegativeKeywordSharedSetsService extends BaseService
{
    /**
     * @param NegativeKeywordSharedSetsSelectionCriteria $SelectionCriteria
     * @param NegativeKeywordSharedSetsFieldEnum[] $FieldNames
     * @param LimitOffset|null $Page
     * @return array
     * @throws DirectAccountNotExistException
     * @throws DirectApiException
     * @throws DirectApiNotEnoughUnitsException
     * @throws RequestValidationException
     */
    public function get(NegativeKeywordSharedSetsSelectionCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page = null): array
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
     *
     * @return  ActionResult[]
     *
     * @throws DirectAccountNotExistException
     * @throws DirectApiException
     * @throws DirectApiNotEnoughUnitsException
     * @throws RequestValidationException
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
     *
     * @return ActionResult[]
     *
     * @throws DirectAccountNotExistException
     * @throws DirectApiException
     * @throws DirectApiNotEnoughUnitsException
     * @throws RequestValidationException
     */
    public function update(array $NegativeKeywordSharedSets): array
    {
        $params = [
            'NegativeKeywordSharedSets' => $NegativeKeywordSharedSets
        ];
        return parent::doUpdate($params);
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return array|ActionResult[]
     *
     * @throws DirectAccountNotExistException
     * @throws DirectApiException
     * @throws DirectApiNotEnoughUnitsException
     * @throws RequestValidationException
     */
    public function delete(IdsCriteria $SelectionCriteria): array
    {
        return parent::doDelete($SelectionCriteria);
    }

    protected function getName(): string
    {
        return 'negativekeywordsharedsets';
    }

    /**
     * @param NegativeKeywordSharedSetsGetItem[] $entities
     * @return NegativeKeywordSharedSetsAddItem[]
     */
    public function toUpdateEntities(array $entities): array
    {
        // TODO: Implement toUpdateEntities() method.
    }
}