<?php
session_start();
    header("Content-Type: text/html; charset=utf-8");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Словарь</title>
<link rel="stylesheet"  href="css/topic.css">
	<link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.css">	
</head>
<body>
	<header>
		<?php include('nav.php');?>
		<?php include('reg.php');?>
	
		    <?php include('user.php');   ?> 
	</header>
<main class="m">
	<div class="pagepag" id="pagepag">
<?php $previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}?>

 <div  id="back_gl" ><a href="<?= $previous ?>" title="Веруться к лекции" >     &lArr; Назад</a></div>
	<p id="bd" class="glass" ><b><u>База данных</u></b> — это упорядоченный набор структурированной информации или данных, которые обычно хранятся в электронном виде в компьютерной системе. База данных обычно управляется системой управления базами данных (СУБД).</p>
	<p id="bank" class="glass"> <b><u>	Банк данных (БнД)</u></b> – это организованная совокупность совместно используемых логически связанных данных и описаний этих данных, относящаяся к определенной предметной области, предназначенная для удовлетворения информационных потребностей различных пользователей.</p>
	<p id="Computing" class="glass"><b><u>Вычислительная система</u></b> – совокупность взаимосвязанных и согласованно действующих ЭВМ или процессоров и других устройств, обеспечивающих автоматизацию процессов приема, обработки и выдачи информации потребителям.</p>
	<p id="data" class="glass"> <b><u>	Данные</u></b> – это информация представленная в формализованном виде, позволяющем передавать или обрабатывать ее при помощи некоторых процессов и технических средств.</p>
	<p id="Domain" class="glass"><b><u>Домен</u></b> - это "вид" данных, которые может содержать данный атрибут. Более четкое определение - это набор всех допустимых значений, которые может содержать данный атрибут.</p>
	<p id="Journal" class="glass"><b><u>Журнал</u></b> обычно представляет собой последовательный файл с записями переменного размера, которые можно просматривать в прямом или обратном порядке.</p>
	<p id="Logging" class="glass"><b><u>Журнализация</u></b> — это особая часть БД, недоступная пользователю субд, но поддерживающаяся с особой тщательностью, куда поступают записи обо всех изменениях основной части БД. </p>
	<p id="Information_system" class="glass"> <b><u>Информационная система</u></b> – взаимосвязанная совокупность средств, методов и персонала, используемых для хранения, обработки и выдачи информации в интересах достижения поставленной цели.
	<p id="Control_point" class="glass"><b><u>Контрольная точка</u></b> – момент синхронизации между базой данных и файлом журнала, где регистрируются транзакции. Все буферы оперативной памяти принудительно записываются во вторичную память системы.</p>
	<p id="data_model" class="glass"><b><u>Модель данных</u></b> – это совокупность правил порождения структур данных в базе данных, операций над ними, а также ограничений целостности, определяющих допустимые связи и значения данных, последовательность их изменения.</p>
	<p id="Normalization" class="glass"><b><u>Нормализация</u></b> представляет собой процесс приведения таблиц к виду, позволяющему осуществлять непротиворечивое и корректное редактирование данных.</p>
	<p id="Normal_form" class="glass"><b><u>Нормальная форма</u></b> — свойство отношения в реляционной модели данных, характеризующее его с точки зрения избыточности, потенциально приводящей к логически ошибочным результатам выборки или изменения данных. Нормальная форма определяется как совокупность требований, которым должно удовлетворять отношение.</p>
	<p id="subquery" class="glass"><b><u>Подзапрос</u></b> — форма команды SELECT, которая появляется внутри другого утверждения SQL. Подзапрос иногда называется вложенным запросом. Утверждение, содержащее подзапрос называется родительским выражением. Строки, возвращенные подзапросом, используются родительским выражением.</p>
	<p id="Protocol" class="glass"><b><u>Протокол</u></b> – это формализованные правила, с помощью которых осуществляется сетевое взаимодействие расположенных в разных узлах модулей одного и того же уровня.</p>
	<p id="sybd" class="glass"><b><u>Систе́ма управле́ния ба́зами да́нных, сокр. СУБД</u></b> — совокупность программных и лингвистических средств общего или специального назначения, обеспечивающих управление созданием и использованием баз данных. СУБД — комплекс программ, позволяющих создать базу данных и манипулировать данными.</p>
	<p id="session" class="glass"><b><u>Сеанс (session)</u></b> – определенный период времени, в течение которого клиент может много раз взаимодействовать с сервером, причем и клиент, и сервер поддерживают данные друг о друге.</p>
	<p id="Serialization" class="glass"><b><u>Сериализация транзакций</u></b> - это механизм их выполнения по некоторому сериальному плану. Обеспечение такого механизма является основной функцией компонента СУБД, ответственного за управление транзакциями. Система, в которой поддерживается сериализация транзакций обеспечивает реальную изолированность пользователей.</p>
	<p id="essence" class="glass"><b><u>Сущность</u></b> - это что-то такое, о чем нужно хранить информацию в базе данных.</p>
	<p id="transaction" class="glass"><b><u>Транзакция</u></b> — это последовательность операций с БД, которые воспринимаются как единое тело.
	<p id="MySQL" class="glass"><b><u>MySQL</u></b> – это свободно распространяемая СУБД, разработанная компанией MySQL AB (www.mysql.com). MySQL имеет клиент-серверную архитектуру: к серверу MySQL могут обращаться различные клиентские приложения, в том числе с удаленных компьютеров.</p>
	<p id="SQL" class="glass"><b><u>SQL (англ. structured query language — «язык структурированных запросов»)</u></b> является прежде всего информационно-логическим языком, предназначенным для описания, изменения и извлечения данных, хранимых в реляционных базах данных.</p>


















</div>
</main>

		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
<script src="js/topic.js"></script>
		<script src="js/registration.js"></script>
    <script src="js/user.js"></script>
		
</body>
</html>