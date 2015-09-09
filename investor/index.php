<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Инвестору");
?><div class="main ">
 <section class="container ">
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
 </section> <section class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>ОЭЗ «Липецк»</h2>
			<div>
				<div>
					 РОСОЭЗ – это масштабный федеральный проект по привлечению инвестиций, передовых научных, производственных и управленческих технологий. РОСОЭЗ предоставляют компаниям уникальную возможность использовать все инвестиционные преимущества России, минуя при этом типичные российские проблемы – нерыночные факторы влияния на бизнес и неэффективное администрирование. В данном разделе вы найдёте информацию о том, как начать свой бизнес в российских особых экономических зонах.
				</div>
				<div class="more_about">
 <a href="/investor/o-regione/" class="all">Подробнее о регионе <span class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
			<div>
				<h3>На территории ОЭЗ расположены:</h3>
				<ul class="red_dotes_ul">
					<li>автомобильные дороги общей площадью 145,3 тыс. м2 и протяженностью 10,45 км; </li>
					<li>стоянки для большегрузного (на 157 автомобилей) и легкового автотранспорта; </li>
					<li>7,063 км железнодорожных путей, которые соединены с ж/д станцией «Казинка». </li>
				</ul>
			</div>
		</div>
		<div class="col-md-6">
			<h2>Логистическая инфрастрктура</h2>
			<div>
				 Общая площадь территории особой экономической зоны — 1024 га.
			</div>
			<div class="row transport_block">
				<div class="col-xs-12 col-sm-6">
					<div class="transport_block_item">
						<div>
 <img src="/bitrix/templates/oez/img/airplane.png">
						</div>
						<h3>Воздушное сообщение</h3>
						<div>
							 В 35 км от ОЭЗ расположен аэропорт «Липецк», способный принимать самолеты любого класса.
						</div>
					</div>
					<div class="transport_block_item">
						<div>
 <img src="/bitrix/templates/oez/img/car.png">
						</div>
						<h3>Автомобильное сообщение</h3>
						<div>
							 М-4 «Дон» - до трассы 70 км;<br>
							 М-6 «Каспий» - до трассы 85 км;<br>
							 Орел-Тамбов – до трассы 16 км.<br>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="transport_block_item">
						<div>
 <img src="/bitrix/templates/oez/img/train.png">
						</div>
						<h3>Железнодорожное сообщение</h3>
						<div>
							 В районе создания ОЭЗ функционируют два железнодорожных вокзала: ст.Липецк (20км.) и ст. Грязи-Воронежские (18км).
						</div>
						<div>
							<ul class="red_dotes_ul">
								<div>
									 Ближайшие Ж/Д станции:
								</div>
								<li>ж/д станция «Казинка» (0,2 км);</li>
								<li>ж/д станция «Грязи-Орловские» (8 км).</li>
								<li>ж/д пути ОЭЗ «Липецк» соединены с ж/д станцией «Казинка». </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 </section> <section class="container">
	<div class="map_container">
		<div class="map_back">
			<div>
				<div>
 <a class="map_link" href="/map/">Интерактиваня карта</a>
				</div>
			</div>
		</div>
 <img src="/bitrix/templates/oez/img/maaap.jpg">
	</div>
 </section> <section class="container">
	<div>
		<h2>Преимущества ОЭЗ «Липецк»</h2>
	</div>
	<div class="row">
		<div class="col-md-6 ">
			<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
				<div class="item_block">
					 <a class="item_block_a" >
								<div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Льготное предоставление земельных участков</div>
								</div>
								<div class="block_icon">
                                <span class="item_block_img">
                                      <img src="/bitrix/templates/oez/img/icons/T_12(1)white.png" data-bx-app-ex-src="#BXAPP4#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_12(1)white.png">
                                      <img src="/bitrix/templates/oez/img/icons/T_12(1).png" data-bx-app-ex-src="#BXAPP5#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_12(1).png">
                                </span>
								</div>
							</a>
				</div>
			</div>
			<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
				<div class="item_block">
					 <a class="item_block_a" >
								<div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Презентации
									                       для загрузки
									</div>
								</div>
								<div class="block_icon">
                                 <span class="item_block_img">
                                      <img src="/bitrix/templates/oez/img/icons/T_12(2)white.png" data-bx-app-ex-src="#BXAPP6#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_12(2)white.png">
                                      <img src="/bitrix/templates/oez/img/icons/T_12(2).png" data-bx-app-ex-src="#BXAPP7#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_12(2).png">
                                </span>
								</div>
							</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
				<div class="item_block">
					 <a href="/investor/nalogovye-lgoty/" class="item_block_a_small" >
								<div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name smal_item_name">Налоговые
									                                      льготы
									</div>
								</div>
								<div class="block_icon_arrow">
									<span class="glyphicon glyphicon-menu-right"></span>
								</div>
							</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
				<div class="item_block">
					 <a href="/investor/tamozhennye-lgoty/"" class="item_block_a_small" >
								<div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name smal_item_name">Таможенные льготы</div>
								</div>
								<div class="block_icon_arrow">
									<span class="glyphicon glyphicon-menu-right"></span>
								</div>
							</a>
				</div>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 block_item">
				<div class="item_block">
					 <a class="item_block_a" >
								<div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Услуги для резидентов</div>
								</div>
								<div class="block_icon">
                            <span class="item_block_img">
                                      <img src="/bitrix/templates/oez/img/icons/T_12(3)white.png" data-bx-app-ex-src="#BXAPP8#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_12(3)white.png">
                                      <img src="/bitrix/templates/oez/img/icons/T_12(3).png" data-bx-app-ex-src="#BXAPP9#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_12(3).png">
                                </span>
								</div>
							</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 ">
			<div class="col-sm-6 col-xs-6 block_item col-md-12 col-lg-6">
				<div class="item_block hight_item_block">
					 <a class="item_block_a" >
								<div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Законодательство</div>
									<div class="item_dop">
										Липецкая область расположена в центральной части европейской территории России, в
										370 км к югу от Москвы
									</div>
								</div>
								<div class="block_icon">
                            <span class="item_block_img">
                                      <img src="/bitrix/templates/oez/img/icons/T_12(4)white.png" data-bx-app-ex-src="#BXAPP10#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_12(4)white.png">
                                      <img src="/bitrix/templates/oez/img/icons/T_12(4).png" data-bx-app-ex-src="#BXAPP11#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_12(4).png">
                                </span>
								</div>
							</a>
				</div>
			</div>
			<div class="col-sm-6 col-xs-6 col-md-12 col-lg-6 block_item">
				<div class="item_block hight_item_block">
					 <a class="item_block_a" >
								<div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">
										Перспективы
										расширения
										территории
									</div>
									<div class="item_dop">
										Липецкая область расположена в центральной части европейской территории России, в
										370 км к югу от Москвы
									</div>

								</div>
								<div class="block_icon">
                            <span class="item_block_img">
                                      <img src="/bitrix/templates/oez/img/icons/T_12(5)white.png" data-bx-app-ex-src="#BXAPP12#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_12(5)white.png">
                                      <img src="/bitrix/templates/oez/img/icons/T_12(5).png" data-bx-app-ex-src="#BXAPP13#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_12(5).png">
                                </span>
								</div>
							</a>
				</div>
			</div>
		</div>
	</div>
 </section> <section class="container how_to_be_resident">
	<h2>Как стать резидентом</h2>
	<div class="row">
		<div class="col-xs-7 row">
			<div class="col-xs-12 col-sm-4 ">
				<div class="how_to_be_resident_heder">
					 1
				</div>
				<div>
					 Регистрация юридического лица в границах муниципального образования, где расположена ОЭЗ
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="how_to_be_resident_heder">
					 2
				</div>
				<div>
					 Подача комплекта заявочной документации в Министерство экономического развития РФ:
					<ul class="red_dotes_ul">
						<li>заявление,</li>
						<li>бизнес-план,</li>
						<li>учредительные документы</li>
					</ul>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="how_to_be_resident_heder">
					 3
				</div>
				<div>
					 Рассмотрение проекта Наблюдательным советом ОЭЗ под председательством главы региона
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-5 row">
			<div class="col-sm-6">
				<div class="how_to_be_resident_heder">
					 4
				</div>
				<div>
					 Рассмотрение проекта Экспертным советом ОЭЗ при Министерстве экономического развития РФ
				</div>
			</div>
			<div class="col-sm-6">
				<div class="how_to_be_resident_heder">
					 5
				</div>
				<div>
					 Подписание Инвестиционного Соглашения
				</div>
			</div>
		</div>
	</div>
 </section> <section class="infrastructure">
	<div class="container">
		<div class="infrastructure_heder">
			<h1>Инфраструктурное обеспечение </h1>
			 24-26 февраля 2015 года особую экономическую зону «Липецк» посетила делегация американской компании «Кемин Индастриз»<br>
			 во главе с её Президентом по Региону Европа/Ближний Восток и Африка г-ном Джоном Спрингейтом.
		</div>
		<div class="row">
			<div class="col-md-6">
 <a href="/investor/promyshlennaya-infrastruktura-oez/" class="inform_item_a">
				<div class="inform_item row">
					<div class="col-xs-6 inform_text">
						<div class="small_text">
							 а так же
						</div>
						 Промышленная<br>
						 инфраструктура <br>
						 ОЭЗ
					</div>
					<div class="col-xs-6 inform_img">
						<div class="block_icon_arrow">
 <span class="glyphicon glyphicon-menu-right"></span>
						</div>
 <img src="/bitrix/templates/oez/img/inform.jpg">
					</div>
				</div>
 </a>
			</div>
			<div class="col-md-6">
 <a href="/investor/sotsialnaya-infrastruktura-oez/" class="inform_item_a">
				<div class="inform_item row">
					<div class="col-xs-6 inform_text">
						<div class="small_text">
							 а так же
						</div>
						 Социальная <br>
						 инфраструктура <br>
						 региона
					</div>
					<div class="col-xs-6 inform_img">
						<div class="block_icon_arrow">
 <span class="glyphicon glyphicon-menu-right"></span>
						</div>
 <img src="/bitrix/templates/oez/img/inform.jpg">
					</div>
				</div>
 </a>
			</div>
		</div>
	</div>
 </section>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>