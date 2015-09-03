<div class="login_form_container">
    <div class="login_form_heder ">
        <h2 class="h20px_light">Заявка на присоединение</h2>
        <div class="zayavka_text">
            юридического лица (индивидуального предпринимателя) на присоединение по одному источнику
            электроснабжения энергопринимающих устройств с максимальной мощностью до 150 кВт включительно
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
                        <span class='what'>?</span>
                        <div class="what_body">
                            <p>
                                Для юридических лиц и индивидуальных предпринимателей.
                            </p>
                        </div>
                    </div>
                    <div class="row step_item_inputs">
                        <div class="col-xs-6">
                            <span class="star_red">*</span> <span nameinput="2">Номер записи в ЕГРЮЛ (для юр.лица)</span>
                        </div>
                        <div class="col-xs-6">
                            <input class="input_steps" type="text" name="FIELD_2" value='<?=$_POST["FIELD_2"]?>' inputvalue="2" require>
                        </div>
                    </div>
                    <div class="row step_item_inputs">
                        <div class="col-xs-6">
                            <span class="star_red">*</span> <span nameinput="3">дата ее внесения в реестр</span>
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
                            <span class="star_red">*</span> <span nameinput="4">Адрес (место нахождения заявителя)</span>
                        </div>
                        <div class="col-xs-6">
                            <input class="input_steps" type="text" name="FIELD_4" value='<?=$_POST["FIELD_4"]?>' inputvalue="4" require>
                        </div>
                    </div>
                    <div class="row step_item_inputs">
                        <div class="col-xs-6">
                            <span class="star_red">*</span> <span nameinput="5">Почтовый адрес</span>
                        </div>
                        <div class="col-xs-6">
                            <input class="input_steps" type="text" name="FIELD_5" value='<?=$_POST["FIELD_5"]?>' inputvalue="5" require >
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
                        (увеличением объема максимальной мощности, новым строительством и др. – указать нужное)</span>
                    </div>
                    <div class="col-xs-6">
                        <span class="star_red">*</span>Укажите нужное
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" inputvalue="6" name="FIELD_6" value='<?=$_POST["FIELD_6"]?>' require >
                    </div>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6">
                        <span class="star_red">*</span><span nameinput="7">Наименование энергоприни-
                        мающих (-его) устройств (-а)</span>
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" inputvalue="7" name="FIELD_7" value='<?=$_POST["FIELD_7"]?>' require>
                    </div>
                </div>
                <div class="step_item_inputs_heder">
                    <span nameinput="8">Место нахождения энергопринимающего устройства</span>
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
                        <span class="star_red">*</span><span nameinput="9">кад.№земельного участка</span>
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" inputvalue="9"  name="FIELD_9" value='<?=$_POST["FIELD_9"]?>' require>
                    </div>
                </div>
                <div class="col-xs-12 step_item_inputs_heder">
                   Максимальная мощность
                    <span class='what'>?</span>
                    <div class="what_body">
                        <p>
                            Максимальная мощность указывается равной максимальной мощности присоединяемых энергопринимающих устройств в случае отсутствия максимальной мощности ранее присоединенных энергопринимающих устройств (то есть в пункте 5 и подпункте “а” пункта 5 настоящего приложения величина мощности указывается одинаковая).
                        </p>
                    </div>  <span nameinput="10">энергопринимающих устройств (присоединяемых и ранее присоединенных) составляет</span>
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
                    <span nameinput="11">при напряжении</span>
                    <span class='what'>?</span>
                    <div class="what_body">
                        <p>
                            Классы напряжения (0,4; 6; 10) кВ.
                        </p>
                    </div>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6">
                        <span class="star_red">*</span>(кВ)
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" name="FIELD_11" value='<?=$_POST["FIELD_11"]?>' inputvalue="11" require>
                    </div>
                </div>
                <div class="col-xs-12 step_item_inputs_heder">
                    в том числе:
                </div>
                <div class="col-xs-12 step_item_inputs_heder" >
                    <span nameinput="12">а)максимальная мощность присоединяемых энергопринимающих устройств составляет</span>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6">
                        <span class="star_red">*</span>(кВт)
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" inputvalue="12" name="FIELD_12" value='<?=$_POST["FIELD_12"]?>' require>
                    </div>
                </div>
                <div class="col-xs-12 step_item_inputs_heder">
                    <span nameinput="13">при напряжении</span>
                    <span class='what'>?</span>
                    <div class="what_body">
                        <p>
                            Классы напряжения (0,4; 6; 10) кВ.
                        </p>
                    </div>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6">
                        <span class="star_red">*</span>(кВ)
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" inputvalue="13" name="FIELD_13" value='<?=$_POST["FIELD_13"]?>' require>
                    </div>
                </div>
                <div class="col-xs-12 step_item_inputs_heder">
                    <span nameinput="14">б)максимальная мощность ранее присоединенных в данной точке присоединения энергопринимающих устройств составляет</span>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6">
                        <span class="star_red">*</span>(кВт)
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" inputvalue="14" name="FIELD_14" value='<?=$_POST["FIELD_14"]?>' require>
                    </div>
                </div>
                <div class="col-xs-12 step_item_inputs_heder">
                    <span nameinput="15">при напряжении</span>
                    <span class='what'>?</span>
                    <div class="what_body">
                        <p>
                            Классы напряжения (0,4; 6; 10) кВ.
                        </p>
                    </div>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6">
                        <span class="star_red">*</span>(кВ)
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" inputvalue="15" name="FIELD_15" value='<?=$_POST["FIELD_15"]?>' require>
                    </div>
                </div>
                <div class="col-xs-12 step_item_inputs_heder">
                    Заявляемая категория надежности энергопринимающих устройств – III (по одному источнику электроснабжения энергопринимающих устройств).
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6">
                        <span class="star_red">*</span><span nameinput="16">Характер нагрузки (вид экономической деятельности
                        хозяйствующего субъекта)</span>
                    </div>
                    <div class="col-xs-6">
                        <textarea class="input_steps textarea_input"  inputvalue="16" name="FIELD_16" require><?=$_POST["FIELD_16"]?></textarea>
                    </div>
                </div>
                <div class="col-xs-12 step_item_inputs_heder">
                    <span nameinput="17">Порядок расчета и условия рассрочки внесения платы за технологическое присоединение по договору осуществляются по:</span><span class='what'>?</span>
                    <div class="what_body">
                        <p>
                            Заполняется заявителем, максимальная мощность энергопринимающих устройств которого составляет свыше 15 и до 150 кВт включительно (с учетом ранее присоединенной в данной точке присоединения мощности).
                        </p>
                    </div><br>
                    <br>а) вариант 1, при котором:
                    15 процентов платы за технологическое присоединение вносятся в течение 15 дней со дня заключения договора;
                    30 процентов платы за технологическое присоединение вносятся в течение 60 дней со дня заключения договора, но не позже дня фактического присоединения;
                    45 процентов платы за технологическое присоединение вносятся в течение 15 дней со дня фактического присоединения;
                    10 процентов платы за технологическое присоединение вносятся в течение 15 дней со дня подписания акта об осуществлении технологического присоединения;
                    <br><br>б) вариант 2, при котором:
                    авансовый платеж вносится в размере 5 процентов размера платы за технологическое присоединение;
                    осуществляется беспроцентная рассрочка платежа в размере 95 процентов платы за технологическое присоединение с условием ежеквартального внесения платы равными долями от общей суммы рассрочки на период до 3 лет со дня подписания сторонами акта об осуществлении технологического присоединения.
                    10. Гарантирующий поставщик (энергосбытовая организация), с которым планируется заключение договора энергоснабжения (купли-продажи электрической энергии (мощности))
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6">
                        <span class="star_red">*</span>(вариант 1, вариант 2 – указать нужное)
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" inputvalue="17" name="FIELD_17" value='<?=$_POST["FIELD_17"]?>' require>
                    </div>
                </div>
            </div>
            <div class="step_item_block">
                <div class="step_item_inputs_heder">
                    Сроки проектирования и поэтапного введения в эксплуатацию энергопринимающих устройств (в
                    том числе по этапам и очередям) и планируемое распределение максимальной мощности,
                    сроков ввода, набора нагрузки и сведения о категории надежности электроснабжения при
                    вводе энергопринимающих устройств по этапам и очередям:
                </div>
                <div class="row input_table">
                    <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 column_table">
                        <div class="col-xs-12 column_heder"> <span nameinput="18">Этап/
                            очередь строитель-ства</span>
                        </div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="18" name="FIELD_18_1" value='<?=$_POST["FIELD_18_1"]?>'></div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="18" name="FIELD_18_2" value='<?=$_POST["FIELD_18_2"]?>'></div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="18" name="FIELD_18_3" value='<?=$_POST["FIELD_18_3"]?>'></div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 column_table">
                        <div class="col-xs-12 column_heder"> <span nameinput="19">Планируемый срок проектирования (месяц, год)</span>
                        </div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="19" name="FIELD_19_1" value='<?=$_POST["FIELD_19_1"]?>'></div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="19" name="FIELD_19_2" value='<?=$_POST["FIELD_19_2"]?>'></div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="19" name="FIELD_19_3" value='<?=$_POST["FIELD_19_3"]?>'></div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 column_table">
                        <div class="col-xs-12 column_heder"> <span nameinput="20">Планируемый срок ввода в эксплуатацию (месяц,
                            год)</span>
                        </div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="20" name="FIELD_20_1" value='<?=$_POST["FIELD_20_1"]?>'></div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="20" name="FIELD_20_2" value='<?=$_POST["FIELD_20_2"]?>'></div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="20" name="FIELD_20_3" value='<?=$_POST["FIELD_20_3"]?>'></div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 column_table">
                        <div class="col-xs-12 column_heder"> <span nameinput="21">Максимальная мощность на этапе/очереди
                            (нарастающим итогом), кВт</span>
                        </div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="21" name="FIELD_21_1" value='<?=$_POST["FIELD_21_1"]?>'></div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="21" name="FIELD_21_2" value='<?=$_POST["FIELD_21_2"]?>'></div>
                        <div class="col-xs-4 col-sm-12 col-md-4 col-lg-12 column_input"><input inputvalue="21" name="FIELD_21_3" value='<?=$_POST["FIELD_21_3"]?>'></div>
                    </div>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6">
                        <span class="star_red">*</span><span nameinput="22">Гарантирующий поставщик (энергосбытовая организация), с которым планируется заключение договора энергоснабжения (купли-продажи электрической энергии (мощности)</span>
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" inputvalue="22" name="FIELD_22" value='<?=$_POST["FIELD_22"]?>' require>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <a class="back_step">НАЗАД</a>
            </div>
            <div class="col-xs-6"><a class="next_step">ДАЛЕЕ</a>
            <div class="star_description"><span class="star_red">*</span> — обязательные поля</div>
        </div>
    </div>
    <div class="step_item">
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
                    <div class="col-xs-6"><span nameinput="23">Описание документа</span></div>
                    <div class="col-xs-6"><input class="inp" type="text" inputvalue="23" name="FIELD_23_1" value='<?=$_POST["FIELD_23_1"]?>'></div>
                </div>
            </div>
            <div class="row step_item_inputs">
                <div class="col-xs-12 col-sm-6  file_input">
                    <input type="file" value="Прикрепить файл" name="FILE_2">
                    <a><img src="img/srepka.png">Прикрепить файл</a>
                </div>
                <div class="col-xs-12 col-sm-6 ">
                    <div class="col-xs-6">Описание документа</div>
                    <div class="col-xs-6"><input class="inp" type="text" inputvalue="23" name="FIELD_23_2" value='<?=$_POST["FIELD_23_2"]?>'></div>
                </div>
            </div>
            <div class="row step_item_inputs">
                <div class="col-xs-12 col-sm-6  file_input">
                    <input type="file" value="Прикрепить файл" name="FILE_3">
                    <a><img src="img/srepka.png">Прикрепить файл</a>
                </div>
                <div class="col-xs-12 col-sm-6 ">
                    <div class="col-xs-6">Описание документа</div>
                    <div class="col-xs-6"><input class="inp" type="text" inputvalue="23" name="FIELD_23_3" value='<?=$_POST["FIELD_23_3"]?>'></div>
                </div>
            </div>
            <div class="row step_item_inputs">
                <div class="col-xs-12 col-sm-6  file_input">
                    <input type="file" value="Прикрепить файл" name="FILE_4">
                    <a><img src="img/srepka.png">Прикрепить файл</a>
                </div>
                <div class="col-xs-12 col-sm-6 ">
                    <div class="col-xs-6">Описание документа</div>
                    <div class="col-xs-6"><input class="inp" type="text" inputvalue="23" name="FIELD_23_4" value='<?=$_POST["FIELD_23_4"]?>'></div>
                </div>
            </div>
            <div class="row step_item_inputs">
                <div class="col-xs-6">
                    <span class="star_red">*</span><span nameinput="24">Фамилия Имя Отчество
                    заявителя</span>
                </div>
                <div class="col-xs-6">
                    <input class="input_steps" type="text" inputvalue="24" name="FIELD_24" value='<?=$_POST["FIELD_24"]?>' require>
                </div>
            </div>
            <div class="row step_item_inputs">
                <div class="col-xs-6">
                    <span class="star_red">*</span><span nameinput="25">Контактный телефон
                    заявителя</span>
                </div>
                <div class="col-xs-6">
                    <input class="input_steps" type="text" inputvalue="25" name="FIELD_25" value='<?=$_POST["FIELD_25"]?>' require>
                </div>
            </div>
            <div class="row step_item_inputs">
                <div class="col-xs-6">
                    <span class="star_red">*</span><span nameinput="26">Должность</span>
                </div>
                <div class="col-xs-6">
                    <input class="input_steps" type="text" inputvalue="26" name="FIELD_26" value='<?=$_POST["FIELD_26"]?>' require>
                    <input type="hidden" value="Заявка на присоединение" name="formname">
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <a class="back_step">НАЗАД</a>
        </div>
        <div class="col-xs-6"><a class="send_form" >ОТПРАВИТЬ</a>
        <div class="star_description"><span class="star_red">*</span> — обязательные поля</div>
    </div>
</div>
</form>
</div>
 <div class="steps_block">
  <div class="step_item step_item_inputs_message_send" <?=(isset($arResult["MESSAGE_SEND"]) && $arResult["MESSAGE_SEND"] == 'OK') ? '' : 'style="display:none"'?>>
    <div class="col-xs-12 step_item_inputs_heder">
    <h3>Спасибо за Ваше обращение!</h3>
    </div>
  </div>
 </div>
</div>
