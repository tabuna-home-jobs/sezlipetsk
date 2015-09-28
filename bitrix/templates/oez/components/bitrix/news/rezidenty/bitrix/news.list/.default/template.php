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
?><section class="top_block_main">
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
						РОСОЭЗ – это масштабный федеральный проект по привлечению инвестиций, передовых научных, производственных и управленческих технологий.
						<br/>
						РОСОЭЗ предоставляют компаниям уникальную возможность использовать все инвестиционные преимущества России, минуя при этом типичные российские проблемы – нерыночные факторы влияния на бизнес и неэффективное администрирование.
						<br/>
						В данном разделе вы найдёте информацию о том, как начать свой бизнес в российских особых экономических зонах.
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
	</div>
</section>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
</div>
