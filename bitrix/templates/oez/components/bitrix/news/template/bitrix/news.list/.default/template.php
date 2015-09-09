<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="container">
	<div class="row">
		<div class="col-md-5 smi_left">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?$showHr = false;?>
<?$showHr = false; $q = RandString(5);
$i = 1;
?>

	<h1>Новости</h1>
	<!--Хеебный крош-->
	<?$APPLICATION->IncludeComponent(
		"custom:breadcrumb",
		"",
		Array(
			"COMPONENT_TEMPLATE" => "oez",
			"START_FROM" => "0",
			"PATH" => "",
			"SITE_ID" => "s1"
		)
	);
	?>
	<!--Хлебные крошки-->
	<div class="smi_block">
		<div>
		<?foreach($arResult["ITEMS"] as $arItem):

			//var_dump($arItem["DETAIL_PICTURE"]["SRC"]);
			//die('ghjkl');
			?>

			<div rel="<?=$i?>" class="smi_item">
				<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
					<div class="smi_date">
						<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
					</div>
				<?endif?>
				<div class="smi_name">
					<?echo $arItem["NAME"]?>
				</div>
				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<div class="smi_text">
						<?echo $arItem["PREVIEW_TEXT"];?>
					</div>
				<?endif;?>
				<div class="smi_but"><a href="'.<?=$arItem["DETAIL_PAGE_URL"]?>.'"  >Подробнее</a></div>
			</div>

			<?/* ?>
	<!--<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 block_news">
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
	</div>-->
<? */ ?>
		<?/*
		//Чтоб чётко блоки были по 4
		if($i % 4 == 0){
			?>
		<div class="clearfix"></div>
			<?
		}
		*/
		$i++;
		endforeach;?>
		</div>
		<div class="smi_control">

			<a class="smi_prev"></a>
			<a class="smi_next"></a>
		</div>
	</div>

		</div>
		<div class="col-md-7 smi_right">
			<? $i = 1;
			foreach($arResult["ITEMS"] as $arItem):
				$res12 = CIBlockElement::GetByID($arItem['ID']);
				$res23 = $res12->GetNextElement();
				$tmp_elem = $res23->GetFields();
				$arItem['DETAIL_PICTURE'] = $tmp_elem['DETAIL_PICTURE'];
				if(isset($arItem["DETAIL_PICTURE"]))
				{
					$arItem["DETAIL_PICTURE"] = (0 < $arItem["DETAIL_PICTURE"] ? CFile::GetFileArray($arItem["DETAIL_PICTURE"]) : false);
					if ($arItem["DETAIL_PICTURE"])
					{
						$arItem["DETAIL_PICTURE"]["ALT"] = $arItem["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"];
						if ($arItem["DETAIL_PICTURE"]["ALT"] == "")
							$arItem["DETAIL_PICTURE"]["ALT"] = $arItem["NAME"];
						$arItem["DETAIL_PICTURE"]["TITLE"] = $arItem["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"];
						if ($arItem["DETAIL_PICTURE"]["TITLE"] == "")
							$arItem["DETAIL_PICTURE"]["TITLE"] = $arItem["NAME"];
					}
				}
				?>
			<img id="<?=$i?>" src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
			<?
			$i++;
			endforeach;?>

		</div>
	</div>
</section>
<section class="container smi_more_section">
	<div class="row smi_more_blocks">
		<?foreach($arResult["ITEMS"] as $arItem):?>

		<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
			<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div>
				<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
					<div class="smi_more_date"><span>
						<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
					</span></div>
				<?endif?>
				<div class="smi_more_name"><?echo $arItem["NAME"]?></div>
				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<div class="smi_more_text">
						<?echo $arItem["PREVIEW_TEXT"];?>
					</div>
				<?endif;?>
				<div class="block_icon_arrow">
					<span class="glyphicon glyphicon-menu-right"></span>
				</div>
			</div>
		</div>

		<?endforeach;?>


	</div>
	<div class="dop_smi"><a class="see_more">ПОКАЗАТЬ ЕЩЕ</a> <a class="all">Пресс-релизы<span
				class="glyphicon glyphicon-menu-right"></span></a></div>
</section>
