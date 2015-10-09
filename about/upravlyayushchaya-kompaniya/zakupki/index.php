<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Закупки");
?>
<div class="main container">
	<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"zakupki", 
	array(
		"COMPONENT_TEMPLATE" => "zakupki",
		"IBLOCK_TYPE" => "information",
		"IBLOCK_ID" => "8",
		"NEWS_COUNT" => "5",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_REVIEW" => "N",
		"USE_FILTER" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/about/upravlyayushchaya-kompaniya/zakupki/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "ADDR_ZAKAZCHIK",
			1 => "DATE_START",
			2 => "DATE_STOP",
			3 => "ZAKAZCHIK",
			4 => "ADDR_ZAKUPKA",
			5 => "NAME_DOCUMENT",
			6 => "NUM",
			7 => "ORGANISATOR",
			8 => "SPOSOB",
			9 => "STATUS",
			10 => "FORMA",
			11 => "PRICE",
			12 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "ADDR_ZAKAZCHIK",
			1 => "DATE_START",
			2 => "DATE_STOP",
			3 => "ZAKAZCHIK",
			4 => "ADDR_ZAKUPKA",
			5 => "NAME_DOCUMENT",
			6 => "NUM",
			7 => "ORGANISATOR",
			8 => "SPOSOB",
			9 => "STATUS",
			10 => "FORMA",
			11 => "PRICE",
			12 => "DOC",
			13 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => "arrows",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"FILTER_NAME" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "SPOSOB",
			1 => "STATUS",
			2 => "",
		),
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		)
	),
	false
);?>
	<? if(($_SERVER["REQUEST_URI"] == '/about/upravlyayushchaya-kompaniya/zakupki/') ||($_SERVER["REQUEST_URI"] == '/about/upravlyayushchaya-kompaniya/zakupki/2015/') || (!(strripos($_SERVER["REQUEST_URI"],'PAGEN_1')===false))){?>

	<section>

		<div class="downloads_doc row">

			<?$APPLICATION->IncludeComponent(
			"custom:news.list_documenty_i_svedenia_o_zak",
			".default",
			array(
			"COMPONENT_TEMPLATE" => ".default",
			"IBLOCK_TYPE" => "information",
			"IBLOCK_ID" => "6",
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

			<div class="col-md-12">
				<div class="servise_contact">
					<div class="servise_contact_name">Служба закупок</div>
					<div class="row serv_cont_body">
						<div class="col-xs-12 col-sm-3 serv_cont_item"><img src="<?=SITE_TEMPLATE_PATH?>/img/tel_serv.png"><span>+7 (4742) 51-53-57<br/>+7 (4742) 51-53-50</span>
					</div>
					<div class="col-xs-12 col-sm-3 serv_cont_item"><img src="<?=SITE_TEMPLATE_PATH?>/img/mail_serv.png"><span>info@sez.lipetsk.ru</span>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
	<?}?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
