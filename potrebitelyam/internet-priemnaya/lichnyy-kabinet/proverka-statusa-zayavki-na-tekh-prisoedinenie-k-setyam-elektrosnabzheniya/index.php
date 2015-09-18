<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Личный кабинет");


	if($_POST['edit_user']) {

		$user = new CUser;

		$rsUser = CUser::GetByID($USER->GetId());


		$fields = Array(
			"NAME"             => $_POST['NAME'],
			"LAST_NAME"        => $_POST['LAST_NAME'],
			"EMAIL"            => $_POST['EMAIL'],
			"PERSONAL_PHONE"   => $_POST['PERSONAL_PHONE'],
			"WORK_COMPANY"     => $_POST['WORK_COMPANY'],
			"UF_POSITION"      => $_POST['UF_POSITION'],
			"UF_CADASTR"       => $_POST['UF_CADASTR'],
			//"LOGIN"            => "ivan",
			//"LID"              => "ru",
			//"ACTIVE"           => "Y",
			//"GROUP_ID"         => array(1, 2),
			//"PASSWORD"         => "123456",
			//"CONFIRM_PASSWORD" => "123456",
		);

		$user->Update($USER->GetId(), $fields);

	}

?>
<div class="main container">
	<div class="row vhod_lk">
		<div class="col-xs-12 col-md-6">
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
			<h1 class="page_h1"><?=$APPLICATION->GetTitle();?></h1>

			<div class="scrollbar-outer">
				<p>Порядок работы в личном кабинете потребителя<br />
				   Регистрация и вход</p>

				<p>Для удобства потребителей на сайте создан &laquo;Личный кабинет потребителя&raquo;. Войти в него Вы можете через пункт меню &laquo;Потребителям&raquo; -&gt; &laquo;Интернет-приемная&raquo; -&gt; &laquo;Личный кабинет потребителя&raquo;.<br />
				   Для входа в личный кабинет Вы вводите логин и пароль, полученные при регистрации и нажимаете кнопку &laquo;Войти&raquo;. Если Вы новый пользователь, то кликаете по ссылке &laquo;Регистрация&raquo; и определяете свой статус:<br />
				   * Ф.И.О;<br />
				   * Должность;<br />
				   * Наименование организации;<br />
				   * E-mail;<br />
				   * Телефон;<br />
				   * Кадастровый номер земельного участка (?)</p>

				<p>Внимание! При регистрации проверяйте указываемые данные и адрес электронной почты. Будьте внимательны! Пароль и логин будут высланы на указанный при регистрации почтовый адресl.</p>

				<p>После успешной регистрации Вы получаете возможность входа в личный кабинет. Если Вы зарегистрированы, но забыли пароль, то Вы можете его восстановить, кликнув по ссылке &laquo;Восстановить пароль&raquo; и указав e-mail, введенный при регистрации. На данный &nbsp;адрес Вам будет выслана ссылка для восстановления пароля.</p>

				<p><br />
					Работа в личном кабинете</p>

				<p>После регистрации на сайте и входа в личный в кабинет Вам будут доступны следующие функции:<br />
					&bull; подать заявку на технологическое присоединение к сетям электроснабжения;</p>

				<p>&bull; проверка статуса заявки на технологическое присоединение к сетям электроснабжения;</p>

				<p>&bull; подать показания и просмотреть архив показаний приборов учета;</p>

				<p>&bull; подать заявление на оборудование точки поставки приборами учета;</p>

				<p>&bull; направить обращение/жалобу;</p>

				<p>&bull; Оценить качество обслуживания.</p>

				<p>Все формы интуитивно понятны и их назначение следует из названия формы. Форма</p>

				<p>состоит из полей для заполнения и поясняющего текста. Все поля являются обязательным</p>

				<p>для заполнения, форма с пустыми полями не будет отправлена. При успешной отправке</p>

				<p>формы, на экране отобразится надпись &laquo;Ваша заявка принята&raquo;.</p>

			</div>
		</div>
		<?

			//Подключаем модуль
			CModule::IncludeModule('support');
			//хватаем по юзеру
			$rs = CTicket::GetList(
				$by="ID",
				$order="asc",
				array('OWNER' => $USER->GetEmail()),
				$isFiltered,
				"Y",
				"Y",
				"Y",
				false,
				Array("SELECT" => array("UF_*" ))
			);




		 //Если авторизован то показываем личный кабинет
			if ($USER->IsAuthorized()) {
		?>
		<div class="col-xs-12 col-md-6 login_part_right max_height_block">
		<?
			$APPLICATION->IncludeComponent(
						"custom:support.form_toconnect",
						"proverka_status",
						Array(
						)
					);
		?>
		</div>
		<div class="clearfix"></div>
		<section>
			<div class="col-md-6 col-sm-12 ">
				<div class="row">
					<div class="col-xs-12 col-sm-6 left_padding_remove">
						<div class="col-sm-12 col-xs-12 block_item ">
							<div class="item_block">
								<a class="item_block_a_small" href="/potrebitelyam/internet-priemnaya/lichnyy-kabinet/peredat-pokazaniya-priborov-uchyeta/">
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name">Передать показания приборов учета</div>
									</div>
									<div class="block_icon_arrow">
										<span class="glyphicon glyphicon-menu-right"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-12 col-xs-12 block_item ">
							<div class="item_block">
								<a class="item_block_a_small" href="posmotret-peredannye-pokazaniya-priborov-ucheta/">
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name">
											Посмотреть переданные показания приборов учета
										</div>
									</div>
									<div class="block_icon_arrow">
										<span class="glyphicon glyphicon-menu-right"></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 left_padding_remove">
						<div class="col-sm-12 col-xs-12 block_item">
							<div class="item_block">
								<a class="item_block_a_small" href="napravit-obrashchenie-zhalobu/">
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name">
											Направить обращение/жалобу
										</div>
										<div class="item_dop"></div>
									</div>
									<div class="block_icon_arrow">
										<span class="glyphicon glyphicon-menu-right"></span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-12 col-xs-12 block_item">
							<div class="item_block">
								<a href="vashi-obrashcheniya-zhaloby/" class="item_block_a_small" id="remember_pass2">
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name">Ваши обращения/жалобы</div>
										<div class="item_dop"></div>
									</div>
									<div class="block_icon_arrow">
										<span class="glyphicon glyphicon-menu-right"></span>
									</div>
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<div class="col-sm-6">
						<div class="col-sm-12 col-xs-12 block_item ">
							<div class="item_block">
								<a class="item_block_a" id="remember_pass">
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name">Подать заявку на тех. присоединение к сетям электроснабжения</div>
									</div>
									<div class="block_icon">
                                    <span class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/mail.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/mail_2.png"/>
                                    </span>
									</div>
								</a>
							</div>
						</div>
						<div class="col-sm-12 col-xs-12 block_item">
							<div class="item_block">
								<a class="item_block_a_small" id="remember_pass2" href="proverka-statusa-zayavki-na-tekh-prisoedinenie-k-setyam-elektrosnabzheniya/">
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name">Проверка статуса заявки на тех. присоединение к сетям электроснабжения</div>
										<div class="item_dop"></div>
									</div>
									<div class="block_icon_arrow">
										<span class="glyphicon glyphicon-menu-right"></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-12 col-xs-12 block_item ">
							<div class="item_block hight_item_block">
								<a class="item_block_a" href="otsenka-kachestva-obsluzhivaniya/">
									<div class="hover_container">
										<div class="hover"></div>
									</div>
									<div class="item_bod">
										<div class="item_name">Оценка качества обслуживания</div>
										<div class="item_dop">Для получения льгот и преференций компании или частному предпринимателю необходимо получить статус резидента</div>
									</div>
									<div class="block_icon">
                                    <span class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/palec.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/palec_2.png"/>
                                    </span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="remember_form_main">
				<div class="remember_form_cell">
					<div class="remember_form">
						<div class="close_r_f_container"><a class="close_r_f"></a></div>
						<div class="row">
							<div class="col-xs-12">
								<div class="r_f_heder">Выберите вариант заявки</div>
							</div>
						</div>
						<div>

							<div class="col-xs-12">
								<div class="oval_links_container">
									<a href="zayavka-na-prisoedinenie/" class="oval_links"><span><span>до 150 к Вт <span class="star_red">*</span></span></span></a>
									<a href="zayavka-na-prisoedinenie-vremennoe/" class="oval_links"><span><span><span>Временное <span class="star_red">*</span><span class="star_red">*</span> присоединение</span></span></span></a>
								</div>
							</div>
							<div class="col-xs-12 form_descript">
								<span class="star_red">*</span>
								Форма заявки для юридических лиц или индивидуальных предпринимателей, максимальная мощность энергопринимающих устройств которых составляет до 150кВт включительно (с учетом ранее присоединенных в данной точке присоединения энергопринимающих устройств) по одному источнику
								электроснабжения.
							</div>
							<div class="col-xs-12 form_descript">
								<span class="star_red">*</span><span class="star_red">*</span>
								Форма заявки для заявителей в целях временного (на ограниченный период времени для обеспечения электроснабжения энергопринимающих устройств) технологического присоединения энергопринимающих устройств по третьей категории надежности электроснабжения на уровне напряжения ниже 35 кВ.
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?
		//Иначе предлагаем зарегаться или залогиниться
		}else{
		?>
		<div class="col-xs-12 col-md-6 login_part_right item_block hight_item_block">
			<div class="login_form_container">

				<div class="row login_form_heder">
					<a href="#login_panel" id="input-tab" role="tab" <?=!isset($_POST["REGISTER"]) ? 'class="login_punct active_login_punkt"' : 'class="login_punct"'?>
					   data-toggle="tab"
					   aria-controls="login_panel"
					   aria-expanded="true">ВХОД</a>
					<a href="#registration_panel" id="reg-tab" role="tab" data-toggle="tab" <?=isset($_POST["REGISTER"]) ? 'class="login_punct active_login_punkt"' : 'class="login_punct"'?>
					   aria-controls="registration_panel" aria-expanded="true">РЕГИСТРАЦИЯ</a>
				</div>
				<div id="main_content_tabs" class="tab-content">
					<div role="tabpanel" id="login_panel" <?=!isset($_POST["REGISTER"]) ? 'class="tab-pane fade active in"' : 'class="tab-pane fade"'?>>
						<!--Авторизация-->
						<? $APPLICATION->IncludeComponent(
							"custom:system.auth.form",
							"",
							Array(
								"REGISTER_URL" => "register.php",
								"PROFILE_URL"  => "/potrebitelyam/internet-priemnaya/lichnyy-kabinet/",
								"SHOW_ERRORS"  => "Y"
							)
						); ?>
						<!--Авторизация-->
					</div>
					<div role="tabpanel" <?=isset($_POST["REGISTER"]) ? 'class="tab-pane fade active in"' : 'class="tab-pane fade"'?> id="registration_panel">
						<!--Регистрация-->
						<?$APPLICATION->IncludeComponent(
							"custom:main.register",
							".default",
							array(
								"USER_PROPERTY_NAME" => "",
								"SEF_MODE" => "N",
								"SHOW_FIELDS" => array(
									0 => "NAME",
									1 => "SECOND_NAME",
									2 => "LAST_NAME",
									3 => "PERSONAL_PHONE",
									4 => "WORK_COMPANY",
								),
								"REQUIRED_FIELDS" => array(
									0 => "NAME",
									1 => "SECOND_NAME",
									2 => "LAST_NAME",
									3 => "PERSONAL_PHONE",
									4 => "WORK_COMPANY",
									5 => "UF_POSITION",
									6 => "UF_CADASTR",
								),
								"AUTH" => "Y",
								"USE_BACKURL" => "Y",
								"SUCCESS_PAGE" => $APPLICATION->GetCurPageParam("",array("backurl")),
								"SET_TITLE" => "N",
								"USER_PROPERTY" => array(
									0 => "UF_POSITION",
									1 => "UF_CADASTR",
								),
								"COMPONENT_TEMPLATE" => ".default"
							),
							false
						);?>
						<!--Регистрация-->
					</div>
					<script type="text/javascript">
						$(document).ready(function () {
							//Если юзер нажаол на регистрацию
							//то делаем таб регистрации активным
							var hashReg = location.hash;
							if (hashReg) {
								$("#reg-tab").click();
							}
						});
					</script>
				</div>
			</div>
		</div>

		<?
	}?>



</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
