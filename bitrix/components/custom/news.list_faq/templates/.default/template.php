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
	$razdel_tmp = '<li role="presentation" class="'.$class.'">
                <a href="#r'.$arResult["razdel"][$i]['ID'].'" role="tab" id="'.$arResult["razdel"][$i]['ID'].'-tab" data-toggle="tab" aria-controls="r'.$arResult["razdel"][$i]['ID'].'"
                   aria-expanded="'.$flag.'">
                <span>
                        <img  src="'.$arResult["razdel"][$i]['UF_SECOND_IMG']['SRC'].'">
                        <img class="active_img" src="'.$arResult["razdel"][$i]['UF_FIRST_IMG']['SRC'].'">
                    </span>
					'.$arResult["razdel"][$i]['NAME'].'
                </a>
            </li>
            ';
	$big_panel.=$razdel_tmp;

	$tmp_start_panel = '<div role="tabpanel" class="tab-pane fade '.$fade.'" id="r'.$arResult["razdel"][$i]['ID'].'" aria-labelledby="'.$arResult["razdel"][$i]['ID'].'-tab">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6">';
	$tmp_stop_panel = '</div></div></div>';
	$tmp_element = "";
	$my_flag = true;
	for($k = 0; $k<count($arResult["razdel"][$i]['element']); $k++ ){
		if($j == 0){$active='active in';}else{$active = '';}
		if( ( $k >= (count($arResult["razdel"][$i]['element'])/2) && $flag ) ){
			$tmp_element = '</div>
					<div class="col-xs-12 col-sm-12 col-md-6">';
			$flag = false;
		}else{
			$tmp_element = "";
		}

		$tmp_element .= ' <div class="answer_item">
			<div class="answer_item_name"><span class="glyphicon glyphicon-menu-down"></span>'.$arResult["razdel"][$i]["element"][$k] ["row"]['NAME'].'
							</div>
							<div class="answer_item_body">'.$arResult["razdel"][$i]["element"][$k] ["row"]['DETAIL_TEXT'].'</div>
						</div>               ';
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




<div class="answers_main ">
	<div class="answers_navig container">
		<ul id="myTabs" class="nav nav-tabs nav_galery nav-technology" role="tablist">
			<?=$big_panel?>
		</ul>
	</div>
	<div class="answers_body container">
		<div id="main_content_tabs" class="tab-content">
			<?=$tt?>
		</div>
	</div>
</div>
