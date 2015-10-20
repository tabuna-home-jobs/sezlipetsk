<div class="login_form_container">
    <form method="post" id="main_form" enctype="multipart/form-data">
        <div class="nomer_zayavki">Показания приборов учёта</div>
        <div class="inputs_container">
            <textarea name="MESSAGE_1" allmessage style="display:none"></textarea>

            <span id="wrappDinamicElems">
                <div class="row">
                    <div class="col-xs-3 labels_left">
                        <span class="star_red">*</span> <span nameinput="1">№ Прибора 1</span>
                    </div>
                    <div class="col-xs-3 inputs_right">
                        <input type="text" name="FIELD_1" inputvalue="1" require>
                    </div>
                    <div class="col-xs-3 labels_left">
                        <span class="star_red">*</span> <span nameinput="11">Показания</span>
                    </div>
                    <div class="col-xs-3 inputs_right">
                        <input type="text" name="FIELD_11" inputvalue="11" require>
                    </div>
                </div>
            </span>


            <div class="row">
                <!--<div class="col-xs-6 labels_left send_file_desription">
                    Вы можете прикрепить файл с материалами по обращению
                </div>-->
                <div  class="col-xs-6 file_input">
                    <!--<input type="file" value="Прикрепить файл" name="FILE_1">--->
                    <input type="hidden" value="Показания приборов учёта" name="formname">
                    <!--<a><img src="<?=SITE_TEMPLATE_PATH?>/img/srepka.png">Прикрепить файл</a>-->
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 labels_left">

                </div>

                    <div class="col-xs-10">
                        <a class="send_form">ОТПРАВИТЬ</a>
                    </div>
                    <div class="col-xs-2">
                        <span class="add-pribor" id="addP">+</span>
                    </div>
                    <div class="clearfix"></div>

                <div class="star_description"><span class="star_red">*</span> — обязательные поля</div>



            </div>

        </div>
    </form>


 <div class="steps_block">
  <div class="step_item step_item_inputs_message_send" <?=(isset($arResult["MESSAGE_SEND"]) && $arResult["MESSAGE_SEND"] == 'OK') ? '' : 'style="display:none"'?>>
    <div class="col-xs-12 step_item_inputs_heder">
    <h3>Спасибо за Ваше обращение!</h3>
    </div>
  </div>
 </div>
</div>
