<form method="post" id="main_form" enctype="multipart/form-data">
<textarea name="MESSAGE_1" allmessage style="display:none"></textarea>
<div class="login_form_heder ">
        <h2 class="h20px_light"><?=GetMessage('TITLE_OCNK');?></h2>
    </div>
    <div class="row step_item_inputs">
        <div class="col-xs-6 labels_left">
            <?=GetMessage('choose_theme');?>
        </div>
	    <span style="display: none" nameinput="3">Тема</span>
        <div class="col-xs-6 inputs_right">
            <!--<select>
                <option><?=GetMessage('choose_theme');?></option>
            </select>-->
	        <select name="FIELD_3" inputvalue="3">
		        <option value="Без темы">Выберите тему</option>
		        <option value="Электроснабжение">Электроснабжение</option>
		        <option value="Теплоснабжение">Теплоснабжение</option>
		        <option value="Газоснажение">Газоснажение</option>
		        <option value="Водоснабжение">Водоснабжение</option>
		        <option value="Водоотведениие">Водоотведениие</option>
		        <option value="Телекоммуникации">Телекоммуникации</option>

	        </select>
        </div>
    </div>
    <div class="row step_item_inputs">
        <div class="col-xs-6 labels_left">
            <span nameinput="1">
                <?=GetMessage('messs');?>
            </span>
        </div>
        <div class="col-xs-6 ">
            <input class="input_steps" type="text" inputvalue="1">
        </div>
    </div>
    <div class="row step_item_inputs">
    <div class="col-xs-6 labels_left">
        <span nameinput="2">
            <?=GetMessage('ocenka_title');?>
        </span>
    </div>
    <div class="col-xs-6">
        <div class="ocenka">
            <span class="star" data-pos="1">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/star_black.png"/>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/star.png"/>
            </span>
            <span class="star" data-pos="2">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/star_black.png"/>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/star.png"/>
            </span>
            <span class="star" data-pos="3">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/star_black.png"/>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/star.png"/>
            </span>
            <span class="star" data-pos="4">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/star_black.png"/>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/star.png"/>
            </span>
            <span class="star" data-pos="5">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/star_black.png"/>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/star.png"/>
            </span>
            <span class="ocenka_name"></span>
        </div>
    </div>
    <input type="hidden" value="0" name="assessment" inputvalue="2">
    <script type="text/javascript">
        $(document).ready(function(){
            var assessmentName = {
                '1': '<?=GetMessage('very_bad');?>',
                '2': '<?=GetMessage('bad');?>',
                '3': '<?=GetMessage('normal');?>',
                '4': '<?=GetMessage('good');?>',
                '5': '<?=GetMessage('very_good');?>'
            };

            $('.ocenka span.star').click(function(){
                var obj = $(this);
                var startObj = $('.ocenka span.star');
                var positionStar = obj.data('pos');
                //Обнуляем все активные звезды
                startObj.removeClass('active_star');
                //Ставим в инпут оценку юзверя
                $("input[name='assessment']").val(positionStar);
                //Добавляем активные звезды всем позициям до текущей
                for(var i = 0; i < positionStar; i++){
                    startObj.eq(i).addClass('active_star');
                }
                //Ставим оценку буковками
                $(".ocenka_name").text(assessmentName[positionStar]);
            });
        });
    </script>
</div>
<div class="row">
    <div class="col-xs-6 labels_left">
        <input type="hidden" value="Оценка качества обслуживания" name="formname">
    </div>
    <div class="col-xs-6 inputs_right">
        <button class="send_form"><?=GetMessage('SEND_BUTN')?></button>
    </div>

</div>
</form>
