<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ООО «Йокохама Р. П. З.»");
?>

	<div class="main ">

		<section class="container section_resident_main">
			<div class="row">
				<div class="col-xs-12">
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
				</div>
				<div class="col-xs-12 col-sm-6">


					<div class="text_resident_header">
						Компания "ЙОКОХАМА Р.П.З." была основана в 2008 году в Грязинском районе Липецкой области и является
						первой компанией - производителем автомобильных шин марки «YOKOHAMA» в России.
						<br/><br/>
						Коммерческое производство запланировано на 2012 год. Производственная мощность составит 1,4 миллиона
						шин в год.
						В настоящее время компания активно занимается подбором персонала.
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">

					<img src="<?=SITE_TEMPLATE_PATH?>/img/yokohama.png">


				</div>
			</div>
		</section>
		<section class="resident_desrc">
			<div class="ministr row">
				<div class="container">
					<div class="col-xs-12 col-sm-9 citat_item_body ministr_body">
						<div class="citat_item_text ministr_text rezident_text">
							Компания ЙОКОХАМА Р.П.З. при выборе площадки для строительства шинного завода обследовала 21
							регион на территории России и в конечном итоге выбор был сделан в пользу Липецкой особой
							экономической зоны.
							<br/><br/>
							Причинами тому послужили: развитая инфраструктура, большой земельный участок, налоговые льготы.
							По соседству с особой экономической зоной располагается город Липецк с населением около
							полумиллиона человек. Это благоприятствует набору сотрудников на завод. Также особая
							экономическая зона – это государственный проект, поэтому здесь ощущается поддержка руководства
							Липецкой области.
						</div>
						<div class="citat_item_description ministr_description">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/twoarrows_white.png">

							<div class="citater"></div>
							<div class="citater_2">Генеральный директор Yokohama</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-3 citat_item_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/citat2.png"></div>
				</div>
			</div>
		</section>
		<section class="resident_contatst  container">
			<div class="row">
				<div class="col-xs-12 col-sm-4">

					<div class=" text_contacts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/marker_big.png">
                    <span>398908, г. Липецк, п. Матырский,<br/>
                    ул. Моршанская, 4-а, а/я 344</span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">

					<div class=" text_contacts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/tel_serv.png">
                   <span> Т: +7 (4742) 51-51-80,<br />
                    Ф: +7 (4742) 51-51-95 </span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">

					<div class=" text_contacts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/nout.png">
						<span> <a target="_blank" href="http://www.yokohama.ru">www.yokohama.ru</a></span>
					</div>
				</div>
			</div>

		</section>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
