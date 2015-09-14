<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Полезные бизнес ссылки");
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
 <a href="http://www.economy.gov.ru" target="_blank">
		<ul>
			<li>Минэкономразвития РФ – официальный сайт</li>
		</ul>
 </a>
		Новости&nbsp;Министерства Экономического развития РФ, мероприятия, официальные документы
 <a href="http://www.russez.ru" target="_blank">
	<ul>
		<li>ОАО «Особые экономические зона» - официальный сайт</li>
	</ul>
 </a>
	<p>
	</p>
	<p>
		 Новости ОАО «ОЭЗ», федеральных экономических зон,мероприятия, официальные документы
	</p>
 <a href="http://www.admlip.ru" target="_blank">
	<ul>
		<li>Администрация Липецкой области – официальный портал</li>
	</ul>
 </a>
	<p>
	</p>
	<p>
		 Новости&nbsp;региона, мероприятия, заседания, официальные документы
	</p>
 <a href="http://www.elets-adm.ru/" target="_blank">
	<ul>
		<li>Администрация&nbsp;города Ельца&nbsp;—&nbsp;официальный сайт.</li>
	</ul>
 </a>
	<p>
	</p>
	<p>
		 Новости&nbsp;города Ельца, мероприятия, заседания, официальные документы
	</p>
 <a href="http://www.gryazy.ru/" target="_blank"></a>
	<ul>
		<li><a href="http://www.gryazy.ru/" target="_blank">Администрация&nbsp;городаГрязи&nbsp;—&nbsp;официальныйсайт.</a></li>
	</ul>
 Новости&nbsp;города Грязи, мероприятия, заседания, официальные документы<br>
 <a href="http://www.invest-lipetsk.com/" target="_blank">
<ul>
	<li>Управлениеинвестиций и международных связейАдминистрации Липецкой области</li>
</ul>
 </a> <a href="http://www.korporaz48.ru" target="_blank">
<ul>
	<li>ОАО«Корпорация Развития Липецкой области»</li>
</ul>
 </a>
Особые экономические зоны регионального уровняЦентр сопровождения инвестиционных проектов<br>
 <a href="http://www.lipetsk.tpprf.ru" target="_blank">
<ul>
	<li>Липецкаяторгово-промышленная палата</li>
</ul>
 </a>
Некоммерческая организация, способствует развитию региона, представляет&nbsp;и защищает интересы регионального бизнеса<br>
<p>
 <a href="http://www.грязи.рф" target="_blank"></a>
</p>
 <a href="http://www.грязи.рф" target="_blank">
<ul>
	<li>Информационно-справочный портал г. Грязи</li>
</ul>
</a>
Афиша, новости, справочник<br>
<p>
</p>
<p>
 <a href="http://www.allelets.ru/" target="_blank"></a>
</p>
<ul>
	<li><a href="http://www.allelets.ru/" target="_blank">Информационно-справочный портал г. Ельца</a></li>
</ul>
<p>
</p>
<p>
	 Афиша, новости, справочник<br>
</p>
<p>
 <a href="http://www.gorodlip.ru/" target="_blank"></a>
</p>
<ul>
	<li><a href="http://www.gorodlip.ru/" target="_blank">Информационно-справочный портал г. Липецка</a></li>
</ul>
<p>
</p>
<p>
	 Афиша, новости, справочник
</p>
<p>
 <br>
</p>
</div>
</section>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>