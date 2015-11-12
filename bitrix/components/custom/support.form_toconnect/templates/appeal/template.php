<div class="login_form_container">
	<form method="post" id="main_form" enctype="multipart/form-data">
		<div class="nomer_zayavki">Обращение</div>
		<div class="inputs_container">
			<textarea name="MESSAGE_1" allmessage style="display:none"></textarea>
			<div class="row">
				<div class="col-xs-6 labels_left">
					<span class="star_red">*</span> <span nameinput="1">Фамилия Имя Отчество</span>
				</div>
				<div class="col-xs-6 inputs_right">
					<input type="text" name="FIELD_1" inputvalue="1" require>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 labels_left">
					<span class="star_red">*</span> <span nameinput="2">Наименование организации</span>
				</div>
				<div class="col-xs-6 inputs_right">
					<input type="text" name="FIELD_2" inputvalue="2" require>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 labels_left">
					<span class="star_red">*</span> <span nameinput="3">Должность</span>
				</div>
				<div class="col-xs-6 inputs_right">
					<input type="text" name="FIELD_3" inputvalue="3" require>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6 labels_left">
					<span class="star_red">*</span> <span nameinput="4">E-mail</span>
				</div>
				<div class="col-xs-6 inputs_right">
					<input type="text" name="FIELD_4" inputvalue="4">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 labels_left">
					<span class="star_red">*</span><span nameinput="5">Телефон</span>
				</div>
				<div class="col-xs-6 inputs_right">
					<input type="text" name="FIELD_5" inputvalue="5" require>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 labels_left">
					Выберите тему
				</div>
				<span style="display: none" nameinput="6">Тема</span>
				<div class="col-xs-6 inputs_right">
					<select name="FIELD_6" inputvalue="6">
						<option value="Без темы">Выберите тему</option>
						<option value="присоединение к электрическим сетям">Присоединение к электрическим сетям</option>
						<option value="Передача электрической энергии">Передача электрической энергии</option>
						<option value="Учет электрической энергии">Учет электрической энергии</option>
						<option value="Обслуживание потребителей (консультации)">Обслуживание потребителей (консультации)</option>
						<option value="Бездоговорное потребление эл. энергиие">Бездоговорное потребление эл. энергии</option>
						<option value="Ограничения потребления эл. энергии">Ограничения потребления эл. энергии</option>
						<option value="Теплоснабжение">Параметры качества эл. Энергии</option>
						<option value="Теплоснабжение">Теплоснабжение</option>
						<option value="Газоснажение">Газоснажение</option>
						<option value="Водоснабжение">Водоснабжение</option>
						<option value="Водоотведениие">Водоотведениие</option>
						<option value="Сети телекоммуникаций">Телекоммуникации</option>


					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 labels_left">
                    <span nameinput="7">Сообщение</span>
				</div>
				<div class="col-xs-6 inputs_right">
					<textarea name="FIELD_7" inputvalue="7"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 labels_left send_file_desription">
					Вы можете прикрепить файл с материалами по обращению
				</div>
				<div  class="col-xs-6 file_input">
					<input type="file" value="Прикрепить файл" name="FILE_1">
					<input type="hidden" value="Обращение" name="formname">
					<a><img src="<?=SITE_TEMPLATE_PATH?>/img/srepka.png">Прикрепить файл</a>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6 labels_left">

				</div>

				<div><a class="send_form2">ОТПРАВИТЬ</a></div>
				<div class="star_description"><span class="star_red">*</span> — обязательные поля</div>



			</div>

		</div>
	</form>


	<div class="steps_block">
		<div class="step_item step_item_inputs_message_send" <?=(isset($arResult["MESSAGE_SEND"]) && $arResult["MESSAGE_SEND"] == 'OK') ? '' : 'style="display:none"'?>>
			<div class="col-xs-12 step_item_inputs_heder">
				<h3>Спасибо за Ваше Обращение!</h3>
			</div>
		</div>
	</div>
</div>
