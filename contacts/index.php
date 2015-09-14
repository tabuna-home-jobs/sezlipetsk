<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

	<div class="container">
		<div class="row parent">
			<div class="col-md-6 col-lg-8 col-sm-12 col-xs-12">
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

				<div class="row ">
					<div class="col-md-12 col-lg-4 col-sm-4 col-xs-12 contact_item">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/marker_big.png">

						<div class="contact_item_number">399071, Липецкая область, Грязинский район, ОЭЗ ППТ «Липецк», АДЦ
						</div>
						<!--<div class="contact_item_dopinfo">
							Почтовый адрес: 398908, г. Липецк,<br/> пос. Матырский, а/я 344
						</div>-->
					</div>
					<div class="col-md-12 col-lg-4 col-sm-4 col-xs-12 contact_item">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/marker_big.png">

						<div class="contact_item_number">Т: +7 (4742) 51-51-80,<br/>
						                                 Т: +7 (4742) 51-53-88,<br/>
						                                 Ф: +7 (4742) 51-53-23
						</div>
						<div class="contact_item_dopinfo">

						</div>
					</div>
					<div class="col-md-12 col-lg-4 col-sm-4 col-xs-12 contact_item">
						<div class="contact_item_number">По всем вопросам о проекте
						                                 и получении статуса резидента обращайтесь в управление взаимодействия с инвесторами
						</div>
						<div class="contact_item_dopinfo">
							Т: +7 (4742) 51-53-88, 51-52-43<br/>
							Ф: +7 (4742) 51-53-23
						</div>
					</div>
				</div>
				<div class="p24page_all"><a target="_blank" href="http://admlip.ru/"  class="all">Администрация Липецкой области<span
							class="glyphicon glyphicon-menu-right"></span></a>
					<a class="all" id="contacts_link">Как добраться<span
							class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 hidden-sm hidden-xs img_conatiner">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/map.png">
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-6">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/conf.jpg">
			</div>
			<div class="col-xs-12 col-md-6 conf_main">
				<div class="conf_name"> Видеоконференция</div>
				<div class="conf_descript">
					Особая экономическая зона промышленно-производст
					венного типа «Липецк» создана в соответствии с Постановлением № №782 Правительства Российской Федерации
					от 21 декабря 2005 года на территории Грязинского района Липецкой области.
				</div>
				<div class="conf_buttons">
					<a class="conf_but_main">Подключиться</a>
					<a class="all">Как пользоваться <span
							class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
		</div>
	</div>
<div class="remember_form_main3">
	<div class="remember_form_cell">
		<div class="remember_form">
			<div class="close_r_f_container"><a class="close_r_f"></a></div>


					<img src="<?=SITE_TEMPLATE_PATH?>/img/proezd.jpg" class="proezd" >

		</div>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
