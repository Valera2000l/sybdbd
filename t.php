  <?php include('test.php');?>  <!--------------timer--------------->
<div class="tim">
<div class="timer" data-finish="<?=(strtotime("+5 minute 2 second") * 1000)?>"> 
  <div class="timer_section">
    <div class="minutes_1">0</div>
    <div class="minutes_2">0</div>
    <div class="timer_section_desc">минут</div>
  </div>
  <div class="timer_delimetr">:</div>
  <div class="timer_section">
    <div class="seconds_1">0</div>
    <div class="seconds_2">0</div>
    <div class="timer_section_desc">секунд</div>
  </div>
</div>
		<!--------------------1 ТИП ПЕРЕКЛЮЧАТЕЛЕЙ---------------------------->
<div class="wrapper">
<form action="php/testing.php" method="post"class="block-form" >
           <?php  if(isset($test_data)):  ?>
    <!--    <p>Кол-во вопросов в тесте: <?php echo $count_questions; ?></p><br>-->
     <?php  $pagination;  ?><!--не работает-->
     <span class="none" id="test-id"><?=$test_id?></span><!--хз что-->
             <?php foreach ($test_data as $id_question => $item): //получаем один вопрос теста?>
    <div  class="v" id="vopr-<?=$id_question?>" data-id="<?=$id_question?>">
             <?php   foreach ( $item as $id_answer => $answer): //проход по массиву вопрос-ответы ?>
            <?php if($id_answer=='vopros'): ?>
            <p class="  q"><?=$i++. ". " . $answer?></p>
            <?php  else: //выводим вар ответов ?>  
        <div class="block-form_input ">
        <div class="radiobuttons">
        <div class="radiobuttons_item a">
        <input type="radio" id="answer-<?=$answer?>"   name="question-<?=$id_question?>" value="<?=$id_answer?>">
        <label for="answer-<?=$answer?>"><?=$answer?></label>
        </div>  
        </div>
        </div>

            <?php endif; //$id_answer ?>
            <?php  endforeach;  //$item ?>
    </div>
            <?php  endforeach;  //$test_data ?>
<br>

   <a href="#" class="button" id="butt" type="submit" name="sbmanswer" >  <p>Далее</p></a>
   <!--<button class="center btn button" id="bt" >Закончить тест</button>-->

<!--------бред---------
<div class="pagination">
  <?php // for($i=1; $i <=  $id_question; $i++): ?>
  <?php // if($i==1): ?>
  <a class="nav-active" href="#vopr-' . $id_question . '">  <?php //echo $id_question; ?></a>
  <?php  //else:   ?>
  <a  href="#vopr-' . $id_question . '"> <?php //echo $id_question; ?></a>
  <?php //endif;  ?>
  <?php //endfor;  ?>
 </div>-->

<?php  else: //if(isset($test_data)  ?>Выберите тест
<?php endif; //if(isset($test_data) ?>

</form>
</div>	