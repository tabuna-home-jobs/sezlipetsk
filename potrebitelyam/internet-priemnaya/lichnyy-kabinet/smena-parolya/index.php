<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Смена пароля");
?>
<div class="main">
	<div class="container">
	<?$APPLICATION->IncludeComponent(
		"custom:system.auth.changepasswd",
		".default",
		Array("SHOW_ERRORS" => "Y")
	);
	?>
		</div>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
