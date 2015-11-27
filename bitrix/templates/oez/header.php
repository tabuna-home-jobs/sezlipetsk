<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?$APPLICATION->ShowTitle();?></title>
	<?$APPLICATION->ShowMeta("description")?>
	<?$APPLICATION->ShowMeta("keywords")?>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
	<link href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet">
	<link href="<?=SITE_TEMPLATE_PATH?>/slick/slick.css" rel="stylesheet" type="text/css"/>
	<link href="<?=SITE_TEMPLATE_PATH?>/slick/slick-theme.css" rel="stylesheet" type="text/css"/>
	<?$APPLICATION->ShowHead();?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery-2.1.4.min.js');?>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.slimscroll.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/slick/slick.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/app.js"></script>
	<link href="<?=SITE_TEMPLATE_PATH?>/js/jquery.scrollbar.css" rel="stylesheet">
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.scrollbar.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.fancybox.css?v=2.1.5" media="screen" />
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<script type="text/javascript">


	//Подставка локали для сайта
	/*function action_lang(lang){

		var domain = window.location.hostname;
		var path = window.location.pathname;

		window.location.href = "http://" + domain + "/" + lang + path;

	}

	$(document).ready(function(){
		$("a.rus_eng").click(function(){
			var obj = $(this);
			var lang = obj.attr("data-value");

			(lang == 'ru') ? action_lang('') : action_lang(lang);

		});
	});
	*/
	function action_lang(lang){

		var domain = window.location.hostname;
		var path = window.location.pathname;

		if(lang == '') {
			var trimPath = path.replace('/en','');
			window.location.href = "http://sezlipetsk.ru"  + trimPath;
		}else{
			window.location.href = "http://sezlipetsk.com/en" + path;
		}


	}

	$(document).ready(function(){
		$("a.rus_eng").click(function(){
			var obj = $(this);
			var lang = obj.attr("data-value");

			(lang == 'ru') ? action_lang('') : action_lang(lang);

		});
	});


</script>
<body>
<?$APPLICATION->ShowPanel();?>
<header class="">
	<div class="container">
		<div class="col-lg-5 logo col-md-6 col-sm-12 col-xs-12">
			<div class="col-md-3 col-xs-12 logo_img">
				<a href="/">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="Особая Экономическая Зона" title="Особая Экономическая Зона">
				</a>
			</div>
			<div class="col-md-9 col-xs-12 logo_text">
				Федеральная особая экономическая зона промышленно-производственного типа «Липецк»
			</div>
		</div>
		<div class="col-lg-7 navig col-md-6 col-sm-12 col-xs-12">
			<!--Верхнее меню-->
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"horizontal_multilevel",
				Array(
					"COMPONENT_TEMPLATE" => "oez",
					"ROOT_MENU_TYPE" => "top",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => array(""),
					"MAX_LEVEL" => "1",
					"CHILD_MENU_TYPE" => "left",
					"USE_EXT" => "N",
					"DELAY" => "N",
					"ALLOW_MULTI_SELECT" => "N"
				)
			);?>
			<!--Верхнее меню-->
		</div>
	</div>
</header>

