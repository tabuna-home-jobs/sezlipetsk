<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Интерактивная карта");

	//Подключаем модуль блоков
	if(!CModule::IncludeModule("iblock"))
		return;


?>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/mapster.js"></script>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/mapstyle.css">

<div class="main container">


	<section class="block_top open_inform row">
		<!--Хеебный крош-->
		<?$APPLICATION->IncludeComponent(
			"custom:breadcrumb",
			"",
			Array(
				"COMPONENT_TEMPLATE" => "oez",
				"START_FROM" => "0",
				"PATH" => "",
				"SITE_ID" => "s1"
			)
		);
		?>
		<!--Хлебные крошки-->
		<h1><?=$APPLICATION->GetTitle();?></h1>


		<!-- Nav tabs -->
		<ul class="nav nav-tabs nav-tab-map" role="tablist">
			<li role="presentation" class="active">
				<a href="#map" aria-controls="map" role="tab" data-toggle="tab">
					<span><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/icons/1(grey).png"></span>Карта
				</a>
			</li>
			<li role="presentation">
				<a href="#free-place" aria-controls="free-place" role="tab" data-toggle="tab">
					<span><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/icons/444(grey).png"></span>
					Свободные участки
				</a>
			</li>
			<li role="presentation">
				<a href="#water-net" aria-controls="water-net" role="tab" data-toggle="tab">
					<span><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/icons/3(grey).png"></span>Сети водоснабжения</a>
			</li>
			<li role="presentation">
				<a href="#net-abduction" aria-controls="net-abduction" role="tab" data-toggle="tab">
					<span><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/icons/4(grey).png"></span>Сети ливневого водоотведения</a>
			</li>
			<li role="presentation">
				<a href="#net-sh" aria-controls="net-sh" role="tab" data-toggle="tab">
					<span><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/icons/6(grey).png"></span>Сети хозяйственно-бытового водоотведения</a>
			</li>
			<li role="presentation">
				<a href="#net-electro" aria-controls="net-electro" role="tab" data-toggle="tab">
					<span><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/icons/2(grey).png"></span>Сети электроснабжения</a>
			</li>
			<li role="presentation">
				<a href="#net-tele" aria-controls="net-tele" role="tab" data-toggle="tab">
					<span><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/icons/9(grey).png"></span>Телекоммуникационные сети</a>
			</li>
			<li role="presentation">
				<a href="#net-hot" aria-controls="net-hot" role="tab" data-toggle="tab">
					<span><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/icons/5(grey).png"></span>Сети теплоснабжения</a>
			</li>
			<li role="presentation">
				<a href="#net-gaz" aria-controls="net-gaz" role="tab" data-toggle="tab">
					<span><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/icons/7(grey).png"></span>Сети газоснабжения</a>
			</li>
			<li role="presentation">
				<a href="#net-infr" aria-controls="net-infr" role="tab" data-toggle="tab">
					<span><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/icons/8(grey).png"></span>Таможенная инфраструктура</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="map">
				<!--Карта-->
				<div class="imgMap">
					<img id="krugp" class="krugoo" src="<?=SITE_TEMPLATE_PATH?>/img/maparea/withelips.png" usemap="#krugpz" />
					<div id="control-button-1">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/close2.png">
					</div>
					<div id="control-button-2">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/close2.png">
					</div>
				</div>
				<!--Карта-->
				<!--Первая зона суб карты-->
				<div class="sub-map" id="sub-map1">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/sub-map.png" id="submapa" usemap="#submap">
				</div>
				<map name="submap">
					<area href="#" data-group="zone18-1" shape="poly" coords="32,77,30,138,62,138,119,124,121,118,102,38,65,46,58,45">
					<area href="#" data-group="zone19" shape="poly" coords="124,54,139,115,143,119,177,112,173,96,202,65,168,37,151,33,140,32,129,32">
					<area href="#" data-group="zone20" shape="poly" coords="28,150,61,150,116,136,126,144,137,193,131,202,29,193">
					<area href="#" data-group="zone21" shape="poly" coords="146,136,152,127,190,119,214,143,162,155,158,162,161,176,157,178">
					<area href="#" data-group="zone22" shape="poly" coords="156,179,164,192,193,206,197,206,201,164,226,166,226,154,214,142,162,154,158,162,162,176,158,179">
					<area href="#" data-group="zone23" shape="poly" coords="197,206,230,208,234,168,201,165">
					<area href="#" data-group="zone24" shape="poly" coords="243,138,274,137,276,184,244,181,245,150,242,150">
					<area href="#" data-group="zone25" shape="poly" coords="244,182,243,205,237,205,237,210,270,213,278,196,276,184">
					<area href="#" data-group="zone26" shape="poly" coords="198,229,195,275,205,272,216,266,226,260,237,252,246,245,256,233">
					<area href="#" data-group="zone27" shape="poly" coords="148,232,154,232,156,224,197,229,193,276,181,280,170,282,156,284,148,284,142,284">
					<area href="#" data-group="zone28" shape="poly" coords="143,284,148,224,42,215,40,229,52,242,59,250,70,258,80,265,94,272,110,279,126,282,134,284">
				</map>
				<!--Первая зона суб карты-->
				<!--Вторая зона суб карты-->
				<div class="sub-map2" id="sub-map2">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/sub-map2.png" id="submapa2" usemap="#submap2">
				</div>

				<map name="submap2">
					<area href="#" data-group="zone30" shape="poly" coords="43,250,53,263,72,249,52,230">
					<area href="#" data-group="zone31" shape="poly" coords="52,229,56,213,74,189,97,164,111,151,142,181,73,248">
					<area href="#" data-group="zone32" shape="poly" coords="111,151,135,126,170,158,171,172,154,172,142,181">
					<area href="#" data-group="zone33" shape="poly" coords="135,124,159,101,166,101,171,158">
					<area href="#" data-group="zone34" shape="poly" coords="197,87,205,85,211,82,215,78,219,73,224,66,229,61,233,63,237,177,206,177">
					<area href="#" data-group="zone35" shape="poly" coords="180,211,167,214,156,220,140,229,131,235,124,241,114,251,106,259,96,271,183,272">
					<area href="#" data-group="zone36" shape="poly" coords="95,272,87,279,78,286,72,290,62,295,55,297,49,298,60,308,76,320,90,328,105,335,118,339,129,342,140,344,148,344,160,344,170,344,177,343,184,342,189,341,183,272">
					<area href="#" data-group="zone37" shape="poly" coords="207,210,211,253,236,253,236,209">
					<area href="#" data-group="zone38" shape="poly" coords="211,254,217,299,239,299,236,253">
					<area href="#" data-group="zone39" shape="poly" coords="217,301,219,330,241,319,239,299">
				</map>
				<!--Вторая зона суб карты-->

				<!--Разметка для картинки-->
				<map name="krugpz">
					<!--Зоны на карте-->
					<area href="#" data-group="zone1" shape="poly" coords="12,214,12,221,28,221,29,215">
					<area href="#" data-group="zone4" shape="poly" coords="18,226,45,226,44,222,17,221">
					<area href="#" data-group="zone2" shape="poly" coords="6,209,7,232,31,232,46,231,45,220,48,219,47,209,38,202">
					<area href="#" data-group="zone3" shape="poly" coords="38,202,48,209,49,219,81,219,81,213,80,213,79,210,80,209,80,194,77,194">
					<area href="#" data-group="zone5" shape="poly" coords="98,235,121,239,144,245,160,249,163,253,195,255,199,233,195,231,194,236,178,234">
					<area href="#" data-group="zone6" shape="poly" coords="176,228,176,232,193,232,193,227">
					<area href="#" data-group="zone7" shape="poly" coords="198,232,195,255,228,259,229,254,219,249,205,237">
					<area href="#" data-group="zone8" shape="poly" coords="207,182,203,220,209,226,214,231,223,237,235,245,241,247,242,231,244,212,246,193,248,193,249,185,241,186,240,185,236,185,220,183">
					<area href="#" data-group="zone9" shape="poly" coords="249,187,248,193,246,194,242,247,275,252,278,250,283,189,263,187">
					<area href="#" data-group="zone10" shape="poly" coords="207,183,224,184,238,185,238,173,235,172,210,177,207,180">
					<area href="#" data-group="zone11" shape="poly" coords="241,185,252,186,262,187,264,167,246,170,242,174,241,179">
					<area href="#" data-group="zone12" shape="poly" coords="264,173,262,186,282,188,283,175">
					<area href="#" data-group="zone13" shape="poly" coords="264,167,263,173,283,175,284,165,281,163">
					<area href="#" data-group="zone14" shape="poly" coords="292,185,293,171,297,171,298,162,306,161,304,187">
					<area href="#" data-group="zone15" shape="poly" coords="305,161,304,186,330,189,330,176,327,176,316,165,309,161">
					<area href="#" data-group="zone16" shape="poly" coords="331,177,330,189,334,190,332,208,356,210,357,181,355,179">
					<area href="#" data-group="zone17" shape="poly" coords="329,207,357,210,357,260,324,256">
					<area href="#" data-group="zone18" shape="poly" coords="290,185,334,189,332,207,328,207,323,256,285,251">
					<!--Круг1-->
					<area id="elips1" href="#" data-group="zone001" shape="poly" coords="357,211,357,218,359,227,363,238,368,247,376,255,383,259,392,264,402,265,411,266,419,265,429,261,437,257,444,250,450,242,453,238,455,232,457,221,457,210,456,202,453,195,450,188,444,181,436,175,430,171,420,167,412,166,404,166,394,167,386,170,378,175,371,181,365,189,361,198">
					<!--Круг1-->
					<area href="#" data-group="zone29" shape="poly" coords="454,251.9999995665117,451,270.9999995665117,502,275.9999995665117,504,273.9999995665117,494,257.9999995665117,481,253.9999995665117">

					<!--Круг2-->
					<area id="elips2" href="#" data-group="zone002" shape="poly" coords="496,240,500,249,508,258,517,264,524,268,531,270,539,271,547,270,557,267,565,264,570,260,575,255,579,251,582,246,585,240,587,233,588,226,589,220,588,214,586,207,582,199,578,192,574,188,568,183,562,179,555,176,546,174,537,174,528,176,521,178,515,181,510,185,505,190,501,195,497,202,494,208,493,217,492,225,493,233,493,233">
					<!--Круг2-->
					<area href="#" data-group="zone30" shape="poly" coords="179,229,180,233,196,235,197,230">
					<area href="#" data-group="zone31" shape="poly" coords="179,229,180,233,196,235,197,230">
					<area href="#" data-group="zone32" shape="poly" coords="179,229,180,233,196,235,197,230">
					<area href="#" data-group="zone33" shape="poly" coords="179,229,180,233,196,235,197,230">
					<area href="#" data-group="zone34" shape="poly" coords="179,229,180,233,196,235,197,230">
					<area href="#" data-group="zone35" shape="poly" coords="179,229,180,233,196,235,197,230">
					<area href="#" data-group="zone36" shape="poly" coords="179,229,180,233,196,235,197,230">
					<area href="#" data-group="zone37" shape="poly" coords="179,229,180,233,196,235,197,230">
					<area href="#" data-group="zone38" shape="poly" coords="179,229,180,233,196,235,197,230">
					<area href="#" data-group="zone39" shape="poly" coords="179,229,180,233,196,235,197,230">
					<area href="#" data-group="zone40" shape="poly" coords="593,179,595,213,619,214,620,200,606,178">
					<area href="#" data-group="zone41" shape="poly" coords="594,225,596,274,620,280,621,226">
					<area href="#" data-group="zone42" shape="poly" coords="622,226,621,280,630,283,650,283,652,260,649,250,633,225">
					<area href="#" data-group="zone43" shape="poly" coords="648,148,667,148,674,165,656,173,648,156">
					<area href="#" data-group="zone44" shape="poly" coords="668,148,674,165,677,170,685,163,686,151,682,147">
					<area href="#" data-group="zone45" shape="poly" coords="656,174,673,165,699,212,679,213,675,211">
					<area href="#" data-group="zone46" shape="poly" coords="678,170,686,164,699,165,702,188,688,190">
					<area href="#" data-group="zone47" shape="poly" coords="711,166,714,187,702,188,699,165">
					<area href="#" data-group="zone48" shape="poly" coords="736,166,737,185,714,186,711,165">
					<area href="#" data-group="zone49" shape="poly" coords="688,190,737,186,739,210,698,212">
					<area href="#" data-group="zone50" shape="poly" coords="746,169,760,168,760,156,763,153,801,154,805,181,747,186">
					<area href="#" data-group="zone51" shape="poly" coords="749,208,764,207,763,184,747,186">
					<area href="#" data-group="zone52" shape="poly" coords="765,208,805,205,808,201,805,181,764,185">
					<area href="#" data-group="zone53" shape="poly" coords="688,225,751,221,756,276,714,279,689,231,691,235">
					<area href="#" data-group="zone54" shape="poly" coords="751,220,764,219,769,222,769,230,789,258,790,273,755,276">
					<area href="#" data-group="zone55" shape="poly" coords="781,219,861,212,866,268,804,273,801,256,781,223">
					<area href="#" data-group="zone56" shape="poly" coords="861,212,912,207,915,211,919,263,866,268">
					<area href="#" data-group="zone57" shape="poly" coords="915,211,923,210,928,206,945,204,950,260,919,262">
					<area href="#" data-group="zone58" shape="poly" coords="946,204,981,194,989,234,949,238">
					<area href="#" data-group="zone59" shape="poly" coords="949,239,989,234,994,256,951,260">
					<area href="#" data-group="zone60" shape="poly" coords="812,149,835,148,844,199,826,202,819,196,811,155">
					<area href="#" data-group="zone61" shape="poly" coords="835,148,853,146,862,145,868,198,844,200">
					<area href="#" data-group="zone62" shape="poly" coords="863,146,889,137,892,162,877,164,866,164">
					<area href="#" data-group="zone63" shape="poly" coords="888,138,901,133,908,146,912,160,892,161">
					<area href="#" data-group="zone64" shape="poly" coords="867,175,878,174,877,164,866,165">
					<area href="#" data-group="zone65" shape="poly" coords="876,163,880,197,910,195,916,189,911,159">
					<area href="#" data-group="zone66" shape="poly" coords="867,175,878,175,881,197,868,198">
					<area href="#" data-group="zone67" shape="poly" coords="909,130,920,144,961,131,939,116,926,124">
					<area href="#" data-group="zone68" shape="poly" coords="920,146,924,190,929,195,963,187,952,134">
					<area href="#" data-group="zone69" shape="poly" coords="952,135,961,131,979,141,987,182,962,187">
					<area href="#" data-group="zone70" shape="poly" coords="978,140,988,145,994,151,1012,177,987,182">
					<area href="#" data-group="zone71" shape="poly" coords="966,97,970,102,1000,120,1002,119,982,88">
					<area href="#" data-group="zone72" shape="poly" coords="982,88,1049,45,1105,147,1035,168">
					<area href="#" data-group="zone73" shape="poly" coords="1048,45,1061,37,1065,36,1070,35,1074,36,1078,38,1166,128,1105,147">
					<area href="#" data-group="zone74" shape="poly" coords="989,193,1029,183,1101,162,1120,245,1003,256">
					<area href="#" data-group="zone75" shape="poly" coords="1111,159,1130,244,1207,237,1234,216,1233,199,1174,139">
					<!--Зоны на карте-->
				</map>
				<!--Описание карты-->
				<div class="description-map">
					<div class="col-xs-5">

					</div>
					<div class="col-xs-7">
						<table class="table table-info">
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color1.jpg"></td>
								<td class="sec-td">участки, занимаемые резидентами ОЭЗ</td>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/line1.jpg"></td>
								<td>границы земельных участков</td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color2.jpg"></td>
								<td class="sec-td">свободные земельные участки</td>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/line2.jpg"></td>
								<td>автодороги</td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color3.jpg"></td>
								<td class="sec-td">участки, занимаемые инфраструктурой ОЭЗ</td>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/line3.jpg"></td>
								<td>ж/д пути</td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color4.jpg"></td>
								<td class="sec-td">земельные участки, резервируемые для потенциальных резидентов ОЭЗ</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color5.jpg"></td>
								<td class="sec-td">земельные участки для размещения/расширения производства резидентов ОЭЗ</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color6.jpg"></td>
								<td class="sec-td">возможное размещение компаний, претендующих на получение статуса резидента</td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>

				</div>
				<!--Описание карты-->



				<?

					$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"rezidenty_map", 
	array(
		"COMPONENT_TEMPLATE" => "rezidenty_map",
		"IBLOCK_TYPE" => "information",
		"IBLOCK_ID" => "12",
		"NEWS_COUNT" => "1000",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_REVIEW" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/about/rezidenty/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"USE_SHARE" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "ADDR",
			1 => "SITE",
			2 => "PHONE",
			3 => "IMG_HOVER",
			4 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "ADDR",
			1 => "AREA_NUMBER",
			2 => "SITE",
			3 => "PHONE",
			4 => "IMG_HOVER",
			5 => "IMAGES",
			6 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_ID#/",
		)
	),
	false
);
				?>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="free-place">
				<div class="imgMap">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/map2.png">
				</div>
				<!--Описание карты-->
				<div class="description-map row">
					<div class="col-xs-5">

					</div>
					<div class="col-xs-7">
						<table class="table table-info">
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color1.jpg"></td>
								<td class="sec-td">участки, занимаемые резидентами ОЭЗ</td>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/line1.jpg"></td>
								<td>границы земельных участков</td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color2.jpg"></td>
								<td class="sec-td">свободные земельные участки</td>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/line2.jpg"></td>
								<td>автодороги</td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color3.jpg"></td>
								<td class="sec-td">участки, занимаемые инфраструктурой ОЭЗ</td>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/line3.jpg"></td>
								<td>ж/д пути</td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color4.jpg"></td>
								<td class="sec-td">земельные участки, резервируемые для потенциальных резидентов ОЭЗ</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color5.jpg"></td>
								<td class="sec-td">земельные участки для размещения/расширения производства резидентов ОЭЗ</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color6.jpg"></td>
								<td class="sec-td">возможное размещение компаний, претендующих на получение статуса резидента</td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</div>

				</div>
				<!--Описание карты-->
			</div>
			<div role="tabpanel" class="tab-pane fade" id="water-net">
				<div class="imgMap">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/map3.jpg">
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="net-abduction">
				<div class="imgMap">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/map4.jpg">
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="net-sh">
				<div class="imgMap">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/map5.jpg">
				</div>

			</div>
			<div role="tabpanel" class="tab-pane fade" id="net-electro">
				<div class="imgMap">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/map6.jpg">
				</div>
				<!--Описание карты-->
				<div class="description-map row">
					<div class="col-xs-5">

					</div>
					<div class="col-xs-7">
						<table class="table table-info">
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/line6.1.jpg"></td>
								<td class="sec-td">Кабельная эстакада</td>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/line6.2.jpg"></td>
								<td>КЛ ОАО "ОЭЗ ППТ "Липецк"</td>
							</tr>
						</table>
					</div>

				</div>
				<!--Описание карты-->

			</div>
			<div role="tabpanel" class="tab-pane fade" id="net-tele">
				<div class="imgMap">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/map7.jpg">
				</div>
				<!--Описание карты-->
				<div class="description-map row">
					<div class="col-xs-5">
					</div>
					<div class="col-xs-7">
						<table class="table table-info">
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/line7.1.jpg"></td>
								<td class="sec-td">Оптический кросс</td>
							</tr>
						</table>
					</div>

				</div>
				<!--Описание карты-->
			</div>
			<div role="tabpanel" class="tab-pane fade" id="net-hot">
				<div class="imgMap">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/map8.jpg">
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="net-gaz">
				<div class="imgMap">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/map9.jpg">
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="net-infr">
				<div class="imgMap">
					<img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/map10.png">
				</div>
				<!--Описание карты-->
				<div class="description-map row">
					<div class="col-xs-5">
					</div>
					<div class="col-xs-7">
						<table class="table table-info spec-table-info">
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color10.1.jpg"></td>
								<td class="sec-td">территория таможенных постов с накопительной стоянкой</td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color10.2.jpg"></td>
								<td class="sec-td">логистический комплекс с козловым краном</td>
							</tr>
							<tr>
								<td><img src="<?=SITE_TEMPLATE_PATH?>/img/maparea/color10.3.jpg"></td>
								<td class="sec-td">производственная база</td>
							</tr>
							<tr>
								<td>5,3 -</td>
								<td class="sec-td">Административное здание таможни</td>
							</tr>
							<tr>
								<td>5,1 -</td>
								<td class="sec-td">Контрольно-пропускной пункт автотранспорта с весовой</td>
							</tr>
							<tr>
								<td>5,12 -</td>
								<td class="sec-td">Склад для хранения грузов</td>
							</tr>
							<tr>
								<td>5,8 -</td>
								<td class="sec-td">Контрольно-пропускной пункт ж/д транспорта</td>
							</tr>
							<tr>
								<td>5,4 -</td>
								<td class="sec-td">Контрольно-пропускной пункт легкового транспорта</td>
							</tr>
							<tr>
								<td>5,10 -</td>
								<td class="sec-td">Здание для досмотра двух крытых ж/д вагонов</td>
							</tr>
							<tr>
								<td>5,16 -</td>
								<td class="sec-td">Накопительная стоянка для большегрузого транспорта</td>
							</tr>
						</table>
					</div>

				</div>
				<!--Описание карты-->
			</div>
		</div>

		<!--Разметка для картинки-->
		<script type="text/javascript">
			$(document).ready(function(){

				var jakor = location.hash;

				if(jakor != ''){
					var currJakor = jakor.replace('#','');

					$(".nav-tab-map li").each(function(){
						var obj = $(this);
						obj.removeClass('active');
						var currHref = $("a",obj).attr('href');
						if(currHref == jakor){
							obj.addClass('active');
						}
					});

					$(".tab-content > div.tab-pane").each(function(){
						var obj = $(this);
						obj.removeClass('active');
						obj.removeClass('in');

						var currId = obj.attr("id");
						if(currId == currJakor){
							obj.addClass('active');
							obj.addClass('in')
						}
					});

				}

				//Нажатие по кругу 1
				$("#elips1, #control-button-1").click(function(){
					$("#sub-map1").fadeIn('1000', function(){
						$("#control-button-1 img").attr('src','<?=SITE_TEMPLATE_PATH?>/img/maparea/close1.png');
					});
					$("#sub-map2").fadeOut('1000', function(){
						$("area[data-group='zone002']").mapster('deselect');
						$("#control-button-2 img").attr('src','<?=SITE_TEMPLATE_PATH?>/img/maparea/close2.png');
					});
				});

				//Нажатие по кругу 2
				$("#elips2, #control-button-2").click(function(){
					$("#sub-map2").fadeIn('1000', function(){
						$("#control-button-2 img").attr('src','<?=SITE_TEMPLATE_PATH?>/img/maparea/close1.png');
					});
					$("#sub-map1").fadeOut('1000', function(){
						$("area[data-group='zone001']").mapster('deselect');
						$("#control-button-1 img").attr('src','<?=SITE_TEMPLATE_PATH?>/img/maparea/close2.png');
					});
				});

				//Закрываем первую суб карту и меняем крестик
				$('body').on('click',"#control-button-1 img[src='<?=SITE_TEMPLATE_PATH?>/img/maparea/close1.png']", function(){
					$("#sub-map1").fadeOut('1000', function(){
						//Убираем выделение у всех круглых областей
						$("area[data-group='zone001']").mapster('deselect');
						$("area[data-group='zone002']").mapster('deselect');
						$("#control-button-1 img").attr('src','<?=SITE_TEMPLATE_PATH?>/img/maparea/close2.png');
					});
				});


				//Закрываем вторую суб карту и меняем крестик
				$('body').on('click',"#control-button-2 img[src='<?=SITE_TEMPLATE_PATH?>/img/maparea/close1.png']", function(){
					$("#sub-map2").fadeOut('1000', function(){
						//Убираем выделение у всех круглых областей
						$("area[data-group='zone001']").mapster('deselect');
						$("area[data-group='zone002']").mapster('deselect');
						$("#control-button-2 img").attr('src','<?=SITE_TEMPLATE_PATH?>/img/maparea/close2.png');
					});
				});


				//Закрываем первую карту если тыркнули по любому месту мапы
				$('body').on("click","map[name='krugpz'] area[id!='elips1']", function(){
					var objDisplay = $("#sub-map1").css('display');

					if(objDisplay == 'block'){
						$("#sub-map1").fadeOut('1000', function(){
							//Убираем выделение у всех круглых областей
							$("area[data-group='zone001']").mapster('deselect');
							$("area[data-group='zone002']").mapster('deselect');
							$("#control-button-1 img").attr('src','<?=SITE_TEMPLATE_PATH?>/img/maparea/close2.png');
						});
					}

				});

				//Закрываем вторую карту если тыркнули по любому месту мапы
				$('body').on("click","map[name='krugpz'] area[id!='elips2']", function(){
					var objDisplay2 = $("#sub-map2").css('display');

					if(objDisplay2 == 'block'){
						$("#sub-map2").fadeOut('1000', function(){
							//Убираем выделение у всех круглых областей
							$("area[data-group='zone001']").mapster('deselect');
							$("area[data-group='zone002']").mapster('deselect');
							$("#control-button-2 img").attr('src','<?=SITE_TEMPLATE_PATH?>/img/maparea/close2.png');
						});
					}
				});

				//Зыкрываем все подсказки по уходу мышки с блока
				$(".wrapper-tooltip").mouseleave(function(){
					//Текущая подсказка
					var obj = $(this);
					//Получаем area в которой надо делать deselect
					var idObj = obj.attr("id");
					//Закрываем текущую подсказку
					obj.css({
						display : "none"
					});
					//Убираем выделение у area
					$("area[data-group='"+idObj+"']").mapster('deselect');
				});

				$("#submapa").mapster({
					noHrefIsMask: true,
					fillColor: 'ff0000',
					fillOpacity: 0.7,
					mapKey: 'data-group',
					strokeWidth: 2,
					stroke: true,
					strokeColor: '0071bc',
					singleSelect: true,
					onClick: function (e) {
						var event = e || window.event;
						var id = e.key;
						var leftMouse = event.e.clientX + "px";
						var topMouse = event.e.clientY + "px";


						var contTop = $(".main.container").offset().top;

						var windTop = $(window).scrollTop();

						var heighImg = $("#"+id+" img");

						var imgHeightCurrent = heighImg.css('height');


						var coordinateTop = 0;

						if(windTop < contTop){
							coordinateTop = 0;
						}else if(windTop > contTop){
							coordinateTop = 100;
						}

						//Берем левую координату
						if(leftMouse > 800){
							leftMouse = 800
						}

						//Зыкрываем все подсказки
						$(".wrapper-tooltip").css({
							display : "none"
						});

						//Вызываем блок с подсказкой
						$("#"+id).css({
							display : "block",
							top : coordinateTop,
							left : leftMouse
						});

					},
					render_select: {
						fillColor: 'adadad'
					}
				});

				$("#submapa2").mapster({
					noHrefIsMask: true,
					fillColor: 'ff0000',
					fillOpacity: 0.7,
					mapKey: 'data-group',
					strokeWidth: 2,
					stroke: true,
					strokeColor: '0071bc',
					singleSelect: true,
					onClick: function (e) {
						var event = e || window.event;
						var id = e.key;
						var leftMouse = event.e.clientX + "px";
						var topMouse = event.e.clientY + "px";


						var contTop = $(".main.container").offset().top;

						var windTop = $(window).scrollTop();

						var heighImg = $("#"+id+" img");

						var imgHeightCurrent = heighImg.css('height');


						var coordinateTop = 0;

						if(windTop < contTop){
							coordinateTop = 0;
						}else if(windTop > contTop){
							coordinateTop = 100;
						}

						//Берем левую координату
						if(leftMouse > 800){
							leftMouse = 800
						}



						//Зыкрываем все подсказки
						$(".wrapper-tooltip").css({
							display : "none"
						});

						//Вызываем блок с подсказкой
						$("#"+id).css({
							display : "block",
							top : coordinateTop,
							left : leftMouse
						});

					},
					render_select: {
						fillColor: 'adadad'
					}
				});

				//Выбираем основную карту и размечаем
				$('#krugp').mapster({

					noHrefIsMask: true,
					fillColor: 'ff0000',
					fillOpacity: 0.7,
					mapKey: 'data-group',
					strokeWidth: 2,
					stroke: true,
					strokeColor: '0071bc',
					singleSelect: true,
					onClick: function (e) {
						var event = e || window.event;
						var id = e.key;
						var leftMouse = event.e.clientX;
						var topMouse = event.e.clientY + "px";



						var contTop = $(".main.container").offset().top;

						var windTop = $(window).scrollTop();

						var heighImg = $("#"+id+" img");

						var imgHeightCurrent = heighImg.css('height');


						var coordinateTop = 0;

						if(windTop < contTop){
							coordinateTop = 0;
						}else if(windTop > contTop){
							coordinateTop = 100;
						}


						//Берем левую координату
						if(leftMouse > 800){
							leftMouse = 800
						}


						//Зыкрываем все подсказки
						$(".wrapper-tooltip").css({
							display : "none"
						});

						//Вызываем блок с подсказкой
						$("#"+id).css({
							display : "block",
							top : coordinateTop,
							left : leftMouse
						});

					},
					render_select: {
						fillColor: 'adadad'
					},
					areas: [
						{
							key: 'zone2',
							includeKeys: 'zone1, zone4',
							stroke: true
						},
						{
							key: 'zone1',
							toolTip: $("#zone1")
						},
						{
							key: 'zone3',
							toolTip: $("#zone3")
						},
						{
							key: 'zone8',
							toolTip: $("#zone8")
						}
					]

				});
			});

		</script>

	</section>

</div>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>