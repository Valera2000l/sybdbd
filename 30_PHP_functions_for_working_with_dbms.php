<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/topic.css">

  <link rel="stylesheet" href="css/registration.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 <link rel="shortcut icon" href="image/icon.png" type="image/x-icon"> 

   <title>Функции php для работы с СУБД</title>


 	<header>
		<?php 
    include('nav.php');
    include('reg.php');
    include('cont.php');
    include('user.php');
    ?> 
	</header>
 	<main  class="m">
  <div  id="back" ><a href="topic.php" >     &lArr; Назад</a></div>

 <div class="page" id="page">
  <p class="p" ><b>РАЗДЕЛ 6. РАЗРАБОТКА ПРИЛОЖЕНИЙ НА ОСНОВЕ ВЕБ-ТЕХНОЛОГИЙЧТО ТАКОЕ MYSQL </b>

<p class="title">Тема 6.1 Функции php для работы с СУБД
<p class="p" ><b>Что такое MySQL</b>
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>MySQL</u></b> – это свободно распространяемая <a href="glossary.php#sybd" class="gl" title="Узнать значение">СУБД</a>, разработанная компанией MySQL AB (www.mysql.com). MySQL имеет клиент-серверную архитектуру: к серверу MySQL могут обращаться различные клиентские приложения, в том числе с удаленных компьютеров. </p>
<p class="p">
   <ul>
<li> <p class="q">MySQL – это СУБД с открытым кодом. Любой желающий может бесплатно скачать программу на сайте разработчика (http://dev.mysql.com/downloads/) и при необходимости доработать ее. Существует множество приложений MySQL, созданных и свободно распространяемых сторонними разработчиками. Однако для применения MySQL в коммерческом приложении необходимо приобрести коммерческую лицензированную версию программы у компании MySQL AB.
<li> <p class="q">MySQL – кроссплатформенная система. Ее можно использовать практически во всех современных операционных системах, в том числе Windows, Linux, Mac OS, Solaris, HP-UX и др. В этой книге мы рассмотрим работу с MySQL только в ОС Windows.
<li> <p class="q">MySQL имеет множество программных интерфейсов (API), благодаря которым к базе данных MySQL могут подключаться приложения, созданные с помощью C/C++, Eiffel, Java, Perl, PHP, Python, Tcl, ODBC, NET и Visual Studio. В главе 4 вы узнаете, как обращаться к базе данных MySQL из PHP-, Perl– и Java-приложений.
<li> <p class="q">MySQL имеет отличные технические характеристики: многопоточность, многопользовательский доступ, быстродействие, масштабируемость (компания-разработчик приводит пример MySQL-сервера, который работает с 60 тыс. таблиц, содержащими приблизительно 5 млрд строк).
<li> <p class="q">MySQL имеет развитую систему обеспечения безопасности и разграничения доступа на основе системы привилегий.
MySQL представляет собой реляционную СУБД, то есть систему управления реляционными базами данных. 
</ul>

<p class="p" ><b>Функции соединения с сервером MySQL</b>
<p class="p" >Основной функцией для соединения с сервером MySQL является mysql_connect(), которая подключает скрипт к серверу баз данных MySQL и выполяет авторизацию пользователя базой данных. Синтаксис у данной функции такой:
<p class="q" ><i><b>mysql_connect ([string $hostname] [, string $user] [, sting $password]);</b></i>
<p class="p" >Функция возвращает идентификатор <b>(типа int)</b> соединения, вся дальнейщая работа осуществляется только через этот идентификатор. При следующем вызове функции <b>mysql_connect()</b> с теми же параметрами новое соединение не будет открыто, а функция возвратит идентификатор существующего соединения.
<p class="p" >Для закрытия соединения предназначена функция <b>mysql_close(int $connection_id)</b>.
<p class="p" >Соединение можно и не закрывать - оно будет закрыто автоматически при завершении работы PHP скрипта. Если вы используете более одного соединения, при вызове <b>mysql_close()</b> нужно указать идентификатор соединения, которое вы хотите закрыть. Вообще не закрывать соединения - плохой стиль, лучше закрывать соединения с MySQL самостоятельно, а не надеясь на автоматизм PHP, хотя это ваше право.



<p class="p" ><b>Функция выбора базы данных</b>
<p class="p" >Функция <b>mysql_select_db (string $db [, int $id])</b> выбирает базу данных, с которой будет работать PHP скрипт. Если открыто не более одного соединения, можно не указывать параметр <b>$id</b>.
<p class="definition def"><i><b>// Попытка установить соединение с MySQL:<br>
if (!mysql_connect($server, $user, $ password)) {<br>
echo "Ошибка подключения к серверу MySQL";<br>
exit;<br>
}<br>
// Соединились, теперь выбираем базу данных:<br>
mysql_select_db($db);</b></i></p>
<p class="p" ><b>Функции обработки ошибок</b>
<p class="p" >Если произойдет ошибка соединения с MySQL, то вы получите соответствующее сообщение и скрипт завершит свою работу. Это не всегда бывает удобно, прежде всего, при отладке скриптов. Поэтому, в PHP есть следующие две функции:
 <ul>
<li> <p class="q"><b>mysql_errno(int $id);
<li> <p class="q">mysql_error(int $id);</b>
</ul>
<p class="p" >Первая функция возвращает номер ошибки, а вторая - сообщение об ошибке. В результате мы можем использовать следующее:
<p class="q" ><i><b>echo "ERROR ".mysql_errno()." ".mysql_error()."\n";</b></i>
<p class="p" >Теперь вы будете знать, из-за чего произошла ошибка - вы увидите соответствующим образом оформленное сообщение.

<p class="p" ><b>Функции выполнения запросов к серверу баз данных</b>
<p class="p" >Все запросы к текущей базе данных отправляются функцией <b>mysql_query()</b>. Этой функции нужно передать один параметр - текст запроса. Текст запроса может содержать пробельные символы и символы новой строки (\n). Текст должен быть составлен по правилам синтаксиса SQL. Пример запроса:
<p class="q" ><i><b>$query = mysql_query("SELECT * FROM mytable");</b></i>
<p class="p" >Приведенный запрос должен вернуть содержимое таблицы <b>mytable</b>. Результат запроса присваивается переменной <b>$q</b>. Результат - это набор данных, который после выполнения запроса нужно обработать определенным образом.
Задание: 
<p class="definition def"><b> 
$user=‘student’; <br>
$password=‘15423’;<br>
$server_name=‘web.edu’;<br>
$db_name=‘myFriends’;<br>
$zapros=‘Select * from friends’; <br>

$link= <input type="text" class="fil va" size="42" maxlength="50" name="" id="connect" autocomplete="off" style="text-transform: lowercase"> ; <br>


or die("Ошибка " . <input type="text" class="fil va" size="35" maxlength="50" name="" id="error" autocomplete="off" mysqli_query> );<br>

mysql_select_db( <input type="text" class="fil va" size="35" maxlength="50" name="" id="myfriends" autocomplete="off" mysqli_query>); <br>


$result= <input type="text" class="fil va" size="15" maxlength="50" name="" id="query" autocomplete="off" mysqli_query>($zapros);<br> </b>
Узнать ответ:<i class="fas fa-lightbulb  podsk tooltip"> <span class="tooltiptext">$link=<b> mysqli_connect($server_name, $user, $password)</b>;<br>
or die("Ошибка " . <b>mysqli_error($link)</b>);<br>
mysql_select_db( <b>'myFriends', $link</b>);<br>
$result= <b>mysqli_query</b>($zapros);<br></span></i>
 
</p>
<p class="p" ><b>Функции обработки результатов запроса</b>
<p class="p" >Если запрос, выполненный с помощью функции <b>mysql_query()</b> успешно выполнился, то в результате клиент получит набор записей, который может быть обработан следующими функциями PHP:
  <ul>
<li> <p class="q"><b><u>mysql_fetch_array()</u></b> - занести запись в массив;
<li> <p class="q"><b><u>mysql_fetch_row()</u></b> - занести запись в массив;
<li> <p class="q"><b><u>mysql_fetch_assoc()</u></b> - занести запись в ассоциативный массив;

<p class="p" >Также можно определить количество содержащихся записей и полей в результате запроса. Функция <b><u>mysql_num_rows()</u></b> позволяет узнать, сколько записей содержит результат запроса:
<p class="p" >Запись состоит из полей (колонок). С помощью функции <b><u>mysql_num_fields()</u></b> можно узнать, сколько полей содержит каждая запись результата:
<p class="p" >Функция <b>mysql_fetch_row(int $res)</b> получает сразу всю строку, соответствующую текущей записи результата <b>$res</b>. Каждый следующий вызов функции перемещает указатель запроса на следующую позицию (как при работе с файлами) и получает следующую запись.
<p class="p" >Использовать функцию <b>mysql_fetch_row() </b>не всегда удобно, так как значения всех полей одной записи находятся все в одной строке. Удобнее использовать функцию <b>mysql_fetch_array()</b>, которая возвращает ассоциативный массив, ключами которого будут имена полей.
<p class="p" >В PHP есть функция, возвращающая ассоциативный массив с одним индексом:
<b>mysql_fetch_assoc(int $res);</b>
<p class="p" >Фактически, данная функция является синонимом для <b>mysql_fetch_array($res, MYSQL_ASSOC);</b>
<p class="p" >Пример использования функции <b>mysql_fecth_array():</b>
<p class="definition def"><b><i>$q = mysql_query("SELECT * FROM mytable WHERE month=\"$db_m\" <br>
AND day=\"$db_d\");<br>
for<? echo' ($c=0; $c< mysql_num_rows($q); $c++)' ?>
  <br>
{<br>
$f = mysql_fetch_array($q);<br>
echo "$f[email] $f[name] $f[month] $f[day]";<br>
}</i></b></p>



<div class="navbt">
	<div class=" btn red d">
		<a  href="20_Steps_for_creating_an_application.php" >Предыдущая 
			<div class="btn__blobs">
		      <div></div>
		      <div></div>
		      <div></div>
    		</div>
  		</a>
  	</div>
  	
	<div class=" btn red d">
		<a href="32_Introduction_to_three-tier_architecture.php">Следующая
			<div class="btn__blobs">
		      <div></div>
		      <div></div>
		      <div></div>
   			</div>
   		</a>
   	</div>
 </div>
</p>
</div>
</main>
 <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
    <script src="js/registration.js"></script>
    <script src="js/user.js"></script>  
    <script src="js/topic.js"></script>
    