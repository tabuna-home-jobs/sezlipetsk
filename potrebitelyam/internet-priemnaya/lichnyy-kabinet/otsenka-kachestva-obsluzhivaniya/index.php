<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оценка качества обслуживания");
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
		<h1>Оценка качества обслуживания</h1>
		<div class="scroll-content">
			<div class="">
				<p>
					 «ОАО «ОЭЗ ППТ «Липецк» осуществляет строительство и эксплуатацию распределительных сетей электроснабжения, теплоснабжения, газоснабжения, водоснабжения и водоотведения на территории ОЭЗ ППТ «Липецк».
				</p>
				<p>
					 В данном разделе Вы можете оценить качество обслуживания ОАО «ОЭЗ ППТ «Липецк» по указанным видам деятельности, а также дать свои предложения по его улучшению.»
				</p>
			</div>
			<div class="back_container">
				 <a class="all" id="go_back" >
                    <span class="glyphicon glyphicon-menu-left"></span>
                    Назад
                </a>
			</div>
			 <script type="text/javascript">
                $(document).ready(function(){
                   //Вернемся назад
                   $("#go_back").click(function(){
                       window.history.back();
                   });
                });
            </script>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 login_part_right max_height_block">
		<div class="login_form_container padding_block">
			 <?$APPLICATION->IncludeComponent(
	"custom:support.form_toconnect",
	"assessment",
	Array(
	)
);?>
		</div>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>