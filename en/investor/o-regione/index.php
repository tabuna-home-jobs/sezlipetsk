<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Lipetsk Region");
?>

	<div class="main ">
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
								The Lipetsk Region is situated in the center of European Russia, 370 km south of Moscow (the distance between Moscow and Lipetsk is 450 km). It borders with the Kursk, Oryol, Tula, Ryazan, Tambov and Voronezh regions. 
								<br><br>
								<strong> Area:</strong> 24,000 sq km<br>
								<strong> Population:</strong> 1,171,000 people <br>
								<strong> Capital:</strong> — Lipetsk (pop. 508,000) <br>
								<strong> Large cities:</strong> Yelets (pop. 108,000), Gryazi (pop. 46,000) <br>
								<strong> GRP:</strong> — RUB 254.7 billion in 2010 <br>
							</div>
						</div>
					</div>
					<div class="hidden-xs hidden-sm right_part col-xs-12 col-sm-12 col-md-5">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/oregione.png">
					</div>
				</div>
			</div>
		</section>
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Key sectors of the regional economy</h2>
					<div class="row otrasl">


						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal1">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/metal.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black6.png" class="black">
							</div>
							<div>Steelmaking and metalworking</div>
						</div>

						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal2">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/gears.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black2.png" class="black">
							</div>
							<div>Mechanical engineering</div>
						</div>
						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal3">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/colba.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black5.png" class="black">
							</div>
							<div>Petrochemical industry</div>
						</div>
						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal4">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/bytteh.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black1.png" class="black">
							</div>
							<div>Domestic appliances</div>
						</div>
						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal5">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/lopata.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black4.png" class="black">
							</div>
							<div>Construction materials</div>
						</div>
						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal6">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/cow.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black3.png" class="black">
							</div>
							<div>Agriculture</div>
						</div>
					</div>
				</div>

				<!--Модальные окна-->
				<!-- Модалка -->
				<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel"> Steelmaking and metalworking</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">Industrial production underlies the regional economic potential and accounts for nearly 66% of the gross regional product. The Lipetsk region is ranked fourth in terms of steel production (14%) and rolled products (16%). The largest steel makers are Novolipetsk Steel and Svobodny Sokol.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel2">Mechanical engineering</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">В The Lipetsk region is home to more than 350 mechanical engineering companies employing over 16,000 people, including 13,000 people engaged in equipment manufacturing. Engineering and metalworking companies account for 7% of the regional industrial output, with their aggregate annual revenue exceeding 24 billion rubles. In January–June 2015, revenue increased by almost 6% year-over-year and reached 17.2 billion rubles.</p> 

								<p style="text-align: justify;">
Engineering companies are concentrated in Lipetsk, Yelets, Gryazi, Lebedyan, Chaplygin and Usman. The largest of them are Indesit International, Lipetsk Caterpillar Tractor Plant, Lipetsk Machine Tool Company, Gidromash, Yeletsgidroagregat, Gidroprivod, Gryazi Cultivator Plant, Stroymash, Lebedyan Engineering Plant and RAZIONAL.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel3">Petrochemical industry</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">Petrochemical companies operating in the Lipetsk region include:</p>
								<ul>
									<li style="text-align: justify;">SILAN (organic silicon products made chemical compounds synthesized from high-purity crystalline silicon and chlorinated hydrocarbons)</li>
									<li style="text-align: justify;">Polimer (polymer products, including packaging materials, bags, plastic ware (e.g. barrels) and plastic consumer products)</li>
									<li style="text-align: justify;">ООО LANXESS Lipetsk (tire and rubber additives)</li>
								</ul>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel4">Domestic appliances</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">The Lipetsk region is ranked first in terms of domestic refrigerators produced (over 40% of the total Russian output). Indesit International is the largest local producer of refrigerators and washing machines.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel5">Agriculture</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">Favorable climatic conditions and fertile black soils contribute to the crop production. Agricultural lands cover more than 1.8 million hectares, including over 80% of tillable land. Orchards growing largely apple, pear and plum trees cover 22,300 hectares. The Lipetsk region is home to nearly 300 agricultural companies engaged mostly in grain crops, sugar beet, potato, cattle, pig and poultry farming. Aggregated revenue in the agricultural sector reached nearly 35.3 billion rubles in 2010.</p>
								<p style="text-align: justify;">The largest agricultural and processing facilities in Russia are being built in the Lipetsk region by a major Russian food producer Cherkizovo.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel6">Construction materials</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">The construction materials industry is a promising sector of the regional economy. Plans are to satisfy demand of construction companies with locally produced construction materials. The industry development strategy provides for cement, walling, glass and other plants to be established in the region and the subsequent development of open-pit mines and production of raw materials for cement, brick and glass factories. Local businesses develop the production of advanced construction materials.</p>
								<p style="text-align: justify;"><b>ОАО LipetskCement</b> is yet the only local cement manufacturer supplying its products to Moscow, Lipetsk, Tambov, Kursk, Tula, Oryol and other Russian regions.</p> 
								<p style="text-align: justify;"><b>ООО ZSK Sandwich Panel and Building Structures Plant</b></p>
								<p style="text-align: justify;">These are new generation facilities and major Russian producers of sandwich panels (1.5 million square meters annually). Sandwich panels with thickness from 60 to 250 mm are designed to be used in pre-engineered steel structures and prefabricated buildings.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!--Модальные окна-->


				<div class="col-md-6">
					<h2>International rankings and investment climate</h2>

					<div>
						<h3>Fitch Ratings:</h3>
						<ul class="red_dotes_ul">
							<li><span>Long-term BB rating in foreign and national currency, outlook stable</span>
							</li>
							<li><span>Short-term B rating in foreign currency</span></li>
							<li><span>Long-term national AA-(rus) rating, outlook stable</span></li>
						</ul>
					</div>
					<div>
						<h3>Standard & Poors:</h3>
						<ul class="red_dotes_ul">
							<li><span>Long-term BB credit rating</span>
							</li>
							<li><span>National ruAA rating, outlook stable</span></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>