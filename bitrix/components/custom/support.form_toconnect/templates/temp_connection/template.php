<div class="login_form_container">
    <div class="login_form_container">
        <div class="login_form_heder ">
            <h2 class="h20px_light">ЗАЯВКА НА ПРИСОЕДИНЕНИЕ</h2>

            <div class="zayavka_text">
                юридического лица (индивидуального предпринимателя) лица на временное присоединение энергопринимающих устройств
            </div>
        </div>
        <div class="steps" <?=(isset($arResult["MESSAGE_SEND"]) && $arResult["MESSAGE_SEND"] == 'OK') ? 'style="display:none"' : ''?>>

            <span class="step active_step">1</span>
            <span class="step">2</span>
            <span class="step">3</span>
        </div>
        <div class="steps_block" <?=(isset($arResult["MESSAGE_SEND"]) && $arResult["MESSAGE_SEND"] == 'OK') ? 'style="display:none"' : ''?>>
            <form method="post" id="main_form" enctype="multipart/form-data">

                <div class="step_item step_item_active">
                    <textarea name="MESSAGE_1" allmessage style="display:none"> <?=$_POST["MESSAGE_1"]?> </textarea>
                    <div class="step_item_block">
                        <div class="step_item_block_name" nameinput="1">
                            Реквизиты юридического лица<br/>
                            или индивидуального предпринимателя
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                (полное наименование заявителя – юридического лица;
                                фамилия, имя, отчество заявителя – индивидуального предпринимателя)
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" name="FIELD_1" value='<?=$_POST["FIELD_1"]?>' inputvalue="1" require>
                            </div>
                        </div>
                        <div class="step_item_inputs_heder">
                            Номер записи в Едином государственном реестре юридических лиц (номер записи в Едином государственном реестре индивидуальных предпринимателей) и дата ее внесения в реестр
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="2">Номер записи в ЕГРЮЛ (для юр.лица)</span>
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" name="FIELD_2" value='<?=$_POST["FIELD_2"]?>' inputvalue="2" require>
                            </div>
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="3">дата ее внесения в реестр</span>
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" name="FIELD_3" value='<?=$_POST["FIELD_3"]?>' inputvalue="3" require>
                            </div>
                        </div>

                    </div>
                    <div class="step_item_block">
                        <div class="step_item_block_name">
                            Контактная информация
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="4">Адрес (место нахождения заявителя)</span>
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" name="FIELD_4" value='<?=$_POST["FIELD_4"]?>' inputvalue="4" require>
                            </div>
                        </div>

                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="5">Почтовый адрес</span>
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" name="FIELD_5" value='<?=$_POST["FIELD_5"]?>' inputvalue="5" require>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-6"></div><div class="col-xs-6"><a class="next_step">ДАЛЕЕ</a>
                        <div class="star_description"><span class="star_red">*</span> — обязательные поля</div>
                    </div>
                </div>
                <div class="step_item ">
                    <textarea name="MESSAGE_2" allmessage style="display:none"> <?=$_POST["MESSAGE_2"]?> </textarea>
                    <div class="step_item_block">
                        <div class="row step_item_inputs">
                            <div class="col-xs-12 step_item_inputs_heder">
                                <span nameinput="6">В связи с<br>
                                (временное технологическое присоединение передвижного объекта и другое – указать нужное)
                                </span>
                            </div>
                            <div class="col-xs-6">
                                <span class="star_red">*</span>Укажите нужное
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" inputvalue="6" name="FIELD_6" value='<?=$_POST["FIELD_6"]?>' require>
                            </div>
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="7">Наименование энергоприни-
                                                               мающих (-его) устройств (-а)</span>
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" inputvalue="7" name="FIELD_7" value='<?=$_POST["FIELD_7"]?>' require>
                            </div>
                        </div>
                        <div class="step_item_inputs_heder">
                            <span nameinput="8">
                            Место нахождения энергопринимающего устройства
                                </span>
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>Адрес
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" inputvalue="8" name="FIELD_8" value='<?=$_POST["FIELD_8"]?>' require>
                            </div>
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="9">кад.№земельного участка<span>
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" inputvalue="9"  name="FIELD_9" value='<?=$_POST["FIELD_9"]?>' require>
                            </div>
                        </div>
                        <div class="col-xs-12 step_item_inputs_heder">
                            <span nameinput="10">
                                 Максимальная мощность энергопринимающих устройств (присоединяемых и ранее присоединенных) составляет
                            </span>
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>(кВт)
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" inputvalue="10" name="FIELD_10" value='<?=$_POST["FIELD_10"]?>' require>
                            </div>
                        </div>
                        <div class="col-xs-12 step_item_inputs_heder">
                            <span nameinput="11"> при напряжении </span>
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>(кВ)
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" name="FIELD_11" value='<?=$_POST["FIELD_11"]?>' inputvalue="11" require>
                            </div>
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="12">Заявляемый характер нагрузки</span>
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" name="FIELD_12" value='<?=$_POST["FIELD_12"]?>' inputvalue="12" require>
                            </div>
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="13">Срок электроснабжения энергопринимающих устройств по временной схеме</span>
                            </div>
                            <div class="col-xs-6">
                                <textarea class="input_steps textarea_input" name="FIELD_13"  inputvalue="13"> <?=$_POST["FIELD_13"]?>
                                </textarea>
                            </div>
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="14">
                                    Реквизиты договора на технологическое присоединение
                                </span>
                            </div>
                            <div class="col-xs-6">
                                <textarea class="input_steps textarea_input" name="FIELD_14"  inputvalue="14"><?=$_POST["FIELD_14"]?></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="step_item_block">

                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="15">
                                Гарантирующий поставщик (энергосбытовая организация), с которым планируется заключение договора энергоснабжения (купли-продажи электрической энергии (мощности)
                                </span>
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" name="FIELD_15" value='<?=$_POST["FIELD_15"]?>' inputvalue="15" require>
                            </div>
                        </div>


                    </div>
                    <div class="col-xs-6">
                        <a class="back_step">НАЗАД</a>
                    </div><div class="col-xs-6"><a class="next_step">ДАЛЕЕ</a>
                        <div class="star_description"><span class="star_red">*</span> — обязательные поля</div>
                    </div>
                </div>
                <div class="step_item ">
                    <textarea name="MESSAGE_3" allmessage style="display:none"> <?=$_POST["MESSAGE_3"]?> </textarea>
                    <div class="step_item_block">
                        <div class="step_item_inputs_heder">
                            <div class="documents">Приложения</div>

                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-12 col-sm-6 file_input">
                                <input type="file" value="Прикрепить файл" name="FILE_1">
                                <a><img src="img/srepka.png">Прикрепить файл</a>
                            </div>
                            <div class="col-xs-12 col-sm-6 ">
                                <div class="col-xs-6"><span nameinput="16">Описание документа</span></div>
                                <div class="col-xs-6"><input class="inp" type="text" inputvalue="16" name="FIELD_16_1" value='<?=$_POST["FIELD_16_1"]?>'></div>
                            </div>
                        </div>

                        <div class="row step_item_inputs">
                            <div class="col-xs-12 col-sm-6  file_input">
                                <input type="file" value="Прикрепить файл" name="FILE_2">
                                <a><img src="img/srepka.png">Прикрепить файл</a>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-xs-6">Описание документа</div>
                                <div class="col-xs-6"><input class="inp" type="text" inputvalue="16" name="FIELD_16_2" value='<?=$_POST["FIELD_16_2"]?>'></div>
                            </div>
                        </div>

                        <div class="row step_item_inputs">
                            <div class="col-xs-12 col-sm-6  file_input">
                                <input type="file" value="Прикрепить файл" name="FILE_3">
                                <a><img src="img/srepka.png">Прикрепить файл</a>
                            </div>
                            <div class="col-xs-12 col-sm-6 ">
                                <div class="col-xs-6">Описание документа</div>
                                <div class="col-xs-6"><input class="inp" type="text" inputvalue="16" name="FIELD_16_3" value='<?=$_POST["FIELD_16_3"]?>'></div>
                            </div>
                        </div>

                        <div class="row step_item_inputs">
                            <div class="col-xs-12 col-sm-6  file_input">
                                <input type="file" value="Прикрепить файл" name="FILE_4">
                                <a><img src="img/srepka.png">Прикрепить файл</a>
                            </div>
                            <div class="col-xs-12 col-sm-6 ">
                                <div class="col-xs-6">Описание документа</div>
                                <div class="col-xs-6"><input class="inp" type="text" inputvalue="16" name="FIELD_16_4" value='<?=$_POST["FIELD_16_4"]?>'></div>
                            </div>
                        </div>

                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="17">Фамилия Имя Отчество заявителя</span>
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" inputvalue="17" name="FIELD_17" value='<?=$_POST["FIELD_17"]?>' require>
                            </div>
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="18">Контактный телефон заявителя</span>
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" inputvalue="18" name="FIELD_18" value='<?=$_POST["FIELD_18"]?>' require>
                            </div>
                        </div>
                        <div class="row step_item_inputs">
                            <div class="col-xs-6">
                                <span class="star_red">*</span>
                                <span nameinput="19">Должность</span>
                            </div>
                            <div class="col-xs-6">
                                <input class="input_steps" type="text" inputvalue="19" name="FIELD_19" value='<?=$_POST["FIELD_19"]?>' require>
                                <input type="hidden" value="Заявка на временное присоединение" name="formname">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <a class="back_step">НАЗАД</a>
                    </div>
                    <div class="col-xs-6"><a class="send_form">ОТПРАВИТЬ</a>

                        <div class="star_description"><span class="star_red">*</span> — обязательные поля</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="steps_block">
        <div class="step_item step_item_inputs_message_send" <?=(isset($arResult["MESSAGE_SEND"]) && $arResult["MESSAGE_SEND"] == 'OK') ? '' : 'style="display:none"'?>>
            <div class="col-xs-12 step_item_inputs_heder">
                <h3>Спасибо за Ваше обращение!</h3>
            </div>
        </div>
    </div>
</div>
