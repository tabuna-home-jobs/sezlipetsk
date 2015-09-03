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
	//var_dump($arResult);
	//die('ghjkl;');
?>
<!--
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>-->


<?
$i = 0;
	$big_panel = "";//переменнаяя для хранения разделов из главной  панели
for($i = 0; $i<count($arResult["razdel"]); $i++){
	if($i == 0){$flag = 'true';}else {$flag = 'false';}
	$razdel_tmp = '<li role="presentation" class="">
                <a href="#r'.$arResult["razdel"][$i]['ID'].'" role="tab" id="'.$arResult["razdel"][$i]['ID'].'-tab" data-toggle="tab" aria-controls="r'.$arResult["razdel"][$i]['ID'].'"
                   aria-expanded="'.$flag.'">
                <span>
                        <img  src="'.$arResult["razdel"][$i]['UF_SECOND_IMG']['SRC'].'">
                        <img class="active_img" src="'.$arResult["razdel"][$i]['UF_FIRST_IMG']['SRC'].'">

                    </span>
					'.$arResult["razdel"][$i]['NAME'].'
                </a>
            </li>';
	$big_panel.=$razdel_tmp;
	//var_dump($razdel_tmp);


}
	//die('fghjk');


?>

<section>
	<!-- #Главная навигация# -->
	<ul id="myTabs" class="nav nav-tabs nav_galery nav-technology" role="tablist">
		<?=$big_panel?>
		<!--<li role="presentation" class="active"><a href="#electro" id="electro-tab" role="tab" data-toggle="tab"
		                                          aria-controls="electro" aria-expanded="true">
                <span>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_14(1)white.png">
                        <img class="active_img" src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_14(1).png">
                    </span>
				Электроснабжение</a>




		</li>
		<li role="presentation" class="">
			<a href="#teplo" role="tab" id="teplo-tab" data-toggle="tab" aria-controls="teplo"
			   aria-expanded="false">
                <span>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_14(4)white.png">
                        <img class="active_img" src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_14(4).png">
                    </span>
				Теплоснабжение
			</a>
		</li>
		<li role="presentation" class="">
			<a href="#teplo" role="tab" id="teplo-tab" data-toggle="tab" aria-controls="teplo"
			   aria-expanded="false">
                <span>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_17(1)white.png">
                        <img class="active_img" src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_17(1).png">
                    </span>
				Газоснабжение
			</a>
		</li>
		<li role="presentation" class="">
			<a href="#teplo" role="tab" id="teplo-tab" data-toggle="tab" aria-controls="teplo"
			   aria-expanded="false">
                <span>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_17(2)white.png">
                        <img class="active_img" src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_17(2).png">
                    </span>
				Водоснабжение
			</a>
		</li>
		<li role="presentation" class="">
			<a href="#teplo" role="tab" id="teplo-tab" data-toggle="tab" aria-controls="teplo"
			   aria-expanded="false">
                <span>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_17(3)white.png">
                        <img class="active_img" src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_17(3).png">
                    </span>
				Водоотведение
			</a>
		</li>
		<li role="presentation" class="">
			<a href="#teplo" role="tab" id="teplo-tab" data-toggle="tab" aria-controls="teplo"
			   aria-expanded="false">
                <span>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/vyshka.png">
                        <img class="active_img" src="<?=SITE_TEMPLATE_PATH?>/img/icons/vyshka_2.png">
                    </span>
				Телекоммуникации
			</a>
		</li>-->
	</ul>
	<!-- #Главная навигация# -->

	<!-- Панели навигации -->
	<div id="main_content_tabs" class="tab-content">
		<!--панель1 -->
		<div role="tabpanel" class="tab-pane fade active in" id="electro" aria-labelledby="electro-tab">
			<div class="row">
				<div class="col-xs-6 left-side-4-trigger">
					<!--Внутренняя навигация -->
					<ul id="electro_tabs" class="nav nav-tabs navigacia" role="tablist">
						<li role="presentation" class="active"><a href="#electro1" id="electro1-tab" role="tab"
						                                          data-toggle="tab"
						                                          aria-controls="electro1" aria-expanded="true">
                                <span>
                                    <img  src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_04(1)white.png">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_04(1).png">
                                </span>
								Общая информация по технологическому
								присоединению/подключению</a>
						</li>
						<li role="presentation" class="">
							<a href="#electro2" role="tab" id="electro2-tab"    data-toggle="tab" aria-controls="electro2" aria-expanded="false">
                                <span>
                                    <img  src="<?=SITE_TEMPLATE_PATH?>/img/icons/123_2.png">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/123.png">

                                </span>
								Порядок по технологическому присоединению/подключению</a></li>
						<li role="presentation" class=""><a href="#electro2" role="tab" id="electro2-tab"
						                                    data-toggle="tab"
						                                    aria-controls="electro2" aria-expanded="false">
                                <span>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_04(3)white.png">
                                    <img  src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_04(3).png">
                                </span>
								Типовые формы документов</a></li>
						<li role="presentation" class=""><a href="#electro2" role="tab" id="electro2-tab"
						                                    data-toggle="tab"
						                                    aria-controls="electro2" aria-expanded="false">
                                <span>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/ruble.png">
                                    <img  src="<?=SITE_TEMPLATE_PATH?>/img/icons/ruble_2.png">
                                </span>
								Тарифы на технологическое присоединение/подключение</a></li>
						<li role="presentation" class=""><a href="#electro2" role="tab" id="electro2-tab"
						                                    data-toggle="tab"
						                                    aria-controls="electro2" aria-expanded="false">
                                <span>
                                     <img  src="<?=SITE_TEMPLATE_PATH?>/img/icons/mc2.png">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/mc2_2.png">

                                </span>
								Сведения о наличии мощности, свободной для технологического присоединения/ подключения,
								а так же о заявках и договорах</a></li>
						<li role="presentation" class=""><a href="#electro2" role="tab" id="electro2-tab"
						                                    data-toggle="tab"
						                                    aria-controls="electro2" aria-expanded="false">
                                <span>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_04(5)white.png">
                                    <img  src="<?=SITE_TEMPLATE_PATH?>/img/icons/T_04(5).png">
                                </span>
								Нормативные документы</a></li>
					</ul>
					<!--Внутренняя навигация -->

				</div>

				<div class="col-xs-6 innerpanel right-side-trigger">

					<!--Внутренние панели навигации-->
					<div id="electro_panel" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in " id="electro1"
						     aria-labelledby="electro1-tab">
							<div class=""><h3>Общая информация по технологическому присоединению/
							                  подключению</h3>

								<div class="item_download">
									<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
									<div class="item_download_date">30.09.2013</div>
									<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
								</div>
								<div class="item_download">
									<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
									<div class="item_download_date">30.09.2013</div>
									<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
								</div>
								<div class="item_download">
									<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
									<div class="item_download_date">30.09.2013</div>
									<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="electro2" aria-labelledby="electro2-tab">
							<h3>Порядок по технологическому присоединению/подключению</h3>

							<div class="item_download">
								<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
								<div class="item_download_date">30.09.2013</div>
								<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
							</div>
							<div class="item_download">
								<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
								<div class="item_download_date">30.09.2013</div>
								<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
							</div>
							<div class="item_download">
								<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
								<div class="item_download_date">30.09.2013</div>
								<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
							</div>
						</div>
					</div>
					<!--Внутренние панели навигации-->

				</div>
			</div>
		</div>
		<!--панель1 -->

		<!--панель2 -->
		<div role="tabpanel" class="tab-pane fade" id="teplo" aria-labelledby="teplo-tab">
			<div class="row">
				<div class="col-xs-6 left-side-4-trigger">
					<ul id="teplo_tabs" class="nav nav-tabs navigacia" role="tablist">
						<li role="presentation" class="active">
							<a href="#teplo1" id="teplo1-tab" role="tab" data-toggle="tab" aria-controls="teplo1" aria-expanded="true">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/pen_invert.png" class="hidden-xs">
								Типовые формы документов
							</a>
						</li>
						<li role="presentation" class=""><a href="#teplo2" role="tab" id="teplo2-tab"
						                                    data-toggle="tab"
						                                    aria-controls="teplo2" aria-expanded="false"><img
									src="<?=SITE_TEMPLATE_PATH?>/img/ruble_invert.png" class="hidden-xs">Тарифы на технологическое
						                                                         присоединение/подключение</a></li>
					</ul>
				</div>
				<div class="col-xs-6 innerpanel right-side-trigger">
					<div id="teplo_right" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="teplo1"
						     aria-labelledby="teplo1-tab">
							<h3>Общая информация по технологическому присоединению/
							    подключению</h3>

							<div class="item_download">
								<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
								<div class="item_download_date">30.09.2013</div>
								<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
							</div>
							<div class="item_download">
								<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
								<div class="item_download_date">30.09.2013</div>
								<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
							</div>
							<div class="item_download">
								<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
								<div class="item_download_date">30.09.2013</div>
								<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
							</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="teplo2" aria-labelledby="teplo2-tab">
							<h3>Общая информация по технологическому присоединению/
							    подключению</h3>

							<div class="item_download">
								<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
								<div class="item_download_date">30.09.2013</div>
								<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
							</div>
							<div class="item_download">
								<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
								<div class="item_download_date">30.09.2013</div>
								<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
							</div>
							<div class="item_download">
								<div class="item_download_type"><img src="<?=SITE_TEMPLATE_PATH?>/img/pdf.png">DOC, 105 КБ</div>
								<div class="item_download_date">30.09.2013</div>
								<div class="item_download_name">Положение о закупках ОАО «ОЭЗ ППТ «Липецк»</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--панель2 -->

	</div>
	<!--Панели навигации -->
</section>
