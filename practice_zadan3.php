<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/practice_zad3.css">
   <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Задание на составление запроса</title>
 </head>
 <body>
 	<header>
		<?php 
    include('nav.php');
     include('reg.php');
    require('php/pract_zad3.php');
      include('user.php');
     

    ?> 
	</header>
 	<main  class="m">
    <div  id="back" ><a href="practice.php" >     &lArr; Назад</a></div>

<!-------------------ПЕРЕТАСКИВАНИЯ------------------->
  <?php $practics = get_practics();

 
     

if( isset($_GET['practice']) ){
  $practice_id = (int)$_GET['practice'];
 $nams_id = (int)$_GET['practice'];
  $practics_data = get_practs($practice_id);
  if( is_array($practics_data) ){
  $practics_count = count($practics_data);
  }
 $nams0 = get_nams0($nams_id);
  if( is_array($nams0) ){
    $count_questions = count($nams0);
    $pagin = pagin_questions($count_questions, $practics_data);
  }
}

//print($nams_id);
 //var_export ($practics_data);


/*if( isset($_POST['practice']) ){
  $practice = (int)$_POST['practice'];
  unset($_POST['practice']);
  $result = get_corr_answ($practice);
  if( !is_array($result) ) exit('Ошибка!');
  // данные теста
  $practice_all_data = get_practice_data($practice);
  // 1 - массив вопрос/ответы, 2 - правильные ответы, 3 - ответы пользователя
  $practice_all_data_result = get_practice_data_result($practice_all_data, $result);
  // print_r($_POST);
 print_r($result);
  // print_arr($test_all_data_result);

  echo print_result($practice_all_data_result,$practice);
  die;
}*/
 ?> 
 
<?php  if(empty($_COOKIE['user'] ))  

 
{
echo '<script type="text/javascript">
 swal("Вы не авторизованы", "Для выбора задания, вы должны войти под своим логином или зарегистрироваться")  ;
$(".blobs").click(function () {
  swal("Вы не авторизованы", "Для выбора задания, вы должны войти под своим логином или зарегистрироваться")  ;  
       });                 
</script>' ;
 echo ' <style type="text/css">
  .btn a {
    pointer-events: none;
}
  </style>';
}

 ?> 
 
<?php if( $practics ): ?>

  <?php foreach($practics as $practic): ?>
    <div id="blok">
   <div class="columns">
      <ul class="price"> 
         <li class="grey"><?=$practic['name_practice3']?></li>
         <li class="grey">
            <div  id="startTest" class="btn red "  >
    <a href="?practice=<?=$practic['id_practice3']?>">Начать</a><div class="btn__blobs blobs">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                    
            </div>
        </li>
      </ul>
   </div>
</div>
  <?php endforeach; ?>

<div class="zadanie">
 <form class="block" id="prblock" >
<?php if( isset($practics_data) ): ?>
 <!--  <div class="pag"><?//=$pagin?></div>0-->
  <span class="none" id="practice-id"><?//=$practice_id?></span>
  <div class="data">

<?php //foreach($practics_data as $practice_id => $item): // получаем каждый конкретный вопрос + ответы ?>
  
  <div class="question" data-id="<?=$practice_id?>" id="question-<?=$practice_id?>">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php foreach ($nams0 as $nam0): ?> 
  <div class="h3"><p><?="Задание " .$a++. ". " .$nam0['qustion_pract3']?></p></div><br>
  <?php  endforeach; ?>     

<table class="tar">
  <tr>
  <?php 
   $colum = mysqli_query($mys," SELECT COUNT( a.block)
                                FROM questions_practice3 q
                                LEFT JOIN answers_practice3 a
                                ON q.id = a.parent_quest
                                LEFT JOIN title_practice3
                                ON title_practice3.id_practice3 = q.parent_name_pract3 
                                WHERE  a.parent_quest=(SELECT id FROM `questions_practice3` JOIN `title_practice3`
                                ON questions_practice3.parent_name_pract3=title_practice3.id_practice3 
                                WHERE title_practice3.id_practice3= $nams_id LIMIT 1 ) ");
  $row = mysqli_fetch_row($colum);
  $total = $row[0];
  //echo $total;
  foreach (range(1,$total) as $value): ?>
      <td  id="target<?= $value?>" class="tr" data-owner="#question-<?= $value?>"  ondrop="drop(event)" ondragover="allowDrop(event)"></td>
  <?php  endforeach; ?>  
  </tr>
</table>
<br><br><br><br>
<div class="box">
  <?php foreach ($practics_data as $practice_data): ?> 
  <div id="draggable<?=$practice_data['number_block']?>" data-parent="#question-<?=$practice_data['number_block']?>" class="draggable" draggable="true" ondragstart="drag(event)"><?=$practice_data['block']?></div>
   <?php  endforeach; ?> 
  </div>
  

    <?php //endforeach; // $item    


 ?>

  </div> <!-- .question -->

 <br><br> 
 <div class="ms">
<div class=" btn red d">
   <a id="test" >Проверить
      <div class="btn__blobs">
          <div></div>
          <div></div>
          <div></div>
        </div>
     </a> 
    </div>

<div id="rez" hidden=""></div>
 <br><br><br><br><br><br><br><br>
</div>
  
  
 

<!--<div  class="btn red d f buttons">
    <a  class="center btn" id="btnnnn" >Закончить тест
      <div class="btn__blobs">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </a>
  </div>-->        

<?php else: // isset($test_data) ?>
  
<?php endif; // isset($test_data) ?>

</form>
</div>
 <?php else: // $tests ?>
  <h3>Нет практик</h3>
<?php endif; // $tests ?>
</main>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
    <script src="js/user.js"></script>
        <script src="js/pract_zad3.js"></script>
  	<script src="js/registration.js"></script>

 </body>
</html>