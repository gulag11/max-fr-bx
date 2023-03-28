<?php

namespace Freud;

use Bitrix\Main\Loader,
    Bitrix\Highloadblock\HighloadBlockTable as HlTable,
    Bitrix\Main\Entity;

class HighloadBlock
{
    private $entityDataClass;
    private $order = [
        'UF_SORT' => 'ASC',
        'UF_NAME' => 'ASC',
    ];
    private $filter = [
        '!UF_ACTIVE' => false,
    ];

    public function __construct(int $hlBlId)
    {
        Loader::includeModule('highloadblock');

        $hlBlock = HlTable::getById($hlBlId)->fetch();
        $entity = HlTable::compileEntity($hlBlock);
        $this->entityDataClass = $entity->getDataClass();
    }

    public function getEntity()
    {
        return $this->entityDataClass;
    }

    public function setOrder(array $order)
    {
        $this->order = $order;
    }

    public function setFilter(array $filter)
    {
        $this->filter = $filter;
    }

    private function getTableResult(array $select = [], array $order = [], array $filter = [], int $limit = 100)
    {
        return $this->entityDataClass::getList([
            'order' => $order,
            'filter' => $filter,
            'select' => $select,
            'limit' => $limit
        ]);
    }

    public function getList(array $select = [], array $additionalOrder = [], array $additionalFilter = []): array
    {
        $result = [];

        $order = $additionalOrder ? array_merge($additionalOrder, $this->order) : $this->order;
        $filter = $additionalFilter ? array_merge($additionalFilter, $this->filter) : $this->filter;

        $rsData = $this->getTableResult($select, $order, $filter);

        while ($arData = $rsData->fetch()) {
            $result[] = $arData;
        }

        return $result;
    }

    public function getField(array $select = []): array
    {
        $rsData = $this->getTableResult($select, [], [], 1);

        $arData = $rsData->fetch();

        if (!$arData) {
            return [];
        }

        if ($file = preg_grep('/UF_FILE_.+/', array_flip($arData))) {
            foreach ($file as $k => $v) {
                $arData[$v] = \CFile::GetPath($k);
            }
        }

        return $arData;
    }
}
