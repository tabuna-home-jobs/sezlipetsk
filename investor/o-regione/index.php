<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О регионе");
?>

	<div class="main ">
		<section class="top_block_main">
			<div class="container">
				<div class="row top_block">
					<div class="left_part col-xs-12 col-sm-12 col-md-7">
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

						<div class="scrollbar-outer resize_scroll">
							<div class="lin">
								Липецкая область расположена в центральной части европейской территории России, в 370 км к югу от Москвы (расстояние от столицы до областного центра — около 450 км). Область граничит с Курской, Орловской, Тульской, Рязанской, Тамбовской и Воронежской областями.
								<br><br>
								<strong>Территория Липецкой области</strong> — 24 000 км² <br>
								<strong>Население</strong> — 1 171 тыс. человек <br>
								<strong> Административный центр</strong> — Липецк — 508 тыс. человек <br>
								<strong> Крупные города</strong> — Елец (108 тыс. человек), Грязи (46 тыс. человек). <br>
								<strong> ВРП</strong> — 254,7 млр. рублей в 2010 году <br>
							</div>
						</div>
					</div>
					<div class="hidden-xs hidden-sm right_part col-xs-12 col-sm-12 col-md-5">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/oregione.png">
					</div>
				</div>
			</div>
		</section>
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Основные отрасли экономики региона</h2>
					<div class="row otrasl">


						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal1">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/metal.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black6.png" class="black">
							</div>
							<div>Металлургия и металлообработка</div>
						</div>

						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal2">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/gears.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black2.png" class="black">
							</div>
							<div>Машиностроение</div>
						</div>
						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal3">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/colba.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black5.png" class="black">
							</div>
							<div>Нефтехимическая промышленность</div>
						</div>
						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal4">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/bytteh.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black1.png" class="black">
							</div>
							<div>Производство бытовой техники</div>
						</div>
						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal5">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/lopata.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black4.png" class="black">
							</div>
							<div>Производство строительных конструкций</div>
						</div>
						<div class="col-xs-6 otrasl_item" data-toggle="modal" data-target="#modal6">
							<div>
								<img src="<?=SITE_TEMPLATE_PATH?>/img/cow.png" class="red">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/black3.png" class="black">
							</div>
							<div>Сельское хозяйство</div>
						</div>
					</div>
				</div>

				<!--Модальные окна-->
				<!-- Модалка -->
				<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Металлургия и металлообработка</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">Промышленное производство является основой экономического потенциала области, на его долю приходится около 66 % валового регионального продукта. Регион занимает четвёртое место по производству стали (14 %) и проката черных металлов (16 %), В числе крупнейших промышленных предприятий — ОАО «Новолипецкий металлургический комбинат», Завод «Свободный сокол»</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel2">Машиностроение</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">В Липецкой области более 350 крупных, средних и малых предприятиях. Машиностроительной отрасли. На  них трудятся более 16 тыс. человек, из них производством машин и оборудования заняты почти 13 тыс. человек. Удельный вес машиностроения и металлообработки в структуре промышленного производства региона составляет 7 %. Ежегодно предприятия отрасли отгружают продукции на сумму свыше 24 млрд. рублей. За январь-июль 2015 года этот объем вырос почти на 6 % к соответствующему периоду прошлого года и составил 17,2 млрд. рублей.</p> 

								<p style="text-align: justify;">Основными центрами машиностроения являются Липецк, Елец, Грязи, Лебедянь, Чаплыгин, Усмань. Среди наиболее крупных предприятий - ЗАО «Индезит Интернэшнл», «Липецкий завод гусеничных тягачей», ООО «Липецкое станкостроительное предприятие», акционерные общества «Гидромаш», «Елецгидроагрегат», «Гидропривод», «Грязинский культиваторный завод», «Строймаш», а также ООО «Лебедянский машиностроительный завод», ООО «РАЦИОНАЛ».</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel3">Нефтехимическая промышленность</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">В Липецком  регионе успешно работает ряд предприятий, представляющих нефтехимическую промышленность:</p>
								<ul>
								<li style="text-align: justify;">ОАО «СИЛАН» — именно данное предприятие раньше остальных приступило к изготовлению кремнийорганических изделий. Основу ассортимента образуют соединения, для получения которых применяют кристаллический кремний высокой чистоты совместно с хлорпроизводными углеводородами.</li>
								<li style="text-align: justify;">ОАО «Полимер» — основной специализацией данного предприятия является изготовление полимерных изделий. К числу таковых следует отнести упаковочные товары, пакеты на полимерной основе, применяемые для фасовки, продукцию из пластмасс (к примеру, бочки), а также товары народного потребления на основе пластмассы.</li>
								<li style="text-align: justify;">ООО «Ланксесс Липецк» производит добавки для шинной промышленности.</li>
                                </ul>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel4">Производство бытовой техники</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">Регион занимает первое место в Российской Федерации по производству бытовых холодильников и морозильников (более 40 % от общероссийского производства). Крупнейший производитель холодильников и стиральных машин – ЗАО «Индезит Интернешнл».</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel5">Сельское хозяйство</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">Благоприятные климатические условия, наличие чернозёмов, способствуют развитию растениеводства. Площадь сельхозугодий занимает свыше 1,8 млн га, из них пашня — более 80 %. 22,3 тыс. га земли отведено под плодовые сады, где в основном выращивают яблони, груши, сливы. В области насчитывается около 300 сельскохозяйственных предприятий, основными направлениями которых являются: производство зерновых, сахарной свеклы, картофеля, разведение крупного рогатого скота, свиноводство, птицеводство. Объём валовой продукции сельского хозяйства в 2010 году составил около 35,3 млрд рублей.</p>
								<p style="text-align: justify;">В настоящее время крупная российская продовольственная компания «Черкизово» осуществляет строительство в Елецком районе Липецкой области крупнейшего в России агропромышленного комплекса.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel6">Производство строительных конструкций</h4>
							</div>
							<div class="modal-body">
								<p style="text-align: justify;">К перспективным отраслям относится промышленность строительных материалов, которая призвана удовлетворить потребности строительства в собственных строительных материалах. С этой целью предусматривается ввод новых производственных мощностей - строительство новых заводов (цементного, по производству стеновых материалов, стекольного и др.) и связанных с ними разработка карьеров и рост добычи цементного и черепично-кирпичного сырья, производство и обогащение стекольных песков. Развиваются производства новых современных строительных материалов.</p>
								<p style="text-align: justify;"><b>ОАО «Липецкцемент»</b> – единственный производитель цемента в Липецкой области. Продукция предприятия пользуется широкой известностью среди потребителей строительного комплекса Москвы, Липецкой, Тамбовской, Курской, Тульской, Орловской, Московской областей и других регионов России.</p> 
								<p style="text-align: justify;"><b>ООО «ЗСК СЭНДВИЧ-ПАНЕЛЬ», ООО «ЗАВОД СТРОИТЕЛЬНЫХ КОНСТРУКЦИЙ»</b></p>
								<p style="text-align: justify;">Это предприятия нового поколения, одни из крупнейших Российских производителей сэндвич-панелей (1,5 млн. кв. метров в год). Выпускаемые трехслойные стеновые и кровельные сэндвич-панели имеют толщину от 60 до 250 мм и предназначаются для единой системы быстровозводимых зданий и металлоконструкций.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!--Модальные окна-->


				<div class="col-md-6">
					<h2>Международные рейтинги и инвестиционный климат</h2>

					<div>
						<h3>Fitch Ratings:</h3>
						<ul class="red_dotes_ul">
							<li><span>долгосрочные рейтинги в иностранной и национальной валюте «BB» с прогнозом «стабильный»;</span>
							</li>
							<li><span>краткосрочный рейтинг в иностранной валюте «B»;</span></li>
							<li><span>национальный долгосрочный рейтинг «AA-(rus)» с прогнозом «стабильный»</span></li>
						</ul>
					</div>
					<div>
						<h3>Standard & Poors:</h3>
						<ul class="red_dotes_ul">
							<li><span>долгосрочный кредитный рейтинг «ВВ»;</span>
							</li>
							<li><span>рейтинг по национальной шкале «ruAA». Прогноз — «Стабильный».</span></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
