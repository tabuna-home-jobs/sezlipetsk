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
<section class="top_block_main">
	<div class="container">
		<div class="row top_block over">
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
				<h1>
				<?=$arResult["ID"] == 0 ? $APPLICATION->GetTitle() : $arResult["NAME"];?>
				</h1>
				<div class="ssylki_top">
					<ul class="nav nav-tabs nav-tab-map" role="tablist">
						<?foreach ($arResult['ITEMS'] as $key => $arItem):?>
						<li role="presentation"  class="<?=$key == 0 ? 'active' : ''?>">
							<a href="#<?=$arItem["CODE"]?>" aria-controls="<?=$arItem["CODE"]?>" role="tab" data-toggle="tab"><?=$arItem["NAME"]?></a>
						</li>
						<?endforeach;?>
					</ul>
				</div>

					<div class="tab-content">
						<?foreach ($arResult['ITEMS'] as $key => $arItem):?>
						<div role="tabpanel" class="tab-pane fade <?=$key == 0 ? 'in active' : ''?>"  class="lin" id="<?=$arItem["CODE"]?>">
							<div class="scrollbar-outer">
							<?=$arItem["DETAIL_TEXT"]?>
							</div>
						</div>
						<?endforeach;?>
					</div>

			</div>
			<div class="hidden-xs hidden-sm right_part col-xs-12 col-sm-12 col-md-5">
				<?foreach ($arResult['ITEMS'] as $key => $arItem):?>
				<img style="<?=$key == 0 ? 'display:block' : 'display:none'?>"  tab-id="<?=$arItem["CODE"]?>" src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>">
				<?endforeach;?>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	$("[tab-id="+$(e.target).attr("aria-controls")+"]").fadeToggle();
	$("[tab-id="+$(e.relatedTarget).attr("aria-controls")+"]").toggle();
	})
</script>
