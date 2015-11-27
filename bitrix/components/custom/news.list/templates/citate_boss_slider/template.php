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
	//require($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/mainpage.php");
	$site_id = CMainPage::GetSiteByHost();
?>
<div class="col-md-6 citata">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?
			foreach($arResult["ITEMS"] as $arItem){
				$n++;
			}
			for($i = 0; $i < $n; $i++){
				if($n == 1){?>
					<li data-target="#carousel-example-generic" data-slide-to="<?=$i?>" class="active"></li>
				<?}else{?>
					<li data-target="#carousel-example-generic" data-slide-to="<?=$i?>"></li>
				<?}
			}?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?  $n = 0;
				foreach($arResult["ITEMS"] as $arItem):?>
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
							<a href="tsitaty-rukovoditeley/"  class="reddi">

								<?if($site_id =="s2"){?>
									<img  src="<?=SITE_TEMPLATE_PATH?>/img/reddi_eng.png">
									<?}else{?>
										<img  src="<?=SITE_TEMPLATE_PATH?>/img/reddi.png">
										<?}?>
							</a>
						</div>
					<?else:?>

						<div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
								     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
								     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
							<a href="tsitaty-rukovoditeley/"  class="reddi">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/reddi.png">
							</a>
						</div>
					<?endif;?>
				<?endif?>
			<?endforeach;?>



		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
