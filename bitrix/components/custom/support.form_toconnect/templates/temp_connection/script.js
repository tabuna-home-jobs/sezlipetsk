$(document).ready(function() {
    $('.what').mouseenter(function(){
        $(this).next().show();
        $(this).mouseleave(function(){
            $(this).next().hide();
        });
    });
   /* $('#main_form').submit(function(){
        this.submit();

    });*/

    $('.next_step').click(function() {
        var but = $(this);
        var errorArr = false;
        var allMessage = but.parent().parent().find('[allmessage]');
        var allMessageText = "";
        allMessage.val('');
        but.parent().parent().find('[inputvalue]').each(function(index, element) {
            //Если не заполнено, ругаемся...
            if ($(this)[0].attributes.require && $(this)[0].value == '') {
                $(this).css("border", "1px solid red");
                errorArr = true;
            }
            //Ищем описание этого поля и записываем в общий контейнер
            if (!errorArr && $(this)[0].value != '') {
                if ($(this)[0].attributes.inputvalue) {
                    console.log(but.parent().parent().find('[nameinput = ' + $(this)[0].attributes.inputvalue.value + ']')[0]);
                    allMessageText += but.parent().parent().find('[nameinput = ' + $(this)[0].attributes.inputvalue.value + ']')[0].innerHTML + ': ' + $(this)[0].value + ';\n\r'
                }
            }
        });
        if (!errorArr) {
            allMessage.val(allMessageText);
            but.parent().parent().removeClass('step_item_active').next().addClass('step_item_active');
            $('.active_step').removeClass('active_step').next().addClass('active_step');
            var table_height = 0;
            $('.column_heder').each(function() {
                var height = $(this).height();
                if (table_height < height) {
                    table_height = height;
                }
            });
            $('.column_heder').height(table_height);
            $('.textarea_input').each(function() {
                var height = $(this).parent().prev().height();
                $(this).height(height);
            });
        }
    });
    $('.back_step').click(function() {
        var but = $(this);
        but.parent().parent().removeClass('step_item_active').prev().addClass('step_item_active');
        $('.active_step').removeClass('active_step').prev().addClass('active_step');
    });
    $('.send_form').click(function() {
        var but = $(this);
        var errorArr = false;
        var allMessage = but.parent().parent().find('[allmessage]');
        var allMessageText = "";
        allMessage.val('');
        but.parent().parent().find('[inputvalue]').each(function(index, element) {
            //Если не заполнено, ругаемся...
            if ($(this)[0].attributes.require && $(this)[0].value == '') {
                $(this).css("border", "1px solid red");
                errorArr = true;
            }
            //Ищем описание этого поля и записываем в общий контейнер
            if (!errorArr && $(this)[0].value != '') {
                if ($(this)[0].attributes.inputvalue) {
                    console.log(but.parent().parent().find('[nameinput = ' + $(this)[0].attributes.inputvalue.value + ']')[0]);
                    allMessageText += but.parent().parent().find('[nameinput = ' + $(this)[0].attributes.inputvalue.value + ']')[0].innerHTML + ': ' + $(this)[0].value + '\n\r'
                    //allMessageText += but.parent().parent().find('[nameinput = ' + $(this).attr('inputvalue') + ']').innerText + ': ' + $(this)[0].value + '\n\r';
                }
            }
        });
        if (!errorArr) {
            allMessage.val(allMessageText);
            alert('Ваша заявка отправлена!');
            $('#main_form').submit();
        }
    });
});
