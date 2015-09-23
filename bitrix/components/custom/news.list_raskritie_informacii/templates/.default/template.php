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
for($i = 0; $i<count($arResult["razdel"]); $i++){
	$vn_tmp='';
	$vn='';
	$elements = '';
	if($i == 0){$flag = 'true'; $class="active"; $fade='active in'; }else {$flag = 'false'; $class=""; $fade = ''; }
	$razdel_tmp = '<li role="presentation" class="'.$class.' nobg">
                <a href="#r'.$arResult["razdel"][$i]['ID'].'" role="tab" id="'.$arResult["razdel"][$i]['ID'].'-tab" data-toggle="tab" aria-controls="r'.$arResult["razdel"][$i]['ID'].'"
                   aria-expanded="'.$flag.'">
                <span>
                        <img  src="'.$arResult["razdel"][$i]['UF_SECOND_IMG']['SRC'].'">
                        <img class="active_img" src="'.$arResult["razdel"][$i]['UF_FIRST_IMG']['SRC'].'">

                    </span>
                    <p>
					'.$arResult["razdel"][$i]['NAME'].'
					</p>
                </a>
            </li>';
	$big_panel.=$razdel_tmp;

	$tmp_start_panel = '<div class="col-md-6 rs_files  files '.$class.' " id="r'.$arResult["razdel"][$i]['ID'].'" ><div class="scrollbar-outer">';
	$tmp_stop_panel = '</div></div>';
	$tmp_element = "";

	for($k = 0; $k<count($arResult["razdel"][$i]['element']); $k++ ){
		if($j == 0){$active='active in';}else{$active = '';}
		$tmp_element = "";
		$files_str = "";
		for($m = 0; $m<count($arResult["razdel"][$i]['element'][$k]['files']); $m++){
			switch($arResult["razdel"][$i]['element'][$k]['files'][$m]["CONTENT_TYPE"]){
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

			$size = $arResult["razdel"][$i]['element'][$k]['files'][$m]["FILE_SIZE"]/1024;
			if($size<1024){
				$size = round($size,2).'КБ';
			}else{
				$size/=1024;
				$size =round($size,2).'МБ';
			}
			$files_str.='<div class="col-md-6 file_item">
                                     <a href="'.$arResult["razdel"][$i]['element'][$k]['files'][$m]['SRC'].'" >  <div class="file_name"><img src="'.$ico.'">'.$size.'</div>
                                        <div class="file_date">'.$arResult["razdel"][$i]["element"][$k]['DATE'].'</div>
                                        <div class="file_descript">'.extractFileName($arResult["razdel"][$i]['element'][$k]['files'][$m]["ORIGINAL_NAME"]).'</div></a>
                                    </div>';
		}
		$tmp_element = '<div class="files_name">'.$arResult["razdel"][$i]["element"][$k] ["row"]['NAME'].'</div>
			<div class="row">
									'.$files_str.'

                            </div>';
		//var_dump($arResult["razdel"][$i]['child']);

		//var_dump($tmp_child);
		$tmp_elements.=$tmp_element;
	}
	$tmp_child = get_child($arResult["razdel"][$i]['child']);
	if( count($arResult["razdel"][$i]['element']) ==0)
	{
		$tmp_elements.=  '    <div role="tabpanel" class="tab-pane fade '.$active.' " id="r'.$arResult["razdel"][$i]['ID'].'"
                                 aria-labelledby="electro1-tab">
                               <div class=""><h3></h3>
								'.$tmp_child.'
                                </div>
                            </div>';
	}else{
		$tmp_elements.=$tmp_child;
	}
	$tt.=$tmp_start_panel.$tmp_elements.$tmp_stop_panel ;
	$tmp_elements = "";
	$elements='';



}


?>

<section>
	<!-- #Главная навигация# -->
	<div class=" col-md-6">


		<div class="left_cat_dop">
			<ul class="nav nav-tabs navigacia" role="tablist" >
				<?=$big_panel?>
			</ul>
		</div>
	</div>
	<!-- #Главная навигация# -->

	<!-- Панели навигации -->

		<?=$tt?>

	<!--Панели навигации -->
</section>

<?
	function get_child($child){
		if(!$child){
			return '';
		}
		$result = null;
	$my_tmp_element = "";
		$tmp_elements = "";
		$tmp_razd = "";
		for($i = 0; $i<count($child); $i++) {


			for ($k = 0; $k < count($child[$i]['element']); $k++) {
				$my_tmp_element = "";
				$files_str      = "";
				for ($m = 0; $m < count($child[$i]['element'][$k]['files']); $m++) {
					switch ($child[$i]['element'][$k]['files'][$m]["CONTENT_TYPE"]) {
						case 'image/tiff':
						case 'tif':
							$ico  = SITE_TEMPLATE_PATH . '/img/tif.png';
							$type = 'TIF';
							break;
						case 'doc':
						case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
							$ico  = SITE_TEMPLATE_PATH . '/img/doc2.png';
							$type = 'DOC';
							break;
						case 'ppt':
						case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
							$ico  = SITE_TEMPLATE_PATH . '/img/ppt.png';
							$type = 'PPT';
							break;
						case 'application/vnd.ms-excel':
						case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
							$ico  = SITE_TEMPLATE_PATH . '/img/xls.png';
							$type = 'XLS';
							break;
						default:
							$ico  = SITE_TEMPLATE_PATH . '/img/pdf.png';
							$type = 'pdf';
					}

					$size = $child[$i]['element'][$k]['files'][$m]["FILE_SIZE"] / 1024;
					if ($size < 1024) {
						$size = round($size, 2) . 'КБ';
					} else {
						$size /= 1024;
						$size = round($size, 2) . 'МБ';
					}
					if ($child[$i]['element'][$k]['DETAI_TEXT']) {
						$text = $child[$i]['element'][$k]['DETAI_TEXT'];
					} else {
						$text = extractFileName($child[$i]['element'][$k]['files'][$m]["ORIGINAL_NAME"]);
					}
					$files_str .= '<div class="col-md-6 file_item">
                                     <a href="' . $child[$i]['element'][$k]['files'][$m]['SRC'] . '" >  <div class="file_name"><img src="' . $ico . '">' . $size . '</div>
                                        <div class="file_date">' . $child[$i]["element"][$k]['DATE'] . '</div>
                                        <!--<div class="file_descript">' . $text . '</div>--></a>
                                    </div>';
				}
				//var_dump($child[$i]["element"][$k]);
				//die('fghjkl');
				$my_tmp_element = '<div class="files_name">' . $child[$i]["element"][$k] ["row"]['NAME'] . '</div><p>'.$child[$i]["element"][$k] ["row"]['PREVIEW_TEXT'].'</p>
			<div class="row">
									' . $files_str . '
							<div class="file_descript">' . $child[$i]["element"][$k] ["row"]['DETAIL_TEXT'] . '</div>
                            </div>';
				$tmp_elements .= $my_tmp_element;
			}


			if ($child[$i]['child']) {
				$tmp_child = get_child($child[$i]['child']);
			}
			$result .= '<div class="razdel"><div class="razdel_name" ><span class="glyphicon glyphicon-menu-down"></span><h3>'.$child[$i]['NAME'].'</h3></div><div class="razdel_desc"></br>
'.$child[$i]['DESCRIPTION'].$tmp_elements.$tmp_child.'</div></div>';
			//var_dump($child[$i]['NAME']);
			//var_dump('next');
		}
		//$result = '<p><strong>'.$child['NAME'].'</strong></br>'.$child['NAME'].'</p>'.$tmp_elements.$tmp_child;

		return $result;

	}

?>
