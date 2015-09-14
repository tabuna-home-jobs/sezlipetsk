<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Часто задаваемые вопросы");
?>

<div class="main container">
    <div class="col-xs-12 col-md-6">
        <!--Хеебный крош-->
		<?$APPLICATION->IncludeComponent(
			"custom:breadcrumb",
			"",
			Array(
				"COMPONENT_TEMPLATE" => "oez",
				"START_FROM" => "0",
				"PATH" => "",
				"SITE_ID" => "s1"
			)
		);
		?>
		<!--Хлебные крошки-->
		<h1><?=$APPLICATION->GetTitle();?></h1>

        <div class="scroll-content">
            <div class="">
                РОСОЭЗ – это масштабный федеральный проект по привлечению инвестиций, передовых научных,
                производственных и управленческих технологий.<br/><br/>

                РОСОЭЗ предоставляют компаниям уникальную возможность использовать все инвестиционные преимущества
                России, минуя при этом типичные российские проблемы – нерыночные факторы влияния на бизнес и
                неэффективное администрирование.<br/><br/>

                В данном разделе вы найдёте информацию о том, как начать свой бизнес в российских особых экономических
                зонах.
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 login_part_right max_height_block">
        <div class="login_form_container padding_block">
            <div class="login_form_heder ">
                <h2 class="h20px_light">ЗАДАТЬ ВОПРОС</h2>
            </div>
            <form>
                <div class="row step_item_inputs">
                    <div class="col-xs-6 labels_left">
                        <span class="star_red">*</span>Фамилия Имя
                        Отчество
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" required>
                    </div>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6 labels_left">
                        <span class="star_red">*</span>Наименование
                        организации
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" required>
                    </div>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6 labels_left">
                        <span class="star_red">*</span>E-mail
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" required>
                    </div>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6 labels_left">
                        Выберите тему
                    </div>
                    <div class="col-xs-6 inputs_right">
                        <select>
                            <option>Выберите тему</option>
                        </select>
                    </div>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6 labels_left">
                        Сообщение
                    </div>
                    <div class="col-xs-6 ">
                        <textarea></textarea>
                    </div>
                </div>
                <div class="row step_item_inputs">
                    <div class="col-xs-6 labels_left">
                        Введите символы
                        с картинки
                    </div>
                    <div class="col-xs-6">
                        <input class="input_steps" type="text" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 labels_left">

                    </div>
                    <div class="col-xs-6 inputs_right">
                        <button class="">ОТПРАВИТЬ</button>
                        <div class="star_description"><span class="star_red">*</span> — обязательные поля</div>
                    </div>

                </div>
            </form>
        </div>
    </div>

</div>
<?$APPLICATION->IncludeComponent(
	"custom:news.list_faq", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "information",
		"IBLOCK_ID" => "30",
		"NEWS_COUNT" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>



</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
