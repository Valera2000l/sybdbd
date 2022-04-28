<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/practice_zad1.css">
   <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Задание на ввод данных</title>
 </head>
 <body>
 	<header>
		<?php 
    include('nav.php');
     include('reg.php');
    require('php/pract_zad1.php');
      include('user.php');



    ?> 
	</header>
 	<main  class="m">
    <div  id="back" ><a href="practice.php" >     &lArr; Назад</a></div>

  



<!--<form autocomplete="off" action="/action_page.php">
  <div class="autocomplete" style="width:300px;">
    <textarea id="myInput" rows="5" cols="32"  ></textarea>
    </div>
</form>-->


<?php  


$practs = get_name_pract();
 

if( isset($_GET['pract']) ){
  $practs_id = (int)$_GET['pract'];
 //$practs_data = get_practics();
 
   $id = (int)$_GET['pract'];
 
//$pr_id= get_id_answer($practs_id);
 //$m_ids=get_min($practs_id);
 $practics=get_practics($practs_id); 
  

   //$pr_id=get_test_dataw($id);
} 


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

<?php if( $practs ): ?>
  <?php foreach($practs as $pract): ?>
    <div id="blok">
   <div class="columns">
      <ul class="price"> 
         <li class="grey"><?=$pract['name_practice']?></li>
         <li class="grey">
            <div  id="startTest" class="btn red"  >
    <a href="?pract=<?=$pract['id_title_practice']?>" class="shw">Начать тест</a><div class="btn__blobs blobs">
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



 

<div  id="block_zadan">


  
        <?php if ($practics)
        foreach ($practics as $practica): ?> 
     
   
 <form name="testform" action="#"  method="post" id="testform" class="wrapper" autocomplete="off" >
<div class="css_quest"> <?=$i++. ". " .$practica['question']. " : "?></div>
<div class="autocomplete" style="width:300px;"> <input id="myInput answer-<?= $practica['id_pract'] ?> "  name="Name myCountry" type="text" data-id="<?= $practica['id_pract'] ?> "  class="answer inputbox"  placeholder="введите ответ... "  />  
</div>

 


 
  </form>  
  
  <?php  endforeach; ?>    
        <span class="pre text-success" id="result"><?= $_POST['answer'] = '';?></span>
<p class="msg">
<div class=" btn red d">
   <a id="check" >Проверить
      <div class="btn__blobs">
          <div></div>
          <div></div>
          <div></div>
        </div>
     </a> 
    </div>
<br>
  

</div> <!-- .content -->



 
<?php else: // $tests ?>
  <h3>Нет практик</h3>
<?php endif; // $tests */?>







    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
    <script src="js/user.js"></script>
        <script src="js/pract_zad1.js"></script>
  	<script src="js/registration.js"></script>

 </body>
</html>