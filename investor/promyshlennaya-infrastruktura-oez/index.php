<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle(" Промышленная инфраструктура ОЭЗ");
?><div class="main ">
 <section class="top_block_main">
	<div class="container">
		<div class="row top_block">
			<div class="left_part col-xs-12 col-sm-12 col-md-7">
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
				<div class="scrollbar-outer resize_scroll">
					<div class="lin">
						<p align="justify">
							 В настоящий момент на территории ОЭЗ ППТ «Липецк» введены в эксплуатацию следующие объекты инженерной инфраструктуры:
						</p>
						<ul>
							<li>
							<p align="justify">
								 сети электроснабжения:
							</p>
 </li>
						</ul>
						<p align="justify">
							 - ПС 110/10/10 кВ - 1 шт.;
						</p>
						<p align="justify">
							 - РП - 2 шт.;
						</p>
						<p align="justify">
							 - БКТП 10/0,4 кВ - 8 шт.;
						</p>
						<p align="justify">
							 - ЛЭП-0,4-110 кВ – 76,563 км;
						</p>
						<ul>
							<li>
							<p align="justify">
								 сети освещения - 27,26 км;
							</p>
 </li>
							<li>
							<p align="justify">
								 сети теплоснабжения – 8,32 км;
							</p>
 </li>
							<li>
							<p align="justify">
								 сети газоснабжения - ГРП - 2 шт., газопровод - 7,805 км;
							</p>
 </li>
							<li>
							<p align="justify">
								 сети водоснабжения – 34,38 км. (внутри и внеплощадочной сети);
							</p>
 </li>
							<li>
							<p align="justify">
								 сети водоотведения – 8,16 км. (внутри и внеплощадочной сети);
							</p>
 </li>
							<li>
							<p align="justify">
								 сети ливневой канализации с очистными сооружениями – 14,87 км;
							</p>
 </li>
							<li>
							<p align="justify">
								 сеть автодорог, тротуаров, стоянок, площадок – 292 237,14 кв.м.;
							</p>
 </li>
							<li>
							<p align="justify">
								 административно-деловые здания – 7053,7 кв.м.;
							</p>
 </li>
							<li>
							<p align="justify">
								 сеть подъездных железнодорожных путей – 11,563 км.
							</p>
 </li>
							<li>
							<p align="justify">
								 сети телекоммуникаций – 62,28 км (внеплощадочные и подводящие сети);
							</p>
 </li>
							<li>
							<p align="justify">
								 объекты таможенной инфраструктуры I очереди.
							</p>
 </li>
							<li>
							<p align="justify">
								 производственная база.
							</p>
 </li>
							<li>
							<p align="justify">
								 ограждение территории – 15,149 км.
							</p>
 </li>
						</ul>
					</div>
				</div>
			</div>
			<div class="hidden-xs hidden-sm right_part col-xs-12 col-sm-12 col-md-5">
 <img src="/bitrix/templates/oez/img/oregione.png">
			</div>
		</div>
	</div>
 </section> <section class="container">
	<div class="row row_margin">
		<div class="col-md-6 ">
			<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
				<div class="item_block">
 <a class="item_block_a" href="/map/#net-electro">
					<div class="hover_container">
						<div class="hover">
						</div>
					</div>
					<div class="item_bod">
						<div class="item_name">
							 Электроснабжение
						</div>
					</div>
					<div class="block_icon">
 <span class="item_block_img"> <img src="/bitrix/templates/oez/img/icons/T_14(1)white.png"> <img src="/bitrix/templates/oez/img/icons/T_14(1).png"> </span>
					</div>
 </a>
				</div>
			</div>
<<<<<<< HEAD
			<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
				<div class="item_block">
 <a class="item_block_a" href="/map/#net-hot">
					<div class="hover_container">
						<div class="hover">
=======
		</section>
		<section class="container over">

			<div class="row row_margin">
				<div class="col-md-6 ">
					<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
						<div class="item_block">
							<a class="item_block_a" href="/map/#net-electro">
								<div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Электроснабжение</div>
								</div>
								<div class="block_icon">
                                <span
	                                class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_14(1)white.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_14(1).png"/>
                                </span>
								</div>
							</a>
>>>>>>> origin/master
						</div>
					</div>
					<div class="item_bod">
						<div class="item_name">
							 Теплоснабжение
						</div>
					</div>
					<div class="block_icon">
 <span class="item_block_img"> <img src="/bitrix/templates/oez/img/icons/T_14(4)white.png"> <img src="/bitrix/templates/oez/img/icons/T_14(4).png"> </span>
					</div>
 </a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
				<div class="item_block">
 <a class="item_block_a_small" href="/map/#water-net">
					<div class="hover_container">
						<div class="hover">
						</div>
					</div>
					<div class="item_bod">
						<div class="item_name smal_item_name">
							 Водоснабжение
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
 <a class="item_block_a_small" href="/map/#net-abduction">
					<div class="hover_container">
						<div class="hover">
						</div>
					</div>
					<div class="item_bod">
						<div class="item_name smal_item_name">
							 Водоотведение
						</div>
					</div>
					<div class="block_icon_arrow">
 <span class="glyphicon glyphicon-menu-right"></span>
					</div>
 </a>
				</div>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 block_item">
				<div class="item_block">
 <a class="item_block_a" href="/map/#net-gaz">
					<div class="hover_container">
						<div class="hover">
						</div>
					</div>
<<<<<<< HEAD
					<div class="item_bod">
						<div class="item_name">
							 Газоснабжение
						</div>
					</div>
					<div class="block_icon">
 <span class="item_block_img"> <img src="/bitrix/templates/oez/img/icons/T_17(1)white.png"> <img src="/bitrix/templates/oez/img/icons/T_17(1).png"> </span>
					</div>
 </a>
				</div>
			</div>
		</div>
		<div class="col-md-6 ">
			<div class="col-sm-6 col-xs-12 col-md-12 col-lg-6 block_item">
				<div class="item_block hight_item_block">
 <a class="item_block_a" href="/map/#net-tele">
					<div class="hover_container">
						<div class="hover">
						</div>
					</div>
					<div class="item_bod">
						<div class="item_name">
							 Телекоммуникации
						</div>
						<div class="item_dop">
							 Для получения льгот и преференций компании или частному предпринимателю необходимо получить статус резидента
						</div>
					</div>
					<div class="block_icon">
 <span class="item_block_img"> <img src="/bitrix/templates/oez/img/icons/T_14(3)white.png"> <img src="/bitrix/templates/oez/img/icons/T_14(3).png"> </span>
					</div>
 </a>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12 col-md-12 col-lg-6 block_item">
				<div class="item_block hight_item_block">
					 <a class="item_block_a" >
=======
					<div class="col-sm-6 col-xs-12 col-md-12 col-lg-6 block_item">
						<div class="item_block hight_item_block">
							<a class="item_block_a" href="/potrebitelyam/tekhnologicheskoe-prisoedinenie-podklyuchenie/"  >
>>>>>>> origin/master
								<div class="hover_container">
									<div class="hover"></div>
								</div>
								<div class="item_bod">
									<div class="item_name">Информация об условиях технологического присоединения</div>
									<div class="item_dop">
										Для получения льгот и преференций компании или частному предпринимателю необходимо
										получить статус резидента
									</div>
								</div>
								<div class="block_icon">
                             <span class="item_block_img">
                                      <img src="/bitrix/templates/oez/img/icons/T_14(1)white.png" data-bx-app-ex-src="#BXAPP9#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_14(1)white.png">
                                      <img src="/bitrix/templates/oez/img/icons/T_14(1).png" data-bx-app-ex-src="#BXAPP10#" data-bx-orig-src="/bitrix/templates/oez/img/icons/T_14(1).png">
                                </span>
								</div>
							</a>
				</div>
			</div>
		</div>
	</div>
 </section>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
