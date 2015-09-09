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

/*
	echo "<pre>";
	var_dump($arResult['razdel']);
	echo "</pre>";
	die('stopr');*/

?>
<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">

	<div class="galery_links">
		<ul class="nav nav-tabs nav-tabs-photo" role="tablist">
			<li role="presentation" class="active">
				<a href="#tab001" aria-controls="tab001" role="tab" data-toggle="tab">Все фотографии</a>
			</li>
			<? foreach($arResult['razdel'] as $razdel){ ?>
			<li role="presentation">
				<a href="#tab<?=$razdel['ID'];?>" aria-controls="tab<?=$razdel['ID'];?>" role="tab" data-toggle="tab">
					<?=$razdel['NAME'];?>
				</a>
			</li>
			<? } ?>
		</ul>
	</div>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="tab001">
		ssdswe fdsf sdfsd
		</div>
		<? foreach($arResult['razdel'] as $razdleTabsContent){?>

			<div role="tabpanel" class="tab-pane fade" id="tab<?=$razdleTabsContent['ID'];?>">
				<? if(count($razdleTabsContent['child']) > 0){ ?>
					<? foreach($razdleTabsContent['child'] as $contentPhoto){?>

		<? if(!is_null($contentPhoto['DETAIL_PICTURE'])){?>
			<a class="fancybox" href="<?=CFile::GetPath($contentPhoto['DETAIL_PICTURE']);?>" data-fancybox-group="gallery" title="<?=$contentPhoto['NAME'];?>">
		<? }elseif(!is_null($contentPhoto['PREVIEW_PICTURE'])){ ?>
			<a class="fancybox" href="<?=CFile::GetPath($contentPhoto['PREVIEW_PICTURE']);?>" data-fancybox-group="gallery" title="<?=$contentPhoto['NAME'];?>">
		<? } ?>

				<div class="col-md-4 stupid_images col-sm-6 col-xs-6">
					<div>
						<img src="<?=CFile::GetPath($contentPhoto['PREVIEW_PICTURE']);?>">
						<div class="in_galery_foto">
						<div>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop.png">
						</div>
						</div>

					</div>
				</div>

			</a>

					<? } ?>
				<? }else{ ?>
					В этом разделе пока нет фотографий
				<? } ?>
			</div>
		<? } ?>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){

			//$(".nav-tabs-photo li:nth-child(2)").addClass('active');
			//$(".tab-content div.fade:first-child").addClass('in').addClass('active');
		});
	</script>

	<div class="smi_control">
		<a class="smi_prev"></a>
		<a class="smi_next"></a>
	</div>
</div>
