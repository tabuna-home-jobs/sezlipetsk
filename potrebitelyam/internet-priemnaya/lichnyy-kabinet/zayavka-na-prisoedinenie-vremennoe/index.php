<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Заявка на временное присоединение");
?>
	<div class="main container">
		<div class="col-xs-12 col-md-6">
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
			<h1>Подать заявку на тех. присоединение к сетям электроснабжения.</h1>
			<div class="scrollbar-outer">
				<p>РОСОЭЗ &ndash; это масштабный федеральный проект по привлечению инвестиций, передовых научных,
				   производственных и управленческих технологий.</p>
				<p>РОСОЭЗ предоставляют компаниям уникальную возможность использовать все инвестиционные преимущества
				   России, минуя при этом типичные российские проблемы &ndash; нерыночные факторы влияния на бизнес и
				   неэффективное администрирование.</p>
				<p>В данном разделе вы найдёте информацию о том, как начать свой бизнес в российских особых экономических
				   зонах.<br/>
				   РОСОЭЗ предоставляют компаниям уникальную возможность использовать все инвестиционные преимущества
				   России, минуя при этом типичные российские проблемы &ndash; нерыночные факторы влияния на бизнес и
				   неэффективное администрирование.</p>
				<p>В данном разделе вы найдёте информацию о том, как начать свой бизнес в российских особых экономических
				   зонах.</p>

				<div class="prime4ania">
					<p><span class="prim">1</span> - описание примечания №1</p>
					<p><span class="prim">2</span> - описание примечания №2</p>
					<p><span class="prim">3</span> - описание примечания №3</p>
					<p><span class="prim">4</span> - описание примечания №4</p>
				</div>
				<div class="needle-documents">
					<p>Перечень необходимых документов</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6 login_part_right max_height_block">
			<?$APPLICATION->IncludeComponent(
				"custom:support.form_toconnect",
				"temp_connection",
				Array(
				)
			);
			?>


		</div>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
