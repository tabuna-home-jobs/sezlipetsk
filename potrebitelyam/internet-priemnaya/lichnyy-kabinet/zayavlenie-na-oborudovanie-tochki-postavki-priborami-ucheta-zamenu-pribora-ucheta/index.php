<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заявление на оборудование точки поставки приборами учета (замену прибора учета)");
?><div class="main container">
	<div class="col-xs-12 col-md-6">
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
		<div class="scroll-content">
			<div class="">
				<br>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 login_part_right max_height_block">
		 <?$APPLICATION->IncludeComponent(
	"custom:support.form_toconnect",
	"zayavlenie_na_oborudovanie",
	Array(
	)
);?>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>