<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О проекте");
?>
	<div class="main container">
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

		<section class="main_blocks margin_top row">
			<div class="col-lg-6 col-md-8 col-xs-12 blocks_left">
				<div class="row">
					<div class="col-xs-12 item_wrap">
						<div class="col-sm-6 col-xs-12 block_item">
							<div class="item_block">
								<a href="http://ros.t198.topaz.fastwebserver.de/test4/output/1_3_1.html" class="item_block_a">
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
											<img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/compas_2.png" />
										</span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 block_item">
							<div class="item_block">
								<a href="rezidenty/" class="item_block_a"><div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name">Резиденты ОЭЗ</div>

									</div>
									<div class="block_icon">
										<span class="item_block_img">
											<img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/people.png"/>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/people_2.png" />
										</span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 item_wrap">
						<div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
							<div class="item_block">
								<a href="veb-kamera/" target="_blank" class="item_block_a_small">
								<!--
								<a href="http://79.140.96.230/view/viewer_index.shtml" target="_blank" class="item_block_a_small">-->
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name smal_item_name">Веб-камера</div>
									</div>
									<div class="block_icon_arrow">
										<span class="glyphicon glyphicon-menu-right"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
							<div class="item_block">
								<a class="item_block_a_small" href="press-relizy/">
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name smal_item_name">Пресс-релизы</div>
									</div>
									<div class="block_icon_arrow">
										<span class="glyphicon glyphicon-menu-right"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-xs-12 col-sm-12 col-md-12 block_item">
							<div class="item_block">
								<a href="galereya-foto-i-video/" class="item_block_a">
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name">
											Галерея фото и видео
										</div>
									</div>
									<div class="block_icon">
                                        <span class="item_block_img">
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/play.png"/>
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/play_2.png" />
                                         </span>
									</div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Последняя новость на главной-->
			<?$APPLICATION->IncludeComponent(
	"custom:news.list", 
	"about_news", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"IBLOCK_TYPE" => "information",
		"IBLOCK_ID" => "13",
		"NEWS_COUNT" => "2",
		"PREVIEW_TRUNCATE_LEN" => "100",
		"COMPONENT_TEMPLATE" => "about_news",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_NAME" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>

		</section>

		<section class="block_citata">
			<div class="row">
				<!--Слайдер цитаты роководителей-->
				<?$APPLICATION->IncludeComponent(
	"custom:news.list", 
	"citate_boss_slider", 
	array(
		"IBLOCK_ID" => "CITATE_BOSS_SLIDER",
		"COMPONENT_TEMPLATE" => "citate_boss_slider",
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "undefined",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>
				<!--Слайдер Цитаты руководителей-->

				<div class="col-md-6">
					<div class="col-md-6 in_page_block">
						<div class="item_block in_page_block">
							<a href="/about/upravlyayushchaya-kompaniya" class="item_block_a"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Управляющая компания</div>
									<div class="item_dop">
										Липецкая область расположена в центральной части европейской территории России, в 370 км к югу от Москвы (расстояние от столицы до областного центра — около 450 км)
									</div>
								</div>
								<div class="block_icon_arrow">
									<span class="glyphicon glyphicon-menu-right"></span>
								</div></a>
						</div>
					</div>
					<div class="col-md-6 in_page_block">
						<div class="item_block in_page_block">
							<a href="/about/raspolozhenie-oez/" class="item_block_a"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Расположение</div>
									<div class="item_dop">
Особая экономическая зона «Липецк» расположена на территории Грязинского муниципального района Липецкой области, в непосредственной близости между городами Липецк и Грязи.
									</div>
								</div>
								<div class="block_icon_arrow">
									<span class="glyphicon glyphicon-menu-right"></span>
								</div></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="">
			<div class="map_container">
				<div class="map_back">
					<div>
						<div><a href="/map/" >Интерактиваня карта</a></div>
					</div>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/maaap.jpg">
			</div>
		</section>
	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>