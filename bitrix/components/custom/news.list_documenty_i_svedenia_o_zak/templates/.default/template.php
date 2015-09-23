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

?>
<?
	$i = 0;
	$big_panel = "";//переменнаяя для хранения разделов из главной  панели


	//$tmp_start_panel = '<div class="col-md-6 files '.$class.' " id="r'.$arResult["razdel"][$i]['ID'].'" >';
	//$tmp_stop_panel = '</div>';
	//$tmp_element = "";

	for($k = 0; $k<count($arResult['element']); $k++ ){

		$tmp_element = "";
		$files_str = "";
		for($m = 0; $m<count($arResult['element'][$k]['files']); $m++){
			//var_dump($arResult['element'][$k]['files'][$m]);
			switch($arResult['element'][$k]['files'][$m]["CONTENT_TYPE"]){
				case 'image/tiff':
				case 'tif':
					$ico = SITE_TEMPLATE_PATH.'/img/tif.png';
					$type = 'TIF';
					break;
				case 'text/rtf':
				case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
					$ico = SITE_TEMPLATE_PATH.'/img/doc2.png';
					$type = 'DOC';
					break;
				case 'ppt':
				case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
					$ico = SITE_TEMPLATE_PATH.'/img/ppt.png';
					$type = 'PPT';
					break;
				case 'application/vnd.ms-excel':
				case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
					$ico = SITE_TEMPLATE_PATH.'/img/xls.png';
					$type = 'XLS';
					break;
				default:
					$ico = SITE_TEMPLATE_PATH.'/img/pdf.png';
					$type = 'pdf';
			}
			//var_dump( $arResult['element'][$k]['files'][$m]);
			$size = $arResult['element'][$k]['files'][$m]["FILE_SIZE"]/1024;
			if($size<1024){
				$size = round($size,2).'КБ';
			}else{
				$size/=1024;
				$size =round($size,2).'МБ';
			}
			$files_str.='<div class="item_download">
                                     <a href="'.$arResult['element'][$k]['files'][$m]['SRC'].'" >  <div class="item_download_type"><img src="'.$ico.'">'.$size.'</div>
                                        <div class="item_download_date">'.$arResult["razdel"][$i]["element"][$k]['DATE'].'</div>
                                        <div class="name">'.extractFileName($arResult['element'][$k]['files'][$m]["ORIGINAL_NAME"]).'</div></a>
                                    </div>';
		}
		if($k==1){
			$big_panel = $tmp_element = '<div class="downloads_doc_left"><div class="downloads_doc_left_name">'.$arResult["element"][$k] ["row"]['NAME'].'</div>'.$files_str.'</div>';
		}else{
			if($k ==0){$class = 'active'; $class2='active in'; }else{$class="";$class2="";}
			$rasdel_nav.='<li role="presentation" class="'.$class.'"><a href="#'.$arResult["element"][$k] ["row"]['ID'].'" id="home-tab" role="tab"
			                                          data-toggle="tab" aria-controls="'.$arResult["element"][$k] ["row"]['ID'].'"
			                                          aria-expanded="true">'.$arResult["element"][$k] ["row"]['NAME'].'</a></li>';
			$rasdel_panel.='<div role="tabpanel" class="tab-pane fade '.$class2.'" id="'.$arResult["element"][$k] ["row"]['ID'].'" aria-labelledby="home-tab">'.$files_str.'</div>';
		}


		//$tmp_elements.=$tmp_element;
	}


?>

<div class="col-md-6">
	<h2 class="downloads_doc_h2">Документы и сведения о закупках</h2>

	<?=$big_panel?>


</div>
<div class="col-md-6">
	<div class="downloads_doc_tabs">
		<ul id="myTabs" class="nav nav-tabs" role="tablist">
			<?=$rasdel_nav?>
		</ul>

		<div id="myTabContent" class="tab-content">
			<?=$rasdel_panel?>
		</div>

	</div>
</div>


<script>

	$(document).ready(function() {
		$('.navigacia>li>a').click({
			$('.files').each({
				$(this).removeClass('active');
			});
			var tmp_href = $(this).attr('href');
			$(tmp_href).addClass('active');
		});
	});
</script>
