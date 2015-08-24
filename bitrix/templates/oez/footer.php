
<footer>
	<div class="container">
		<div class="part_1 row">
			<div class="col-md-7 no_padding">
				<!--Социальные сети-->
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/include/socials.php",
						"EDIT_TEMPLATE" => ""
					),
					false
				);?>
				<!--Социальные сети-->
				<div class="col-lg-7 col-md-12 col-sm-6 col-xs-12 foot_item">
					<div class="foot_name">Партнёры</div>
					<div class="partners_ul">
						<ul>
							<li><a><img src="<?=SITE_TEMPLATE_PATH?>/img/prf.png"></a></li>
							<li><a><img src="<?=SITE_TEMPLATE_PATH?>/img/min.png"></a></li>
							<li><a><img src="<?=SITE_TEMPLATE_PATH?>/img/fond.png"></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="clearfix hidden-md hidden-lg"></div>
			<div class="col-md-5 no_padding">
				<div class="col-md-12 col-sm-12 foot_item">

					<div class="row">
						<div class="foot_phones col-sm-6 col-md-6">
							<div class="foot_name">Контактая информация</div>
							<div class="f_t_img">
								<div>
									<img src="<?=SITE_TEMPLATE_PATH?>/img/tel.png">
								</div>
								<div>
									<div>Т: +7 (4742) 51-51-80,</div><br>
									<div>Ф: +7 (4742) 51-51-95</div>
								</div>
							</div>

						</div>
						<div class="col-md-6 no_padding">
							<div class="foot_name_dop">Горячая линия по вопросам электроснабжения: +7 (4742) 51-51-80</div>
							<div class="red_link"><a>Отключение электроэнергии</a></div>
						</div>
						<div class="foot_adres col-sm-12 col-md-12">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/mark.png">
							</div>
							<div>
								398908, Липецкая область, Грязинский район,
								зона промышленно-производственного типа «Липецк», Административно деловой центр.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="part_2 row">
			<div class="col-md-4 col-sm-12 all_rights">Все права защищены и охраняются законом.
			                                           2007—2014, ОАО «особая экономическая зона промышленно-производственного типа «Липецк»
			</div>
			<div class="col-md-4 col-sm-6 col-xs-6 sitemap"><a><img src="<?=SITE_TEMPLATE_PATH?>/img/sitemap.png">Карта сайта</a></div>
			<div class="col-md-4 col-sm-6 col-xs-6 copirite">
				Создание сайта:
				<a target="_blank" href="http://octavian48.ru">Октавиан</a>
			</div>
		</div>
	</div>
	<?
		$APPLICATION->AddChainItem($APPLICATION->GetTitle());
	?>
</footer>
