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
				<div class="col-md-6">
					<h2 class="downloads_doc_h2">Документы и сведения о закупках</h2>

					<div class="downloads_doc_left">
						<div class="downloads_doc_left_name">Положение о закупках</div>
						<div class="item_download">
							<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
							<div class="item_download_date">30.09.2013</div>
							<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
						</div>
						<div class="item_download">
							<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
							<div class="item_download_date">30.09.2013</div>
							<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
						</div>
						<div class="item_download">
							<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
							<div class="item_download_date">30.09.2013</div>
							<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
						</div>
					</div>

					<div class="servise_contact">
						<div class="servise_contact_name">Служба закупок</div>
						<div class="row serv_cont_body">
							<div class="col-xs-12 col-sm-6 serv_cont_item"><img src="<?=SITE_TEMPLATE_PATH?>/img/tel_serv.png"><span>+7 (4742) 51-53-57<br/>+7 (4742) 51-53-50</span>
							</div>
							<div class="col-xs-12 col-sm-6 serv_cont_item"><img src="<?=SITE_TEMPLATE_PATH?>/img/mail_serv.png"><span>info@sez.lipetsk.ru</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="downloads_doc_tabs">
						<ul id="myTabs" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab"
							                                          data-toggle="tab" aria-controls="home"
							                                          aria-expanded="true">План закупок</a></li>
							<li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab"
							                                    data-toggle="tab" aria-controls="profile"
							                                    aria-expanded="false">Сведения о заключенных договорах</a>
							</li>

						</ul>

						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
								<div class="item_download">
									<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
									<div class="item_download_date">30.09.2013</div>
									<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
								</div>
								<div class="item_download">
									<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
									<div class="item_download_date">30.09.2013</div>
									<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
								</div>
								<div class="item_download">
									<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
									<div class="item_download_date">30.09.2013</div>
									<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
								<div class="item_download">
									<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
									<div class="item_download_date">30.09.2013</div>
									<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</section>

	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
