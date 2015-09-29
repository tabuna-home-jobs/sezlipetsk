<link src="<?=SITE_TEMPLATE_PATH?>/css/bootstrap-datetimepicker.min.css" type="text/css"  rel="stylesheet"/>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/moment-with-locales.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap-datetimepicker.min.js"></script>
<script>
	$(document).ready(function(){
		//alert('fghjkl;');
		$('#datetime').datetimepicker({language: 'ru'});

	} );
</script>
<div class="login_form_heder padding_block ">
	<h2 class="h20px_light">Заявка на осуществление допуска в эксплуатацию прибора учета электрической энергии</h2>
</div>
<div class="login_form_container">
    <form method="post" id="main_form" enctype="multipart/form-data">
        <!--<div class="nomer_zayavki">Задать вопрос</div>-->
        <div class="inputs_container">
	        <textarea name="MESSAGE_1" allmessage style="display:none"></textarea>
            <div class="row">
                <div class="col-xs-6 labels_left">
                    <span class="star_red">*</span> <span nameinput="1">Наименование организации</span>
                </div>
                <div class="col-xs-6 inputs_right">
                    <input type="text" name="FIELD_1" inputvalue="1" require>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 labels_left">
                    <span class="star_red">*</span> <span nameinput="2">Фамилия Имя Отчествои</span>
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
                <div class="col-xs-12 labels_left">
                    <span >Просим осуществить допуск в эксплуатацию прибора(-ов) учета электрической энергии  </span>
	                <span nameinput="4" style="display: none">Текст</span>
                </div>
                <div class="col-xs-6 inputs_right" style="display: none;">
                    <input type="email" name="FIELD_4" inputvalue="4" value="Просим осуществить допуск в эксплуатацию прибора(-ов) учета электрической энергии">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 labels_left">
	                <span class="star_red">*</span> <span nameinput="5">зав.№ прибора учета(-ов)</span>
                </div>
                <div class="col-xs-6 inputs_right">
                    <input type="text" name="FIELD_5" inputvalue="5" require>
                </div>
            </div>

	        <div class="row">
		        <div class="col-xs-6 labels_left">
			        <span class="star_red">*</span> <span nameinput="6">Точка(-и) присоединения (поставки)</span>
		        </div>
		        <div class="col-xs-6 inputs_right">
			        <input type="text" name="FIELD_6" inputvalue="6" require>
		        </div>
	        </div>
	        <div class="row">
		        <div class="col-xs-6 labels_left">
			        <span class="star_red">*</span> <span nameinput="7">Дата, время</span>
		        </div>
		        <div class="col-xs-6 inputs_right">
			        <input type="text" name="FIELD_7" inputvalue="7" require id="datetime">
		        </div>
	        </div>
	        <div class="row">
		        <div class="col-xs-6 labels_left">
			        <span class="star_red">*</span> <span nameinput="8">Месторасположение прибора учета (адрес, объект)</span>
		        </div>
		        <div class="col-xs-6 inputs_right">
			        <input type="text" name="FIELD_8" inputvalue="8" require>
		        </div>
	        </div>
            <div class="row">
                <div class="col-xs-6 labels_left">
                    <span nameinput="9">
                        в связи с
                    </span>
                </div>
                <div class="col-xs-6 inputs_right">
                    <textarea name="FIELD_9" inputvalue="9"></textarea>
	                (указать причину)
                </div>
            </div>
	        <div class="row">
		        <div class="col-xs-6 labels_left">
			        <span class="star_red">*</span> <span nameinput="10">Ф.И.О. контактного лица</span>
		        </div>
		        <div class="col-xs-6 inputs_right">
			        <input type="text" name="FIELD_10" inputvalue="10" require>
		        </div>
	        </div>
	        <div class="row">
		        <div class="col-xs-6 labels_left">
			        <span class="star_red">*</span> <span nameinput="11">Телефон контактного лица</span>
		        </div>
		        <div class="col-xs-6 inputs_right">
			        <input type="text" name="FIELD_11" inputvalue="11" require>
		        </div>
	        </div>
            <div class="row">
                    <input type="hidden" value="Заявка на осуществление допуска в эксплуатацию прибора учета электрической энергии" name="formname">
            </div>

            <div class="row">
                <div class="col-xs-6 labels_left">

                </div>
	            <div class="col-xs-6 inputs_right">
                    <div><a class="send_form">ОТПРАВИТЬ</a></div>
                    <div class="star_description"><span class="star_red">*</span> — обязательные поля</div>
				</div>


            </div>

        </div>
    </form>


 <div class="steps_block">
  <div class="step_item step_item_inputs_message_send" <?=(isset($arResult["MESSAGE_SEND"]) && $arResult["MESSAGE_SEND"] == 'OK') ? '' : 'style="display:none"'?>>
    <div class="col-xs-12 step_item_inputs_heder">
    <h3>Заявка на осуществление допуска в эксплуатацию прибора учета электрической энергии</h3>
    </div>
  </div>
 </div>
</div>
