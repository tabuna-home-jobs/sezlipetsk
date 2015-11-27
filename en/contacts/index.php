<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Contacts");
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

						<div class="contact_item_number">Lipetsk, town Matirsky,<br/>
						                                 st. Morshanskaya, 4-a

							<br>

						                                                   GPS N52031.021’ E39048.154’
						</div>
					</div>
					<div class="col-md-12 col-lg-4 col-sm-4 col-xs-12 contact_item">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/marker_big.png">

						<div class="contact_item_number">Phone: +7 (4742) 51-51-80,<br/>
						                                 Phone: +7 (4742) 51-51-80,<br/>
						                                 Fax: +7 (4742) 51-51-95
						</div>
						<div class="contact_item_dopinfo">
12333123 45345 354 35 345 4534 5
						</div>
					</div>
					<div class="col-md-12 col-lg-4 col-sm-4 col-xs-12 contact_item">
						<div class="contact_item_number">
							For any questions about the project and obtain resident status , please contact the Investor Relations Management
						</div>
						<div class="contact_item_dopinfo">
							Phone: +7 (4742) 51-53-88, 51-52-43<br/>
							Fax: +7 (4742) 51-53-23
						</div>
					</div>
				</div>
				<div class="p24page_all"><a class="all" target="_blank" href="http://admlip.ru/" >Administration of Lipetsk region<span
							class="glyphicon glyphicon-menu-right"></span></a>
					<a class="all" id="contacts_link">Getting there<span
							class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 hidden-sm hidden-xs img_conatiner">
				<a href="https://maps.yandex.ru/?text=Здание%20управления%20ОЭЗ%20Липецк&ll=39.802383%2C52.516769&z=15" target="_blank"><img src="<?=SITE_TEMPLATE_PATH?>/img/contaktmap.jpg"></a>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-6">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/conf.jpg">
			</div>
			<div class="col-xs-12 col-md-6 conf_main">
				<div class="conf_name"> Videoconferencing</div>
				<div class="conf_descript">
					Special economic zone of industrial produc
					vennogo type "Lipetsk" established in accordance with the Decree № №782 of the Government of the Russian Federation
					of 21 December 2005 on the territory Griazinsky district of Lipetsk region .
				</div>
				<div class="conf_buttons">
					<a class="conf_but_main">Connect</a>
					<a class="all">How to use <span
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
