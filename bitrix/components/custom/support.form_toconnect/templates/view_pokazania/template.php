<div class="login_form_container">


      <div class="text-left">

         <?


            while($ar = $arResult['rs']->Fetch()){

               $mess = CTicket::GetMessageList($a, $b, array("TICKET_ID" => $ar['ID']));

               $mess = $mess->Fetch();


               $message = 'Нет сообщения';

               if($mess["MESSAGE"]){

                  $ar['message'] = str_replace(';','<br>',$mess['MESSAGE']);
               }else{
                  $ar['message'] = $message;
               }


               //Если статус заявки ещё не рассмотрен то говорим об етом
               if($ar['STATUS_ID'] == 0){
                  $namezz = $ar['TITLE'];
                  if($namezz == 'Показания приборов учёта'){
                     ?>
         <div class="wrapp-shower">
                     <b><?=$namezz?></b> не рассмотрено(а)<span class="showtext">>>></span>
                     <div class="urMessage"><?=$ar['message']?></div>
                     <p><small>(Запись создана: <?=$ar['DATE_CREATE'];?>)</small></p>

            </div>
                     <?
                  }
               }else{
                  $namezz = $ar['TITLE'];
                  if($namezz == 'Показания приборов учёта') {
                     //А тут у нас выводятся все статусы заявок
                     ?>
                      <div class="wrapp-shower">
                        <b><?= $namezz ?></b> имеет статус: <i><?= $ar['STATUS_NAME']; ?></i><span class="showtext">>>></span>
                        <div class="urMessage"><?=$ar['message']?></div>
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

