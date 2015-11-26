<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Presentations to download");
?>
	<div class="main ">
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
				<p>
					<img width="24" alt="ppt.png" src="/upload/medialibrary/0e6/0e6df30e7c4aa1cabf1034ed2234d7cf.png" height="30" title="ppt.png">&nbsp;<a href="/upload/prezentacii/Презентация ОЭЗ Липецк 3.pptx">Презентация ОЭЗ "Липецк" 3</a><br>
				</p>
			</div>
		</section>
	</div>
	<br>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
