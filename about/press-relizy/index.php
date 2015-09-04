<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Пресс-релизы");
?>

	<div class="main ">

		<section class="container">
			<div class="row">
				<div class="col-md-5 smi_left">
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

					<div class="smi_block">
						<div>
							<div rel="1" class="smi_item">
								<div class="smi_date">26 февраля 2015</div>
								<div class="smi_name">
									Руководство компании  рассматривает возможность размещения
									предприятия...
								</div>
								<div class="smi_text">
									24-26 февраля 2015 года особую экономическую зону «Липецк» посетила делегация
									американской компании «Кемин Индастриз» во главе с её Президентом по Региону
									Европа/Ближний Восток и Африка г-ном Джоном Спрингейтом.
								</div>
								<div class="smi_but"><a>Подробнее</a></div>
							</div>
							<div rel="2" class="smi_item">
								<div class="smi_date">26 февраля 2015</div>
								<div class="smi_name">
									Руководство размещения
									предприятия...
								</div>
								<div class="smi_text">
									24-26 февраля 2015 года особую экономическую зону «Липецк» посетила делегация
									американской триз» во главе с её Президентом по Региону
									Европа/Ближний Восток и Африка г-ном Джоном Спрингейтом.
								</div>
								<div class="smi_but"><a>Подробнее</a></div>
							</div>
							<div rel="3" class="smi_item">
								<div class="smi_date">26 февраля 2015</div>
								<div class="smi_name">
									Руководство компании «Кемин Индастриз» рассматривает возможность размещения

								</div>
								<div class="smi_text">
									24-26 февраля 2015 года особую экономическую зону «Липецк» посетила делегация
									американской компании «К» во главе с её Президентом по Региону
									Европа/Ближний Восток и Африка г-ном Джоном Спрингейтом.
								</div>
								<div class="smi_but"><a>Подробнее</a></div>
							</div>
						</div>
						<div class="smi_control">
							<a class="smi_prev"></a>
							<a class="smi_next"></a>
						</div>
					</div>

				</div>
				<div class="col-md-7 smi_right">
					<img id="1" src="<?=SITE_TEMPLATE_PATH?>/img/smi.jpg">
					<img id="2" src="<?=SITE_TEMPLATE_PATH?>/img/nigak.png">
					<img id="3" src="<?=SITE_TEMPLATE_PATH?>/img/back_img_1.jpg">
				</div>
			</div>
		</section>

		<section class="container smi_more_section">
			<div class="row smi_more_blocks">
				<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
					<div>
						<div class="smi_more_date"><span>22 декабря 2014</span></div>
						<div class="smi_more_name">Итоги года и перспективы развития ОЭЗ «Липецк»</div>
						<div class="smi_more_text">По итогам 2014 года «семья» резидентов особой экономической
						                           зоны «Липецк» пополнилась восемью новыми компаниями.
						</div>
						<div class="block_icon_arrow">
							<span class="glyphicon glyphicon-menu-right"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
					<div>
						<div class="smi_more_date"><span>22 декабря 2014</span></div>
						<div class="smi_more_name">Итоги года и перспективы развития ОЭЗ «Липецк»</div>
						<div class="smi_more_text">По итогам 2014 года «семья» резидентов особой экономической
						                           зоны «Липецк» пополнилась восемью новыми компаниями.
						</div>
						<div class="block_icon_arrow">
							<span class="glyphicon glyphicon-menu-right"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
					<div>
						<div class="smi_more_date"><span>22 декабря 2014</span></div>
						<div class="smi_more_name">Итоги года и перспективы развития ОЭЗ «Липецк»</div>
						<div class="smi_more_text">По итогам 2014 года «семья» резидентов особой экономической
						                           зоны «Липецк» пополнилась восемью новыми компаниями.
						</div>
						<div class="block_icon_arrow">
							<span class="glyphicon glyphicon-menu-right"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
					<div>
						<div class="smi_more_date"><span>22 декабря 2014</span></div>
						<div class="smi_more_name">Итоги года и перспективы развития ОЭЗ «Липецк»</div>
						<div class="smi_more_text">По итогам 2014 года «семья» резидентов особой экономической
						                           зоны «Липецк» пополнилась восемью новыми компаниями.
						</div>
						<div class="block_icon_arrow">
							<span class="glyphicon glyphicon-menu-right"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
					<div>
						<div class="smi_more_date"><span>22 декабря 2014</span></div>
						<div class="smi_more_name">Итоги года и перспективы развития ОЭЗ «Липецк»</div>
						<div class="smi_more_text">По итогам 2014 года «семья» резидентов особой экономической
						                           зоны «Липецк» пополнилась восемью новыми компаниями.
						</div>
						<div class="block_icon_arrow">
							<span class="glyphicon glyphicon-menu-right"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
					<div>
						<div class="smi_more_date"><span>22 декабря 2014</span></div>
						<div class="smi_more_name">Итоги года и перспективы развития ОЭЗ «Липецк»</div>
						<div class="smi_more_text">По итогам 2014 года «семья» резидентов особой экономической
						                           зоны «Липецк» пополнилась восемью новыми компаниями.
						</div>
						<div class="block_icon_arrow">
							<span class="glyphicon glyphicon-menu-right"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
					<div>
						<div class="smi_more_date"><span>22 декабря 2014</span></div>
						<div class="smi_more_name">Итоги года и перспективы развития ОЭЗ «Липецк»</div>
						<div class="smi_more_text">По итогам 2014 года «семья» резидентов особой экономической
						                           зоны «Липецк» пополнилась восемью новыми компаниями.
						</div>
						<div class="block_icon_arrow">
							<span class="glyphicon glyphicon-menu-right"></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
					<div>
						<div class="smi_more_date"><span>22 декабря 2014</span></div>
						<div class="smi_more_name">Итоги года и перспективы развития ОЭЗ «Липецк»</div>
						<div class="smi_more_text">По итогам 2014 года «семья» резидентов особой экономической
						                           зоны «Липецк» пополнилась восемью новыми компаниями.
						</div>
						<div class="block_icon_arrow">
							<span class="glyphicon glyphicon-menu-right"></span>
						</div>
					</div>
				</div>

			</div>
			<div class="dop_smi"><a class="see_more">ПОКАЗАТЬ ЕЩЕ</a> <a href="smi-o-nas/" class="all">Сми о нас<span
						class="glyphicon glyphicon-menu-right"></span></a></div>
		</section>


	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
