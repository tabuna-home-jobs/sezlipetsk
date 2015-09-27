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
							<div>Металлообработка</div>
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
							<div>Химическая промышленность</div>
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
							<div>Производство цемента</div>
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
								<h4 class="modal-title" id="myModalLabel">Металлообработка</h4>
							</div>
							<div class="modal-body">
								Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
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
								Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
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
								<h4 class="modal-title" id="myModalLabel3">Химическая промышленность</h4>
							</div>
							<div class="modal-body">
								Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
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
								Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel5">Сельское хозяйство</h4>
							</div>
							<div class="modal-body">
								Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							</div>
						</div>
					</div>
				</div>
				<!--Модалка-->
				<!-- Модалка -->
				<div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel6">Производство цемента</h4>
							</div>
							<div class="modal-body">
								Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
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
