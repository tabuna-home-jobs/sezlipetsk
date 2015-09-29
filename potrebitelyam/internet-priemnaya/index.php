<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-приемная");
?><div class="main">
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
						<p>
							 В&nbsp;нашей Интернет-приемной Вы&nbsp;можете получить ответы на&nbsp;вопросы, касающиеся деятельности нашей организации, высказать своё мнение о&nbsp;нашей работе и воспользоваться услугой «личный кабинет».
						</p>
					</div>
				</div>
			</div>
			<div class="hidden-xs hidden-sm right_part col-xs-12 col-sm-12 col-md-5">
 <img src="/bitrix/templates/oez/img/notebook.png">
			</div>
		</div>
	</div>
 </section> <section class="container section_cabinet_block">
	<div class="row">
		<div class="col-xs-12 col-md-6 ">
			<div class="cabinet_block">
				<div class="row cabinet_block_heder">
					<div class="col-xs-12 col-md-6 cabinet_block_name">
						<h3>Личный кабинет</h3>
					</div>
					<div class="col-xs-12 col-md-6 cabinet_block_vhod">
						 <?
									//Если зареган то покажем только вход
									if ($USER->IsAuthorized()){
								?> <a href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/">
						ВХОД <span class="glyphicon glyphicon-menu-right"></span> </a>
						<?
									//Если не зарегистрирован то выводим обе кнопочки
									}else{
								?> <a href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/">
						ВХОД <span class="glyphicon glyphicon-menu-right"></span> </a> <a href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/#registration">РЕГИСТРАЦИЯ</a>
						<?
									}
								?>
					</div>
				</div>
				<div class="cabinet_block_links">
					<div>
 <a href="#" id="remember_pass_LK">Порядок работы в ЛК</a>
						<div class="remember_form_main_LK">
							<div class="remember_form_cell">
								<div class="remember_form">
									<div class="close_r_f_container">
										 <a class="close_r_f" ></a>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="r_f_heder">
												 Порядок работы в ЛК
											</div>
										</div>
									</div>
									<div>
										<div class="col-xs-12 form_descript">
											 При создании генератора мы использовали небезызвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия. По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых клиентов недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						 <a id="remember_pass" >Подать заявку на оказание услуг</a>
					</div>
					<div class="remember_form_main">
						<div class="remember_form_cell">
							<div class="remember_form">
								<div class="close_r_f_container">
									 <a class="close_r_f" ></a>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="r_f_heder">
											 Выберите вариант заявки
										</div>
									</div>
								</div>
								<div row="">
									<div class="col-xs-12">
										<div class="oval_links_container">
											 <a class="oval_links"
												 <?if ($USER->IsAuthorized()){?>
                                                    href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/zayavka-na-prisoedinenie/"
											     <?}else{?>
													 href ="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/"
												 <?}?>
												 ><span>Заявка на технологическое присоединение к сетям электроснабжения до 150 кВт. <span class="star_red">*</span></span></a>
											<div class="clear"></div>
											<a class="oval_links"
												<?if ($USER->IsAuthorized()){?>
													href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/zayavka-na-prisoedinenie-vremennoe/"
												<?}else{?>
                                               href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/"
												<?}?>
												><span>Заявка на временное технологическое присоединение к сетям электроснабжения<span class="star_red">**</span> </span></a>

											<a class="oval_links"
												<?if ($USER->IsAuthorized()){?>
													href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/zayavka-o-neobkhodimosti-snyatiya-pokazaniy-sushchestvuyushchego-pribora-ucheta/"
												<?}else{?>
													href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/"
												<?}?>
												><span>Заявка о необходимости снятия показаний существующего прибора учета </span></a>

											<a class="oval_links"
												<?if ($USER->IsAuthorized()){?>
													href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/zayavka-na-osushchestvlenie-dopuska-v-ekspluatatsiyu-pribora-ucheta-elektricheskoy-energii/"
												<?}else{?>
													href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/"
												<?}?>
												><span>Заявка на осуществление допуска в эксплуатацию прибора учета электрической энергии</span></a>

											<a class="oval_links"
												<?if ($USER->IsAuthorized()){?>
													href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/zayavlenie-na-oborudovanie-tochki-postavki-priborami-ucheta-zamenu-pribora-ucheta/"
												<?}else{?>
													href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/"
												<?}?>
												><span>Заявление на оборудование точки поставки приборами учета (замену прибора учета)</span></a>
										</div>
									</div>
									<div class="col-xs-12 form_descript">
 <span class="star_red">*</span> Форма заявки для юридических лиц или индивидуальных предпринимателей, максимальная мощность энергопринимающих устройств которых составляет до 150кВт включительно (с учетом ранее присоединенных в данной точке присоединения энергопринимающих устройств) по одному источнику электроснабжения.
									</div>
									<div class="col-xs-12 form_descript">
 <span class="star_red">*</span><span class="star_red">*</span> Форма заявки для заявителей в целях временного (на ограниченный период времени для обеспечения электроснабжения энергопринимающих устройств) технологического присоединения энергопринимающих устройств по третьей категории надежности электроснабжения на уровне напряжения ниже 35 кВ.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<? if($USER->IsAuthorized()){?>
							<a id="remember_pass" href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/proverka-statusa-zayavki-na-tekh-prisoedinenie-k-setyam-elektrosnabzheniya/">Проверка статуса заявки на тех. присоединение к сетям электроснабжения</a>
						<?}else{?>
							<a id="remember_pass" href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/">Проверка статуса заявки на тех. присоединение к сетям электроснабжения</a>
						<?}?>
					</div>
					<div>
						<? if($USER->IsAuthorized()){?>
							<a id="remember_pass" href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/napravit-obrashchenie-zhalobu/">Направить обращение / жалобу</a>
						<?}else{?>
							<a id="remember_pass" href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/">Направить обращение / жалобу</a>
						<?}?>
					</div>
					<div>
						<? if($USER->IsAuthorized()){?>
							<a id="remember_pass" href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/otsenka-kachestva-obsluzhivaniya/">Оценка качества обслуживания</a>
						<?}else{?>
							<a id="remember_pass" href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/">Оценка качества обслуживания</a>
						<?}?>
					</div>
					<div>
						<? if($USER->IsAuthorized()){?>
							<a id="remember_pass" href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/peredat-pokazaniya-priborov-uchyeta/">Показания приборов учет</a>
						<?}else{?>
							<a id="remember_pass" href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/">Показания приборов учетя</a>
						<?}?>
					</div>
				</div>
 <img src="/bitrix/templates/oez/img/icons/T_18(1)white.png">
			</div>
		</div>
 <a href="/potrebitelyam/internet-priemnaya/chasto-zadavaemye-voprosy/">
		<div class="col-xs-12 col-md-6 ">
			<div class="cabinet_block">
				<div class="row cabinet_block_heder">
					<div class="col-xs-12 cabinet_block_name">
						<h3>Часто задаваемые вопросы</h3>
					</div>
				</div>
				<div class="cabinet_block_links">
					 Здесь Вы можете задать свои вопросы<br>
					 и мы обязательно на них ответим
				</div>
 <img src="/bitrix/templates/oez/img/icons/T_18(2)white.png">
			</div>
		</div>
 </a>
	</div>
 </section>
</div>
<br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>
