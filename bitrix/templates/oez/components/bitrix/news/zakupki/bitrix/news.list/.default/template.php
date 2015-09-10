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
<div class="table-responsive table_bye">
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>
					Предмет закупки
				</th>
				<th>
					Цена договора
				</th>
				<th>
					Организатор закупки
				</th>
				<th>
					Подача заявок на участие в закупке
				</th>
				<th>
					Статус закупки
				</th>
			</tr>
		</thead>
		<tbody>
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<tr id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<td>
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><div class="td_name"><?echo $arItem["DISPLAY_PROPERTIES"]["SPOSOB"]["DISPLAY_VALUE"]?></div></a>
					<div class="td_number"><?=$arItem["DISPLAY_PROPERTIES"]["NUM"]["DISPLAY_VALUE"]?></div>
					<?echo $arItem["NAME"]?>
				</td>
				<td>
					<?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["DISPLAY_VALUE"]?>
				</td>
				<td>
					<?=$arItem["DISPLAY_PROPERTIES"]["ORGANISATOR"]["DISPLAY_VALUE"]?>
				</td>
				<td>
					<?=$arItem["DISPLAY_PROPERTIES"]["DATE_START"]["DISPLAY_VALUE"]?> - <?=$arItem["DISPLAY_PROPERTIES"]["DATE_STOP"]["DISPLAY_VALUE"]?>
				</td>
				<td>
					<?=$arItem["DISPLAY_PROPERTIES"]["STATUS"]["DISPLAY_VALUE"]?>
				</td>
			</tr>
			<?endforeach;?>
		</tbody>
	</table>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
