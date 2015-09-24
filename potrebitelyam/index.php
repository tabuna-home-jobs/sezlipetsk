<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetPageProperty("keywords_inner", "Потребителям");
	$APPLICATION->SetPageProperty("title", "Потребителям");
	$APPLICATION->SetTitle("Потребителям");
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
						<p align="JUSTIFY">
							 «ОАО «ОЭЗ ППТ «Липецк» осуществляет строительство и эксплуатацию распределительных сетей электроснабжения, теплоснабжения, газоснабжения, водоснабжения, водоотведения и телекоммуникации на территории ОЭЗ ППТ «Липецк».
						</p>
						<p>
							 В данном разделе вы найдёте информацию порядке присоединения/подключения к сетям ОАО «ОЭЗ ППТ «Липецк», а также информацию о деятельности по передаче электрической энергии, поставке тепловой энергии в горячей воде, поставке питьевой воды, транспортировке сточных вод, транспортировке природного газа и сопутствующих услугах.»
						</p>
					</div>
				</div>
			</div>
			<div class="hidden-xs hidden-sm right_part col-xs-12 col-sm-12 col-md-5">
 <img src="/bitrix/templates/oez/img/sobranie.png">
			</div>
		</div>
	</div>
 </section> <section class="container">
	<div class="row">
		<div class="col-md-6 ">
			<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
				<div class="item_block">
 <a href="/contacts/" class="item_block_a">
					<div class="hover_container">
						<div class="hover">
						</div>
					</div>
					<div class="item_bod">
						<div class="item_name">
							 Контакты сетевой организации
						</div>
					</div>
					<div class="block_icon">
 <span class="item_block_img"> <img src="/bitrix/templates/oez/img/icons/T_11(1)white.png"> <img src="/bitrix/templates/oez/img/icons/T_11(1).png"> </span>
					</div>
 </a>
				</div>
			</div>
			<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
				<div class="item_block">
 <a class="item_block_a" href="/potrebitelyam/territoriya-obsluzhivaniya-setevoy-organizatsii/">
					<div class="hover_container">
						<div class="hover">
						</div>
					</div>
					<div class="item_bod">
						<div class="item_name">
							 Территория обслуживания сетевой организации
						</div>
					</div>
					<div class="block_icon">
 <span class="item_block_img"> <img src="/bitrix/templates/oez/img/icons/T_16(1)white.png"> <img src="/bitrix/templates/oez/img/icons/T_16(1).png"> </span>
					</div>
 </a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
				<div class="item_block">
 <a href="/potrebitelyam/kommercheskiy-uchet/" class="item_block_a_small">
					<div class="hover_container">
						<div class="hover">
						</div>
					</div>
					<div class="item_bod">
						<div class="item_name smal_item_name">
							 Коммерческий учет
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
					 <a class="item_block_a_small" >
							<div class="hover_container">
								<div class="hover"></div>
							</div>
							<div class="item_bod">
								<div class="item_name smal_item_name">Дополнительные услуги</div>
							</div>
							<div class="block_icon_arrow">
								<span class="glyphicon glyphicon-menu-right"></span>
							</div></a>
				</div>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 block_item">
				<div class="item_block">
 <a href="/potrebitelyam/internet-priemnaya/" class="item_block_a">
					<div class="hover_container">
						<div class="hover">
						</div>
					</div>
					<div class="item_bod">
						<div class="item_name">
							 Интернет приемная
						</div>
					</div>
					<div class="block_icon">
 <span class="item_block_img"> <img src="/bitrix/templates/oez/img/icons/T_16(3)white.png"> <img src="/bitrix/templates/oez/img/icons/T_16(3).png"> </span>
					</div>
 </a>
				</div>
			</div>
		</div>
		<div class="col-md-6 ">
			<div class="col-sm-6 col-xs-6 block_item">
				<div class="item_block hight_item_block">
 <a href="/potrebitelyam/tekhnologicheskoe-prisoedinenie-podklyuchenie" class="item_block_a item_block_a_small">
					<div class="hover_container">
						<div class="hover">
						</div>
					</div>
					<div class="item_bod">
						<div class="item_name">
							 Технологическое присоединение / подключение
						</div>
						<div class="item_dop">
						</div>
					</div>
					<div class="block_icon_arrow">
 <span class="glyphicon glyphicon-menu-right"></span>
					</div>
 </a>
				</div>
			</div>
			<div class="col-sm-6 col-xs-6 block_item">
				<div class="item_block hight_item_block">
 <a href="/potrebitelyam/peredacha-transportirovka-snabzhenie-energoresursami/" class="item_block_a item_block_a_small">
					<div class="hover_container">
						<div class="hover">
						</div>
					</div>
					<div class="item_bod">
						<div class="item_name">
							 Передача, транспортировка, снабжение энергоресурсами
						</div>
						<div class="item_dop">
						</div>
					</div>
					<div class="block_icon_arrow">
 <span class="glyphicon glyphicon-menu-right"></span>
					</div>
 </a>
				</div>
			</div>
		</div>
	</div>
 </section>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>