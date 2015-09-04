<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Социальная инфраструктура ОЭЗ");
?>
	<div class="main">
		<section class="top_block_main">
			<div class="container">
				<div class="row top_block">
					<div class="left_part col-xs-12 col-sm-12 col-md-7">
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

						<div class="ssylki_top">
							<a href="">Липецк</a>
							<a href="">Грязи</a>
							<a href="">Елец</a>
						</div>
						<div class="scrollbar-outer resize_scroll">
							<div class="lin">
								РОСОЭЗ – это масштабный федеральный проект по привлечению инвестиций, передовых научных, производственных и управленческих технологий.
								<br/>
								РОСОЭЗ предоставляют компаниям уникальную возможность использовать все инвестиционные преимущества России, минуя при этом типичные российские проблемы – нерыночные факторы влияния на бизнес и неэффективное администрирование.
								<br/>
								В данном разделе вы найдёте информацию о том, как начать свой бизнес в российских особых экономических зонах.
							</div>
						</div>
					</div>
					<div class="hidden-xs hidden-sm right_part col-xs-12 col-sm-12 col-md-5">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/nigak.png">
					</div>
				</div>
			</div>
		</section>
		<section class="container">

			<div class="row">
				<div class="col-md-6 ">
					<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
						<div class="item_block">
							<a class="item_block_a"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Образование</div>
								</div>
								<div class="block_icon">
                                 <span
	                                 class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(1)white.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(1).png"/>
                                </span>
								</div></a>
						</div>
					</div>
					<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
						<div class="item_block">
							<a class="item_block_a"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Медицина</div>
								</div>
								<div class="block_icon">
                                 <span
	                                 class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(4)white.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(4).png"/>
                                </span>
								</div></a>
						</div>
					</div>

					<div class="col-md-12 col-lg-6 col-xs-12 block_item">
						<div class="item_block">
							<a class="item_block_a"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Полезные ссылки на бизнес-сервисы</div>

								</div>
								<div class="block_icon">
                            <span
	                            class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(5)white.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(5).png"/>
                                </span>
								</div></a>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 col-xs-12 block_item">
						<div class="item_block">
							<a class="item_block_a"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Жилье</div>

								</div>
								<div class="block_icon">
                            <span
	                            class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(7)white.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(7).png"/>
                                </span>
								</div></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 ">
					<div class="col-sm-6 col-xs-6 block_item">
						<div class="item_block hight_item_block">
							<a class="item_block_a"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Культурная среда</div>
									<div class="item_dop">Для получения льгот и преференций компании или частному предпринимателю необходимо получить статус резидента</div>

								</div>
								<div class="block_icon">
                            <span
	                            class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(3)white.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(3).png"/>
                                </span>
								</div></a>
						</div>
					</div>
					<div class="col-sm-6 col-xs-6 block_item">
						<div class="item_block hight_item_block">
							<a class="item_block_a"><div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Отдых и спорт</div>
									<div class="item_dop">Для получения льгот и преференций компании или частному предпринимателю необходимо получить статус резидента</div>

								</div>
								<div class="block_icon">
                                <span class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(2)white.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(2).png"/>
                                </span>
								</div></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
