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
						</div>
						<div class="contact_item_dopinfo">
							Mail address: 398908, Lipetsk,<br/> town Matirsky, a/ay 344
						</div>
					</div>
					<div class="col-md-12 col-lg-4 col-sm-4 col-xs-12 contact_item">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/marker_big.png">

						<div class="contact_item_number">Phone: +7 (4742) 51-51-80,<br/>
						                                 Fax: +7 (4742) 51-51-95
						</div>
						<div class="contact_item_dopinfo">

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
				<div class="p24page_all"><a class="all">Administration of Lipetsk region<span
							class="glyphicon glyphicon-menu-right"></span></a>
					<a class="all">Getting there<span
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
