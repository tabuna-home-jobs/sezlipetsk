<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Смена пароля");
?>
<div class="main">
	<div class="container">
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
		<h1 class="page_h1"><?=$APPLICATION->GetTitle();?></h1>
	<?$APPLICATION->IncludeComponent(
		"custom:system.auth.changepasswd",
		".default",
		Array("SHOW_ERRORS" => "Y")
	);
	?>
		</div>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
