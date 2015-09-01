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
		<?  //Если авторизован то показываем личный кабинет
			if ($USER->IsAuthorized()) {
				?>
				<div class="col-xs-12 col-md-6 login_part_right max_height_block">
					<div class="login_form_container">
						<div class="info-user-cabinet mamau-tab active-b-i">
							<div class="avatar">
								<div>
									<?  //Берем фотку текущего пользователя
										//Если её нет то по дефолту картинку показываем
										if($USER->GetParam("PERSONAL_PHOTO")) {
									?>
										<img src="<?=CFile::GetPath($USER->GetParam("PERSONAL_PHOTO"));?>">

									<?
										}else{
									?>
										<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/avatar.png">
									<?
										}
									?>
								</div>
							</div>
							<div class="lk_name"><?=$USER->GetFullName()?></div>
							<div class="lk_description">
								<?
									//Берем текущего пользователя по ID
									$rsUser = CUser::GetByID($USER->GetId());
									$arUser = $rsUser->Fetch();

								?>
								<div><?=$arUser["WORK_COMPANY"]?></div>
								<div><?=$arUser["UF_POSITION"]?></div>
								<div>т. <?=$arUser["PERSONAL_PHONE"]?></div>
								<div>Е. <?=$USER->GetEmail()?></div>
								<div>Кадастровый номер: <?=$arUser['UF_CADASTR']?></div>
							</div>
						</div>
						<div class="edit-user-info mamau-tab">
							<div class="avatar">
								<div>
									<?  //Берем фотку текущего пользователя
										//Если её нет то по дефолту картинку показываем
										if($USER->GetParam("PERSONAL_PHOTO")) {
											?>
											<img src="<?=CFile::GetPath($USER->GetParam("PERSONAL_PHOTO"));?>">

											<?
										}else{
											?>
											<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/avatar.png">
											<?
										}
									?>
								</div>
							</div>
							<div class="lk_name"><?=$USER->GetFullName()?></div>
							<div class="lk_description edit-fieldz">

							<form action="" method="post">
								<div class="row">

								<div class="col-xs-6 labels_left">
									Имя
								</div>
								<div class="col-xs-6 inputs_right">
									<input type="text" value="<?=$arUser["NAME"]?>" name="NAME">
								</div>

								<div class="col-xs-6 labels_left">
									Фамилия
								</div>
								<div class="col-xs-6 inputs_right">
									<input type="text" value="<?=$arUser["LAST_NAME"]?>" name="LAST_NAME">
								</div>

									<div class="col-xs-6 labels_left">
										Компания
									</div>
								<div class="col-xs-6 inputs_right">
									<input type="text" value="<?=$arUser["WORK_COMPANY"]?>" name="WORK_COMPANY">
								</div>
									<div class="col-xs-6 labels_left">
										Должность
									</div>
								<div class="col-xs-6 inputs_right">
									<input type="text" value="<?=$arUser["UF_POSITION"]?>" name="UF_POSITION">
								</div>
									<div class="col-xs-6 labels_left">
										Телефон
									</div>
								<div class="col-xs-6 inputs_right">
									<input type="text" value="<?=$arUser["PERSONAL_PHONE"]?>" name="PERSONAL_PHONE">
								</div>
									<div class="col-xs-6 labels_left">
										E-mail
									</div>
								<div class="col-xs-6 inputs_right">
									<input type="text" value="<?=$USER->GetEmail()?>" name="EMAIL">
								</div>
									<div class="col-xs-6 labels_left">
										Кадастровый номер
									</div>
								<div class="col-xs-6 inputs_right">
									<input type="text" value="<?=$arUser['UF_CADASTR']?>" name="UF_CADASTR">
									<input type="hidden" value="edit_user" name="edit_user">
								</div>

								</div>
							</div>
							<div class="col-xs-6 inputs_left">
							</div>
							<div class="col-xs-6 inputs_right">
								<button type="submit" class="sub-button">Сохранить</button>
							</div>
							</form>
						</div>
						<div class="clearfix"></div>
						<div class="red_a">
							<a href="#" id="trigger-mamau-tab">РЕДАКТИРОВАТЬ</a>
							<a href="/index.php?logout=yes">ВЫХОД</a>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
						$("#trigger-mamau-tab").click(function(){

							$('.mamau-tab').each(function(){
								if($(this).hasClass('active-b-i')){
									$("#trigger-mamau-tab").text('РЕДАКТИРОВАТЬ');
									$(this).removeClass('active-b-i');
								}else{
									$("#trigger-mamau-tab").text('< НАЗАД');
									$(this).addClass('active-b-i');
								}
							});
							return false;

						}, function(){

							$('.mamau-tab').each(function(){
								if($(this).hasClass('active-b-i')){
									$("#trigger-mamau-tab").text('РЕДАКТИРОВАТЬ');
									$(this).removeClass('active-b-i');
								}else{
									$("#trigger-mamau-tab").text('< НАЗАД');
									$(this).addClass('active-b-i');
								}
							});

							return false;
						});
					});
				</script>
				<div class="clearfix"></div>
				<section>
						<div class="col-md-6 col-sm-12 ">
							<div class="row">
								<div class="col-xs-12 col-sm-6 left_padding_remove">
									<div class="col-sm-12 col-xs-12 block_item ">
										<div class="item_block hight_item_block">
											<a class="item_block_a_small" href="">
												<div class="hover_container">
													<div class="hover"></div>
												</div>
												<div class="item_bod">
													<div class="item_name">Показания приборов учета</div>
													<div class="item_dop">Для получения льгот и преференций компании или частному предпринимателю необходимо получить статус резидента</div>
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
											<a class="item_block_a_small" href="">
												<div class="hover_container">
													<div class="hover"></div>
												</div>
												<div class="item_bod">
													<div class="item_name">Направить обращение/
													                       жалобу</div>
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
											<a class="item_block_a_small" href="">
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
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="row">
								<div class="col-sm-6 col-xs-12 block_item ">
									<div class="item_block hight_item_block">
										<a class="item_block_a" href="">
											<div class="hover_container">
												<div class="hover"></div>
											</div>
											<div class="item_bod">
												<div class="item_name">Подать заявку на тех. присоединение к сетям электроснабжения</div>
												<div class="item_dop">Для получения льгот и преференций компании или частному предпринимателю необходимо получить статус резидента</div>
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
								<div class="col-sm-6 col-xs-12 block_item ">
									<div class="item_block hight_item_block">
										<a class="item_block_a" href="">
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
				</section>
				</div>
				<?
					//Иначе предлагаем зарегаться или залогиниться
					}else{
				?>
				<div class="col-xs-12 col-md-6 login_part_right max_height_block">
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
