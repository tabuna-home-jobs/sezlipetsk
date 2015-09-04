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
			<div class=" col-md-6">


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
			</div>
		</section>
	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
