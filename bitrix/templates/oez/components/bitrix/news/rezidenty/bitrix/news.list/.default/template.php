<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	// номер текущей страницы
	$curPage = $arResult["NAV_RESULT"]->NavPageNomer;
	// всего страниц - номер последней страницы
	$totalPages = $arResult["NAV_RESULT"]->NavPageCount;
	// номер постраничной навигации на странице
	$navNum = $arResult["NAV_RESULT"]->NavNum;
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
<script>

	$(function(){
		var newsSetLoader = new newsLoader({
			root: '.main>section',
			newsBlock: '.smi_more_blocks',
			newsLoader: '#load-items',
			ajaxLoader: '#ajax-loader img',
			loadSett:{
				endPage: <?=$totalPages?>,
				navNum: <?=$navNum?>
			}
		});
		newsSetLoader.init();
	});

</script>
<section class="top_block_main">
	<div class="container">
		<div class="row top_block">
			<div class="left_part col-xs-12 col-sm-12 col-md-7">
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
				<h1><?=$APPLICATION->GetTitle();?></h1>

				<div class="scrollbar-outer-off">
					<div class="lin">
						На территории ОЭЗ «Липецк» успешно реализует свои инвестиционные проекты 41 компания
						<br/>
						из Италии, Германии, Бельгии, Японии, Нидерландов, США, России, Швейцарии, Китая, Израиля, Украины, Польши и Республики Корея.
						<br/>
						На сегодняшний день осуществляют деятельность 13 предприятий, еще 4 - строящиеся, остальные резиденты осуществляют подготовительные мероприятия к строительству.
					</div>
				</div>
			</div>
			<div class="hidden-xs hidden-sm right_part col-xs-12 col-sm-12 col-md-5">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/sobranie.png">
			</div>
		</div>
	</div>
</section>
<div class="main container">
<section>
	<div class="row smi_more_blocks">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
					<div class="smi_more_img">
						<?if(isset($arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"])&& count($arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"])>0 &&$arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"]["ID"]!=""):?>
						<img src="<?=$arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"]["SRC"]?>">
						<?endif;?>
					</div>
					<div class="smi_more_name"><?echo $arItem["NAME"]?></div>
					<div class="smi_more_text"><?echo $arItem["PREVIEW_TEXT"];?>
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
				</a>
			</div>
		</div>
		<?endforeach;?>
	</div><div class="dop_smi">
		<?if(count($arResult["ITEMS"])>=$arParams["NEWS_COUNT"]){?>
			<a href="#" id="load-items" class="see_more">ПОКАЗАТЬ ЕЩЕ</a>
		<?}?>
		</div>
	<div id="ajax-loader">

		<img src="/bitrix/templates/oez/img/progress.gif">
	</div>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?>
	<?endif;?>
</section>

</div>
