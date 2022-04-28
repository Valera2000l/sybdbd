<?PHP
$_OPTIMIZATION["title"] = "Восстановление пароля";
$_OPTIMIZATION["description"] = "Восстановление забытого пароля";
$_OPTIMIZATION["keywords"] = "Восстановление забытого пароля";
 
if(isset($_COOKIE['user'])){ Header("Location: /account"); return; }
 
?>
<div class="s-bk-lf">
    <div class="acc-title">Восстановление пароля</div>
</div>
<div class="silver-bk"><div class="clr"></div>  
<?PHP
 
    if(isset($_POST["email"])){
 
        if(isset($_SESSION["captcha"]) AND strtolower($_SESSION["captcha"]) == strtolower($_POST["captcha"])){
        
        unset($_SESSION["captcha"]);
        
        $email = $func->IsMail($_POST["email"]);
        $time = time();
        $tdel = $time + 60*15;
        
            if($email !== false){
                
                $db->Query("DELETE FROM ".$pref."_recovery WHERE date_del < '$time'");
                $db->Query("SELECT COUNT(*) FROM ".$pref."_recovery WHERE ip = INET_ATON('".$func->UserIP."') OR email = '$email'");
                if($db->FetchRow() == 0){
                
                    $db->Query("SELECT id, user, email, pass FROM ".$pref."_users_a WHERE email = '$email'");
                    if($db->NumRows() == 1){
                    $db_q = $db->FetchArray();
                    
                    # Вносим запись в БД
                    $db->Query("INSERT INTO ".$pref."_recovery (email, ip, date_add, date_del) VALUES ('$email',INET_ATON('".$func->UserIP."'),'$time','$tdel')");
                    
                    # Отправляем пароль
                 
                     $sender = new isender;
                    $sender -> RecoveryPassword($db_q["user"],  $db_q["pass"],$db_q["email"]);

                    echo "<center><font color = 'green'><b>Данные для входа отправлены на Email</b></font></center>";
                    ?>
                    </div>
                    <div class="clr"></div> 
                    <?PHP
                    return; 
                    
                    }else echo "<center><font color = 'red'><b>Пользователь с таким Email не зарегистрирован</b></font></center>";
                
                }else echo "<center><font color = 'red'><b>На Ваш Email или IP уже был отправлен пароль за последние 15 минут</b></font></center>";
                
            }else echo "<center><font color = 'red'><b>Email указан неверно</b></font></center>";
        
        }else echo "<center><font color = 'red'><b>Символы с картинки введены неверно</b></font></center>";
    
    }
 
?>
 
<BR />
<form action="" method="post">
<table width="300" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" width="250">Email:</td>
    <td align="left" width="250"><input name="email" type="text" placeholder="На него будет выслан пароль" size="25" maxlength="50" value="<?=(isset($_POST["email"])) ? $_POST["email"] : false; ?>"/></td>
  </tr>
  
  <tr>
    <td align="left" width="250" style="padding-top:20px;">
    <a href="#" onclick="ResetCaptcha(this);"><img src="/captcha.php?rnd=<?=rand(1,10000); ?>"  border="0" style="margin:0;"/></a>
    </td>
    <td align="left" width="250" style="padding-top:20px;"><input name="captcha" type="text" placeholder="Введите символы с картинки" size="25" maxlength="50" /></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><BR /><input type="submit" value="Восстановить" style="height: 30px;"></td>
  </tr>
</table>
</form>
</div>
<div class="clr"></div>
<?php
class isender{
    
    var $Hosts = "мой домен";
    
    /*======================================================================*\
    Function:   __construct
    Descriiption: Конструктор класса
    \*======================================================================*/
    function __construct(){
    
        $this->Hosts = str_replace("www.","",$_SERVER['HTTP_HOST']);
    
    }
    
    /*======================================================================*\
    Function:   SendRegKey
    Descriiption: Отправляет регистрационный ключ
    \*======================================================================*/
    function SendRegKey($mail, $key){
    
        $text = "На ваш Email была запрошена ссылка для регистрации в системе \"".$this->Hosts."\"<BR />";
        $text.= "Если вы не запрашивали ссылку, просто проигнорируйте это сообщение. <BR /><BR />";
        $text.= "Ссылка для регистрации: <a href='http://".$this->Hosts."/signup/key/{$key}'>";
        $text.= "http://".$this->Hosts."/signup/key/{$key}</a>";
        $subject = "Регистрация в системе \"".$this->Hosts."\"";
        
        return $this->SendMail($mail, $subject, $text);
        
    }
    
    /*======================================================================*\
    Function:   RecoveryPassword
    Descriiption: Восстановление пароля
    \*======================================================================*/
    
function RecoveryPassword($user, $pass, $mail){

        $text.= "Данные для входа в личный кабинет пользователя {$user}: <BR />";
        $text.= "<b>Логин:</b> {$mail}<BR />";
        $text.= "<b>Пароль:</b> {$pass}<BR />";
        $text.= "Ссылка на сайт: \"".$this->Hosts."\"";
        $subject = "Восстановление пароля";
        
        return $this->SendMail($mail, $subject, $text);
        
    }
    
    /*======================================================================*\
    Function:   SendAfterReg
    Descriiption: Отправляет данные после регистрации
    \*======================================================================*/
    function SendAfterReg($user, $mail, $pass){
    
        $text = "Благодарим вас за регистрацию в системе в системе \"".$this->Hosts."\"<BR />";
        $text.= "Ваши данные для входа в личный кабинет пользователя: <BR />";
        $text.= "<b>Логин:</b> {$user}<BR />";
        $text.= "<b>Пароль:</b> {$pass}<BR />";
        $text.= "Ссылка для входа в кабинет: <a href='http://".$this->Hosts."/'>http://".$this->Hosts."/</a>";
        $subject = "Завершение регистрации в системе \"".$this->Hosts."\"";
        
        return $this->SendMail($mail, $subject, $text);
        
    }
    
    /*======================================================================*\
    Function:   SetNewPassword
    Descriiption: Отправляет данные после смены пароля
    \*======================================================================*/
    function SetNewPassword($user, $pass, $mail){
    
        $text = "Уважаемый {$user} настройках вашего аккаунта был изменен пароль.<BR />";
        $text.= "Ваши новые данные для входа в личный кабинет пользователя: <BR />";
        $text.= "<b>Логин:</b> {$mail}<BR />";
        $text.= "<b>Новый пароль:</b> {$pass}<BR />";
        $text.= "Ссылка на сайт: \"".$this->Hosts."\"";
        $subject = "Смена пароля в системе \"".$this->Hosts."\"";
        
        return $this->SendMail($mail, $subject, $text);
        
    }
    
    
    /*======================================================================*\
    Function:   Headers
    Descriiption: Создание заголовков письма
    \*======================================================================*/
    function Headers(){
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers.= "Content-type: text/html; charset=Windows-1251\r\n";
    $headers.= "Date: ".date("m.d.Y (H:i:s)",time())."\r\n";
    $headers.= "From: support@".$this->Hosts." \r\n";
    
        return $headers;
    
    }
    
    /*======================================================================*\
    Function:   SendMail
    Descriiption: Отправитель
    \*======================================================================*/
    function SendMail($recipient, $subject, $message){
    
        $message .= "<BR />----------------------------------------------------
        <BR />Сообщение было выслано роботом, пожалуйста, не отвечайте на него!";
        return (mail($recipient, $subject, $message, $this->Headers())) ? true : false;
    
    }
    
    
    
}
?>