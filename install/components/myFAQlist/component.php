<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader;

if (!Loader::includeModule("iblock")) {
    return;
}

$arParams['IBLOCK_ID'] = (int)$arParams['IBLOCK_ID'];
if ($arParams['IBLOCK_ID'] <= 0) {
    return;
}

$arSelect = ["ID", "NAME", "PREVIEW_TEXT", "DETAIL_TEXT"];
$arFilter = [
    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    "ACTIVE" => "Y"
];
$arOrder = ["SORT" => "ASC", "ID" => "DESC"];

$arResult['ITEMS'] = [];
$res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
while ($item = $res->GetNext()) {
    $arResult['ITEMS'][] = $item;
}

$this->IncludeComponentTemplate();

?>
