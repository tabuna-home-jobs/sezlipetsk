<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Законодательство");
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
 <p><img alt="doc.png" src="/upload/medialibrary/466/4661a79ee6b7c0a9e87589a3252bec52.png" title="doc.png">&nbsp;<a href="/upload/zakonodatelstvo/ЗАЯВКА на СОГЛАШЕНИЕ.doc">ЗАЯВКА на СОГЛАШЕНИЕ</a><br>
 <br>
 <img width="24" alt="doc.png" src="/upload/medialibrary/466/4661a79ee6b7c0a9e87589a3252bec52.png" height="30" title="doc.png">&nbsp;<a href="/upload/zakonodatelstvo/МИНЭК № 75 форма БП.docx">МИНЭК № 75 форма БП</a><br>
 <br>
 <img width="24" alt="doc.png" src="/upload/medialibrary/466/4661a79ee6b7c0a9e87589a3252bec52.png" height="30" title="doc.png">&nbsp;<a href="/upload/zakonodatelstvo/Рекомендации к оформлению бизнес-плана.docx">Рекомендации к оформлению бизнес-плана</a><br>
 <br>
 <img width="24" alt="doc.png" src="/upload/medialibrary/466/4661a79ee6b7c0a9e87589a3252bec52.png" height="30" title="doc.png">&nbsp;<a href="/upload/zakonodatelstvo/ФЗ от 08_08_2001 N 129-ФЗ.docx">ФЗ от 08_08_2001 N 129-ФЗ</a><br>
 <br>
 <img width="24" alt="doc.png" src="/upload/medialibrary/466/4661a79ee6b7c0a9e87589a3252bec52.png" height="30" title="doc.png">&nbsp;<a href="/upload/zakonodatelstvo/ФЗ от 22_07_2005 N 116-ФЗ.docx">ФЗ от 22_07_2005 N 116-ФЗ</a><br>
</p>	
</div>
 </section>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>