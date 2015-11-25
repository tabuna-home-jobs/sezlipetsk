<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("СМИ об ОЭЗ «Липецк»");
?>
	<div class="main">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news",
				"template",
				array(
					"IBLOCK_TYPE" => "information",
					"IBLOCK_ID" => "13",
					"NEWS_COUNT" => "20",
					"USE_SEARCH" => "N",
					"USE_RSS" => "Y",
					"NUM_NEWS" => "20",
					"NUM_DAYS" => "30",
					"YANDEX" => "N",
					"USE_RATING" => "N",
					"USE_CATEGORIES" => "N",
					"USE_REVIEW" => "Y",
					"MESSAGES_PER_PAGE" => "10",
					"USE_CAPTCHA" => "Y",
					"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
					"FORUM_ID" => "4",
					"URL_TEMPLATES_READ" => "",
					"SHOW_LINK_TO_FORUM" => "N",
					"POST_FIRST_MESSAGE" => "N",
					"USE_FILTER" => "N",
					"SORT_BY1" => "PROPERTY_PARTMAIN",
					"SORT_ORDER1" => "DESC",
					"SORT_BY2" => "ACTIVE_FROM",
					"SORT_ORDER2" => "DESC",
					"CHECK_DATES" => "Y",
					"SEF_MODE" => "Y",
					"SEF_FOLDER" => "/news/",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_SHADOW" => "Y",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "N",
					"SET_TITLE" => "Y",
					"SET_STATUS_404" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"USE_PERMISSIONS" => "N",
					"PREVIEW_TRUNCATE_LEN" => "100",
					"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
					"LIST_FIELD_CODE" => array(
						0 => "",
						1 => "",
					),
					"LIST_PROPERTY_CODE" => array(
						0 => "",
						1 => "FORUM_MESSAGE_CNT",
						2 => "",
					),
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"DISPLAY_NAME" => "N",
					"META_KEYWORDS" => "-",
					"META_DESCRIPTION" => "-",
					"BROWSER_TITLE" => "NAME",
					"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
					"DETAIL_FIELD_CODE" => array(
						0 => "PREVIEW_PICTURE",
						1 => "",
					),
					"DETAIL_PROPERTY_CODE" => array(
						0 => "",
						1 => "LINK_SOURCE",
						2 => "THEME",
						3 => "",
					),
					"DETAIL_DISPLAY_TOP_PAGER" => "N",
					"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
					"DETAIL_PAGER_TITLE" => "Страница",
					"DETAIL_PAGER_TEMPLATE" => "",
					"DETAIL_PAGER_SHOW_ALL" => "N",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Новости",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => "",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"USE_SHARE" => "Y",
					"DISPLAY_IMG_WIDTH" => "80",
					"DISPLAY_IMG_HEIGHT" => "56",
					"DISPLAY_IMG_MEDIUM_WIDTH" => "136",
					"DISPLAY_IMG_MEDIUM_HEIGHT" => "101",
					"DISPLAY_IMG_DETAIL_WIDTH" => "298",
					"DISPLAY_IMG_DETAIL_HEIGHT" => "221",
					"AJAX_OPTION_ADDITIONAL" => "",
					"COMPONENT_TEMPLATE" => "template",
					"REVIEW_AJAX_POST" => "Y",
					"AJAX" => $_REQUEST["AJAX"],
					"SET_LAST_MODIFIED" => "N",
					"ADD_ELEMENT_CHAIN" => "Y",
					"SHARE_HIDE" => "N",
					"SHARE_TEMPLATE" => "",
					"SHARE_HANDLERS" => array(
						0 => "delicious",
						1 => "facebook",
						2 => "lj",
						3 => "mailru",
						4 => "twitter",
						5 => "vk",
					),
					"SHARE_SHORTEN_URL_LOGIN" => "",
					"SHARE_SHORTEN_URL_KEY" => "",
					"DETAIL_SET_CANONICAL_URL" => "N",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"SHOW_404" => "N",
					"MESSAGE_404" => "",
					"SEF_URL_TEMPLATES" => array(
						"news" => "",
						"section" => "#SECTION_CODE#/",
						"detail" => "#ELEMENT_CODE#/",
						"rss" => "rss/",
						"rss_section" => "#SECTION_CODE#/rss/",
					)
				),
				false
			);?>

	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
