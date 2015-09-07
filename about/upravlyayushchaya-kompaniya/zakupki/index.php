<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Закупки");
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

			<div class="infrom_bye">
				<div class="infrom_b_name">Информация о закупках</div>
				<div class="row infrom_b_body">
					<form>
						<div class="col-md-3"><input type="text" placeholder="Поиск"></div>
						<div class="col-md-3">
							<div><select>
									<option>Способ закупки</option>
									<option>Пункт 2</option>
								</select></div>
						</div>
						<div class="col-md-3">
							<div><select>
									<option>Статус закупки</option>
									<option>Пункт 2</option>
								</select></div>
						</div>
						<div class="col-md-3">
							<button>Отобрать</button>
						</div>
					</form>
				</div>
			</div>
		</section>

		<section class="table_section">

			<div class="all_tables">
				<div class="active_table">
					<span>2015</span>
					<span>всего документов 58</span>
				</div>
				<div class="other_tables">
					<a>2014</a>
					<a>2013</a>
					<a>2012</a>
					<a>2011</a>
					<a>2010</a>
				</div>
				<div class="close_table">
					<a>свернуть <img src="<?=SITE_TEMPLATE_PATH?>/img/table_close.png"></a>
				</div>
			</div>

			<div class="table-responsive table_bye">
				<table class="table table-hover table-striped">
					<thead>
					<tr>
						<th>
							Предмет закупки
						</th>
						<th>
							Цена договора
						</th>
						<th>
							Организатор закупки
						</th>
						<th>
							Подача заявок на участие в закупке
						</th>
						<th>
							Статус закупки
						</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>
							<a href="/about/upravlyayushchaya-kompaniya/zakupki/okazanie-informatsionno-analiticheskikh-uslug/"><div class="td_name">Закупка у единственного поставщика</div></a>
							<div class="td_number">№ ЕП-11/2015/17</div>
							Закупка у единственного поставщика услуг по техническому обслуживанию системы внутреннего
							противопожарного водопровода, включая насосы, в административном здании ОАО «ОЭЗ» по адресу:
							Москва, Тверской бульвар, д. 6
						</td>
						<td>
							288 000,00 руб.
						</td>
						<td>
							ОАО «ОЭЗ»
						</td>
						<td>
							30.04.2015 - 30.04.2015
						</td>
						<td>
							Текущие
						</td>
					</tr>

					<tr>
						<td><a href="/about/upravlyayushchaya-kompaniya/zakupki/okazanie-informatsionno-analiticheskikh-uslug/"><div class="td_name">Закупка у единственного поставщика</div></a>
							<div class="td_number">№ ЕП-11/2015/17</div>
							Закупка у единственного поставщика услуг по техническому обслуживанию системы внутреннего
							противопожарного водопровода, включая насосы, в административном здании ОАО «ОЭЗ» по адресу:
							Москва, Тверской бульвар, д. 6
						</td>
						<td>
							288 000,00 руб.
						</td>
						<td>
							ОАО «ОЭЗ»
						</td>
						<td>
							30.04.2015 - 30.04.2015
						</td>
						<td>
							Текущие
						</td>
					</tr>

					<tr>
						<td><a href="/about/upravlyayushchaya-kompaniya/zakupki/okazanie-informatsionno-analiticheskikh-uslug/"><div class="td_name">Закупка у единственного поставщика</div></a>
							<div class="td_number">№ ЕП-11/2015/17</div>
							Закупка у единственного поставщика услуг по техническому обслуживанию системы внутреннего
							противопожарного водопровода, включая насосы, в административном здании ОАО «ОЭЗ» по адресу:
							Москва, Тверской бульвар, д. 6
						</td>
						<td>
							288 000,00 руб.
						</td>
						<td>
							ОАО «ОЭЗ»
						</td>
						<td>
							30.04.2015 - 30.04.2015
						</td>
						<td>
							Текущие
						</td>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="table_pagination">
				<a class="prev_pagination"></a>

				<div class="pagintaion_numbers"><a>1</a> <a>2</a> <a>3</a></div>
				<a class="next_pagination"></a>
			</div>
		</section>

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

	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
