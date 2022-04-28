<?php
session_start();
    header("Content-Type: text/html; charset=utf-8");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Примеры запросов</title>
	<link rel="stylesheet"  href="css/example.css">
	<link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.css">	
</head>
<body>
	<header>
		<?php include('nav.php');?>
		<?php include('reg.php');?>
		<?php require('php/examp.php');?>
		    <?php include('user.php');?> 
	</header>
<main class="m">


<?php $examples0=get_examples0();
 $examples1=get_examples1(); 
 $examples2=get_examples2(); 
 $examples3=get_examples3(); 
 $examples4=get_examples4(); 
 $examples5=get_examples5(); 
 $examples6=get_examples6(); 
 $examples7=get_examples7(); 
 $examples8=get_examples8(); 
 $examples9=get_examples9(); 
 $examples10=get_examples10(); ?>
	<!-------------------содержание----------------------->
<div class="b">
<div class="gradient-border" id="box">
   <div class="oglav" id="ogl">	<h2><center>Содержание</center></h2><div class="ibm-alternate-rule"><hr></div>
   <ul role="directory" aria-label="Содержание" class="ibm-plain-list ">
	<li><a href="#0"  class="active"  title="SELECT, INSERT, UPDATE, DELETE">1. Команды DML</a>
	<li><a href="#1">2. Подзапросы</a>
	<li><a href="#2" title="IN, BETWEEN, LIKEE, AND, OR, NOT, ALL">3. Логические операторы</a>
    <li><a href="#3" title="ALTER, DROP, RENAME, CREATE">4. Команды DDL</a>
    <li><a href="#4" title="COUNT, MIN, MAX, SUM, AVG">5. Агрегирующие функции</a>
    <li><a href="#5">6. Запросы на дату</a>
    <li><a href="#6" title="SUBSRTING, LEFT/RIGHT, LPAD">7. Строковые функции</a>
    <li><a href="#7">8. Оператор CONCAT</a>
    <li><a href="#8" title="GROUP BY, HAVING">9. Оператор GROUP BY</a>
    <li><a href="#9" title="GRANT, REVOKE">10. Команды DCL</a>
    <li><a href="#10" title="ORDER BY, UNION">11. Оператор ORDER BY</a>
   </ul>
   </div>
</div>
</div>
<!-----------примеры--------------->
<div class="wrapper" >
	
		<h2 id="0">Команды DML</h2>
<?php foreach ($examples0 as $example0): ?> 
				 	<div class="block_item" >
				<div class="block_title"><?="Пример " .$i++. ". " .$example0['example']?></div>
				<div class="block_text"><?=$example0['otvet']?></div>
			</div>
				 <?php  endforeach; ?> 	 
<hr>
	<h2 id="1">Подзапросы</h2>
<?php foreach ($examples1 as $example1): ?> 
				 	<div class="block_item" >
				<div class="block_title"><?="Пример " .$q++. ". " .$example1['example']?></div>
				<div class="block_text"><?=$example1['otvet']?></div>
			</div>
				 <?php  endforeach; ?>
<hr>
<h2 id="2"> Логические операторы</h2>
<?php foreach ($examples2 as $example2): ?> 
				 	<div class="block_item" >
				<div class="block_title"><?="Пример " .$w++. ". " .$example2['example']?></div>
				<div class="block_text"><?=$example2['otvet']?></div>
			</div>
				 <?php  endforeach; ?>	
				 <hr>
				 <h2 id="3">Команды DDL</h2>
<?php foreach ($examples3 as $example3): ?> 
				 	<div class="block_item" >
				<div class="block_title"><?="Пример " .$e++. ". " .$example3['example']?></div>
				<div class="block_text"><?=$example3['otvet']?></div>
			</div>
				 <?php  endforeach; ?>	
				  <hr>
				  <h2 id="4">Агрегирующие функции</h2>
<?php foreach ($examples4 as $example4): ?> 
				 	<div class="block_item" >
				<div class="block_title"><?="Пример " .$r++. ". " .$example4['example']?></div>
				<div class="block_text"><?=$example4['otvet']?></div>
			</div>
				 <?php  endforeach; ?>	
				  <hr>
				  <h2 id="5">Запросы на дату</h2>
<?php foreach ($examples5 as $example5): ?> 
				 	<div class="block_item" >
				<div class="block_title"><?="Пример " .$t++. ". " .$example5['example']?></div>
				<div class="block_text"><?=$example5['otvet']?></div>
			</div>
				 <?php  endforeach; ?>	
				 	  <hr>
				 	  <h2 id="6">Строковые функции</h2>
<?php foreach ($examples6 as $example6): ?> 
				 	<div class="block_item" >
				<div class="block_title"><?="Пример " .$y++. ". " .$example6['example']?></div>
				<div class="block_text"><?=$example6['otvet']?></div>
			</div>
				 <?php  endforeach; ?>		
				 	  <hr>
				 	  <h2 id="7">Оператор CONCAT</h2>
<?php foreach ($examples7 as $example7): ?> 
				 	<div class="block_item" >
				<div class="block_title"><?="Пример " .$u++. ". " .$example7['example']?></div>
				<div class="block_text"><?=$example7['otvet']?></div>
			</div>
				 <?php  endforeach; ?>
				 	  <hr>
				 	  <h2 id="8"> Оператор GROUP BY</h2>
<?php foreach ($examples8 as $example8): ?> 
				 	<div class="block_item" >
				<div class="block_title"><?="Пример " .$o++. ". " .$example8['example']?></div>
				<div class="block_text"><?=$example8['otvet']?></div>
			</div>
				 <?php  endforeach; ?>	
				 	  <hr>
				 	  <h2 id="9"> Команды DCL</h2>
<?php foreach ($examples9 as $example9): ?> 
				 	<div class="block_item">
				<div class="block_title"><?="Пример " .$p++. ". " .$example9['example']?></div>
				<div class="block_text"><?=$example9['otvet']?></div>
			</div>
				 <?php  endforeach; ?>	
				  <hr>
				 	  <h2 id="10"> Оператор ORDER BY</h2>
<?php foreach ($examples10 as $example10): ?> 
				 	<div class="block_item">
				<div class="block_title"><?="Пример " .$a++. ". " .$example10['example']?></div>
				<div class="block_text"><?=$example10['otvet']?></div>
			</div>
				 <?php  endforeach; ?>			 
</div>
</main>

		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
		<script src="js/example.js"></script>
		<script src="js/registration.js"></script>
    <script src="js/user.js"></script>
		
</body>
</html>