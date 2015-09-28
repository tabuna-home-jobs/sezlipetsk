<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Перспективы расширения территории");
?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.fancybox').fancybox();
			$(".fancybox2").fancybox({
				maxWidth	: 860,
				maxHeight	: 495,
				padding		: 0,
				fitToView	: false,
				width		: '70%',
				height		: '70%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		});
	</script>


	<div class="main container">
		<!--Хеебный крош--> <?$APPLICATION->IncludeComponent(
			"custom:breadcrumb",
			"",
			Array(
				"COMPONENT_TEMPLATE" => "oez",
				"START_FROM" => "0",
				"PATH" => "",
				"SITE_ID" => "s1"
			)
		);?> <!--Хлебные крошки-->
		<h3><?=$APPLICATION->GetTitle();?></h3>

		<section class="main_blocks margin_top row">
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 dop-text">
				Земельный участок площадью 1 278 Га на территории Елецкого муниципального района Липецкой области.


			</div>
			<div class="col-lg-7 col-sm-12 col-md-7 col-xs-12 my_left">
				<div class="row">
					<div class="myWrap">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 iii">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/ic1.png"/>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 iii">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/ic2.png"/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="myWrap">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 iii">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/ic3.png"/>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 iii">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/140.png"/>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/myMap.png" />
				</div>

			</div>
			<div class="col-lg-5 col-sm-12 col-md-5 col-xs-12">

				<ul class="redUl">
					Основные преимущества участка:
					<li>примыкание к федеральной трассе М4 «Дон»</li>
					<li>наличие 2-x организованных въездов</li>
					<li>расположение в непосредственной близости к крупной железнодорожной станции «Извалы»</li>
					<li>высокий кадровый потенциал Елецкого района</li>
				</ul>
				<ul class="redUl">
					Существующие источники ресурсообеспечения:
					<li>Электрическая энергия - ПС-500 «Елецкая» </li>
					<li>Газ - ГРС г. Ельца</li>
					<li>Вода - Водозабор «Трубицинский»</li>
				</ul>
				<div class="hren">

					Участок расположен в 93 км от действующей территории ОЭЗ ППТ «Липецк», в 76 км от Липецка и 15 км от Ельца.
				</div>
				<div class="miniGal">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
						<a class="fancybox" href="/upload/iblock/ac2/ac22d710a1a6dc91cd49b36cb7ef7b8c.JPG">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/img1.jpg" title="Описание" >
							<div class="in_galery_foto">
								<div>
									<img src="/bitrix/templates/oez/img/galery_loop.png">
								</div>
							</div>

						</a>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
						<a class="fancybox" href="/upload/iblock/ac2/ac22d710a1a6dc91cd49b36cb7ef7b8c.JPG">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/img2.jpg" title="Описание">
							<div class="in_galery_foto">
								<div>
									<img src="/bitrix/templates/oez/img/galery_loop.png">
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
						<a class="fancybox" href="/upload/iblock/ac2/ac22d710a1a6dc91cd49b36cb7ef7b8c.JPG">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/img1.jpg" title="Описание">
							<div class="in_galery_foto">
								<div>
									<img src="/bitrix/templates/oez/img/galery_loop.png">
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
						<a class="fancybox" href="/upload/iblock/ac2/ac22d710a1a6dc91cd49b36cb7ef7b8c.JPG">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/img1.jpg" title="Описание">
							<div class="in_galery_foto">
								<div>
									<img src="/bitrix/templates/oez/img/galery_loop.png">
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
						<a class="fancybox2 fancybox.iframe" href="https://www.youtube.com/embed/m6Vibr5_ED0">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/video.jpg" title="Видео">
							<div class="in_galery_foto">
								<div>
									<img src="/bitrix/templates/oez/img/play.png">
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
						<a class="fancybox" href="/upload/iblock/ac2/ac22d710a1a6dc91cd49b36cb7ef7b8c.JPG">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/img1.jpg" title="Описание">
							<div class="in_galery_foto">
								<div>
									<img src="/bitrix/templates/oez/img/galery_loop.png">
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>



	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
