<?php //session_start(); ?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
		<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<!--блок с логотипом, аккаунтом, поиском-->
<div class="logo " >
	
<a href="index.php" title="БД и СУБД" ><img class="graficlogo" src="image/LOGOTIP.png" width="220" height="60" alt="Logo" align="left">
<!----------ЛОГО--------------------------->

    <!----------кабинет пользователя------------------------->
 <?php  
 	if(empty($_COOKIE['user'] ))
		echo '
			<a data-move="topnav,last,738"  href="#modal_1" class="modal-inline btn white"  id="re">Войти
                <div class="btn__blobs">
                <div></div>
                <div></div>
                <div></div>
                </div>
            </a>';
 	else if($_COOKIE['user'] == 'adminadmin')
 	echo'    
 		<div class="user" >
		    <a  id="akk" title="Личный кабинет" >'.$_COOKIE['user'].'</a>
                 <div class="btn__blobs">
		             <div></div>
		             <div></div>
		             <div></div>
         		</div>
		</div>
		  
		<ul class="user_menu">
			<li ><a href="admin.php" class="  link  "><i class="fas fa-user"></i> Кабинет</a></li>
			
			<li><a href="php/exit.php" class="link v"><i class="fas fa-sign-out-alt"></i> Выход</a></li>			
		</ul>';
		else if($_COOKIE['user'] != 'adminadmin')
		echo '     
     	<div class="user">
			      <a  id="akk "  title="Личный кабинет">'.$_COOKIE['user'].'</a>
                <div class="btn__blobs">
		            <div></div>
		           <div></div>
		            <div></div>
         		</div>
		    </div>
		<ul class="user_menu">
			<li ><a href="#modal_12" class="modal-inline  link  "><i class="fas fa-user"></i> Профиль</a></li>
			<li><a href="#modal_14" class="modal-inline link  " ><i class="fas fa-cog"></i></i> Настройки</a></li>
			<li><a href="php/exit.php" class="link">&nbsp;<i class="fas fa-sign-out-alt"></i> Выход</a></li>			
		</ul>';
echo '</div>'; ?>
<script>
    document.querySelector(".user ul li").addEventListener("click", function(){
          this.classList.toggle("active");
    });
</script>

	<!----------МЕНЮ---------------------------->
    






	<nav >
		<div class="topnav" id="myTopnav">
			<a href="index.php" id="hid"  >Главная</a>
			<a href="topic.php" >Лекции</a>
			<a href="example.php" >Примеры</a>
			<a href="test.php" >Тесты</a>
			<a href="practice.php" >Задания</a>
			<?php  if(isset($_COOKIE['user']) && $_COOKIE['user'] != 'adminadmin') : ?>
<!--<ul class="list-select">
    <li data-val="1">  <a id="ima"  title="кабинет" hidden>
                 <?//= $_COOKIE['user'];  ?></a>
        <ul>
            <li data-val="1.1"><a href="#modal_12" class="modal-inline   " hidden> Профиль</a></li>
             <li data-val="1.2"><a href="#modal_14" class="modal-inline   " hidden> Настройки</a></li>
            <li data-val="1.3"> <a href="php/exit.php" class="" hidden> Выход</a></li>
        </ul>
    </li>
</ul>-->
<!--- сделать для админа в мобилке кабинет-->
<ul class="accordeon" hidden>
                 <li> <a id="ima"  title="кабинет" hidden>
                 <?= $_COOKIE['user'];  ?>  <i class="fa fa-caret-down" ></i></a>
                <ul>
            <li ><a href="#modal_12" class="modal-inline   " hidden> Профиль</a></li>
            <li><a href="#modal_14" class="modal-inline   " hidden> Настройки</a></li>
            <li><a href="php/exit.php" class="" hidden> Выход</a></li>       
        </ul>
    </li>
    </ul>
 <?php  elseif(isset($_COOKIE['user']) && $_COOKIE['user'] == 'adminadmin') : ?>

<ul class="accordeon" hidden>
                 <li> <a id="ima"  title="кабинет" hidden>
                 <?= $_COOKIE['user'];  ?>  <i class="fa fa-caret-down" ></i></a>
                <ul>
            <li ><a href="admin.php" hidden> Кабинет</a></li>
            <li><a href="php/exit.php" class="" hidden> Выход</a></li>       
        </ul>
    </li>
    </ul>
          	<?php  else:?>  <a href="#modal_1" class="modal-inline" id="r" hidden >Вход</a>	<?php  endif; ?>
	
            <a  id="menu" href="#" class="icon">
    	         <div id="burger">
		             <span>&nbsp;</span>
		             <span>&nbsp;</span>
		             <span>&nbsp;</span>
		             <span>&nbsp;</span>
	             </div></a>
		</div>
    <a href="#" id="scroll_top" title="Наверх"></a>
	</nav>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
  
    <script type="js/script.js"></script>
	<script src="js/nav.js"></script>
<script src="js/user.js"></script>