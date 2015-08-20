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
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-2.1.4.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.slimscroll.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/slick/slick.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/app.js"></script>
	<link href="<?=SITE_TEMPLATE_PATH?>/js/jquery.scrollbar.css" rel="stylesheet">
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.scrollbar.js"></script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<header class="">
	<div class="container">
		<div class="col-lg-5 logo col-md-6 col-sm-12 col-xs-12">
			<div class="col-md-3 col-xs-12 logo_img">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png">
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
<!--Слайдер-->
	<?$APPLICATION->IncludeComponent(
		"custom:news.list",
		"",
		Array(
			"IBLOCK_ID" => "MAIN_SLIDER"
		)
	);?>
<!--Слайдер-->
<div class="main container">


	<section class="main_blocks row">
		<div class="col-lg-6 col-md-8 col-xs-12 blocks_left">
			<div class="row">
				<div class="col-xs-12 item_wrap">
					<div class="col-sm-6 col-xs-12 block_item">
						<div class="item_block"><a class="item_block_a">
								<div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Виртуальный тур</div>
									<div class="item_dop">по ОЭЗ ППТ «Липецк»</div>
								</div>
								<div class="block_icon">
                            <span class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/compas.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/compas_2.png"/>
                                </span>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-xs-12 block_item">
						<div class="item_block">
							<a class="item_block_a"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Резиденты ОЭЗ</div>

								</div>
								<div class="block_icon">
                            <span class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/people.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/people_2.png"/>
                                </span>
								</div></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 item_wrap">
					<div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
						<div class="item_block">
							<a class="item_block_a_small">
								<div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name smal_item_name">Расположение</div>
								</div>
								<div class="block_icon_arrow">
									<span class="glyphicon glyphicon-menu-right"></span>
								</div></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
						<div class="item_block">
							<a class="item_block_a_small"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name smal_item_name">Управляющая компания</div>
								</div>
								<div class="block_icon_arrow">
									<span class="glyphicon glyphicon-menu-right"></span>
								</div></a>
						</div>
					</div>
					<div class="col-lg-6 col-xs-12 col-sm-12 col-md-12 block_item">
						<div class="item_block">
							<a class="item_block_a"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Стать резидентом</div>
								</div>
								<div class="block_icon">
                                 <span class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/people_plus.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/people_plus_2.png"/>
                                </span>
								</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 block_news">
			<div class="news_name">Новости<a class="all">Все новости <span
						class="glyphicon glyphicon-menu-right"></span></a></div>
			<div class="row">
				<div class="col-md-12 col-sm-6 col-xs-12 news_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/news.jpg"></div>
				<div class="col-md-12 col-sm-6 col-xs-12 news_text">
					<div class="news_date">26 февраля 2015</div>
					<div class="text_news">Руководство компании «Кемин Индастриз» рассматривает возможность размещения
					                       предприятия...
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 row block_stats">
			<div class="col-xs-12 news_name">Целевые показатели роста</div>
			<div class="col-xs-12 pokazateli"><div class="col-sm-6 col-xs-12 col-md-12 stat_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/stat.jpg"></div>
				<div class="col-sm-6 col-xs-12 col-md-12 stat_descript">
					<ul>
						<li><img src="<?=SITE_TEMPLATE_PATH?>/img/black_dot.png">реализация 1-го этапа проекта в Грязинском районе</li>
						<li><img src="<?=SITE_TEMPLATE_PATH?>/img/red_dot.png">после реализации 2-го этапа в Елецком районе</li>
					</ul>
				</div></div>
		</div>
	</section>

	<section class="partners">
		<div class="partners_name">
			<div>
				<h2>Нам доверяют мировые лидеры</h2>
				<a class="all">Все резиденты <span
						class="glyphicon glyphicon-menu-right"></span></a>
			</div>
		</div>


		<div class="slider_partners">
			<div><div class="partners_p"></div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/1.jpg"></a></div>
			<div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/2.jpg"></a></div>
			<div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/3.jpg"></a></div>
			<div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/4.jpg"></a></div>
			<div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/2.jpg"></a></div>
			<div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/1.jpg"></a></div>
			<div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/1.jpg"></a></div>
			<div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/2.jpg"></a></div>
			<div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/3.jpg"></a></div>
			<div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/4.jpg"></a></div>
			<div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/2.jpg"></a></div>
			<div><a><img src="<?=SITE_TEMPLATE_PATH?>/img/1.jpg"></a></div>
		</div>
	</section>

</div>
