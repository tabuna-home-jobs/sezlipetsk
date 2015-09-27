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

<section class="slider-wrap container hidden-xs">
<div id="carousel-example-generic" class="carousel slide homeslide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$res12 = CIBlockElement::GetByID($arItem['ID']);
	$res23 = $res12->GetNextElement();
	$tmp_elem = $res23->GetProperties();
	//var_dump($tmp_elem);
	//die('ghjkl;');
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<img

						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"

						/>
				<div class="carousel-caption">
					<div class="container">
						<div class="col-xs-6">
							<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
								<h2 class="header_caption_slider"><?echo $arItem["NAME"]?></h2>
							<?endif;?>
							<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
								<div class="body_caption_slider myboo">
									<?echo $arItem["PREVIEW_TEXT"];?>
								</div>
							<?endif;?>
							<div class="button_caption_slider">

								<a href="<?=$tmp_elem["MY_LINK"]['VALUE']?>">ПОДРОБНЕЕ</a>
							</div>
						</div>
					</div>
				</div>
			<?else:?>
				<img

					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"

					/>
				<div class="carousel-caption">
					<div class="container">
						<div class="col-xs-6">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<h2 class="header_caption_slider"><?echo $arItem["NAME"]?></h2>
				<?endif;?>
				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<div class="body_caption_slider">
						<?echo $arItem["PREVIEW_TEXT"];?>
					</div>
				<?endif;?>
						</div>
					</div>
				</div>
			<?endif;?>
		<?endif?>
	</div>
<?endforeach;?>
		</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon  glyphicon glyphicon-menu-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon  glyphicon glyphicon-menu-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
</section>
<script type="text/javascript">
	$(document).ready(function(){
		$(".carousel-inner div:first-child").addClass('active');
	});
</script>
