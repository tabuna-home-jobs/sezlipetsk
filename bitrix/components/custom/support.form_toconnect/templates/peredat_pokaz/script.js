$(document).ready(function() {
    $('.what').mouseenter(function(){
        $(this).next().show();
        $(this).mouseleave(function(){
            $(this).next().hide();
        });
    });

    function addDomElem(num){
        var domHtml = '<div class="row hot-block">';
        domHtml += '<div class="col-xs-3 labels_left">';
        domHtml += '<span class="star_red">*</span> <span nameinput="'+num+'">№ Прибора '+num+'</span>';
        domHtml += '</div>';
        domHtml += '<div class="col-xs-3 inputs_right">';
        domHtml += '<input type="text" name="FIELD_'+num+'" inputvalue="'+num+'" require>';
        domHtml += '</div>';
        domHtml += '<div class="col-xs-3 labels_left">';
        domHtml += '<span class="star_red">*</span> <span nameinput="'+num+num+'">Показания</span>';
        domHtml += '</div>';
        domHtml += '<div class="col-xs-3 inputs_right">';
        domHtml += '<input type="text" name="FIELD_'+num+num+'" inputvalue="'+num+num+'" require>';
        domHtml += '</div>';
        domHtml += '</div>';

        return domHtml;
    }

    $("#addP").click(function(){
        var countElems = $("#wrappDinamicElems div.row").length+1;

        if(countElems <= 15){
            $("#wrappDinamicElems").append(addDomElem(countElems));
            $(".hot-block").slideDown();
        }else{
            alert('Хватит уже');
        }
    });


    $('.send_form').click(function() {
        var but = $(this);
        var errorArr = false;
        var allMessage = but.parent().parent().parent().find('[allmessage]');
        var allMessageText = "";
        allMessage.val('');



        but.parent().parent().parent().find('[inputvalue]').each(function() {

            //Если не заполнено, ругаемся...
            if ($(this)[0].attributes.require && $(this)[0].value == '') {

                $(this).css("border", "1px solid red");
                errorArr = true;
            }


            //Ищем описание этого поля и записываем в общий контейнер
            if (!errorArr && $(this)[0].value != '') {

                if ($(this)[0].attributes.inputvalue) {

allMessageText += but.parent().parent().parent().find('[nameinput = ' + $(this)[0].attributes.inputvalue.value + ']')[0].innerText + ': ' + $(this)[0].value + ';\n\r';


                }
            }
        });
        if (!errorArr) {

            allMessage.val(allMessageText);

            $('#main_form').submit();
        }
    });
});
