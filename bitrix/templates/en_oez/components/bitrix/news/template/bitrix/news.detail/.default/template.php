<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="container section_resident_main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">

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


			<?//var_dump($arResult['LINK1']['VALUE']);
				if($arResult['PROPERTIES']['LINK1']['VALUE'] != ''){?>

					<p>
						<h4 style="display: inline;">Source: </h4>
						<a href="<?=$arResult['PROPERTIES']['LINK1']['VALUE']?>"><?=$arResult['PROPERTIES']['ISTOCHNIK1']['VALUE']?></a>
						<?if($arResult['PROPERTIES']['LINK2']['VALUE'] != ''){?>
					&nbsp;,<a href="<?=$arResult['PROPERTIES']['LINK2']['VALUE']?>"><?=$arResult['PROPERTIES']['ISTOCHNIK2']['VALUE']?></a>
				<?}?>
					<?if($arResult['PROPERTIES']['LINK3']['VALUE'] != ''){?>
						&nbsp;,<a href="<?=$arResult['PROPERTIES']['LINK3']['VALUE']?>"><?=$arResult['PROPERTIES']['ISTOCHNIK3']['VALUE']?></a>
					<?}?>
					<?if($arResult['PROPERTIES']['LINK4']['VALUE'] != ''){?>
						&nbsp;,<a href="<?=$arResult['PROPERTIES']['LINK4']['VALUE']?>"><?=$arResult['PROPERTIES']['ISTOCHNIK4']['VALUE']?></a>
					<?}?>
					<?if($arResult['PROPERTIES']['LINK5']['VALUE'] != ''){?>
						&nbsp;,<a href="<?=$arResult['PROPERTIES']['LINK5']['VALUE']?>"><?=$arResult['PROPERTIES']['ISTOCHNIK5']['VALUE']?></a>
					<?}?>
					<?if($arResult['PROPERTIES']['LINK5']['VALUE'] != ''){?>
						&nbsp;,<a href="<?=$arResult['PROPERTIES']['LINK5']['VALUE']?>"><?=$arResult['PROPERTIES']['ISTOCHNIK5']['VALUE']?></a>
					<?}?>
					</p>
				<?}

			?>
			<h1><?=$arResult["NAME"]?></h1>
		</div>

</section>

<?
	if(!empty($arResult['PROPERTIES']['FILES']['VALUE'])){
		for($j = 0; $j < count($arResult['PROPERTIES']['FILES']['VALUE']); $j++){
			$arResult['IMAGES'][$j] = CFile::GetFileArray($arResult['PROPERTIES']['FILES']['VALUE'][$j]);
		}
		?>
		<section class="resident_desrc">
			<div class="ministr row">
				<div class="container">
					<div id="slider1" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
								<? $i=0;?>
								<?foreach ($arResult['IMAGES'] as $key => $value_img):?>
								<?if(($i % 2 == 0)&&($i != 0)){?>
								<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
								<div class="carousel-caption">
								</div>
							</div>
							<div class="item">
								<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
								<?}?>
								<div class="slideimg col-md-5 col-sm-5 col-lg-5 col-xs-5">
									<img src="<?=$value_img["SRC"]?>" alt="1">
								</div>

								<? $i++;?>
								<?endforeach;?>

								<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
								<div class="carousel-caption">
								</div>
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control slcontrol" href="#slider1" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control srcontrol" href="#slider1" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div><!--/slider!-->
		</section>
	<? } ?>
<section class="container">
	<div class="col-xs-12 col-sm-12 col-md-12">


		<div class="text_resident_header">

			<?/* if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
	<div class="news-picture">
		<img class="detail_picture" border="0" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["NAME"]?>"  title="<?=$arResult["NAME"]?>" />
	</div>
	<?endif?>
	
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif; */?>

			<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
				<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
			<?endif;?>
			<?if($arResult["NAV_RESULT"]):?>
				<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
				<?echo $arResult["NAV_TEXT"];?>
				<? /*if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif; */ ?>
			<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
				<?echo $arResult["DETAIL_TEXT"];?>
			<?else:?>
				<?echo $arResult["PREVIEW_TEXT"];?>
			<?endif?>


			<?/* foreach($arResult["FIELDS"] as $code=>$value):?>
		<?if ($code != 'PREVIEW_PICTURE'):?>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			<br />
		<?endif?>
	<?endforeach;?>
	
	<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
		<?if($pid != "THEME"):?>
			<div class="news-property"><?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</div>
		<?endif?>
	<?endforeach;?>
		<div class="news-property">
			<?=GetMessage("T_NEWS_SHORT_URL");
			$shortPageURL = (CMain::IsHTTPS()) ? "https://" : "http://";
			$host = (SITE_SERVER_NAME == "") ?  $_SERVER['HTTP_HOST'] : SITE_SERVER_NAME;
			$shortPageURL.= htmlspecialcharsbx($host).CBXShortUri::GetShortUri($arResult["~DETAIL_PAGE_URL"]);
			?>
			<a href="<?=$shortPageURL?>"><?=$shortPageURL?></a>
		</div>
	</div>
	<div class="news-detail-back"><a href="<?=$arResult["SECTION_URL"]?>"><?=GetMessage("T_NEWS_DETAIL_BACK")?></a></div>
	<?
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
	<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
		<?if($pid == "THEME" && count($arResult["ITEMS_THEME"]) > 0 ):?>
			<div class="news-detail-theme">
			<div class="news-theme-title"><?=GetMessage("T_NEWS_DETAIL_THEME")?>:&nbsp;
				<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode(",&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</div>
			<?foreach($arResult["ITEMS_THEME"] as $pid=>$arProperty):?>
				<div class="news-theme-item"><div class="news-theme-date"><?=$arProperty["ACTIVE_FROM"]?></div><div class="news-theme-url"><a href="<?=$arProperty["DETAIL_PAGE_URL"]?>"><?=$arProperty["NAME"]?></a></div></div>
			<?endforeach;?>
			<div class="br"></div>
			</div>
		<?endif?>
	<?endforeach;*/ ?>
		</div>
</section>
</div>
<div style="clear: both;" ></div>
<style>

	.reviews-minimized{
		display: none;
	}
</style>

