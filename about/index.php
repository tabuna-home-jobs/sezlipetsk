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
											<img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/compas_2.png" />
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
								<a class="item_block_a_small">
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name smal_item_name">Веб-камера</div>
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
										<div class="item_name smal_item_name">Пресс-релизы</div>
									</div>
									<div class="block_icon_arrow">
										<span class="glyphicon glyphicon-menu-right"></span>
									</div></a>
							</div>
						</div>
						<div class="col-lg-6 col-xs-12 col-sm-12 col-md-12 block_item">
							<div class="item_block">
								<a class="item_block_a">
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name">Галерея фото
										                       и видео</div>
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
				Array(
					"DISPLAY_DATE" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"IBLOCK_TYPE" => "news",
					"IBLOCK_ID" => "infoportal_news_s1",
					"NEWS_COUNT" => "2",
					"PREVIEW_TRUNCATE_LEN" => "100",
				)
			);?>
			<!--Последняя новость на главной-->


			<!--<<div class="col-md-6 col-sm-12 col-xs-12 block_news">
				<div class="news_name">Новости<a class="all">Все новости <span
							class="glyphicon glyphicon-menu-right"></span></a></div>
				<div class="row">

					-<div class="news_item col-md-6 row">
						<div class="col-md-12 col-sm-6 col-xs-12 news_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/news.jpg"></div>
						<div class="col-md-12 col-sm-6 col-xs-12 news_text">
							<div class="news_date">26 февраля 2015</div>
							<div class="text_news">Руководство компании «Кемин Индастриз» рассматривает возможность размещения предприятия...</div>
						</div>
					</div>
					<div class="news_item col-md-6 row">
						<div class="col-md-12 col-sm-6 col-xs-12 news_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/news.jpg"></div>
						<div class="col-md-12 col-sm-6 col-xs-12 news_text">
							<div class="news_date">26 февраля 2015</div>
							<div class="text_news">Руководство компании «Кемин Индастриз» рассматривает возможность размещения предприятия...</div>
						</div>
					</div>
				</div>
			</div>-->
		</section>

		<section class="block_citata">
			<div class="row">
				<div class="col-md-6 citata">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/citata.png" alt="...">

							</div>
							<div class="item">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/citata.png" alt="...">

							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-6 in_page_block">
						<div class="item_block in_page_block">
							<a class="item_block_a"><div class="hover_container">
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
							<a class="item_block_a"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Расположение</div>
									<div class="item_dop">
										Липецкая область расположена в центральной части европейской территории России, в 370 км к югу от Москвы (расстояние от столицы до областного центра — около 450 км)
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
						<div><a>Интерактиваня карта</a></div>
					</div>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/maaap.jpg">
			</div>
		</section>
	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
