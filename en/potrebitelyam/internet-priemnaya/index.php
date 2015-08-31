<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Web-reception");
?>

	<div class="main">
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
								SEZ - a large-scale federal project to attract investment, advanced research , production and management technologies.
								<br/><br/>
								RusSEZ provide companies with a unique opportunity to use all the advantages of investment in Russia, passing with typical Russian problems - non-market factors of influence on the business and inefficient administration.
								<br/>
								In this section you will find information on how to start a business in the Russian special economic zones.
							</div>
						</div>
					</div>
					<div class="hidden-xs hidden-sm right_part col-xs-12 col-sm-12 col-md-5">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/notebook.png">
					</div>
				</div>
			</div>
		</section>
		<section class="container section_cabinet_block">
			<div class="row">
				<div class="col-xs-12 col-md-6 ">
					<div class="cabinet_block">
						<div class="row cabinet_block_heder">
							<div class="col-xs-12 col-md-6 cabinet_block_name"><h3>Personal Area</h3></div>
							<div class="col-xs-12 col-md-6 cabinet_block_vhod">

								<?
									//Если зареган то покажем только вход
									if ($USER->IsAuthorized()){
								?>
									<a href="lichnyy-kabinet/">
										ENTRANCE <span class="glyphicon glyphicon-menu-right"></span>
									</a>
								<?
									//Если не зарегистрирован то выводим обе кнопочки
									}else{
								?>
									<a href="lichnyy-kabinet/">
										ENTRANCE <span class="glyphicon glyphicon-menu-right"></span>
									</a>

									<a href="lichnyy-kabinet/#registration">SIGN UP FOR FREE</a>
								<?
									}
								?>
							</div>
						</div>
						<div class="cabinet_block_links">
							<div><a>Working with the LC</a></div>
							<div><a id="remember_pass">Apply for those . connection to electricity networks</a>
							</div>
							<div class="remember_form_main">
								<div class="remember_form_cell">
									<div class="remember_form">
										<div class="close_r_f_container"><a class="close_r_f"></a></div>
										<div class="row">
											<div class="col-xs-12">
												<div class="r_f_heder">Select application</div>
											</div>
										</div>
										<div row>

											<div class="col-xs-12">
												<div class="oval_links_container">
													<a class="oval_links"><span><span>up to 150 W <span class="star_red">*</span></span></span></a>
													<a class="oval_links"><span><span><span>Temporary <span class="star_red">*</span><span class="star_red">*</span> accession</span></span></span></a>
												</div>
											</div>
											<div class="col-xs-12 form_descript">
												<span class="star_red">*</span>The application form for legal entities and individual entrepreneurs ,
												                               Maximum capacity of the power devices which is up to
												                               150kW inclusive (including previously connected at this point
												                               connection of power units ) of one source
												                               power supply .
											</div>
											<div class="col-xs-12 form_descript">
												<span class="star_red">*</span><span class="star_red">*</span>The application form for applicants for temporary ( for a limited period
												                                                              time to provide electric power supply for devices )
												                                                              technological connection of power devices of the third
												                                                              category of power supply reliability at lower voltage of 35 kV .
											</div>
										</div>
									</div>
								</div>
							</div>
							<div><a>Checking the status of the application on those. connection to electricity networks</a></div>
							<div><a>Sent an appeal / complaint</a></div>
							<div><a>Assessment of quality of service</a></div>
							<div><a>Meter readings</a></div>
						</div>
						<span><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_18(1)white.png"></span></div>
				</div>
				<div class="col-xs-12 col-md-6 ">
					<div class="cabinet_block">
						<div class="row cabinet_block_heder">
							<div class="col-xs-12 cabinet_block_name"><h3>Often zadoval questions</h3></div>

						</div>
						<div class="cabinet_block_links">
							Here you can ask your questions<br/>
							and we will answer them
						</div>
						<span><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_18(2)white.png"></span></div>
				</div>
			</div>
		</section>
	</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>
