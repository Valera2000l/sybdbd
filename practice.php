<?php
  session_start();
  header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/practice.css">
   <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Практика</title>
 </head>
 <body>
 	<header>
		<?php include('nav.php');
		      include('reg.php');
          include('user.php');
    ?> 
	</header>
<main  class="m">
<!---------------------карточки---------------------->
<div class="testimonials">
  <div class="card">
    <div class="layer"></div>
    <div class="cont">
      <div class="details"><h2>Впишите</h2></div><br>
      <p>Задание 1. Необходимо отвечать на представленные  вопросы записывая ответы на них в текстовые поля<br><br><br></p>
      <div class="image" > <div class="pervaya-animatsiya"  ><img src="image/gg.png"  class="snimok-1"  ></div></div>
      <center><div  class="bt " name="bt" id="nap" title="Перейти">Перейти</div> </center>
    </div>
  </div>
  <div class="card">
    <div class="layer"></div>
     <div class="cont">
       <div class="details"><h2>Перетащите</h2></div><br>
      <p>Задание 2. Необходимо переместить блоки таким образом, чтобы запрос имел правильную структурированную конструкцию<br><br></p>
      <div class="image"><div class="pervaya-animatsiya" ><img src="image/nn.png" class="snimok-1" ></div></div>
      <center><div   class="bt " name="bt" id="per" title="Перейти">Перейти</div> </center>
    </div>
</div>
 <div class="card">
    <div class="layer"></div>
     <div class="cont">
      <div class="details"><h2>Составьте</h2></div><br>
      <p>Задание 3.Необходимо "собрать" запрос в зависимотси от условия  из представленных ключевых слов и аргументов данного запроса  в правильном порядке  </p>
      <div class="image"> <div class="pervaya-animatsiya" ><img src="image/hh.png" class="snimok-1" ></div></div>
      <center><div   class="bt " name="bt" id="sos" title="Перейти">Перейти</div> </center>
    </div>
</div>
</div>
<!----------------------------------------->
 
</main>

    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
    
        <script src="js/user.js"></script>
    <script src="js/practice.js"></script>
  	<script src="js/registration.js"></script>

 </body>
</html>