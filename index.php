<?php //session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head><meta meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Главная страница</title>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="https://kit.fontawesome.com/b8991598b2.js"></script>
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
    <link rel="stylesheet"  href="css/1.css">
</head>
<body>
	<header>		
<?php 
 include('nav.php');
 include('reg.php');	
 include('user.php');?> 
	</header>
<main class="m" >


<!------------СЛАЙДЕР------------------------------->
	<div class="slider">
	  <ul>
	  
	   <li><a href="#"><img src="image/undraw_Upvote_re_qn2k.svg" class="slimg"  ></a></li>
      
	 <li><a href="#"><img src="image/undraw_online_test_gba7.svg" class="slimg"  ></a></li>
	 	<li><a href="#"><img src="image/undraw_Preferences_re_49in.svg" class="slimg" ></a></li>
    <li><a href="#"><img src="image/undraw_Online_learning_re_qw08.svg" class="slimg"  ></a></li>
	  <li><a href="#"><img src="image/undraw_chat_bot_kli5.svg" class="slimg"  ></a></li>
	      <li><a href="#"><img src="image/undraw_Browser_stats_re_j7wy.svg" class="slimg"  ></a></li>
    
    		      <li><a href="#"><img src="image/undraw_completed_tasks_vs6q.svg" class="slimg"  ></a></li>
    		       <li><a href="#"><img src="image/undraw_Portfolio_update_re_jqnp.svg" class="slimg"  ></a></li>
    <li><a href="#"><img src="image/undraw_File_searching_re_3evy.svg" class="slimg"  ></a></li>
     

	  </ul>
    </div>
<!-------------------------ЛАМПОЧКА-ПЕРЕКЛЮЧАТЕЛЬ------------------------------------
	<input class="lamp" title="переключатель"  type="checkbox">
-->
<!----------------------ПЕРЕХОДЫ НА ДРУГИЕ СТРАНИЦЫ(БЛОК)----------------------------------------->
   <section class="zad_selection">
         <div class="first-test-block  ">
          <!--  <h2>Тесты на знания баз данных</h2>
               <p class="p" >Вам предлагается перечень тестов по базам данных, которые смогут проверить и оценить ваши знания по различным темам</p>
                  <div class="big-button">
                     <a href="test.php" class="btn red">Перейти к тестам
                      <div class="btn__blobs">
                             <div></div>
                          <div></div>
                             <div></div>
                         </div>
                     </a>
                  </div>-->
                  <p><b>База данных</b> – совокупность данных, организованных по определённым правилам, предусматривающим общие принципы описания, хранения и манипулирования данными, независимая от прикладных программ. </p>
         </div>
         <div class="last" id="main-image" data-relative-input="true" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
<div data-depth="0.3" class="first" style="transform: translate3d(3.4px, 2.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: -40px; top: 50px;">
      <img class="comp" src="image/computer.svg" >
</div>
<div data-depth="0.1" style="transform: translate3d(1.1px, 0.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 120px;">
      <img class="main-image-1" src="image/main-image-1.svg" >
</div>
<div data-depth="0.2" style="transform: translate3d(2.3px, 1.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: -30px; top: 120px;">
      <img class="main-image-2" src="image/main-image-2.svg" >
</div>
<div data-depth="0.2" style="transform: translate3d(2.3px, 1.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 70px;">
     <img class="main-image-3" src="image/main-image-3.svg" >
</div>
<div data-depth="0.1" style="transform: translate3d(1.1px, 0.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 70px; top: 20px;">
    <img class="main-image-4" src="image/main-image-4.svg" >
</div>
<div data-depth="0.1" style="transform: translate3d(1.1px, 0.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 50px;">
     <img class="main-image-5" src="image/main-image-5.svg" >
</div>
         </div>
  </section> 


 <section class="test_selection"> 
	<!--------------ОБЛАКА------------>
	<div class="image-two"><svg xmlns="http://www.w3.org/2000/svg" height="100"  width="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
         <path d="M-5 100q5-80 10 0zm5 0q5-100 10 0m-5 0q5-70 10 0m-5 0q5-90 10 0m-5 0q5-70 10 0m-5 0q5-110 10 0m-5 0q5-90 10 0m-5 0q5-70 10 0m-5 0q5-90 10 0m-5 0q5-50 10 0m-5 0q5-80 10 0m-5 0q5-60 10 0m-5 0q5-40 10 0m-5 0q5-50 10 0m-5 0q5-80 10 0m-5 0q5-55 10 0m-5 0q5-70 10 0m-5 0q5-80 10 0m-5 0q5-50 10 0m-5 0q5-75 10 0m-5 0q5-85 10 0z" fill="#DCDCDC"></path>
         
    </svg></div>  <!--------------ОБЛАКА------------>
   <div class=" second">

<p ><b>Системы управления базой данных(СУБД)</b> - это комплекс программных средств, предназначенных для создания структуры новой базы, наполнение ее содержимым, редактирование содержимого и визуализации информации. </p>

</div>
  <div class="last" id="test-image" data-relative-input="false" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: relative; pointer-events: none;">
<div data-depth="0.05" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; right: 0px; top: -30px;">
  <img class="rocks" src="image/rocks.svg" >
</div>
<div data-depth="0.2" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 190px; top:-60px;">
  <img class="test-image-1" src="image/test-image-1.svg" >
</div>
<div data-depth="0.4" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block;  left: 340px; top: 150px;">
  <img class="test-image-2" src="image/test-image-2.svg">
</div>
</div>

</section> 
<!----------------------------------------------------------->
</main>

<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
<script src="https://snipp.ru/cdn/bxslider/4.2.14/dist/jquery.bxslider.min.js"></script>
<script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
<script src="js/1.js"></script>
<script src="js/registration.js"></script>	
<script src="js/user.js"></script>
</body>
</html>