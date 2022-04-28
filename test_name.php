<?php 
  require('php/testing.php');

if( isset($_POST['test']) ){
	$test = (int)$_POST['test'];
	unset($_POST['test']);
	$result = get_correct_answers($test);
	if( !is_array($result) ) exit('Ошибка!');
	// данные теста
	$test_all_data = get_test_data($test);
	// 1 - массив вопрос/ответы, 2 - правильные ответы, 3 - ответы пользователя
	$test_all_data_result = get_test_data_result($test_all_data, $result);
	// print_r($_POST);
	// print_r($result);
	// print_arr($test_all_data_result);

	echo print_result($test_all_data_result,$test);
	die;
}

// список тестиров
$tests = get_tests();

if( isset($_GET['test']) ){
	$test_id = (int)$_GET['test'];
	$test_data = get_test_data($test_id);
	if( is_array($test_data) ){
		$count_questions = count($test_data);
		$pagination = pagination($count_questions, $test_data);
	}
}
//var_export ($test_data);
?>

 

	
<?php if( $tests ): ?>
	 <p class="pp">Тесты по Базам Данных </p>
    <div id="blok">
	<?php foreach($tests as $test): ?>     
	
   <div class="columns">
      <ul class="price"> 
         <li class="grey"><?=$test['test_name']?></li>
         <li class="grey">
            <div   id="startTest" class="btn red" >
		<a class="hhh" href="?test=<?=$test['id']?>" id="start" >Начать тест</a>
		<div class="btn__blobs  blobs">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>


          
            </div>
        </li>
      </ul>
   </div>

	<?php endforeach; ?>
</div>
<?php  if(empty($_COOKIE['user'] ))  

 
{
echo '<script type="text/javascript">
 swal("Вы не авторизованы", "Для выбора теста, вы должны войти под своим логином или зарегистрироваться")  ;
$(".blobs").click(function () {
	swal("Вы не авторизованы", "Для выбора теста, вы должны войти под своим логином или зарегистрироваться")  ;  
       });                 
</script>' ;
 echo ' <style type="text/css">
  .btn a {
    pointer-events: none;
}
  </style>';
}

 ?>

	   <!--------------timer--------------->
	   <div class="modal-wrapper">
  <div class="modal">
    <div class="head">
    </div>
    <div class="coco">
        <div class="good-job">
        
          <h1>Время вышло!</h1>
           <div  class="btn red ddd f buttons">
    <a  class="center btn" id="btnnnnnnnn" >Закончить тест
      <div class="btn__blobs">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </a>
  </div>      
        </div>
    </div>
  </div>
</div>
	<!------------>
<div class="content " id="cin">
	
	 <form class="block-form" id="testblock" >
<?php if( isset($test_data) ): ?>
<div class="tim">
<div class="timer" data-finish="<?=(strtotime("+" .$count_questions. "minute 3 second") * 1000)?>"> 
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
		<!--<p>Всего вопросов: <//?=$count_questions?></p>-->
		<div class="pag"><?=$pagination?></div>
		<!-- <p align="center" class="iz">Вопрос <//?=$q++?> из <//?php echo $count_questions; ?></p><br>-->
		<span class="none" id="test-id"><?=$test_id?></span>

<div class="test-data">
	
<?php foreach($test_data as $id_question => $item): // получаем каждый конкретный вопрос + ответы ?>
	
	<div class="question" data-id="<?=$id_question?>" id="question-<?=$id_question?>">
		<!--<p align="center" class="iz">Вопрос <?//=$id_question?></p><br>-->
		<?php foreach($item as $id_answer => $answer): // проходимся по массиву вопрос/ответы ?>
			
			<?php if( !$id_answer ): // выводим вопрос ?>
				<p class="q">Вопрос <?=$i++?>. <?=$answer?></p>
			<?php else: // выводим варианты ответов ?>

 

        <label class="rad-label">
   <input type="radio" class="rad-input" id="answer-<?=$id_answer?>" name="question-<?=$id_question?>" value="<?=$id_answer?>">
    <div class="rad-design"></div>
    <div class="rad-text"><label for="answer-<?=$id_answer?>"><?=$answer?></label></div>
  </label>         

			<?php endif; // $id_answer ?>

		<?php endforeach; // $item ?>

	</div> <!-- .question -->

<?php endforeach; // $test_data ?>

</div> <!-- .test-data -->
<?php  /*
if( isset( $_POST['btn'] ))
 
{
echo '<script type="text/javascript">

$(".zak").click(function () {
  swal("Вы уверены, что хотите завершить тест? Отменить это действие уже не получится")  ;  
       });                 
</script>' ;

}
*/
 ?>
 <div  class="btn red d f buttons">
    <a  class="center btn " id="btn"  >Закончить тест
      <div class="btn__blobs zak">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </a>
  </div>        


<?php else: // isset($test_data) ?>
	
<?php endif; // isset($test_data) ?>

</form>
</div> <!-- .content -->

<?php else: // $tests ?>
	<h3>Нет тестов</h3>
<?php endif; // $tests ?>



