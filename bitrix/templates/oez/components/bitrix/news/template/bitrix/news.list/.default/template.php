<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?$showHr = false;?>
<?$showHr = false; $q = RandString(5);
$i = 1;
?>

	<h1>Новости</h1>
		<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 block_news">
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>



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
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
								<?echo $arItem["PREVIEW_TEXT"];?>
							</a>
						</div>
					<?endif;?>
				</div>
			</div>
	</div>
		<?
		if($i % 4 == 0){
			?>
		<div class="clearfix"></div>
			<?
		}
		$i++;
		endforeach;?>

</div>
