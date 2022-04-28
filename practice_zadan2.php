<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/practice_zad2.css">
   <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Задание на перетаскивание</title>
 </head>
 <body>
 	<header>
		<?php 
    include('nav.php');
     include('reg.php');
    require('php/pract_zad2.php');
      include('user.php');
    ?> 
	</header>
 	<main  class="m">
    <div  id="back" ><a href="practice.php" >     &lArr; Назад</a></div>


 <?php   


  $practics_data2 = get_practs2();
  

 ?>


	<div class="h4"><p>1.Установите последовательность в эволюции моделей реализации данных </p></div>
<!--<p id="debug"></p>-->
	  	<ul class="sortable-ul sort1" data-toggle="tooltip" title="переместите блоки">
	 <!-- 		<div class="h4"><p><?//=$row22['qustion_pract2']?></p></div>-->
  <?php foreach ($practics_data2 as $practice_data2): ?> 

  		 <li id="t1" data-id="<?=$practice_data2['number_block2']?>" class="bg-green zz"><?=$practice_data2['block2']?><br/></li>
  		 
   <?php  endforeach; ?> 
   </ul>
 <p class="msgbox">
<div class=" btn red d">
   <a id="sort">Проверить
      <div class="btn__blobs">
          <div></div>
          <div></div>
          <div></div>
        </div>
     </a> 
    </div>
  <!-------------------БЛОКИ ДЛЯ ПЕРЕТАСКИВАНИЯ 1------------------>


<!--<ul class="sortable-ul sort1" data-toggle="tooltip" title="переместите блоки">
  <li id="t1" data-id="1" class="bg-green zz">Электронные картотеки<br/></li>
  <li id="t2" data-id="2" class="bg-purple">Первые модели БД<br/></li>
  <li id="t3"  data-id="3"class="bg-yellow">Реляционная модель<br/></li>
  <li id="t4" data-id="4" class="bg-green">Развитие реляционной модели<br/></li>
  <li id="t5" data-id="5" class="bg-yellow">Слабоструктурированные данные<br/></li>
  <li  id="t6" data-id="6" class="bg-purple">Документ-ориентированная модель<br/></li>
</ul>--->
  

<div id="sort_res" hidden=""></div>
<br><br>
<br>

<!-------------------БЛОКИ ДЛЯ ПЕРЕТАСКИВАНИЯ 2------------------>
<div class="h4"><p>2.Выберем коды товаров, которые имеют стоимость, превышающую 1000, либо покупаются покупателем с кодом 23 (либо то и другое)</p></div>

<ul class="sortable-ul" data-toggle="tooltip" title="переместите блоки">
  <li data-id="1" class="bg-green zz">UNION</li>
  <li data-id="2" class="bg-purple">FROM ordsale</li>
  <li  data-id="3"class="bg-yellow">SELECT stock</li>
  <li data-id="4" class="bg-green">WHERE unitprice > 1000</li>
  <li data-id="5" class="bg-yellow">FROM goods</li>
  <li  data-id="6" class="bg-purple">SELECT id_product</li>
  <li  data-id="7" class="bg-purple">WHERE customerno = 23</li>
  
</ul>

<div class="h4"><p>3. Запрос должен возвращать отсортированные имена сотрудников, должность которых "менеждер", а число лет трудового стажа - менее 8 из таблицы job</p></div>
<ul class="sortable-ull">
  <li><i class="handle"></i> FROM  <input type="text" placeholder="Введите текст" title="job"></li>
  <li><i class="handle"></i> AND  <input type="text" placeholder="Введите текст" title="Years < 8"></li>
  <li><i class="handle"></i> ORDER BY <input type="text" placeholder="Введите текст" title="ID"></li>
  <li><i class="handle"></i> SELECT  <input type="text" placeholder="Введите текст" title="ID, Name"></li>
  <li><i class="handle"></i>WHERE <input type="text" placeholder="Введите текст" title="Job = 'manager'"></li>

</ul>
 
 

<div class="h4"><p>4.Установите порядок действий при выполнении индивидуального отката транзакций </p></div>
<ul class="sortable-ul" data-toggle="tooltip" title="переместите блоки">
  <li data-id="1" class="bg-green zz">выполняется противоположная по смыслу операция</li>
  <li data-id="2" class="bg-purple">журнализируются  обратные операции</li>
  <li  data-id="3"class="bg-yellow">вносится запись о конце транзакции</li>
  <li data-id="4" class="bg-green">выбирается запись из списка транзакции</li>
  
</ul>
<div class="h4"><p>5.В каком порядке  нужно расположить, чтобы выполнить поиск имен всех работников со всех отделов? </p></div>
<ul class="sortable-ul" data-toggle="tooltip" title="переместите блоки">
  <li data-id="1" class="bg-green zz">SELECT employees.name, departments.name </li>
  <li data-id="2" class="bg-purple">FROM employees;</li>
  <li  data-id="3"class="bg-yellow">LEFT JOIN departments</li>
  <li data-id="4" class="bg-green">ON employees.department_id=departments.id </li>
  
</ul>
<p id="debug"></p>
</main>

    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
    
    <script src="js/user.js"></script>
        <script src="js/pract_zad2.js"></script>
  	<script src="js/registration.js"></script>

 </body>
</html>