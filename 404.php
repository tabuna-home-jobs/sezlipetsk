<?

/**
 * тестовая данная хахаххахах
 */


include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Страница не найдена");

?>
<div class="main ">
	<section>
		<div class="container">
			<div class="">
				<h1><?=$APPLICATION->GetTitle();?></h1>
				Возможно она была перемещена или удалена
				<br>
			</div>
			<br>

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


<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
