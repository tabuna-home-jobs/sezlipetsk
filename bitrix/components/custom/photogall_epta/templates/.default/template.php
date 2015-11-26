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
	// подключим файл с классом CMainPage
	require($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/mainpage.php");

	// получим идентификатор текущего сайта по доменному имени
	$site_id = CMainPage::GetSiteByHost();

?>
<div role="tabpanel" class="tab-pane fade active in photogal" id="home" aria-labelledby="home-tab">

	<div class="galery_links">
		<ul class="nav nav-tabs nav-tabs-photo" role="tablist">
			<li role="presentation">
				<? if($site_id == "s2"){?>
					<a href="#tab001" aria-controls="tab001" role="tab" data-toggle="tab">All photo</a>
				<? }else{ ?>
					<a href="#tab001" aria-controls="tab001" role="tab" data-toggle="tab">Все фотографии</a>
				<? } ?>

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
		<div role="tabpanel" class="tab-pane fade" id="tab001">
			<div id="carousel-example-genericAll" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">

					<div class="item">
						<? $lis = 1; foreach($arResult["allPhotoz"] as $contentPhoto){ ?>

							<? if(!is_null($contentPhoto['DETAIL_PICTURE'])){?>

						<a class="fancybox" href="<?=CFile::GetPath($contentPhoto['DETAIL_PICTURE']);?>" data-fancybox-group="galleryAll" title="<?=$contentPhoto['NAME'];?>">

							<? }elseif(!is_null($contentPhoto['PREVIEW_PICTURE'])){ ?>

							<a class="fancybox" href="<?=CFile::GetPath($contentPhoto['PREVIEW_PICTURE']);?>" data-fancybox-group="galleryAll" title="<?=$contentPhoto['NAME'];?>">

								<? }else{ ?>
								<a class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/noimg.png" data-fancybox-group="galleryAll" title="нет изображения">
									<? } ?>


								<div class="col-md-4 stupid_images  col-sm-6 col-xs-6">
									<div>
										<? if(!is_null($contentPhoto['PREVIEW_PICTURE'])){?>
											<img src="<?=CFile::GetPath($contentPhoto['PREVIEW_PICTURE']);?>">
										<? } elseif(!is_null($contentPhoto['DETAIL_PICTURE'])){?>
											<img src="<?=CFile::GetPath($contentPhoto['DETAIL_PICTURE']);?>">
										<? }else{ ?>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/noimg.png">
										<? }?>
										<div class="in_galery_foto">
											<div>
												<img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop.png">
											</div>
										</div>
									</div>
								</div>
							</a>
							<?
								//Если фоток больше 6 то делаем следующий слайд для карусели
								if($lis % 6 == 0){
							?>
					</div>
					<div class="item">
						<?
							}
						?>

						<? $lis++; } ?>
					</div>
				</div>


				<? if(count($arResult["allPhotoz"]) > 6){?>
					<div class="smi_control">
						<a data-slide="prev" href="#carousel-example-genericAll" class="smi_prev left"></a>
						<a data-slide="next" href="#carousel-example-genericAll" class="smi_next right"></a>
					</div>
				<? }?>

			</div>

		</div>
		<? foreach($arResult['razdel'] as $razdleTabsContent){?>

			<div role="tabpanel" class="tab-pane fade" id="tab<?=$razdleTabsContent['ID'];?>">
				<? if(count($razdleTabsContent['child']) > 0){?>
					<div id="carousel-example-generic<?=$razdleTabsContent['ID'];?>" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">

							<div class="item">
	<? $lis = 1; foreach($razdleTabsContent['child'] as $contentPhoto){ ?>

			<? if(!is_null($contentPhoto['DETAIL_PICTURE'])){?>

		<a class="fancybox" href="<?=CFile::GetPath($contentPhoto['DETAIL_PICTURE']);?>" data-fancybox-group="gallery<?=$razdleTabsContent['ID'];?>" title="<?=$contentPhoto['NAME'];?>">

			<? }elseif(!is_null($contentPhoto['PREVIEW_PICTURE'])){ ?>

			<a class="fancybox" href="<?=CFile::GetPath($contentPhoto['PREVIEW_PICTURE']);?>" data-fancybox-group="gallery<?=$razdleTabsContent['ID'];?>" title="<?=$contentPhoto['NAME'];?>">

			<? } ?>


				<div class="col-md-4 stupid_images  col-sm-6 col-xs-6">
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
			<?
			//Если фоток больше 6 то делаем следующий слайд для карусели
			if($lis % 6 == 0){
			?>
							</div>
							<div class="item">
			<?
			}
			?>

	<? $lis++; } ?>
							</div>
						</div>


						<? if(count($razdleTabsContent['child']) > 6){?>
						<div class="smi_control">
							<a data-slide="prev" href="#carousel-example-generic<?=$razdleTabsContent['ID'];?>" class="smi_prev left"></a>
							<a data-slide="next" href="#carousel-example-generic<?=$razdleTabsContent['ID'];?>" class="smi_next right"></a>
						</div>
						<? }?>

					</div>
				<? }else{ ?>
					<? if($site_id == "s2"){?>
						No photo
					<? }else{ ?>
						В этом разделе пока нет фотографий
					<? } ?>

				<? } ?>


			</div>
		<? } ?>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.carousel-inner .item:first-child').addClass('active');
			//делаем активными вторые элементы
			$(".photogal .nav-tabs-photo li:nth-child(2)").addClass('active');
			$(".photogal .tab-content div.fade:nth-child(2)").addClass('in').addClass('active');

			$('.carousel').carousel({
				interval: false
			});
		});
	</script>
</div>
