<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
$explodedHomePage = explode("#", $arResult["LIST_PAGE_URL"]);
$arResult["HOME_PAGE"] = isset($explodedHomePage[2]) ? $explodedHomePage[2] : "/";
foreach ($arResult["ITEMS"] as &$arItem) {
	if (isset($arItem["DISPLAY_PROPERTIES"]["IMG"]) && count($arItem["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"]) > 0 && isset($arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]) && count($arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"]) > 0) {
		$arItem["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"] = CFile::ResizeImageGet($arItem["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"]["ID"], array('width' => 250, 'height' => 100), BX_RESIZE_IMAGE_PROPORTIONAL, true);
		$arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"] = CFile::ResizeImageGet($arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"]["ID"], array('width' => 250, 'height' => 100), BX_RESIZE_IMAGE_PROPORTIONAL, true);
	}
}
?>