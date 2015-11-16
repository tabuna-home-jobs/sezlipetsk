<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

?>
<div class="remember_form_main">
	<div class="remember_form_cell">
		<div class="remember_form">
			<div class="close_r_f_container"><a class="close_r_f"></a></div>
			<div class="row">
				<div class="col-xs-12">
					<div class="r_f_heder">Напомнить пароль</div>
				</div>
			</div>
			<div>
				<div class="col-xs-12 col-sm-12 col-md-3 r_f_left">E-mail</div>
				<div class="col-xs-12 col-sm-12 col-md-6 r_l_right">
					<!--<form>
						<input type="email">
						<button>ОТПРАВИТЬ</button>
					</form>-->
					<?$APPLICATION->IncludeComponent(
						"custom:system.auth.forgotpasswd",
						".default",
						Array("SHOW_ERRORS" => "Y")
					);
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
	<?if($arResult["BACKURL"] <> ''):?>
		<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<?endif?>
	<?foreach ($arResult["POST"] as $key => $value):?>
		<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
	<?endforeach?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />

	<div class="inputs_container">
		<div class="row">
			<div class="col-xs-6 labels_left">
				<?=GetMessage("AUTH_LOGIN")?>
			</div>
			<div class="col-xs-6 inputs_right">
				<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" size="17" />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 labels_left">
				<?=GetMessage("AUTH_PASSWORD")?>
			</div>
			<div class="col-xs-6 inputs_right">
				<input type="password" name="USER_PASSWORD" maxlength="50" size="17" autocomplete="off" />
				<?if($arResult["SECURE_AUTH"]):?>
					<span class="bx-auth-secure" id="bx_auth_secure<?=$arResult["RND"]?>" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
					<noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
					</noscript>
					<script type="text/javascript">
						document.getElementById('bx_auth_secure<?=$arResult["RND"]?>').style.display = 'inline-block';
					</script>
				<?endif?>

				<div class="remember_a">
					<noindex>
						<!--<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" id="remember_pass" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>-->
						<a id="remember_pass" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
					</noindex>
				</div>
			</div>
		</div>
		<?if ($arResult["CAPTCHA_CODE"]):?>
		<div class="row">
			<div class="col-xs-6 labels_left">
				<?=GetMessage("AUTH_CAPTCHA_PROMT")?>
			</div>
			<div class="col-xs-6 inputs_right">
				<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
				<input type="text" name="captcha_word" maxlength="50" value="" />
			</div>
		</div>
		<?endif;?>
		<div class="row">
			<div class="col-xs-6 labels_left">

			</div>
			<div class="col-xs-6 inputs_right">
				<button type="submit">ОТПРАВИТЬ</button>
			</div>
		</div>
	</div>
</form>
