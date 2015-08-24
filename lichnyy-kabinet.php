<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
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
		<div class="col-xs-12 col-md-6 login_part_right max_height_block">
			<div class="login_form_container">

				<div class="row login_form_heder">
					<a href="#login_panel" id="input-tab" role="tab" class="login_punct active_login_punkt"
					   data-toggle="tab"
					   aria-controls="login_panel"
					   aria-expanded="true">ВХОД</a>
					<a href="#registration_panel" id="reg-tab" role="tab" data-toggle="tab" class="login_punct"
					   aria-controls="registration_panel" aria-expanded="true">РЕГИСТРАЦИЯ</a>
				</div>
				<div id="main_content_tabs" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="login_panel">
						<div class="remember_form_main">
							<div class="remember_form_cell">
								<div class="remember_form">
									<div class="close_r_f_container"><a class="close_r_f"></a></div>
									<div class="row">
										<div class="col-xs-12">
											<div class="r_f_heder">Напомнить пароль</div>
										</div>
									</div>
									<div row>
										<div class="col-xs-12 col-sm-12 col-md-3 r_f_left">E-mail</div>
										<div class="col-xs-12 col-sm-12 col-md-6 r_l_right">
											<form>
												<input type="email">
												<button>ОТПРАВИТЬ</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<form>
							<div class="inputs_container">
								<div class="row">
									<div class="col-xs-6 labels_left">
										Логин
									</div>
									<div class="col-xs-6 inputs_right">
										<input type="text" name="login">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 labels_left">
										Пароль
									</div>
									<div class="col-xs-6 inputs_right">
										<input type="text" name="login">

										<div class="remember_a"><a id="remember_pass">Забыли пароль ?</a>

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 labels_left">
										Введите символы
										с картинки
									</div>
									<div class="col-xs-6 inputs_right">
										<input type="text" name="login">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 labels_left">

									</div>
									<div class="col-xs-6 inputs_right">
										<button>ОТПРАВИТЬ</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="registration_panel">
						<form>
							<div class="inputs_container">
								<div class="row">
									<div class="col-xs-6 labels_left">
										<span class="star_red">*</span> Фамилия Имя Отчество
									</div>
									<div class="col-xs-6 inputs_right">
										<input type="text" name="login">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 labels_left">
										<span class="star_red">*</span> Наименование организации
									</div>
									<div class="col-xs-6 inputs_right">
										<input type="text" name="login">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 labels_left">
										<span class="star_red">*</span> Должность
									</div>
									<div class="col-xs-6 inputs_right">
										<input type="text" name="login">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 labels_left">
										<span class="star_red">*</span> Телефон
									</div>
									<div class="col-xs-6 inputs_right">
										<input type="text" name="login">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 labels_left">
										<span class="star_red">*</span> Email
									</div>
									<div class="col-xs-6 inputs_right">
										<input type="text" name="login">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 labels_left">
										<span class="star_red">*</span> Кадастровый номер земельного участка
									</div>
									<div class="col-xs-6 inputs_right">
										<input type="text" name="login">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 labels_left">
										<span class="star_red">*</span> Введите символы
										                                с картинки
									</div>
									<div class="col-xs-6 inputs_right">
										<input type="text" name="login">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6 labels_left">

									</div>
									<div class="col-xs-6 inputs_right">
										<button>ОТПРАВИТЬ</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<script type="text/javascript">
						$(document).ready(function(){
							//Если юзер нажаол на регистрацию
							//то делаем таб регистрации активным
							var hashReg = location.hash;
							if(hashReg){
								$("#reg-tab").click();
							}
						});
					</script>
				</div>
			</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
