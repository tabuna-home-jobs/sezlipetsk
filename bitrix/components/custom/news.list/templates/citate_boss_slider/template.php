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
?>
<!--
<section class="partners">
	<div class="partners_name">
		<div>
			<h2>Нам доверяют мировые лидеры</h2>
			<a class="all">
				Все резиденты
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

			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
							     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
							     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
						</a>
					</div>
				<?else:?>
					<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<a>
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
							     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
							     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
						</a>
					</div>
				<?endif;?>
			<?endif?>
		<?endforeach;?>
	</div>
</section>-->


<div class="col-md-6 citata">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
					<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
						<div class="item active" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
								     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
								     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
							</a>
						</div>
					<?else:?>
						<div class="item active" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<a>
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
								     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
								     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
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
