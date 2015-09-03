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
	function extractFileName($filename) {
		$p = strrpos($filename, '.');
		if ($p > 0) return substr($filename, 0, $p);
		else return $filename;
	}


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
	if($i == 0){$flag = 'true'; $class="active"; $fade='active in'; }else {$flag = 'false'; $class=""; $fade = ''; }
	$razdel_tmp = '<li role="presentation" class="'.$class.'">
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

	$tmp_start_panel = '<div role="tabpanel" class="tab-pane fade '.$fade.'" id="r'.$arResult["razdel"][$i]['ID'].'" aria-labelledby="r'.$arResult["razdel"][$i]['ID'].'-tab"> <div class="row">';
	$tmp_stop_panel = '</div></div>';

	$tmp_start_panel_vn ='<div class="col-xs-6 left-side-4-trigger">
                        <!--Внутренняя навигация -->
                        <ul id="r'.$arResult["razdel"][$i]['ID'].'-tabs" class="nav nav-tabs navigacia" role="tablist">';
	$tmp_stop_panel_vn = '</ul></div>';

	$tmp_elements_start ='<div class="col-xs-6 innerpanel right-side-trigger"><div id="electro_panel" class="tab-content">';
	$tmp_elements_stop = '</div></div>';
	$tmp_panel_cild = '';
	for($j = 0; $j < count($arResult["razdel"][$i]['child']); $j++ ){
		if($i == 0){$flag2 = 'true'; $class2="active"; }else {$flag2 = 'false'; $class2="";}
		$tmp_panel_cild = '<li role="presentation" class="'.$class.'"><a href="#r'.$arResult["razdel"][$i]['child'][$j]['ID'].'" id="electro1-tab" role="tab"
                                                                      data-toggle="tab"
                                                                      aria-controls="'.$arResult["razdel"][$i]['child']['ID'].'" aria-expanded="'.$flag2.'">
                                <span>
                                    <img  src="'.$arResult["razdel"][$i]['child'][$j]['UF_SECOND_IMG']['SRC'].'">
                                    <img src="'.$arResult["razdel"][$i]['child'][$j]['UF_FIRST_IMG']['SRC'].'">
                                </span>
                                '.$arResult["razdel"][$i]['child'][$j]['NAME'].'
                            </li>';
		$vn_tmp .= $tmp_panel_cild;
		$tmp_element = "";
		for($k = 0; $k<count($arResult["razdel"][$i]['child'][$j]['element']); $k++ ){
			$files_str = "";
			for($m = 0; $m<count($arResult["razdel"][$i]["child"][$j]['element'][$k]['files']); $m++){
				$files_str.='<div class="item_download">
                                        <div class="item_download_type"><img src="'.SITE_TEMPLATE_PATH.'/img/pdf.png">DOC,'.$arResult["razdel"][$i]["child"][$j]['element'][$k]['files'][$m]["FILE_SIZE"].' КБ</div>
                                        <div class="item_download_date">'.$arResult["razdel"][$i]["child"][$j]["element"][$k]['DATE'].'</div>
                                        <div class="item_download_name">'.extractFileName($arResult["razdel"][$i]["child"][$j]['element'][$k]['files'][$m]["ORIGINAL_NAME"]).'</div>
                                    </div>';
			}
			$tmp_element = '    <div role="tabpanel" class="tab-pane fade active in " id="r'.$arResult["razdel"][$i]['child'][$j]['ID'].'"
                                 aria-labelledby="electro1-tab">
                                <div class=""><h3>'.$arResult["razdel"][$i]["child"][$j]["element"][$k] ["row"]['NAME'].'</h3>
									'.$files_str.'
                                </div>
                            </div>';
			//var_dump($arResult["razdel"][$i]["child"][$j]["element"]);
			//die('fghj');
			$tmp_elements.=$tmp_element;
		}
	}
	$vn = $tmp_start_panel_vn.$vn_tmp.$tmp_stop_panel_vn;//Собираем внутреннюю навигацию
	$elements = $tmp_elements_start.$tmp_elements.$tmp_elements_stop;//Собираем внутреннюю панель навигании
	$pan.= $tmp_start_panel.$vn.$elements.$tmp_stop_panel;
	//var_dump($razdel_tmp);


}


	//var_dump($pan);
	//die('fghjk');


?>

<section>
	<!-- #Главная навигация# -->
	<ul id="myTabs" class="nav nav-tabs nav_galery nav-technology" role="tablist">
		<?=$big_panel?>
	</ul>
	<!-- #Главная навигация# -->

	<!-- Панели навигации -->
	<div id="main_content_tabs" class="tab-content">

		<?=$pan?>
	</div>
	<!--Панели навигации -->
</section>
