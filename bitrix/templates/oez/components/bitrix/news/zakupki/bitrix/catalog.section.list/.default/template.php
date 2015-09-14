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
<div class="all_tables">
<?foreach ($arResult['SECTIONS'] as $arSection):?>
	<?if(!(isset($arParams['THIS_SECTION']))):?>
		<div class="active_table">
			<span><?=$arSection["NAME"]?></span>
			<span>всего документов <?=$arSection["ELEMENT_CNT"]?></span>
		</div>
		<?
		$arParams['THIS_SECTION']=0;
		continue;
		?>
	<?elseif($arParams['THIS_SECTION']==$arSection["ID"]):?>
		<div class="active_table">
			<span><?=$arSection["NAME"]?></span>
			<span>всего документов <?=$arSection["ELEMENT_CNT"]?></span>
		</div>
		<?
		continue;
		?>
	<?endif;?>
	<div class="other_tables">
		<a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a>
	</div>
<?endforeach;?>
<div class="close_table">
 <table>
		<tr>
		<td>
			<span id="hide_table">свернуть</span>
		</td>
		<td>
			<div class="hide_icon"></div>
		</td>
		</tr>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$(".close_table table").on("click",function(){
			$(".table_bye").fadeToggle();
			$(".table_pagination").fadeToggle();
			if($("#hide_table").text()=='свернуть'){
				$("#hide_table").text('развернуть');
			}
			else{
				$("#hide_table").text('свернуть');
			}
			$(".close_table div").toggleClass("hide_icon open_icon");
		});
	});
</script>