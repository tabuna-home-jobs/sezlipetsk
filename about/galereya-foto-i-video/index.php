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
						<img src="<?=SITE_TEMPLATE_PATH?>/img/galery_img.jpg">
					</div>
				</div>
				<div class="col-md-7 col-sm-9 content_tabs_galery">
					<?

						CModule::IncludeModule('iblock');
						$IBLOCK_ID = 20;

						if($IBLOCK_ID) {
							$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM", "DETAIL_PAGE_URL", "PREVIEW_PICTURE");
							$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "SEARCHABLE_CONTENT"=>'%'.$_REQUEST['q'].'%');

							$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
							echo "<pre>";
							var_dump($res);
							echo "</pre>";
							die('storp');
							while($ob = $res->GetNextElement())
							{
								$arFields = $ob->GetFields();
								echo "<pre>";
								var_dump($ob);
								echo "</pre>";
								die('storp');
							}
						}
					?>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="galery_links">
								<a href="#">Все фотографии</a>
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
										<div><img src="<?=SITE_TEMPLATE_PATH?>/img/foto_gal1.jpg">
											<div class="in_galery_foto"><div><img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop.png"></div></div>
										</div>
									</div>
								</a>
								<a  class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/foto_gal2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
									<div class="col-md-4 col-sm-6 col-xs-6 galery_item">
										<div>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/foto_gal2.jpg">
											<div class="in_galery_foto"><div><img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop.png"></div></div>
										</div>
									</div>
								</a>
								<a  class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/smi.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
									<div class="col-md-4 col-sm-6 col-xs-6 galery_item">
										<div>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/smi.jpg">
											<div class="in_galery_foto"><div><img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop.png"></div></div>
										</div>
									</div>
								</a>
								<a  class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/foto_gal4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
									<div class="col-md-4 galery_item col-sm-6 col-xs-6">
										<div>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/foto_gal4.jpg">
											<div class="in_galery_foto"><div><img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop.png"></div></div>
										</div>
									</div>
								</a>
								<a  class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/foto_gal5.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
									<div class="col-md-4 galery_item col-sm-6 col-xs-6">
										<div>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/foto_gal5.jpg">
											<div class="in_galery_foto"><div><img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop.png"></div></div>
										</div>
									</div>
								</a>
								<a  class="fancybox" href="<?=SITE_TEMPLATE_PATH?>/img/foto_gal6.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
									<div class="col-md-4 galery_item col-sm-6 col-xs-6">
										<div>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/foto_gal6.jpg">
											<div class="in_galery_foto"><div><img src="<?=SITE_TEMPLATE_PATH?>/img/galery_loop.png"></div></div>
										</div>
									</div>
								</a>
							</div>
							<div class="smi_control">
								<a class="smi_prev"></a>
								<a class="smi_next"></a>
							</div>
						</div>
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

					</div>
				</div>
			</div>
		</section>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
