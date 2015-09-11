<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Социальная инфраструктура региона");
?>
<div class="main">

<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "sots_infr", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "information",	// Тип инфоблока
		"IBLOCK_ID" => "31",	// Инфоблок
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],	// Код раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
		"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRICE_CODE" => "",	// Тип цены
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
		"LABEL_PROP" => "-",	// Свойство меток товара
	),
	false
);?>

	<section class="container">
		<div class="row">
			<div class="col-md-6 ">
				<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
					<div class="item_block">
						<a class="item_block_a" href="/investor/sotsialnaya-infrastruktura-oez/obrazovanie/"><div class="hover_container">
							<div class="hover"></div>
						</div>
						<div class="item_bod">
							<div class="item_name">Образование</div>
						</div>
						<div class="block_icon">
							<span
								class="item_block_img">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(1)white.png"/>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(1).png"/>
							</span>
						</div></a>
					</div>
				</div>
				<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
					<div class="item_block">
						<a class="item_block_a" href="/investor/sotsialnaya-infrastruktura-oez/meditsina/"><div class="hover_container">
							<div class="hover"></div>
						</div>
						<div class="item_bod">
							<div class="item_name">Медицина</div>
						</div>
						<div class="block_icon">
							<span
								class="item_block_img">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(4)white.png"/>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(4).png"/>
							</span>
						</div></a>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 block_item">
					<div class="item_block">
						<a class="item_block_a" href="/investor/sotsialnaya-infrastruktura-oez/"><div class="hover_container">
							<div class="hover"></div>
						</div>
						<div class="item_bod">
							<div class="item_name">Полезные ссылки на бизнес-сервисы</div>
						</div>
						<div class="block_icon">
							<span
								class="item_block_img">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(5)white.png"/>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(5).png"/>
							</span>
						</div></a>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 block_item">
					<div class="item_block">
						<a class="item_block_a" href="/investor/sotsialnaya-infrastruktura-oez/"><div class="hover_container">
							<div class="hover"></div>
						</div>
						<div class="item_bod">
							<div class="item_name">Жилье</div>
						</div>
						<div class="block_icon">
							<span
								class="item_block_img">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(7)white.png"/>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(7).png"/>
							</span>
						</div></a>
					</div>
				</div>
			</div>
			<div class="col-md-6 ">
				<div class="col-sm-6 col-xs-6 block_item">
					<div class="item_block hight_item_block">
						<a class="item_block_a" href="/investor/sotsialnaya-infrastruktura-oez/kultura/"><div class="hover_container">
							<div class="hover"></div>
						</div>
						<div class="item_bod">
							<div class="item_name">Культурная среда</div>
							<div class="item_dop">Для получения льгот и преференций компании или частному предпринимателю необходимо получить статус резидента</div>
						</div>
						<div class="block_icon">
							<span
								class="item_block_img">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(3)white.png"/>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(3).png"/>
							</span>
						</div></a>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 block_item">
					<div class="item_block hight_item_block">
						<a class="item_block_a" href="/investor/sotsialnaya-infrastruktura-oez/otdykh-i-sport/"><div class="hover_container">
							<div class="hover"></div>
						</div>
						<div class="item_bod">
							<div class="item_name">Отдых и спорт</div>
							<div class="item_dop">Для получения льгот и преференций компании или частному предпринимателю необходимо получить статус резидента</div>
						</div>
						<div class="block_icon">
							<span class="item_block_img">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(2)white.png"/>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_15(2).png"/>
							</span>
						</div></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>