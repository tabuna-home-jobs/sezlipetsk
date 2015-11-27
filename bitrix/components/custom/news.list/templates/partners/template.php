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
	//require($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/mainpage.php");
	$site_id = CMainPage::GetSiteByHost();
?>
<section class="partners">
	<div class="partners_name">
		<div>
			<h2><?=GetMessage('TITLE_BLOCK_PARTNERS');?></h2>
			<?if($site_id =="s2"){?>
			<a class="all" href='/en/about/rezidenty/'>
				<?}else{?>
				<a class="all" href='<?=$arResult["HOME_PAGE"]?>'>
					<?}?>

				<?=GetMessage('LINK_ALL');?>
				<span class="glyphicon glyphicon-menu-right"></span>
			</a>
		</div>
	</div>
	<div class="slider_partners">

		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<?if(isset($arItem["DISPLAY_PROPERTIES"]["IMG"]) && count($arItem["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"])>0&&isset($arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]) && count($arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"])>0):?>
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
							<img src='<?=$arItem["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"]["src"]?>' onmouseover='this.src="<?=$arItem["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"]["src"]?>"' onmouseout='this.src="<?=$arItem["DISPLAY_PROPERTIES"]["IMG"]["FILE_VALUE"]["src"]?>"'/>
						</a>
			<?endif;?>
		<?endforeach;?>
	</div>
</section>
