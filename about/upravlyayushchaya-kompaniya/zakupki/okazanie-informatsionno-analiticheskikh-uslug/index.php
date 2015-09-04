<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оказание информационно-аналитических услуг");
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

			<div class="row content">
				<div class="col-md-6">
					<div class="table">
						<div class="table-row row">
							<div class="table-cell cell_name">Место поставки товара, выполнения работ, оказания услуг</div>
							<div class="table-cell cell_descr">г. Москва, Тверской бульвар, д. 6</div>
						</div>
						<div class="table-row row">
							<div class="table-cell cell_name">Форма торгов</div>
							<div class="table-cell cell_descr">Закупка у единственного поставщика</div>
						</div>
						<div class="table-row row">
							<div class="table-cell cell_name">Статус</div>
							<div class="table-cell cell_descr">Проведенные</div>
						</div>
						<div class="table-row row">
							<div class="table-cell cell_name">Номер</div>
							<div class="table-cell cell_descr">ЕП-18/2015/19</div>
						</div>
						<div class="table-row row">
							<div class="table-cell cell_name">Название документа</div>
							<div class="table-cell cell_descr">Оказание информационно – аналитических услуг</div>
						</div>
						<div class="table-row row">
							<div class="table-cell cell_name">Дата начала подачи заявки</div>
							<div class="table-cell cell_descr">06.05.2015</div>
						</div>
						<div class="table-row row">
							<div class="table-cell cell_name">Дата окончания подачи заявки</div>
							<div class="table-cell cell_descr">06.05.2015</div>
						</div>
						<div class="table-row row">
							<div class="table-cell cell_name">Организатор</div>
							<div class="table-cell cell_descr">ОАО «ОЭЗ»</div>
						</div>
						<div class="table-row row">
							<div class="table-cell cell_name">Заказчик</div>
							<div class="table-cell cell_descr">ОАО «ОЭЗ»</div>
						</div>
						<div class="table-row row">
							<div class="table-cell cell_name">Адрес заказчика</div>
							<div class="table-cell cell_descr">125009, г. Москва, Тверской бульвар, д. 6</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 dop_info_container">
					<div class="dop_info_header">Дополнительная информация</div>
					<!--<div class="dop_info_body">
						<div class="please">Для просмотра/скачиваня файлов, пожалуйста,</div>
						<div class="link_login"><a>авторизуйтесь / зарегистрируйтесь.</a></div>
					</div>-->

					<div class="download">
						<div class="file_it">
							<div><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png"> DOC, 105 КБ</div>
							<div>Извещение/ документация о закупки товаров (работ, услуг)
							     у единственного поставщика
							</div>
						</div>
						<div class="file_it">
							<div><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png"> DOC, 105 КБ</div>
							<div>Извещение/ документация о закупки товаров (работ, услуг)
							     у единственного поставщика
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
