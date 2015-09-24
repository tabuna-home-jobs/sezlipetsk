<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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


		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?


		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

			<div id="zone<?=$arItem['PROPERTIES']['AREA_NUMBER']['VALUE']?>" class="tooltip-zone wrapper-tooltip">
				<?if(isset($arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"])&& count($arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"])>0 &&$arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"]["ID"]!=""):?>
					<img src="<?=$arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"]["SRC"]?>">
				<?endif;?>
				<div class="title-zone"><?echo $arItem["NAME"]?></div>
				<div class="info-zone">
					<?echo $arItem["PREVIEW_TEXT"];?>
				</div>
				<div class="watch-this more_about">
					<a href="<?=$arItem['LIST_PAGE_URL']?><?echo $arItem["CODE"]?>/" class="all">Посмотреть
						<span class="glyphicon glyphicon-menu-right"></span>
					</a>
				</div>
			</div>


		<?endforeach;?>

