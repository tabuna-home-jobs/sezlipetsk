<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle(" Раскрытие информации");
?>

	<div class="main container">


		<section class="block_top open_inform row">
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
			<?$APPLICATION->IncludeComponent(
	"custom:news.list_raskritie_informacii",
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "information",
		"IBLOCK_ID" => "7",
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
			<!--<div class=" col-md-6">


				<div class="left_cat_dop">
					<ul>
						<li>
							<a>
							<span>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/doc.png">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/doc_2.png">
							</span>
								<p>
									Годовые отчеты
								</p>
							</a>
						</li>
						<li>
							<a>
							<span>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/people_table.png">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/people_table_2.png">
							</span>
								<p>
									Раскрытие информации в соответствии со стандартами раскрытия информации
								</p>
							</a>
						</li>
						<li>
							<a>
							<span>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/pen.png">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/pen_2.png">
							</span>
								<p>
									Бухгалтерская отчетность
								</p>
							</a>
						</li>
						<li>
							<a>
							<span>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/afil.png">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/afil_2.png">
							</span>
								<p>
									Аффилированные лица
								</p>
							</a>
						</li>
						<li>
							<a>
							<span>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/printer.png">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/printer_2.png">
							</span>
								<p>
									Внутренние документы
								</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 files">
				<div class="files_name">Последнее обновление документа</div>
				<div class="row">
					<div class="col-md-6 file_item">
						<div class="file_name"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png"><span>2.6 Мб</span></div>
						<div class="file_date">30 августа 2014</div>
						<div class="file_descript">Годовой отчет за 2013 год</div>
					</div>
					<div class="col-md-6 file_item">
						<div class="file_name"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png"><span>2.6 Мб</span></div>
						<div class="file_date">30 августа 2014</div>
						<div class="file_descript">Годовой отчет за 2013 год</div>
					</div>
					<div class="col-md-6 file_item">
						<div class="file_name"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png"><span>2.6 Мб</span></div>
						<div class="file_date">30 августа 2014</div>
						<div class="file_descript">Годовой отчет за 2013 год</div>
					</div>
					<div class="col-md-6 file_item">
						<div class="file_name"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png"><span>2.6 Мб</span></div>
						<div class="file_date">30 августа 2014</div>
						<div class="file_descript">Годовой отчет за 2013 год</div>
					</div>
					<div class="col-md-6 file_item">
						<div class="file_name"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png"><span>2.6 Мб</span></div>
						<div class="file_date">30 августа 2014</div>
						<div class="file_descript">Годовой отчет за 2013 год</div>
					</div>
					<div class="col-md-6 file_item">
						<div class="file_name"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png"><span>2.6 Мб</span></div>
						<div class="file_date">30 августа 2014</div>
						<div class="file_descript">Годовой отчет за 2013 год</div>
					</div>
					<div class="col-md-6 file_item">
						<div class="file_name"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png"><span>2.6 Мб</span></div>
						<div class="file_date">30 августа 2014</div>
						<div class="file_descript">Годовой отчет за 2013 год</div>
					</div>
				</div>
			</div>-->
		</section>
	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
