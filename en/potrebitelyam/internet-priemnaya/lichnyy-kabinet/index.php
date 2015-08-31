<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Personal Area");
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
				<p> The order of work in the private office user <br />
				    Sign up and sign </p>

				<p> To ease consumer site created & laquo; Personal account user & raquo ;. Sign it, you can via the menu item & laquo; Consumers & raquo; - & gt; & laquo; Internet reception & raquo; - & gt; & laquo; Personal account user & raquo ;. <br />
				    To enter the private office you enter the login and password received during registration and press the & laquo; Log & raquo ;. If you are a new user, click on the link & laquo; Register & raquo; and define their status: <br />
				    * Full name; <br />
				    * Position; <br />
				    * Name of the organization; <br />
				    * E-mail; <br />
				    * Phone; <br />
				    * Cadastral number of the land (?) </p>

				<p> Warning! Upon registration check indicated the data and e-mail . Be careful! Login and password will be sent to the specified e-mail adresl registration . </p>

				<p> Once a successful registration you get an opportunity to enter the private office . If you have registered but forgot your password , you can recover it by clicking on the link & laquo; Recover password & raquo; and specifying the e-mail, typed during registration. At the & nbsp; address you will be sent a link to reset your password . </p>

				<p> <br />
					Work in your account </p>

				<p> Once the registration site and enter the private office will be accessible to the following functions : <br />
				    & bull; submit an application for technological connection to electricity networks ; </p>

				<p> & bull; check the status of applications for technological connection to electricity networks ; </p>

				<p> & bull; to submit evidence and view archived meter readings ; </p>

				<p> & bull; apply for equipment supply of metering points ; </p>

				<p> & bull; to appeal / complaint ; </p>

				<p> & bull; Rate the quality of service . </p>
				<p> All forms are intuitive and their purpose should be the name of the form. Form </p>

				<p> includes fields for filling and explanatory text . All fields are mandatory </p>

				<p> To fill a form with blank fields will not be sent . If successful transmission </p>

				<p> form displayed on the screen & laquo; your application is accepted & raquo;. </p>

			</div>
		</div>
		<?  //Если авторизован то показываем личный кабинет
			if ($USER->IsAuthorized()) {
				?>
				<div class="col-xs-12 col-md-6 login_part_right max_height_block">
					<div class="login_form_container">
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
							<div>phone. <?=$arUser["PERSONAL_PHONE"]?></div>
							<div>Email. <?=$USER->GetEmail()?></div>
							<div>Cadastral number: <?=$arUser['UF_CADASTR']?></div>
						</div>
						<div class="red_a">
							<a href="/">EDIT</a>
							<a href="/index.php?logout=yes">EXIT</a>
						</div>
					</div>
				</div>
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
													<div class="item_name">Meter readings</div>
													<div class="item_dop">For privileges and preferences company or entrepreneur must obtain resident status</div>
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
													<div class="item_name">Sent an appeal /
													                       complaint</div>
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
													<div class="item_name">Checking the status of the application on those. connection to electricity networks</div>
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
												<div class="item_name">Apply for those . connection to electricity networks</div>
												<div class="item_dop">For privileges and preferences company or entrepreneur must obtain resident status</div>
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
												<div class="item_name">Assessment of quality of service</div>
												<div class="item_dop">For privileges and preferences company or entrepreneur must obtain resident status</div>
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
							   aria-expanded="true">ENTRANCE</a>
							<a href="#registration_panel" id="reg-tab" role="tab" data-toggle="tab" <?=isset($_POST["REGISTER"]) ? 'class="login_punct active_login_punkt"' : 'class="login_punct"'?>
							   aria-controls="registration_panel" aria-expanded="true">SIGN UP FOR FREE</a>
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
