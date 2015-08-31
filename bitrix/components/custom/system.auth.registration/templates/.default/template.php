<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?
	ShowMessage($arParams["~AUTH_RESULT"]);
?>
<?if($arResult["USE_EMAIL_CONFIRMATION"] === "Y" && is_array($arParams["AUTH_RESULT"]) &&  $arParams["AUTH_RESULT"]["TYPE"] === "OK"):?>
	<p><?echo GetMessage("AUTH_EMAIL_SENT")?></p>
<?else:?>

<?if($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
	<p><?echo GetMessage("AUTH_EMAIL_WILL_BE_SENT")?></p>
<?endif?>

<form method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform">
	<?
		if (strlen($arResult["BACKURL"]) > 0)
		{
			?>
			<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
			<?
		}
	?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="REGISTRATION" />

	<div class="inputs_container">
		<div class="row">
			<div class="col-xs-6 labels_left">
				<span class="star_red">*</span> Фамилия Имя Отчество
			</div>
			<div class="col-xs-6 inputs_right">
				<input type="text" name="USER_NAME" maxlength="50" value="<?=$arResult["USER_NAME"]?>" class="bx-auth-input" />
			</div>

		</div>
		<div class="row">
			<div class="col-xs-6 labels_left">
				<span class="star_red">*</span> Наименование организации
			</div>
			<div class="col-xs-6 inputs_right">
				<input type="text" name="ORGANISATION_NAME" maxlength="50" value="<?=$arResult["ORGANISATION_NAME"]?>" class="bx-auth-input" />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 labels_left">
				<span class="star_red">*</span> Должность
			</div>
			<div class="col-xs-6 inputs_right">
				<input type="text" name="POSITION" maxlength="50" value="<?=$arResult["POSITION"]?>" class="bx-auth-input" />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 labels_left">
				<span class="star_red">*</span> Телефон
			</div>
			<div class="col-xs-6 inputs_right">
				<input type="text" name="PHONE" maxlength="50" value="<?=$arResult["PHONE"]?>" class="bx-auth-input" />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 labels_left">
				<span class="star_red">*</span> Email
			</div>
			<div class="col-xs-6 inputs_right">
				<input type="text" name="USER_EMAIL" maxlength="50" value="<?=$arResult["USER_EMAIL"]?>" class="bx-auth-input" />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 labels_left">
				<span class="star_red">*</span> Кадастровый номер земельного участка
			</div>
			<div class="col-xs-6 inputs_right">
				<input type="text" name="CADASTRAL_NUM" maxlength="50" value="<?=$arResult["CADASTRAL_NUM"]?>" class="bx-auth-input" />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 labels_left">
				<span class="star_red">*</span><?=GetMessage("AUTH_PASSWORD_REQ")?>
			</div>
			<div class="col-xs-6 inputs_right">
				<input type="password" name="USER_PASSWORD" maxlength="50" value="<?=$arResult["USER_PASSWORD"]?>" class="bx-auth-input" autocomplete="off" />
				<?if($arResult["SECURE_AUTH"]):?>
					<span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
						<div class="bx-auth-secure-icon"></div>
					</span>
					<noscript>
					<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
						<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
					</span>
					</noscript>
					<script type="text/javascript">
						document.getElementById('bx_auth_secure').style.display = 'inline-block';
					</script>
				<?endif?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 labels_left">
				<span class="star_red">*</span><?=GetMessage("AUTH_CONFIRM")?>
			</div>
			<div class="col-xs-6 inputs_right">
				<input type="password" name="USER_CONFIRM_PASSWORD" maxlength="50" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" class="bx-auth-input" autocomplete="off" />
			</div>
		</div>
		<?/* CAPTCHA */
		if ($arResult["USE_CAPTCHA"] == "Y")
		{
		?>
			<div class="row">
				<div class="col-xs-6 labels_left">
					<span class="star_red">*</span> Введите символы
					                                с картинки
				</div>
				<div class="col-xs-6 inputs_right">
					<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
					<input type="text" name="captcha_word" maxlength="50" value="" />
				</div>
			</div>
		<?
			}
			/* CAPTCHA */
		?>
		<div class="row">
			<div class="col-xs-6 labels_left">

			</div>
			<div class="col-xs-6 inputs_right">
				<button type="submit" name="Register">ОТПРАВИТЬ</button>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
	document.bform.USER_NAME.focus();
</script>
<? endif;?>
