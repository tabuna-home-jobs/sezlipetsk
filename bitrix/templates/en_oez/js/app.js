$(window).resize(function () {



    if ($('.left_part ').css('position')=='absolute') {
        var height_scroll = $('.left_part ').next().outerHeight();
        $('.scroll-wrapper').height(height_scroll/1.78);
    }


    //размеры модальной формы
    $('.remember_form').css('max-height', $(window).height());
    /*
     //блок по высоте родителя
     var max_height_block = $('.max_height_block').parent().height();
     var max_width_block = $('.max_height_block').parent().width();
     var css = $('.max_height_block').outerWidth(true);
     if (css < max_width_block) {
     $('.max_height_block').css('min-height', max_height_block);
     } else {
     $('.max_height_block').css('min-height', '300px');
     }
     */

    //ховер кружок на блоках
    $('.item_block').each(function () {

        var height = $(this).parent().height();
        var width = $(this).parent().width();
        $(this).find('.hover_container').css({'width': width, 'height': width});
    });

    $('.inform_item').each(function () {
        var height = $(this).height();
        var width = $(this).find('.inform_text').width();
        $(this).find('.inform_text').find('.hover_container').css({'width': width, 'height': width});
    });


    //В гелереи выделение элементов
    var w = $('.galery_item>div').width();
    $('.galery_item>div').height(w);

});
$(window).load(function (){
    myScrolling();
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        myScrolling();

    });
    setEqualHeight($(".tech-content .tab-pane > .row > div"));
    jQuery('.scrollbar-outer').scrollbar();
    if (jQuery('.scrollbar-outer').hasClass('resize_scroll')){
        var h_o = $('.lin').height();
        if ($('.left_part ').css('position')=='absolute') {
            var height_scroll = $('.left_part ').next().outerHeight();
            $('.scroll-wrapper').height(height_scroll/1.78);
        }
        var h_o0 = $('.scroll-wrapper').outerHeight();
        if (h_o < h_o0) {
            $('.scroll-y').hide();

        }
    }
    setEqualHeight($(".tech-content .tab-pane > .row > div"));
    //делаем блокис прокруткой в раскрытии информации одной высоты

    $('.rs_files .scrollbar-outer').css('max-height',$('.navigacia').height());

    //Скрываем скрол если содержимое меньше блока
    // noscroll_rs();



});


$(document).ready(function () {

//Переключение табов с помощью get-параметров
    var id = $.getUrlVar('id');
    var href = $.getUrlVar('href');
    if(id && href){

        $('#myTabs>li').each(function(){
            $(this).removeClass('active');

        });
        $('#'+id+'-tab').parent().addClass('active');
        $('#main_content_tabs>div').removeClass('active in');
        $ ('#'+ $('#myTabs>.active>a').attr('aria-controls')).addClass('active in');
        $('#r'+id+'-tabs li>a').each(function(){
            $(this).parent().removeClass('active');

            if( $(this).attr('href') == ('#'+href) ){
                //alert($(this).attr('href'));
                $(this).parent().addClass('active');
            }
        });
        $('#r'+id+' .innerpanel>.tab-content>div').removeClass('active in');
        $('#'+href).addClass('active in');

    }

    $('.scrollbar-outer1').scrollbar();

    $('.file_input a').click(function(){
        var a = $(this);

        a.parent().find('input[type="file"]').on('change', function() {

            var val = $(this).val();
            val = val.split('\\');

            a.text(val[val.length-1]);
        });
        a.parent().find('input[type="file"]').click();
    });

    //hover на блоках

    $('.item_block_a').mouseenter(function () {
        $(this).parent().addClass('item_block_h')

        $('.item_block_a').mouseleave(function () {
            $(this).parent().removeClass('item_block_h');

        });
    });
    $('.item_block_a_small').mouseenter(function () {
        $(this).parent().addClass('item_block_h')
        $('.item_block_a_small').mouseleave(function () {
            $(this).parent().removeClass('item_block_h');
        });
    });

    //вопрос-аккордион
    $('.answer_item_name').click(function () {
        if ($(this).hasClass('answer_show')) {

        } else {
            $('.answer_item_name>span').each(function () {
                $(this).removeClass('glyphicon-menu-up');
            });
            $('.answer_item_body').hide('slow');
            $(this).find('span').addClass('glyphicon-menu-up');
            $(this).next().css('opacity', 0).show('slow');
            $(this).next().animate({'opacity': 1}, 300);
            $('.answer_show').removeClass('answer_show');
            $(this).addClass('answer_show');
        }

    });


    //делаем блокис прокруткой в раскрытии информации одной высоты

    //$('.rs_files .scrollbar-outer').css('max-height',$('.left_cat_dop').height());
    //$('#main_content_tabs .scrollbar-outer').css('max-height',$('.navigacia').height());

    //переключаем шаги заявки
    /*$('.next_step').click(function(){
     var but = $(this);
     var flag  = 0;
     but.parent().find('.step_item_block').find('.step_item_inputs').find('div').find('.input_steps').each(function(){
     if($(this).val()==''){
     $(this).addClass('error_inp');
     flag = 1;
     } else {
     if ($(this).hasClass('error_inp')) {
     $(this).removeClass('error_inp').addClass('green_input');
     }
     }
     });
     if (flag==0){
     but.parent().removeClass('step_item_active').next().addClass('step_item_active');
     $('.active_step').removeClass('active_step').next().addClass('active_step');
     }

     });*/
    // $('.next_step').click(function () {
    //     var but = $(this);
    //     but.parent().parent().removeClass('step_item_active').next().addClass('step_item_active');
    //     $('.active_step').removeClass('active_step').next().addClass('active_step');
    //     var table_height = 0;
    //     $('.column_heder').each(function () {
    //         var height = $(this).height();
    //         if (table_height < height) {
    //             table_height = height;
    //         }
    //     });
    //     $('.column_heder').height(table_height);
    //     $('.textarea_input').each(function () {
    //         var height = $(this).parent().prev().height();
    //         $(this).height(height);
    //     });
    // });
    // $('.back_step').click(function () {
    //     var but = $(this);
    //     but.parent().parent().removeClass('step_item_active').prev().addClass('step_item_active');
    //     $('.active_step').removeClass('active_step').prev().addClass('active_step');
    // });

    /*
     //блок по высоте родителя
     var max_height_block = $('.max_height_block').parent().height();
     var max_width_block = $('.max_height_block').parent().width();
     var css = $('.max_height_block').outerWidth(true);
     if (css < max_width_block) {
     $('.max_height_block').css('min-height', max_height_block);
     } else {
     $('.max_height_block').css('min-height', '300px');
     }
     */

    //смена класса в блоке ВХОД/РЕГИСТРАЦИЯ
    $('.login_punct').click(function () {
        $('.login_punct').removeClass('active_login_punkt');
        $(this).addClass('active_login_punkt');
    });

    //Форма напомниания пароля
    $('#remember_pass').click(function () {
        $('.remember_form_main').addClass('remember_form_main_active');
    });

    $('#remember_pass_LK').click(function () {
        $('.remember_form_main_LK').addClass('remember_form_main_active');
        return false;
    });
    $('#remember_pass2').click(function () {
        $('.remember_form_main2').addClass('remember_form_main_active');
    });
    $('.close_r_f').click(function () {
        $('.remember_form_main').removeClass('remember_form_main_active');
        $('.remember_form_main2').removeClass('remember_form_main_active');
        $('.remember_form_main3').removeClass('remember_form_main_active');
        $('.remember_form_main_LK').removeClass('remember_form_main_active');

    });


    //Форма со страницы контактов
    $('#contacts_link').click(function () {
        $('.remember_form_main3').addClass('remember_form_main_active');
    });

//Работа галаереи
    /*
     $('.in_galery_foto').click(function () {
     var counter = 0;
     $('.galery_item>div>img').each(function () {
     $(this).attr('id', 'dz' + counter);
     counter++;
     });
     var src = $(this).prev().attr('src');
     var id = $(this).prev().attr('id');
     $('.container_img').removeClass('hidden_galery').find('div').find('div').find('img').attr({
     'src': src,
     'rel': id
     }).css('max-height', $(window).height() * 0.85);

     });
     $('.next_galery').click(function () {
     var id = $(this).parent().prev().attr('rel');
     id = id.substr(2, id.length);
     id = parseInt(id) + 1;

     var src = $('#dz' + id + '').attr('src');
     if (src == undefined) {
     var src = $('#dz0').attr('src');
     var id = $('#dz0').attr('id');
     id = id.substr(2, id.length);
     id = parseInt(id) + 1;
     }
     $(this).parent().prev().attr('src', src);
     $(this).parent().prev().attr('rel', 'dz' + id);
     });
     $('.prev_galery').click(function () {
     var id = $(this).parent().prev().attr('rel');
     id = id.substr(2, id.length);
     id = parseInt(id) - 1;

     var src = $('#dz' + id + '').attr('src');
     if (src == undefined) {
     var src = $('.galery_item>div>img').last().attr('src');
     var id = $('.galery_item>div>img').last().attr('id');
     alert(src);
     id = id.substr(2, id.length);
     id = parseInt(id) - 1;
     }

     $(this).parent().prev().attr('src', src);
     $(this).parent().prev().attr('rel', 'dz' + id);
     });
     $('.close_box').click(function () {
     $('.galery_item>div>img').each(function () {
     $(this).attr('id', '');
     });
     $('.container_img').addClass('hidden_galery');
     });
     */

    //В разделе СМИ О НАС мотает новость. (Хреново мотает ;(  )
    $('.smi_item').first().addClass('smi_item_active');
    $('.smi_right>img').first().show();
    $('.smi_next').click(function () {
        var active = $('.smi_item_active');
        var img = active.next().attr('rel');
        if (active.next().length === 0) {
            active.removeClass('smi_item_active').parent().find('div').first().addClass('smi_item_active');
            $('.smi_right>img').hide();
            $('.smi_right>img').first().show();
        } else {
            active.removeClass('smi_item_active').next().addClass('smi_item_active');
            $('#' + img + '').show().prev().hide();
        }

    });
    $('.smi_prev').click(function () {
        var active = $('.smi_item_active');
        var img = active.prev().attr('rel');
        if (active.prev().length === 0) {
            $('.smi_item').last().addClass('smi_item_active');
            active.removeClass('smi_item_active');
            $('.smi_right>img').hide();
            $('.smi_right>img').last().show();
        } else {
            active.removeClass('smi_item_active').prev().addClass('smi_item_active');
            $('#' + img + '').show().next().hide();
        }

    });

    //переключение картинок в табах
    $('.active_img').first().show();
    $('.nav_galery>li>a>span>img').first().hide();
    $('.nav_galery>li>a').click(function () {
        $('.active_img').hide();
        $('.nav_galery>li>a>span>img:first-child').show();
        $(this).find('span>img').first().hide();
        $(this).find('span>.active_img').show();
    });




    //В гелереи выделение элементов
    /*
     var w = $('.galery_item>div').width();
     $('.galery_item>div').height(w);*/
    /*


     $('.galery_item>div').mouseenter(function () {
     $(this).find('div').show();
     });
     $('.galery_item>div').mouseleave(function () {
     $(this).find('div').hide();
     });*/

    //ховеры на блоках в виде кружка
    $('.item_block').each(function () {
        var height = $(this).parent().height();
        var width = $(this).parent().width();
        $(this).find('.hover_container').css({'width': width, 'height': width});
    });
    $('.inform_item').each(function () {

        var height = $(this).height();
        var width = $(this).find('.inform_text').width();
        $(this).find('.inform_text').find('.hover_container').css({'width': width, 'height': width});
    });
    $('.inform_item').mouseenter(function () {
        $(this).find('.inform_text').find('.hover').addClass('hover_animate');
    });
    $('.inform_item').mouseleave(function () {
        $(this).find('.inform_text').find('.hover').removeClass('hover_animate');
    });

    $('.item_block').mouseenter(function () {
        $(this).find('.hover').addClass('hover_animate');

    });
    $('.item_block').mouseleave(function () {
        $(this).find('.hover').removeClass('hover_animate');
    });

    //Слайдер наши партнёры на главной
    $('.slider_partners').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.razdel>.razdel_name').click(function(){

        if( $(this).parent().children('.razdel_desc').css('display') == "block" ){

            $(this).parent().children('.razdel_desc_active').removeClass('razdel_desc_active');
            $(this).children('span').removeClass('glyphicon-menu-up');

        }else{
            // alert($(this).parent().children('.razdel_desc').css('display'));
            $(this).parent().children('.razdel_desc').addClass('razdel_desc_active');
            $(this).children('span').addClass('glyphicon-menu-up');
        }
    });

    //ховер для блока "Основные отрасли экономики"
    $('.otrasl>.otrasl_item').mouseover(function(){
        $(this).children('div').children('.red').css('display','none');
        $(this).children('div').children('.black').css('display','inline-block');

    });
    $('.otrasl>.otrasl_item').mouseout(function(){
        $(this).children('div').children('.black').css('display','none');
        $(this).children('div').children('.red').css('display','inline-block');

    });

});





function newsLoader(p){
    var o = this;
    this.root = $(p.root);
    this.newsBlock = $(p.newsBlock, this.root);
    this.newsLoader = $(p.newsLoader);
    this.ajaxLoader = $(p.ajaxLoader);
    this.curPage = 1;
    this.loadSett = (p.loadSett);
    // загружаем дополнительные новости
    this.loadMoreNews = function(){
        var loadUrl = location.href;
        if(location.search != ''){
            loadUrl += '&';
        }
        else{
            loadUrl += '?';
        }
        loadUrl  += 'PAGEN_'+ o.loadSett.navNum +'=' + (++o.curPage);
        o.ajaxLoader.show();
        $('.dop_smi').attr('style','margin-top: 50px;');
        $.ajax({
            url: loadUrl,
            type: "POST",
            data:{
                AJAX: 'Y'
            }
        }).done(function(html){
            //alert(html);
            var s1 = html.split('<div class="row smi_more_blocks">');
            var s2 = s1[1].split('</div><div class="dop_smi">');
            o.newsBlock.append(s2[0]);
            o.ajaxLoader.hide();
            $('.dop_smi').attr('style','margin-top: 0;');

            if(o.curPage == o.loadSett.endPage){
                o.newsLoader.hide();
            }
        });
    }
    this.init = function(){
        o.newsLoader.click(function(event){
            o.loadMoreNews();
            event.preventDefault();
        })
    }
}




//Парсер get-параметров
$.extend({
    getUrlVars: function(){
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    },
    getUrlVar: function(name){
        return $.getUrlVars()[name];
    }
});



function noscroll_rs(){
    if( $('.active>.scroll-wrapper').height() <= $('.navigacia').height() ){
        $('.active>.scroll-wrapper>.scroll-content').css('max-height','auto');
        $('.active>.scroll-wrapper>.scroll-content').removeClass('scrollbar-outer');
        $('.active>.scroll-wrapper>.scroll-content').removeClass('scroll-content');
        $('.active>.scroll-wrapper').css('max-height','auto');
        $('.active>.scroll-wrapper').removeClass('scrollbar-outer');
        $('.active>.scroll-wrapper').removeClass('scroll-wrapper');
    }
}

//Делает колонки в блоках типа "Технологическое присоединенние/подключение" одной высоты
function setEqualHeight(columns)
{
    var tallestcolumn = 0;
    columns.each(
        function()
        {
            currentHeight = $(this).height();
            if(currentHeight > tallestcolumn)
            {
                tallestcolumn = currentHeight;
            }
        }
    );
    columns.height(tallestcolumn);
}


function myScrolling(){

    if(($('.active .active .my').height() + $('.active .active h3').height() ) > $('.active .navigacia').height() ){
        // alert('hhhh');
        $('.active .active .my').addClass('scrollbar-outer');
        jQuery('.scrollbar-outer').scrollbar();
        $('.tab-content>.active>.row').height( $('.active .navigacia').height());
        setEqualHeight($(".tech-content .tab-pane > .row > div"));
    }
}

