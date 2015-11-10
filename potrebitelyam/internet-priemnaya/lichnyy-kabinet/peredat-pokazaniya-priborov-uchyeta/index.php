<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Передать показания приборов учёта");
?>
	<div class="main container">
		<div class="col-xs-12 col-md-6">
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
			<h1>Передать показания приборов учёта</h1>

			<div class="scrollbar-outer">
				


			</div>
		</div>
		<div class="col-xs-12 col-md-6 login_part_right max_height_block">
			<div class="login_form_container padding_block">
				<div class="row login_form_heder">
					<a href="#login_panel" id="electro-tab1" role="tab" class="login_punct active_login_punkt"
					   data-toggle="tab"
					   aria-controls="login_panel"
					   aria-expanded="true">Передать показания приборов учёта</a>
					<!--<a href="#registration_panel" id="electro-tab2" role="tab" data-toggle="tab" class="login_punct"
					   aria-controls="registration_panel" aria-expanded="true">ЖАЛОБА</a>-->
				</div>
				<div id="main_content_tabs" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="login_panel">
						<?$APPLICATION->IncludeComponent(
							"custom:support.form_toconnect",
							"peredat_pokaz",
							Array(
							)
						);
						?>
					</div>

				</div>
			</div>
		</div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
