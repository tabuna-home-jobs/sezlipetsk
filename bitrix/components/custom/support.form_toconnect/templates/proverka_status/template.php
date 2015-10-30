<div class="login_form_container">


      <div class="text-left">
          <h3 class="text-center">Статус заявки на тех. присоединение<br> к сетям электроснабжения</h3>
         <?



            while($ar = $arResult['rs']->Fetch()){
	            $my_mess = CTicket::GetMessageList($a, $b, array("TICKET_ID" => $ar['ID']));

	            $mess = $my_mess->Fetch();

               //Если статус заявки ещё не рассмотрен то говорим об етом
               if($ar['STATUS_ID'] == 0){
                  $namezz = $ar['TITLE'];

                  if($namezz == 'Заявка на присоединение' || $namezz == 'Заявка на временное присоединение'){
                     ?>
         <div class="wrapp-shower">
                     <b><?=$namezz?></b> не рассмотрено(а)
                     <p><small>(Запись создана: <?=$ar['DATE_CREATE'];?>)</small></p>
                     </div>
                     <?
                  }
               }else{
                  $namezz = $ar['TITLE'];
                  if($namezz == 'Заявка на присоединение' || $namezz == 'Заявка на временное присоединение') {
                     //А тут у нас выводятся все статусы заявок
                     ?>
         <div class="wrapp-shower">
                     <b><?= $namezz ?></b> имеет статус: <i><?= $ar['STATUS_NAME']; ?></i><span class="showtext">>>></span>
	         <div class="urMessage">
		         <div><?=$ar['message'] ?></div>
		         <div>
			         <small>(Запись создана: <?= $ar['DATE_CREATE']; ?>)</small>
		         </div>
		         <?while($mess = $my_mess->Fetch()){
			         //var_dump($mess);

			         if(!stristr($mess['MESSAGE'],'уровень поддержки') ){
				         $myyyy = str_replace('<li>','',$mess['MESSAGE']);
				         $myyyy = str_replace('<li>','',$myyyy);
				         if($mess['IS_LOG'] != 'Y'){
					         $myyyy = 'Сообщение техподдержки : '.$myyyy;
				         }
				         ?>

				         <br><?= $mess['TIMESTAMP_X']?> : <?=$myyyy ?>
			         <? }
		         } ?>
	         </div>
                     <p>
	                     <small>(Статус изменён: <?= $ar['TIMESTAMP_X']; ?>)</small>
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

