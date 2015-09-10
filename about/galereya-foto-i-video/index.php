<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Галерея фото и видео");
?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.fancybox').fancybox();
		});
	</script>
	<div class="main container">
		<section class="section_header">
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
		</section>
		<section>
			<div class="row galery_container">
				<div class="col-md-5 col-sm-3">
					<ul id="myTabs" class="nav nav-tabs nav_in_galery" role="tablist">
						<li role="presentation" class="active">
							<a href="#home" id="home-tab" role="tab" data-toggle="tab"
							   aria-controls="home" aria-expanded="true">
              <span>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/fotocamera.png">
                <img class="active_img" src="<?=SITE_TEMPLATE_PATH?>/img/fotocamera_1.png">
              </span>
								Фотогалерея
							</a>
						</li>
						<li role="presentation" class="">
							<a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">
            <span>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/videocamera.png">
                <img class="active_img" src="<?=SITE_TEMPLATE_PATH?>/img/videocamera_1.png">
            </span>
								Видеогалерея
							</a>
						</li>

					</ul>
					<div class="hidden-xs">
						<!--Основная фотография-->
							<?$APPLICATION->IncludeComponent(
								"custom:photogall_epta",
								"main_photo",
								array(
									"IBLOCK_TYPE" => "information",
									"IBLOCK_ID" => "20",
									"ALBUM4EG_ID" => "30"
								),
								false
							);?>
						<!--Основная фотография-->
					</div>
				</div>
				<div class="col-md-7 col-sm-9 content_tabs_galery">


					<div id="myTabContent" class="tab-content">
					<!--Фотогалерея-->
						<?$APPLICATION->IncludeComponent(
							"custom:photogall_epta",
							"",
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"IBLOCK_TYPE" => "information",
								"IBLOCK_ID" => "20",
							),
							false
						);?>
					<!--Фотогалерея-->
						<!--Видеогалерея-->
						<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">

							<div class="galery_links">
								<a href="#">Все видео</a>
								<a href="#">История</a>
								<a href="#">Персоны</a>
								<a href="#">Промышленная инфраструктура</a>
								<a href="#">Социальная инфраструктура</a>
								<a href="#">Резиденты</a>
								<a href="#">События</a>
								<a href="#">Социальная ответственность</a>


							</div>
							<div class="row">
								<a  class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/foto_gal1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
									<div class="col-md-4 galery_item col-sm-6 col-xs-6">
										<div>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/foto_gal1.jpg">
											<div class="in_galery_foto">
												<div>
													<img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop2.png">
												</div>
											</div>
										</div>
									</div>
								</a>
								<a  class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/foto_gal2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
									<div class="col-md-4 col-sm-6 col-xs-6 galery_item">
										<div>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/foto_gal2.jpg">
											<div class="in_galery_foto"><div><img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop2.png"></div></div>
										</div>
									</div>
								</a>
								<a  class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/smi.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
									<div class="col-md-4 col-sm-6 col-xs-6 galery_item">
										<div>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/smi.jpg">
											<div class="in_galery_foto"><div><img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop2.png"></div></div>
										</div>
									</div>
								</a>
								<a  class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/foto_gal4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
									<div class="col-md-4 galery_item col-sm-6 col-xs-6">
										<div>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/foto_gal4.jpg">
											<div class="in_galery_foto"><div><img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop2.png"></div></div>
										</div>
									</div>
								</a>
								<a  class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/foto_gal5.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
									<div class="col-md-4 galery_item col-sm-6 col-xs-6">
										<div>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/foto_gal5.jpg">
											<div class="in_galery_foto"><div><img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop2.png"></div></div>
										</div>
									</div>
								</a>
								<a  class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/foto_gal6.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
									<div class="col-md-4 galery_item col-sm-6 col-xs-6">
										<div>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/foto_gal6.jpg">
											<div class="in_galery_foto"><div><img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop2.png"></div></div>
										</div>
									</div>
								</a>
							</div>
							<div class="smi_control">
								<a class="smi_prev"></a>
								<a class="smi_next"></a>
							</div>
						</div>
						<!--Видеогалерея-->
					</div>
				</div>
			</div>
		</section>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
