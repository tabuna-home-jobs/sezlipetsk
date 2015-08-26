<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Управляющая компания");
?>

	<div class="main container">

		<section class="top_block_main">
			<div class="container">
				<div class="row top_block">
					<div class="left_part col-xs-12 col-sm-12 col-md-7">
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

						<div class="scrollbar-outer resize_scroll">
							<div class="lin">
								РОСОЭЗ – это масштабный федеральный проект по привлечению инвестиций, передовых научных, производственных и управленческих технологий.
								<br/>
								РОСОЭЗ предоставляют компаниям уникальную возможность использовать все инвестиционные преимущества России, минуя при этом типичные российские проблемы – нерыночные факторы влияния на бизнес и неэффективное администрирование.
								<br/>
								В данном разделе вы найдёте информацию о том, как начать свой бизнес в российских особых экономических зонах.
							</div>
						</div>
					</div>
					<div class="hidden-xs hidden-sm right_part col-xs-12 col-sm-12 col-md-5">
						<img src="img/building.jpg">
					</div>
				</div>
			</div>
		</section>


		<section class="what_we_are row">
			<div class="row">
				<div class="col-md-3 item_company_action row ">
					<div class="compan_action_img col-md-12 col-xs-3"><img src="img/marker.png"></div>
					<div class="col-md-12 col-xs-9">Мы формируем в особых экономических зонах новые территории
					                                экономического развития и социального роста для последующего масштабирования
					                                в рамках всей страны.
					</div>
				</div>
				<div class="col-md-3 item_company_action row ">
					<div class="compan_action_img col-md-12 col-xs-3"><img src="img/two.png"></div>
					<div class="col-md-12 col-xs-9">Мы привлекаем инвесторов с перспективными технологиями производства и
					                                управления, создавая рабочие места в реальном секторе экономике.
					</div>
				</div>
				<div class="col-md-3 item_company_action row ">
					<div class="compan_action_img col-md-12 col-xs-3"><img src="img/cup.png"></div>
					<div class="col-md-12 col-xs-9">Мы ориентируемся на передовые мировые стандарты, стремясь стать одной из
					                                лучших в мире компаний в области управления особыми экономическими зонами.
					</div>
				</div>
				<div class="col-md-3 item_company_action row ">
					<div class="compan_action_img col-md-12 col-xs-3"><img src="img/mebel.png"></div>
					<div class="col-md-12 col-xs-9">Мы создаем комфортные условия для ведения бизнеса.</div>
				</div>
			</div>
		</section>

		<section class="cennosti">
			<h1>Ценности компании</h1>

			<div class="row cennost_items">
				<div class="col-md-4">
					<div class="cennost_name"><img src="img/ok.png">Ответственность</div>
					<div class="cennost_body">Мы развиваем особые экономические зоны с полным осознанием своей
					                          ответственности перед инвесторами, гражданами и налогоплательщиками.
					</div>
				</div>
				<div class="col-md-4">
					<div class="cennost_name"><img src="img/ok.png">Патриотизм</div>
					<div class="cennost_body">Мы любим Россию. Мы понимаем, что экономическая мощь и безопасность России,
					                          благосостояние общества и уверенность в завтрашнем дне во многом зависит и от нас.
					</div>
				</div>
				<div class="col-md-4">
					<div class="cennost_name"><img src="img/ok.png">Лидерство</div>
					<div class="cennost_body">Мы стремимся быть лучшими в том, что делаем. Высшая форма лидерства – это
					                          успех. Добиваясь лидерства, мы делимся успехом с нашими партне-
					                          рами, с теми, кто доверяет нам и кому доверяем мы.
					</div>
				</div>
				<div class="col-md-4">
					<div class="cennost_name"><img src="img/ok.png">Единство</div>
					<div class="cennost_body">Мы - команда, сила которой во взаимной поддержке и уважении мнения каждого.
					</div>
				</div>
				<div class="col-md-4">
					<div class="cennost_name"><img src="img/ok.png">Открытость</div>
					<div class="cennost_body">Мы активно участвуем в процессе межкультурного взаимодействия. Привлекая к
					                          партнерству иностранные компании, мы перенимаем лучший мировой опыт по организации и управлению
					                          инновационной экономикой..
					</div>
				</div>
				<div class="col-md-4">
					<div class="cennost_name"><img src="img/ok.png">Развитие</div>
					<div class="cennost_body">Развитие – это совершенствование через последовательное решение задач и
					                          достижение поставленных целей. Развиваясь, мы изменяемся. Изменяя настоящее, мы создаем будущее.
					</div>
				</div>

			</div>

		</section>




	</div>
	<section class="block_bottom">
		<div class="container"><div class="row">
				<div class="col-sm-6">
					<a class="inform_item_a">
						<div class="inform_item row">
							<div class="col-xs-6 inform_text">

								Раскрытие информации
							</div>
							<div class="col-xs-6 inform_img">
								<div class="block_icon_arrow">
									<span class="glyphicon glyphicon-menu-right"></span>
								</div>
								<img src="img/inform.jpg">
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6">
					<a class="inform_item_a">
						<div class="inform_item row">
							<div class="col-xs-6 inform_text">

								Закупки
							</div>
							<div class="col-xs-6 inform_img">
								<div class="block_icon_arrow">
									<span class="glyphicon glyphicon-menu-right"></span>
								</div>
								<img src="img/inform1.jpg">
							</div>
						</div>
					</a>
				</div>
			</div></div>
	</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
