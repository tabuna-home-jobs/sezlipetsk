$(document).ready(function() {
    $('.what').mouseenter(function(){
        $(this).next().show();
        $(this).mouseleave(function(){
            $(this).next().hide();
        });
    });
    $('#main_form').submit(function(){
        this.submit();
        alert('Ваша заявка отправлена!');
    });



    $('.send_form2').click(function() {
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
                    console.log(but.parent().parent().parent().find('[nameinput = ' + $(this)[0].attributes.inputvalue.value + ']')[0]);
                    allMessageText += but.parent().parent().parent().find('[nameinput = ' + $(this)[0].attributes.inputvalue.value + ']')[0].innerText + ': ' + $(this)[0].value + ';\n\r'
                }
            }
        });
        if (!errorArr) {

            allMessage.val(allMessageText);
            $('#main_form').submit();
        }
    });
});
