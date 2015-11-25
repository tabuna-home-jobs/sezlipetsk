<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
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
					<h1><?=$arResult["NAME"]?></h1>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="text_resident_header">
						<?echo $arResult["DETAIL_TEXT"];?>
							</br>
						Объем инвестиций в соответствии с Соглашениями, млн.руб.: <?=$arResult['PROPERTIES']['INVESTMENT_SIZE']['VALUE'];?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<?if(isset($arResult["DISPLAY_PROPERTIES"]["IMG_HOVER"])&& count($arResult["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"])>0 &&$arResult["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"]["ID"]!=""):?>
						<img src="<?=$arResult["DISPLAY_PROPERTIES"]["IMG_HOVER"]["FILE_VALUE"]["SRC"]?>">
					<?endif;?>
				</div>
			</div>
		</section>
		<?if(isset($arResult["DISPLAY_PROPERTIES"]["IMAGES"])&& count($arResult["DISPLAY_PROPERTIES"]["IMAGES"]["FILE_VALUE"])>0):?>
		<section class="resident_desrc">
			<div class="ministr row">
				<div class="container">
					<div id="slider1" class="carousel slide" data-ride="carousel">
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
							<? $i=0;?>
							<?foreach ($arResult["DISPLAY_PROPERTIES"]["IMAGES"]["FILE_VALUE"] as $key => $value_img):?>
								<?if(($i % 2 == 0)&&($i != 0)){?>
								<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
								<div class="carousel-caption">
								</div>
							</div>
							<div class="item">
								<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
								<?}?>
								<div class="slideimg col-md-5 col-sm-5 col-lg-5 col-xs-5">
									<img src="<?=$value_img["SRC"]?>" alt="1">
								</div>

								<? $i++;?>
							<?endforeach;?>

							<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"></div>
							<div class="carousel-caption">
							</div>
						</div>
							</div>

						<!-- Controls -->
						<a class="left carousel-control slcontrol" href="#slider1" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control srcontrol" href="#slider1" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div><!--/slider!-->
		</section>
		<?endif;?>
		<section class="resident_contatst  container">
			<div class="row">
			<?if(isset($arResult["DISPLAY_PROPERTIES"]["ADDR"]) && $arResult["DISPLAY_PROPERTIES"]["ADDR"]["DISPLAY_VALUE"]!=""):?>
				<div class="col-xs-12 col-sm-4">
					<div class=" text_contacts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/marker_big.png">
                    <span>

                    		<?=$arResult["DISPLAY_PROPERTIES"]["ADDR"]["DISPLAY_VALUE"]?>
                    </span>
					</div>
				</div>
				<?endif;?>
				<?if(isset($arResult["DISPLAY_PROPERTIES"]["PHONE"]) && count($arResult["DISPLAY_PROPERTIES"]["PHONE"]["DISPLAY_VALUE"])>0):?>
				<div class="col-xs-12 col-sm-4">
					<div class=" text_contacts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/tel_serv.png">
                   <span>
                   		<?foreach ($arResult["DISPLAY_PROPERTIES"]["PHONE"]["DISPLAY_VALUE"] as $key => $value_phone):?>
                    		<?=$value_phone?>
                    		<?if($key!=count($arResult["DISPLAY_PROPERTIES"]["PHONE"]["DISPLAY_VALUE"])-1):?>
                    			</br>
                    		<?endif?>
                		<?endforeach;?>
                	 </span>
					</div>
				</div>
				<?endif;?>
				<?if(isset($arResult["DISPLAY_PROPERTIES"]["SITE"]) && $arResult["DISPLAY_PROPERTIES"]["SITE"]["DISPLAY_VALUE"]!=""):?>
				<div class="col-xs-12 col-sm-4">
					<div class=" text_contacts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/nout.png">
						<span>
                    		<a target="_blank" href='http://<?=$arResult["DISPLAY_PROPERTIES"]["SITE"]["DISPLAY_VALUE"]?>'><?=$arResult["DISPLAY_PROPERTIES"]["SITE"]["DISPLAY_VALUE"]?></a>
						</span>
					</div>
				</div>
				<?endif;?>
			</div>

		</section>
	</div>
