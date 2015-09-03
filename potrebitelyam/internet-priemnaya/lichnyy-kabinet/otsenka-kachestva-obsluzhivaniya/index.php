<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оценка качества обслуживания");
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
        <h1>Оценка качества обслуживания</h1>

        <div class="scroll-content">
            <div class="">
                РОСОЭЗ – это масштабный федеральный проект по привлечению инвестиций, передовых научных, производственных и управленческих технологий.
<br><br>
РОСОЭЗ предоставляют компаниям уникальную возможность использовать все инвестиционные преимущества России, минуя при этом типичные российские проблемы – нерыночные факторы влияния на бизнес и неэффективное администрирование.

В данном разделе вы найдёте информацию о том, как начать свой бизнес в российских особых экономических зонах.
            </div>
            <div class="back_container"><a class="all"><span
                    class="glyphicon glyphicon-menu-left"></span> Назад</a></div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 login_part_right max_height_block">
        <div class="login_form_container padding_block">
            <?$APPLICATION->IncludeComponent(
                "custom:support.form_toconnect",
                "assessment",
                Array(
                )
            );
            ?>
        </div>
    </div>
</div>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
