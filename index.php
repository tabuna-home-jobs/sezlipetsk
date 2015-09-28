<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Особая Экономическая Зона");
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
?>
<!--Верхний слайдер-->
<?$APPLICATION->IncludeComponent(
	"custom:news.list",
	".default", 
	array(
		"IBLOCK_ID" => "MAIN_SLIDER",
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "20",
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
		"AJAX_OPTION_ADDITIONAL" => "undefined",
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
<!--Верхний слайдер-->
<div class="main container">
 <section class="main_blocks row">
  <div class="col-lg-6 col-md-8 col-xs-12 blocks_left">
   <div class="row">
    <div class="col-xs-12 item_wrap">
     <div class="col-sm-6 col-xs-12 block_item">
      <div class="item_block">
       <a href="http://ros.t198.topaz.fastwebserver.de/test4/output/1_3_1.html" class="item_block_a">
        <div class="hover_container">
         <div class="hover"></div>
        </div>
        <div class="item_bod">
         <div class="item_name">Виртуальный тур</div>
         <div class="item_dop">по ОЭЗ ППТ «Липецк»</div>
        </div>
        <div class="block_icon">
            <span class="item_block_img">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/compas.png"/>
              <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/compas_2.png"/>
            </span>
        </div>
       </a>
      </div>
     </div>
     <div class="col-sm-6 col-xs-12 block_item">
      <div class="item_block">
       <a href="/about/rezidenty/"  class="item_block_a">
        <div class="hover_container">
         <div class="hover"></div>
        </div>
        <div class="item_bod">
         <div class="item_name">Резиденты ОЭЗ</div>
        </div>
        <div class="block_icon">
            <span class="item_block_img">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/people.png"/>
              <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/people_2.png"/>
            </span>
        </div></a>
      </div>
     </div>
    </div>
    <div class="col-xs-12 item_wrap">
     <div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
      <div class="item_block">
       <a href="/about/raspolozhenie-oez/" class="item_block_a_small">
        <div class="hover_container">
         <div class="hover"></div>
        </div>
        <div class="item_bod">
         <div class="item_name smal_item_name">Расположение</div>
        </div>
        <div class="block_icon_arrow">
         <span class="glyphicon glyphicon-menu-right"></span>
        </div>
       </a>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
      <div class="item_block">
       <a href="/about/upravlyayushchaya-kompaniya/"  class="item_block_a_small"><div class="hover_container">
         <div class="hover"></div>
        </div>
        <div class="item_bod">
         <div class="item_name smal_item_name">Управляющая компания</div>
        </div>
        <div class="block_icon_arrow">
         <span class="glyphicon glyphicon-menu-right"></span>
        </div></a>
      </div>
     </div>
     <div class="col-lg-6 col-xs-12 col-sm-12 col-md-12 block_item">
      <div class="item_block">
       <a class="item_block_a" id=""  href="https://docs.google.com/viewer?url=http://sezlipetsk.ru<?=SITE_TEMPLATE_PATH?>/resid.pdf" target="_blank"><div class="hover_container">
         <div class="hover"></div>
        </div>
        <div class="item_bod">
         <div class="item_name">Стать резидентом</div>
        </div>
        <div class="block_icon">
                                 <span class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/people_plus.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/people_plus_2.png"/>
                                </span>
        </div></a>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!--Последняя новость на главной-->
  <?$APPLICATION->IncludeComponent(
	"custom:news.list", 
	"main_news", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"IBLOCK_TYPE" => "information",
		"IBLOCK_ID" => "13",
		"NEWS_COUNT" => "1",
		"COMPONENT_TEMPLATE" => "main_news",
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
		"PREVIEW_TRUNCATE_LEN" => "120",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_NAME" => "Y",
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
  <!--Последняя новость на главной-->
  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 row block_stats">
   <div class="col-xs-12 news_name">Целевые показатели роста</div>
   <div class="col-xs-12 pokazateli">
	   <div class="col-sm-6 col-xs-12 col-md-12 stat_img">
		   <!--Слайдер Целевые показатели роста-->
		   <?$APPLICATION->IncludeComponent(
			   "custom:news.list",
			   "pokazat_rosta",
			   array(
				   "IBLOCK_ID" => "POKAZAT_ROSTA",
				   "COMPONENT_TEMPLATE" => "pokazat_rosta",
				   "IBLOCK_TYPE" => "news",
				   "NEWS_COUNT" => "20",
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
				   "AJAX_OPTION_ADDITIONAL" => "undefined",
				   "CACHE_TYPE" => "A",
				   "CACHE_TIME" => "36000000",
				   "CACHE_FILTER" => "N",
				   "CACHE_GROUPS" => "N",
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
		   <!--Слайдер Целевые показатели роста-->
	   </div>
   </div>
  </div>
 </section>

 <!--Нижняя карусел партнеров-->
 <?$APPLICATION->IncludeComponent(
	"custom:news.list", 
	"partners", 
	array(
		"IBLOCK_ID" => "12",
		"COMPONENT_TEMPLATE" => "partners",
		"IBLOCK_TYPE" => "information",
		"NEWS_COUNT" => "40",
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
			1 => "IMG",
			2 => "IMG_HOVER",
			3 => "",
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
		"CACHE_GROUPS" => "N",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
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
 <!--Нижняя карусел партнеров-->

</div>


<!-- Модалка-->
<div class="remember_form_main3">
	<div class="remember_form_cell">
		<div class="remember_form">
			<div class="close_r_f_container"><a class="close_r_f"></a></div>


			<img src="<?=SITE_TEMPLATE_PATH?>/img/resid.png" class="proezd" >

		</div>
	</div>
</div>

<!-- Модалка-->
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
