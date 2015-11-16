<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

ShowMessage($arParams["~AUTH_RESULT"]);

?>
<form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?
if (strlen($arResult["BACKURL"]) > 0)
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="SEND_PWD">
	<p>
	<?=GetMessage("AUTH_FORGOT_PASSWORD_1")?>
	</p>


			<b><?=GetMessage("AUTH_GET_CHECK_STRING")?></b>
	<br>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3 r_f_left">
			<?=GetMessage("AUTH_LOGIN")?>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 r_l_right">
			<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" />
		</div>

	</div>
	<br>
		<?=GetMessage("AUTH_OR")?>
	<br>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3 r_f_left"><?=GetMessage("AUTH_EMAIL")?></div>
		<div class="col-xs-12 col-sm-12 col-md-6 r_l_right"><input type="text" name="USER_EMAIL" maxlength="255" /></div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3 r_f_left"></div>
		<div class="col-xs-12 col-sm-12 col-md-6 r_l_right">
			<input type="submit" name="send_account_info" class="mysub" value="<?=GetMessage("AUTH_SEND")?>" />
			<p>
				<a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a>
			</p>
		</div>
	</div>

</form>
<script type="text/javascript">
document.bform.USER_LOGIN.focus();
</script>
