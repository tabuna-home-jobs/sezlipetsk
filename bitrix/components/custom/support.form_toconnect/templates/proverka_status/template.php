<div class="login_form_container">


      <div class="text-left">

         <?



            while($ar = $arResult['rs']->Fetch()){

               //Если статус заявки ещё не рассмотрен то говорим об етом
               if($ar['STATUS_ID'] == 0){
                  $namezz = $ar['TITLE'];
                  if($namezz == 'Заявка на присоединение'){
                     ?>
                     <b><?=$namezz?></b> не рассмотрено(а)
                     <p><small>(Запись создана: <?=$ar['DATE_CREATE'];?>)</small></p>
                     <br>
                     <?
                  }
               }else{
                  $namezz = $ar['TITLE'];
                  if($namezz == 'Заявка на присоединение') {
                     //А тут у нас выводятся все статусы заявок
                     ?>
                     <b><?= $namezz ?></b> имеет статус: <i><?= $ar['STATUS_NAME']; ?></i>
                     <p>
                        <small>(Запись создана: <?= $ar['DATE_CREATE']; ?>)</small>
                     </p>
                     <br>

                     <?
                  }
               }
            }
         ?>
      </div>
</div>

