<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Направить обращение/жалобу");
?>

<div class="main container">
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
		<h1>Направить обращение/жалобу</h1>

		<div class="scrollbar-outer">
			<p>РОСОЭЗ &ndash; это масштабный федеральный проект по привлечению инвестиций, передовых научных, производственных и управленческих технологий.</p>

			<p>РОСОЭЗ предоставляют компаниям уникальную возможность использовать все инвестиционные преимущества России, минуя при этом типичные российские проблемы &ndash; нерыночные факторы влияния на бизнес и неэффективное администрирование.</p>

			<p>В данном разделе вы найдёте информацию о том, как начать свой бизнес в российских особых экономических зонах.<br />
			   РОСОЭЗ предоставляют компаниям уникальную возможность использовать все инвестиционные преимущества России, минуя при этом типичные российские проблемы &ndash; нерыночные факторы влияния на бизнес и неэффективное администрирование.</p>

			<p>В данном разделе вы найдёте информацию о том, как начать свой бизнес в российских особых экономических зонах.</p>


		</div>
	</div>
	<div class="col-xs-12 col-md-6 login_part_right max_height_block">
		<div class="login_form_container padding_block">
			<div class="row login_form_heder">
				<a href="#login_panel" id="electro-tab1" role="tab" class="login_punct active_login_punkt"
				   data-toggle="tab"
				   aria-controls="login_panel"
				   aria-expanded="true">ОБРАЩЕНИЕ</a>
				<a href="#registration_panel" id="electro-tab2" role="tab" data-toggle="tab" class="login_punct"
				   aria-controls="registration_panel" aria-expanded="true">ЖАЛОБА</a>
			</div>
			<div id="main_content_tabs" class="tab-content">
				<div role="tabpanel" class="tab-pane fade active in" id="login_panel">
					<?$APPLICATION->IncludeComponent(
						"custom:support.form_toconnect",
						"complaint",
						Array(
						)
					);
					?>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="registration_panel">
					<form>
						<div class="nomer_zayavki">Жалоба №0665</div>
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
									<span class="star_red">*</span> E-mail
								</div>
								<div class="col-xs-6 inputs_right">
									<input type="text" name="login">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 labels_left">
									Телефон
								</div>
								<div class="col-xs-6 inputs_right">
									<input type="text" name="login">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 labels_left">
									Выберите тему
								</div>
								<div class="col-xs-6 inputs_right">
									<select><option>Выберите тему</option></select>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 labels_left">
									Сообщение
								</div>
								<div class="col-xs-6 inputs_right">
									<textarea></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 labels_left send_file_desription">
									Вы можете прикрепить файл с материалами по обращению
								</div>
								<div  class="col-xs-6 file_input">
									<input type="file" value="Прикрепить файл">
									<a><img src="<?=SITE_TEMPLATE_PATH?>/img/srepka.png">Прикрепить файл</a>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 labels_left">

								</div>
								<div class="col-xs-6 inputs_right">
									<button>ОТПРАВИТЬ</button>
									<div class="star_description"><span class="star_red">*</span> — обязательные поля</div>
								</div>
								<div class="srok_obrashenia col-xs-12">Срок рассмотрения вашей жалобы №0665 до 11,05,15</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
