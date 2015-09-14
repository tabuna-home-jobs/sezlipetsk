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

	$tmp_start_panel = '<div class="col-md-6 files '.$class.' " id="r'.$arResult["razdel"][$i]['ID'].'" >';
	$tmp_stop_panel = '</div>';
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
				case 'doc':
				case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
					$ico = SITE_TEMPLATE_PATH.'/img/doc2.png';
					$type = 'TIF';
					break;
				case 'ppt':
				case 'pptx':
					$ico = SITE_TEMPLATE_PATH.'/img/ppt.png';
					$type = 'TIF';
					break;
				case 'application/vnd.ms-excel':
				case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
					$ico = SITE_TEMPLATE_PATH.'/img/xls.png';
					$type = 'TIF';
					break;
				default:
					$ico = SITE_TEMPLATE_PATH.'/img/pdf.png';
					$type = 'pdf';
			}
			$files_str.='<div class="col-md-6 file_item">
                                     <a href="'.$arResult["razdel"][$i]['element'][$k]['files'][$m]['SRC'].'" >  <div class="file_name"><img src="'.$ico.'">'.$type.' ,'.$arResult["razdel"][$i]['element'][$k]['files'][$m]["FILE_SIZE"].' КБ</div>
                                        <div class="file_date">'.$arResult["razdel"][$i]["element"][$k]['DATE'].'</div>
                                        <div class="file_descript">'.extractFileName($arResult["razdel"][$i]['element'][$k]['files'][$m]["ORIGINAL_NAME"]).'</div></a>
                                    </div>';
		}
		$tmp_element = '<div class="files_name">'.$arResult["razdel"][$i]["element"][$k] ["row"]['NAME'].'</div>
			<div class="row">
									'.$files_str.'

                            </div>';
		$tmp_elements.=$tmp_element;
	}
	if( count($arResult["razdel"][$i]['element']) ==0)
	{
		$tmp_elements.=  '    <div role="tabpanel" class="tab-pane fade '.$active.' " id="r'.$arResult["razdel"][$i]['ID'].'"
                                 aria-labelledby="electro1-tab">
                                <div class=""><h3></h3>

                                </div>
                            </div>';
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
