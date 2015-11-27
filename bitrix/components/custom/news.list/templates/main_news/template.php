<?
	//require($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/mainpage.php");
	$site_id = CMainPage::GetSiteByHost();
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
<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 block_news">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		<div class="news_name">
			<?=GetMessage('TITLE_BLOCK')?>
			<?if($site_id =="s2"){?>
			<a href="/en/news" class="all">
			<?}else{?>
			<a href="news" class="all">
			<?}?>

				<?=GetMessage('LINK_ALL_NEWS')?>
				<span class="glyphicon glyphicon-menu-right"></span>
			</a>
		</div>
		<div class="row" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<div class="col-md-12 col-sm-6 col-xs-12 news_img">
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
							<img
							src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
							alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
							title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
							/>
						</a>
					</div>
				<?else:?>
					<div class="col-md-12 col-sm-6 col-xs-12 news_img">
						<img
							src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
							alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
							title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/>
					</div>
				<?endif;?>
			<?endif?>
			<div class="col-md-12 col-sm-6 col-xs-12 news_text">
				<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
					<div class="news_date">
						<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
					</div>
				<?endif?>
				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<div class="text_news">
						<?echo $arItem["PREVIEW_TEXT"];?>
					</div>
				<?endif;?>
			</div>
		</div>
	<?endforeach;?>
</div>

