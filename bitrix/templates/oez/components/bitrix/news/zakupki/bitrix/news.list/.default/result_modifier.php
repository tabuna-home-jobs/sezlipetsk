<?php
/*if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
die();
}
$arFilter = array('IBLOCK_ID' => $arParams["IBLOCK_ID"]);
$rsSections = CIBlockSection::GetList(array('SORT' => 'DESC'), $arFilter);
while ($arSection = $rsSections->Fetch()) {
$arResult["SECTIONS"][$arSection["ID"]] = $arSection;
}
//Проходим по всем доступным элементам и распихиваем их по группам

foreach ($arResult["ITEMS"] as $item) {
if (isset($arResult["SECTIONS"][$item["IBLOCK_SECTION_ID"]])) {
$arResult["SECTIONS"][$item["IBLOCK_SECTION_ID"]]["ITEMS"] = $item;
}
}*/
?>