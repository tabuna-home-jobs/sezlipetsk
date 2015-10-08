<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карта сайта");
?>
	<div class="main ">
		<section>
			<div class="container">
				<div class="">
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
						<h1><?=$APPLICATION->GetTitle();?></h1>
					</div>
				<?$APPLICATION->IncludeComponent(
					"custom:main.map",
					".default",
					array(
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "36000000",
						"SET_TITLE" => "N",
						"LEVEL" => "3",
						"COL_NUM" => "2",
						"SHOW_DESCRIPTION" => "Y",
						"COMPONENT_TEMPLATE" => ".default"
					),
					false
				);?>
			</div>
		</section>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
