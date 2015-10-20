<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Таможенные льготы");
?><div class="main ">
 <section class="top_block_main">
	<div class="container" style="text-align: justify;">
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
	<p style="text-align: justify;" class="">
		 На территории ОЭЗ "Липецк" функционирует полный комплекс таможенной инфраструктуры, созданный для нужд резидентов:
	</p>
	<p style="text-align: justify;">
	</p>
	<ul>
		<li>
		<p style="text-align: justify;">
			 Возможность электронного декларирования грузов
		</p>
 </li>
		<li>
		<p style="text-align: justify;">
			 Полное отсутствие очередей
		</p>
 </li>
	</ul>
	<p style="text-align: justify;">
	</p>
	<p style="text-align: center;">
 <br>
	</p>
	<p style="text-align: center;">
 <img width="1024" alt="Таможенные льготы_новая-05-10-15.png" src="/upload/medialibrary/2c9/2c9b8cc388129699a31704c96e8625ff.png" height="561" title="Таможенные льготы_новая-05-10-15.png"><br>
	</p>
	<p>
	</p>
 </section>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>