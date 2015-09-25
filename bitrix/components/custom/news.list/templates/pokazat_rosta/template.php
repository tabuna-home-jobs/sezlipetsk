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
	$n = 0;
	$str = "";
?>
<? ?>	<div class="citata pokazat_rosta ">
	<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$n++;
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
						<?if($n == 1){ $str = "active";}else{$str = ""; } ?>
						<div class="item <?=$str; ?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
								     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
								     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">

						</div>
					<?else:?>

						<div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
								     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
								     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">

						</div>
					<?endif;?>
				<?endif?>
			<?endforeach;?>
		</div>

	</div>
</div>

<?  ?>
