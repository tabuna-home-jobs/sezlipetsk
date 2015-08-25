<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Особая Экономическая Зона");
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
?>
<!--Верхний слайдер-->
<?$APPLICATION->IncludeComponent(
    "custom:news.list",
    "",
    Array(
        "IBLOCK_ID" => "MAIN_SLIDER"
    )
);?>
<!--Верхний слайдер-->
<div class="main container">
 <section class="main_blocks row">
  <div class="col-lg-6 col-md-8 col-xs-12 blocks_left">
   <div class="row">
    <div class="col-xs-12 item_wrap">
     <div class="col-sm-6 col-xs-12 block_item">
      <div class="item_block">
       <a class="item_block_a">
        <div class="hover_container">
         <div class="hover"></div>
        </div>
        <div class="item_bod">
         <div class="item_name">Виртуальный тур</div>
         <div class="item_dop">по ОЭЗ ППТ «Липецк»</div>
        </div>
        <div class="block_icon">
            <span class="item_block_img">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/compas.png"/>
              <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/compas_2.png"/>
            </span>
        </div>
       </a>
      </div>
     </div>
     <div class="col-sm-6 col-xs-12 block_item">
      <div class="item_block">
       <a class="item_block_a">
        <div class="hover_container">
         <div class="hover"></div>
        </div>
        <div class="item_bod">
         <div class="item_name">Резиденты ОЭЗ</div>
        </div>
        <div class="block_icon">
            <span class="item_block_img">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/people.png"/>
              <img src="<?=SITE_TEMPLATE_PATH?>/img/img_hover/people_2.png"/>
            </span>
        </div></a>
      </div>
     </div>
    </div>
    <div class="col-xs-12 item_wrap">
     <div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
      <div class="item_block">
       <a class="item_block_a_small">
        <div class="hover_container">
         <div class="hover"></div>
        </div>
        <div class="item_bod">
         <div class="item_name smal_item_name">Расположение</div>
        </div>
        <div class="block_icon_arrow">
         <span class="glyphicon glyphicon-menu-right"></span>
        </div>
       </a>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-xs-6 col-sm-6 block_item">
      <div class="item_block">
       <a class="item_block_a_small"><div class="hover_container">
         <div class="hover"></div>
        </div>
        <div class="item_bod">
         <div class="item_name smal_item_name">Управляющая компания</div>
        </div>
        <div class="block_icon_arrow">
         <span class="glyphicon glyphicon-menu-right"></span>
        </div></a>
      </div>
     </div>
     <div class="col-lg-6 col-xs-12 col-sm-12 col-md-12 block_item">
      <div class="item_block">
       <a class="item_block_a"><div class="hover_container">
         <div class="hover"></div>
        </div>
        <div class="item_bod">
         <div class="item_name">Стать резидентом</div>
        </div>
        <div class="block_icon">
                                 <span class="item_block_img">
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/people_plus.png"/>
                                      <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/people_plus_2.png"/>
                                </span>
        </div></a>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!--Последняя новость на главной-->
  <?$APPLICATION->IncludeComponent(
      "custom:news.list",
      "main_news",
      Array(
          "DISPLAY_DATE" => "Y",
          "DISPLAY_PICTURE" => "Y",
          "DISPLAY_PREVIEW_TEXT" => "Y",
          "IBLOCK_TYPE" => "news",
          "IBLOCK_ID" => "infoportal_news_s1",
          "NEWS_COUNT" => "1"
      )
  );?>
  <!--Последняя новость на главной-->
  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 row block_stats">
   <div class="col-xs-12 news_name">Целевые показатели роста</div>
   <div class="col-xs-12 pokazateli"><div class="col-sm-6 col-xs-12 col-md-12 stat_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/stat.jpg"></div>
    <div class="col-sm-6 col-xs-12 col-md-12 stat_descript">
     <ul>
      <li><img src="<?=SITE_TEMPLATE_PATH?>/img/black_dot.png">реализация 1-го этапа проекта в Грязинском районе</li>
      <li><img src="<?=SITE_TEMPLATE_PATH?>/img/red_dot.png">после реализации 2-го этапа в Елецком районе</li>
     </ul>
    </div></div>
  </div>
 </section>

 <!--Нижняя карусел партнеров-->
 <?$APPLICATION->IncludeComponent(
     "custom:news.list",
     "partners",
     Array(
         "IBLOCK_ID" => "BOTTOM_CARUSEL"
     )
 );?>
 <!--Нижняя карусел партнеров-->

</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
