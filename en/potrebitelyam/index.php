<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetPageProperty("keywords_inner", "Customers");
	$APPLICATION->SetPageProperty("title", "Customers");
	$APPLICATION->SetTitle("Customers");
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
							SEZ - a large-scale federal project to attract investment, advanced research , production and management technologies.
							<br/>
							RusSEZ provide companies with a unique opportunity to use all the advantages of investment in Russia, passing with typical Russian problems - non-market factors of influence on the business and inefficient administration.
							<br/>
							In this section you will find information on how to start a business in the Russian special economic zones.
						</div>
					</div>
				</div>
				<div class="hidden-xs hidden-sm right_part col-xs-12 col-sm-12 col-md-5">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/sobranie.png">
				</div>
			</div>
		</div>
	</section>
	<section class="container">

		<div class="row">
			<div class="col-md-6 ">
				<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
					<div class="item_block">
						<a class="item_block_a"><div class="hover_container">
								<div class="hover"></div>
							</div>
							<div class="item_bod">
								<div class="item_name">Contacts network organization</div>
							</div>
							<div class="block_icon">
                                <span class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_11(1)white.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_11(1).png"/>
                                </span>
							</div></a>
					</div>
				</div>
				<div class="col-lg-6 col-xs-12 col-sm-12 col-md-6 block_item">
					<div class="item_block">
						<a class="item_block_a"><div class="hover_container">
								<div class="hover"></div>
							</div>
							<div class="item_bod">
								<div class="item_name">Service area network organization</div>
							</div>
							<div class="block_icon">
                                <span class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_16(1)white.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_16(1).png"/>
                                </span>
							</div></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
					<div class="item_block">
						<a class="item_block_a_small">
							<div class="hover_container">
								<div class="hover"></div>
							</div>
							<div class="item_bod">
								<div class="item_name smal_item_name">Custody</div>
							</div>
							<div class="block_icon_arrow">
								<span class="glyphicon glyphicon-menu-right"></span>
							</div></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
					<div class="item_block">
						<a class="item_block_a_small">
							<div class="hover_container">
								<div class="hover"></div>
							</div>
							<div class="item_bod">
								<div class="item_name smal_item_name">Additional services</div>
							</div>
							<div class="block_icon_arrow">
								<span class="glyphicon glyphicon-menu-right"></span>
							</div></a>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 block_item">
					<div class="item_block">
						<a href="internet-priemnaya/" class="item_block_a">
							<div class="hover_container">
								<div class="hover"></div>
							</div>
							<div class="item_bod">
								<div class="item_name">Internet reception</div>

							</div>
							<div class="block_icon">
                            <span class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_16(3)white.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_16(3).png"/>
                                </span>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 ">
				<div class="col-sm-6 col-xs-6 block_item">
					<div class="item_block hight_item_block">
						<a class="item_block_a item_block_a_small"><div class="hover_container">
								<div class="hover"></div>
							</div>
							<div class="item_bod">
								<div class="item_name">
									Grid connection /
									connection
								</div>
								<div class="item_dop">
									Lipetsk region is located in the central part of European Russia , 370 kilometers south of Moscow ( the distance from the capital to the regional center - 450 km)
								</div>

							</div>
							<div class="block_icon_arrow">
								<span class="glyphicon glyphicon-menu-right"></span>
							</div></a>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 block_item">
					<div class="item_block hight_item_block">
						<a class="item_block_a item_block_a_small"><div class="hover_container">
								<div class="hover"></div>
							</div>
							<div class="item_bod">
								<div class="item_name">Transfer ,
								                       transportation,
								                       supply
								                       energy resources</div>
								<div class="item_dop">Lipetsk region is located in the central part of European Russia , 370 kilometers south of Moscow ( the distance from the capital to the regional center - 450 km)</div>
							</div>
							<div class="block_icon_arrow">
								<span class="glyphicon glyphicon-menu-right"></span>
							</div></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
