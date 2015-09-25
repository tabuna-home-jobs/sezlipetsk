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
				<div class="img-wrapp">
				<?if(isset($arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"])&& count($arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"])>0 &&$arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"]["ID"]!=""):?>
					<img src="<?=$arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"]["SRC"]?>">
				<?endif;?>
				</div>
				<div class="title-zone"><?echo $arItem["NAME"]?></div>
				<div class="info-zone">
					<p><b>№ участка:</b> <?=$arItem['PROPERTIES']['AREA_NUMBER']['VALUE']?></p>
					<p><b>Кадастровый номер:</b> <?=$arItem['PROPERTIES']['RESIDENT_COUNTRY']['VALUE']?></p>
					<p><b>Вид деятельности:</b> <?=$arItem['PROPERTIES']['KIND_OF_ACTIVITY']['VALUE']?></p>
					<p><b>Площадь:</b> <?=$arItem['PROPERTIES']['AREA']['VALUE']?></p>
					<p><b>Суть проекта:</b> <?echo $arItem["PREVIEW_TEXT"];?></p>
				</div>
				<div class="watch-this more_about">
					<a href="<?=$arItem['LIST_PAGE_URL']?><?echo $arItem["CODE"]?>/" class="all">Посмотреть
						<span class="glyphicon glyphicon-menu-right"></span>
					</a>
				</div>
			</div>


		<?endforeach;?>

