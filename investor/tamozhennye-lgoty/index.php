<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Таможенные льготы");
?><div class="main ">
 <section class="top_block_main">
	<div class="container">
		 <!--Хеебный крош--> <?$APPLICATION->IncludeComponent(
	"custom:breadcrumb",
	"",
	Array(
		"COMPONENT_TEMPLATE" => "oez",
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1"
	)
);?> <!--Хлебные крошки-->
		<h3><?=$APPLICATION->GetTitle();?></h3>
 <br>

<p style="text-align: center;">
	 На территории ОЭЗ "Липецк" функционирует комплекс таможенной инфраструктуры.
</p>
<p style="text-align: center;">
	<img width="800" alt="11.png" src="/upload/medialibrary/2e4/2e4ad7a714b44128e7b5636fb9c23f30.png" height="460" title="11.png"><br>
</p>
<p style="text-align: center;">
	<img width="800" alt="22.png" src="/upload/medialibrary/7ca/7ca8c0d31e12be2fb6e56ed0a2f5b64b.png" height="325" title="22.png"><br>
</p>
	</div>
 </section>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>