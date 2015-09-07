<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Резиденты");
?>
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

				<div class="scrollbar-outer-off">
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
				<img src="<?=SITE_TEMPLATE_PATH?>/img/sobranie.png">
			</div>
		</div>
	</div>
</section>
<div class="main container">


	<section>
		<div class="row smi_more_blocks">
			<!--Квартет-->
			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">


					<div>
						<a href="/about/rezidenty/ooo-yokokhama-r-p-z-/">
						<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/1.jpg"></div>
						<div class="smi_more_name">ООО «Бекарт-Липецк»<span class="small_country"> (Бельгия)</span></div>
						<div class="smi_more_text">Производство металлокорда и бортовой проволоки.
						</div>
						<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
						</a>
					</div>

			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
				<div>
					<a href="/about/rezidenty/ooo-yokokhama-r-p-z-/">
					<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/partner2.png"></div>
					<div class="smi_more_name">ОАО «Энерготехнологии Липецк»<span class="small_country"> (Россия)</span></div>
					<div class="smi_more_text">Производство электрической и тепловой энергии.
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
				<div>
					<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/partner3.png"></div>
					<div class="smi_more_name">ООО «АВТ»<span class="small_country">(Россия)</span></div>
					<div class="smi_more_text">Производство высокотехнологичной проволоки и металлической ленты.
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
				<div>
					<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/partner4.png"></div>
					<div class="smi_more_name">ООО «Йокохама Р. П. З.»<span class="small_country"> (Япония)</span></div>
					<div class="smi_more_text">Производство автомобильных шин.
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
				</div>
			</div>
			<!--Квартет-->


			<!--Квартет-->



			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
				<div>
					<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/partner4.png"></div>
					<div class="smi_more_name">ООО «Йокохама Р. П. З.»<span class="small_country"> (Япония)</span></div>
					<div class="smi_more_text">Производство автомобильных шин.
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
				<div>
					<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/partner2.png"></div>
					<div class="smi_more_name">ОАО «Энерготехнологии Липецк»<span class="small_country"> (Россия)</span></div>
					<div class="smi_more_text">Производство электрической и тепловой энергии.
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
				<div>
					<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/partner3.png"></div>
					<div class="smi_more_name">ООО «АВТ»<span class="small_country">(Россия)</span></div>
					<div class="smi_more_text">Производство высокотехнологичной проволоки и металлической ленты.
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
				<div>
					<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/1.jpg"></div>
					<div class="smi_more_name">ООО «Бекарт-Липецк»<span class="small_country"> (Бельгия)</span></div>
					<div class="smi_more_text">Производство металлокорда и бортовой проволоки.
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
				</div>
			</div>

			<!--Квартет-->
			<!--Квартет-->
			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
				<div>
					<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/partner4.png"></div>
					<div class="smi_more_name">ООО «Йокохама Р. П. З.»<span class="small_country"> (Япония)</span></div>
					<div class="smi_more_text">Производство автомобильных шин.
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
				<div>
					<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/1.jpg"></div>
					<div class="smi_more_name">ООО «Бекарт-Липецк»<span class="small_country"> (Бельгия)</span></div>
					<div class="smi_more_text">Производство металлокорда и бортовой проволоки.
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
				</div>
			</div>


			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
				<div>
					<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/partner3.png"></div>
					<div class="smi_more_name">ООО «АВТ»<span class="small_country">(Россия)</span></div>
					<div class="smi_more_text">Производство высокотехнологичной проволоки и металлической ленты.
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6 smi_more_item">
				<div>
					<div class="smi_more_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/partner2.png"></div>
					<div class="smi_more_name">ОАО «Энерготехнологии Липецк»<span class="small_country"> (Россия)</span></div>
					<div class="smi_more_text">Производство электрической и тепловой энергии.
					</div>
					<div class="smi_more_arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/arrow.png"></div>
				</div>
			</div>
			<!--Квартет-->

		</div>
	</section>

</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
