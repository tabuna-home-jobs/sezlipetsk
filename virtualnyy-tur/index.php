<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Виртуальный тур");
	if($_GET["tour"] != 'adc'){
		$src = 'http://ros.t198.topaz.fastwebserver.de/aero/aero/aero_out.html';
	}else{
		$src = 'http://ros.t198.topaz.fastwebserver.de/adc/adc/adc.html';
	}
?>

<iframe src="<?=$src?>" width="100%" height="500px" allowfullscreen>
	</iframe>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
