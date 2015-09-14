<?
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);



?>
<? if(!is_null($arResult['mainImgBlock']['DETAIL_PICTURE'])){?>
	<img src="<?=CFile::GetPath($arResult['mainImgBlock']['DETAIL_PICTURE']);?>" alt="<?=$arResult['mainImgBlock']['NAME'];?>" title="<?=$arResult['mainImgBlock']['NAME'];?>">
<? }else{?>
	<img src="<?=CFile::GetPath($arResult['mainImgBlock']['PICTURE']);?>" alt="<?=$arResult['mainImgBlock']['NAME'];?>" title="<?=$arResult['mainImgBlock']['NAME'];?>">
<? }?>
