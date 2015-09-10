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
						<?$APPLICATION->IncludeComponent(
							"custom:video_epta",
							"",
							array(
								"IBLOCK_TYPE" => "information",
								"IBLOCK_ID" => "27",
							),
							false
						);?>
					<!--Видеогалерея-->
					</div>
				</div>
			</div>
		</section>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
