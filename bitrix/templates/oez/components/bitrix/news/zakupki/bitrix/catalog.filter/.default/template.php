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
<section class="block_top open_inform row">
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
	<div class="infrom_bye">
		<div class="infrom_b_name">Информация о закупках</div>
		<div class="row infrom_b_body">
			<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">
				<div class="col-md-3"><input type="text" placeholder="Поиск"></div>
				<?foreach($arResult["ITEMS"] as $arItem):
				if(array_key_exists("HIDDEN", $arItem)):
				echo $arItem["INPUT"];
				endif;
				endforeach;?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<?if(!array_key_exists("HIDDEN", $arItem)):?>
				<div class="col-md-3">
					<div>
						<select name="<?=$arItem["INPUT_NAME"]?>">
							<option value=""><?=$arItem["NAME"]?></option>
							<?$num=0;?>
							<?foreach($arItem["LIST"] as $key => $value):?>
							<?
							if($num==0){
							$num++;
							continue;
							}
							?>
							<option value="<?=$key?>" <?=$arItem["INPUT_VALUE"] == $key ? 'selected' : ''?>><?=$value?></option>
							<?$num++;?>
							<?endforeach;?>
						</select>
					</div>
				</div>
				<?endif?>
				<?endforeach;?>
				<input type="hidden" name="set_filter" value="<?=GetMessage("IBLOCK_SET_FILTER")?>" />
				<div class="col-md-3">
					<button onclick="this.submit()">Отобрать</button>
				</div>
			</form>
		</div>
	</div>
</section>