<div class="login_form_container">


      <div class="text-left">
          <h3 class="text-center">Статус заявки на тех. присоединение<br> к сетям электроснабжения</h3>
         <?



            while($ar = $arResult['rs']->Fetch()){


               //Если статус заявки ещё не рассмотрен то говорим об етом
               if($ar['STATUS_ID'] == 0){
                  $namezz = $ar['TITLE'];

                  if($namezz == 'Заявка на присоединение'){
                     ?>
         <div class="wrapp-shower">
                     <b><?=$namezz?></b> не рассмотрено(а)
                     <p><small>(Запись создана: <?=$ar['DATE_CREATE'];?>)</small></p>
                     </div>
                     <?
                  }
               }else{
                  $namezz = $ar['TITLE'];
                  if($namezz == 'Заявка на присоединение') {
                     //А тут у нас выводятся все статусы заявок
                     ?>
         <div class="wrapp-shower">
                     <b><?= $namezz ?></b> имеет статус: <i><?= $ar['STATUS_NAME']; ?></i>
                     <p>
                        <small>(Запись создана: <?= $ar['DATE_CREATE']; ?>)</small>
                     </p>
                     </div>

                     <?
                  }
               }
            }
         ?>
         <script type="text/javascript">
            $(document).ready(function(){
               $(".showtext").click(function(){

                  var obj = $(this);
                  var wrapBlock = obj.parent();

                  var currText = $('.urMessage',wrapBlock);

                  var statusText = currText.css('display');

                  if(statusText == 'none'){
                     currText.slideDown();
                     obj.html('<<<');
                  }else{
                     currText.slideUp();
                     obj.html('>>>');
                  }

               });
            });
         </script>
      </div>
</div>

