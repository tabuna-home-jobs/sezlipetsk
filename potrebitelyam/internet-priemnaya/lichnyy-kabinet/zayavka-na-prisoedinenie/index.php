<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заявка на присоединение");
?><div class="main container">
	<div class="col-xs-12 col-md-6">
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
		<h1>Подать заявку на тех. присоединение к сетям электроснабжения.</h1>
		<p>
			 1. В случае технологического присоединения передвижных объектов максимальная мощность не должна превышать 150 кВт включительно.
		</p>
		<p>
			 2. Классы напряжения (0,4; 6; 10) кВ.
		</p>
		<p align="justify">
			 3. При наличии договора технологического присоединения по постоянной схеме электроснабжения указывается срок временного технологического присоединения, определяемый в соответствии с договором технологического присоединения по постоянной схеме электроснабжения.
		</p>
		<p align="justify">
			 Если в соответствии с договором технологического присоединения мероприятия по технологическому присоединению реализуются поэтапно, указывается срок того из этапов, на котором будет обеспечена возможность электроснабжения энергопринимающих устройств с применением постоянной схемы электроснабжения на объем максимальной мощности, указанный в заявке, направляемой заявителем в целях временного технологического присоединения.
		</p>
		<p>
			 Если энергопринимающие устройства являются передвижными и имеют максимальную мощность до 150 кВт включительно, указывается срок до 12 месяцев.
		</p>
		<p>
			 4. Информация о реквизитах договора не предоставляется заявителями, энергопринимающие устройства которых являются передвижными и имеют максимальную мощность до 150 кВт включительно.
		</p>
		<p align="justify">
			 К заявке необходимо приложить следующие документы:
		</p>
		<p align="justify">
			 1) план расположения энергопринимающих устройств, которые необходимо присоединить к электрическим сетям сетевой организации;
		</p>
		<p align="justify">
			 2) копия документа, подтверждающего право собственности или иное предусмотренное законом основание на объект капитального строительства (нежилое помещение в таком объекте капитального строительства) и (или) земельный участок, на котором расположены (будут располагаться) объекты заявителя, либо право собственности или иное предусмотренное законом основание на энергопринимающие устройства (для заявителей, планирующих осуществить технологическое присоединение энергопринимающих устройств потребителей, расположенных в нежилых помещениях многоквартирных домов или иных объектах капитального строительства, - копия документа, подтверждающего право собственности или иное предусмотренное законом основание на нежилое помещение в таком многоквартирном доме или ином объекте капитального строительства);
		</p>
		<p>
			 3) доверенность или иные документы, подтверждающие полномочия представителя заявителя, подающего и получающего документы, в случае если заявка подается в сетевую организацию представителем заявителя.
		</p>
		<div class="scrollbar-outer">
			<div class="needle-documents">
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 login_part_right max_height_block">
		 <?$APPLICATION->IncludeComponent(
	"custom:support.form_toconnect",
	"",
	Array(
	)
);?>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>