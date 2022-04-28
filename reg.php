 <link rel="stylesheet"  href="css/registration.css">
 <link rel="stylesheet" href="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.css">
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
	
 <!------------------------------------ФОРМА РЕГИСТРАЦИИ------------------------------------------------------>

 <div data-toggle="adaptive-modal" id="modal_1" style="display: none;">
 	
    <p class="msg">
		<div class="form-box">
			<div class="button-box">
				<div id="btn-bx"></div>
				<button type="button" class="toggle-btn" onclick="auto()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Вход&nbsp;&nbsp;&nbsp; </button>
				<button type="button" class="toggle-btn" onclick="regis()">Регистрация</button>
			 </div>
		<form id="auto" class="input-group " method="post">
			<div class="input-wrapper" data-text=""><input type="text" class="input-field" name="login"    id="login1" placeholder="Введите логин" autocomplete="off" required></div>
			<div class="input-wrap" data-text=""><input type="password" class="input-field " id="password1" placeholder="Введите пароль" name="password" autocomplete="off" required   ></div>
			<a href="#" class=" rer" title="Показать пароль" data-text="Скрыть пароль"></a>
			<div class="submit-btn constructos-knopok" id="enter" title="Авторизоваться" >Войти</div>

<!----восстановление пароля---title="укажите е маил и логин, полсе введите присланный вам номер, а затем введите новый пароль"-->

	<div class="passw"><a  href="#modal_passw " class="modal-inline ">Восстановить пароль</a></div>
		


		<div data-toggle="adaptive-modal" id="modal_passw" style="display: none;">   
  <form  id="form20" > 
        <h3><center>Введите свой логин и e-mail:</center></h3> <br>  <center>
 
  <input type="text " class="input-field log_em" name="log_em"   id="log_em" placeholder="Введите логин"   autocomplete="off" required 
			minlength=4 maxlength=30>
			<input type="email" class="input-field email_em" name="e_mail_em"  id="email_em" placeholder="Введите e-mail"   minlength=10 maxlength=40  autocomplete="off" >
			<!--	<input type="text" class="input-field kod" name="kod"  id="kod" placeholder="Введите код подтверждения"   maxlength=5 hidden >-->
 <br> <br> 

        	<div class="submit-btn constructos-knopok" id="vost_pas" title="Авторизоваться" >Отправить</div>
</center>
  </form>
 <p class="vost_error"></p>
  <p class="vost_ok"></p>
 <br><br>
</div
>
<?php /* if(isset($_POST['vost_pas'] ))  

{
 echo ' <style type="text/css">
  #log_em,#e_mail_em,#vost_pas {
    visibility: hidden;
}
  </style>';
}
*/
 ?>
<!-------------------------------------->		
		</form>
		<form id="regis" class="input-group"  method="post">

			<input type="text " class="input-field foc" name="login"   id="login2" placeholder="Введите логин"   autocomplete="off" required 
			minlength=4 maxlength=30>
				<input type="text" class="input-field foc" name="group"   id="group" placeholder="Введите группу" autocomplete="off" required 
			minlength=3 maxlength=8>
			<input type="email" class="input-field foc" name="e_mail"  id="email" placeholder="Введите e-mail"   minlength=10 maxlength=40 autocomplete="off">
			   <input type="password" class="input-field foc" id="password2" placeholder="Введите пароль" name="password2" autocomplete="off"  required  minlength=4 maxlength=30 >
	        <a href="#" class="password-control" title="Показать пароль" data-text="Скрыть пароль"></a>

			    <div id="block_check" title="Сложность пароля"></div>
		
			<div class="submit-btn constructos-knopok " title="Зарегистрироваться" id="reg"  >Зарегистрироваться</div>
		</form>
 
		</div> 
	</div>
	


