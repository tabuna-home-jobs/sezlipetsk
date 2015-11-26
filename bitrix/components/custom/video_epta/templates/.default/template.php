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
	//require($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/mainpage.php");

	// получим идентификатор текущего сайта по доменному имени
	$site_id = CMainPage::GetSiteByHost();

?>
<script src="//www.youtube.com/player_api"></script>

<div role="tabpanel" class="tab-pane fade photogal2" id="profile" aria-labelledby="home-tab">

	<div class="galery_links">
		<ul class="nav nav-tabs nav-tabs-photo" role="tablist">
			<li role="presentation">
				<? if($site_id == "s2"){?>
					<a href="#tab002" aria-controls="tab002" role="tab" data-toggle="tab">All video</a>
				<? }else{ ?>
					<a href="#tab002" aria-controls="tab002" role="tab" data-toggle="tab">Все видео</a>
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
		<div role="tabpanel" class="tab-pane fade" id="tab002">
			<div id="carousel-example-genericAll2" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">

					<div class="item">
						<? $lis2 = 1;  foreach($arResult["allPhotoz"] as $contentPhoto){ ?>

						<? if(!is_null($contentPhoto['DETAIL_PICTURE'])){?>

						<a href="#" data-toggle="modal" data-target="#myModal<?=$contentPhoto['EXTERNAL_ID'];?>" title="<?=$contentPhoto['NAME'];?>">

							<? }elseif(!is_null($contentPhoto['PREVIEW_PICTURE'])){ ?>

							<a href="#" data-toggle="modal" data-target="#myModal<?=$contentPhoto['EXTERNAL_ID'];?>" title="<?=$contentPhoto['NAME'];?>">

								<? }else{ ?>
								<a href="#" data-toggle="modal" data-target="#myModal<?=$contentPhoto['EXTERNAL_ID'];?>" title="нет изображения">
									<? } ?>


									<div class="col-md-4 stupid_images col-sm-6 col-xs-6">
										<div>

											<? if(!is_null($contentPhoto['PREVIEW_PICTURE'])){?>
												<img src="<?=CFile::GetPath($contentPhoto['PREVIEW_PICTURE']);?>">
											<? } elseif(!is_null($contentPhoto['DETAIL_PICTURE'])){?>
												<img src="<?=CFile::GetPath($contentPhoto['DETAIL_PICTURE']);?>">
											<? }else{ ?>
												<img src="<?=SITE_TEMPLATE_PATH?>/img/noimg.png">
											<? } ?>

											<div>
												<div>
													<img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop2.png">
												</div>
											</div>
										</div>
									</div>
								</a>
								<?
									//Если фоток больше 6 то делаем следующий слайд для карусели
									if($lis2 % 6 == 0){
								?>
					</div>
					<div class="item">
						<?
							}
						?>

						<? $lis2++; } ?>
					</div>
				</div>


				<? if(count($arResult["allPhotoz"]) > 6){?>
					<div class="smi_control">
						<a data-slide="prev" href="#carousel-example-genericAll2" class="smi_prev left"></a>
						<a data-slide="next" href="#carousel-example-genericAll2" class="smi_next right"></a>
					</div>
				<? }?>

			</div>

		</div>
		<? foreach($arResult['razdel'] as $razdleTabsContent){ ?>

			<div role="tabpanel" class="tab-pane fade" id="tab<?=$razdleTabsContent['ID'];?>">
				<? if(count($razdleTabsContent['child']) > 0){?>
					<div id="carousel-example-generic<?=$razdleTabsContent['ID'];?>" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">

							<div class="item">
								<? $lis = 1; foreach($razdleTabsContent['child'] as $contentPhoto){ ?>

								<? if(!is_null($contentPhoto['DETAIL_PICTURE'])){?>

								<a href="#" data-toggle="modal" data-target="#myModal<?=$contentPhoto['EXTERNAL_ID'];?>" title="<?=$contentPhoto['NAME'];?>">

									<? }elseif(!is_null($contentPhoto['PREVIEW_PICTURE'])){ ?>

									<a href="#" data-toggle="modal" data-target="#myModal<?=$contentPhoto['EXTERNAL_ID'];?>" title="<?=$contentPhoto['NAME'];?>">

										<? }else{ ?>

										<a href="#" data-toggle="modal" data-target="#myModal<?=$contentPhoto['EXTERNAL_ID'];?>" title="нет изображения">

											<? } ?>


											<div class="col-md-4 stupid_images col-sm-6 col-xs-6">
												<div>
													<? if(!is_null($contentPhoto['PREVIEW_PICTURE'])){?>
														<img src="<?=CFile::GetPath($contentPhoto['PREVIEW_PICTURE']);?>">
													<? } elseif(!is_null($contentPhoto['DETAIL_PICTURE'])){?>
														<img src="<?=CFile::GetPath($contentPhoto['DETAIL_PICTURE']);?>">
													<? }else{ ?>
														<img src="<?=SITE_TEMPLATE_PATH?>/img/noimg.png">
													<? } ?>
													<div>
														<div>
															<img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop2.png">
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
						No video
					<? }else{ ?>
						В этом разделе пока нет видео
					<? } ?>

				<? } ?>


			</div>

			<? foreach($razdleTabsContent['child'] as $contentPhoto){ ?>
				<!-- Modal for video -->
				<div class="modal fade" id="myModal<?=$contentPhoto['EXTERNAL_ID'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?=$contentPhoto['EXTERNAL_ID'];?>">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel<?=$contentPhoto['EXTERNAL_ID'];?>"><?=$contentPhoto['NAME'];?></h4>
							</div>
							<!--Тут у нас будут появлятся видео с ютуба-->
								<div class="modal-body text-center">
									<div id="player<?=$contentPhoto['EXTERNAL_ID'];?>"></div>
								</div>
							<!--Тут у нас будут появлятся видео с ютуба-->

							<div class="modal-footer">
								<button type="button" class="btn btn-danger" id="closeBla<?=$contentPhoto['EXTERNAL_ID'];?>" data-dismiss="modal">Закрыть</button>
							</div>

						</div>
					</div>
				</div>
				<!-- Modal for video -->

			<? } ?>


		<? } ?>




	</div>

	<script>
		//Создаем видео ютубовские
		function onYouTubePlayerAPIReady() {

			<? foreach($arResult['razdel'] as $razdleTabsContent){ ?>

				<? foreach($razdleTabsContent['child'] as $contentPhoto){ ?>

					var player<?=$contentPhoto['EXTERNAL_ID'];?> = new YT.Player('player<?=$contentPhoto['EXTERNAL_ID'];?>', {videoId: '<?=$contentPhoto['PREVIEW_TEXT'];?>'});

					document.getElementById('closeBla<?=$contentPhoto['EXTERNAL_ID'];?>').onclick = function() {
						player<?=$contentPhoto['EXTERNAL_ID'];?>.pauseVideo();
					};

				<? } ?>
			<? } ?>

		}
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.carousel-inner2 .item:first-child').addClass('active');
			//делаем активными вторые элементы
			$(".photogal2 .nav-tabs-photo li:nth-child(2)").addClass('active');
			$(".photogal2 .tab-content div.tab-pane:nth-child(2)").addClass('in').addClass('active');

			$('.carousel').carousel({
				interval: false
			});
		});
	</script>
</div>
