<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/topic.css">

  <link rel="stylesheet" href="css/registration.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 <link rel="shortcut icon" href="image/icon.png" type="image/x-icon"> 

   <title>Основные особенности архитектуры клиент-сервер</title>


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
  <p class="p" ><b>РАЗДЕЛ 4. АРХИТЕКТУРА КЛИЕНТ-СЕРВЕР (INTERBASE, MYSQL,ORACLE) </b>
  <p class="title">Тема 4.1. Основные особенности архитектуры клиент-сервер</p>

<p class="p"><b><center>Клиент-серверные БД</center></b>
<p class="p">Начиная с 1980-х годов разработчики проектов <a href="glossary.php#bd" class="gl" title="Узнать значение">БД</a> стали проявлять повышенный интерес к архитектуре клиент-сервер. Основная идея клиент-серверной технологии в БД заключается в разделении функций обработки и представлении данных между участниками процесса обработки данных. Здесь под клиентом подразумевается некий процесс, запрашивающий сервис или ресурс от другого серверного процесса.
<p class="p">В свою очередь, <b>сервер</b> – это процесс, который предоставляет сервисы и/или ресурсы клиентскому процессу. В клиент-серверной архитектуре клиенты соответствуют интерфейсной части <b>(front-end)</b> системы, а сервер выступает в роли прикладной части <b>(back-end)</b>.
<p class="p">Период взаимодействия клиента и сервера называется <b>сеансом (сессией)</b>. Один и тот же сервер, как правило, способен одновременно поддерживать один и более сеансов, таким образом обслуживая несколько клиентов.
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>Сеанс (session)</u></b> – определенный период времени, в течение которого клиент может много раз взаимодействовать с сервером, причем и клиент, и сервер поддерживают данные друг о друге.</p>
<p class="p">Технически сервер и клиент могут исполняться на одном и том же компьютере (такое размещение очень удобно на этапе программирования), но весь смысл идеи раскрывается, только когда сервер развертывается на выделенной, высокопроизводительной станции. В таком случае сервер сможет предоставлять свои услуги одновременно нескольким клиентам.
<p class="p"><b><center>Модель взаимодействия открытых систем</center></b>
<p class="p">Помимо клиента и сервера, клиент-серверные системы включают и третий компонент – промежуточное программное обеспечение (middleware). По своей сути промежуточное ПО представляет собой процесс (процессы), обеспечивающий взаимодействие между клиентом и сервером (рис.1).
 <p class="p"><center><img src="lectures/17.png" width="700" height="120" class="top_img min_i"  /></center>
<p class="p"><center>Рис.1. Взаимодействие клиентского и серверного процессов</center>
<p class="p">В современных клиент-серверных системах промежуточное ПО в первую очередь осуществляет <b>коммуникационные функции</b>, доставляя серверу запросы клиента и возвращая назад данные. В компьютеризированных системах коммуникационные функции реализуются операционными системами, которые, в свою очередь, взаимодействуют с сетевым оборудованием.
<p class="p">Полноценное архитектурное решение <b>«клиент-сервер»</b> появилось на свет одновременно со всеобщим признанием концепции открытых систем. Задачей этой концепции является стандартизация аппаратных программных интерфейсов, что в результате привело к упрощению комплексирования компьютерных систем.
<p class="p"><b>Замечание</b>
<p class="p"><b>Модель взаимодействия открытых систем (Open Systems Interconnection, OSI)</b> была предложена организацией ISO в 1984 году. Эталонная модель включает <b>7 независимых уровней</b>, причем каждый нижележащий уровень предоставляет определенные услуги для вышерасположенного уровня.
<p class="p">Реализованный в <b>OSI </b>многоуровневый подход заключается в том, что все множество модулей, предоставляющих определенные сервисы, разбивают на группы и упорядочивают по уровням, образующим 7-уровневую иерархию (рис.2). Состав уровней OSI таков:
<p class="q"><b><i>7) Прикладной уровень</i></b>. Обеспечивает преобразование данных, специфичное для каждого конкретного приложения, в нашем случае для СУБД и клиентского приложения, отправляющего SQL-запрос в адрес БД;
<p class="q"><b><i>6) Уровень представления</i></b>. Осуществляет преобразование данных общего характера (преобразование данных в формат, понятный для принимающего узла; шифрование данных; сжатие данных);
<p class="q"><b><i>5) Сеансовый уровень</i></b>. Устанавливает соединение между сервером и клиентом и управляет им, при необходимости восстанавливает разорванное соединение;
<p class="q"><b><i>4) Транспортный уровень</i></b>. В интересах вышележащих уровней осуществляет свободную от ошибок, ориентированную на работу с сообщениями сквозную передачу;
<p class="q"><b><i>3) Сетевой уровень</i></b>. Служит для образования единой транспортной системы, объединяющей несколько сетей, обеспечивает маршрутизацию и управление загрузкой канала передачи, представленного только конечными точками;
<p class="q"><b><i>2) Канальный уровень</i></b>. Осуществляет свободную от ошибок передачу по отдельному каналу связи;
<p class="q"><b><i>1) Физический уровень</i></b>. Выполняет реальную передачу бит данных по физическим каналам связи.
 <p class="p"><center><img src="lectures/18.png" width="700" height="500" class="top_img min_i"  /></center>
<p class="p"><center>Рис.2. Взаимодействие клиентского и серверного процессов</center>
<p class="p">Группа программных, программно-аппаратных или просто аппаратных модулей, составляющих каждый уровень, формируется так, чтобы все модули уровня для выполнения возложенного на них функционала обращались с запросами только к модулям соседнего нижележащего уровня. Для взаимодействия между уровнями одного и того же узла используются интерфейсы, определяющие набор функций, которые нижележащий уровень предоставляет уровню, расположенному выше. Для обмена сообщениями между модулями одного и того же уровня, но расположенными на разных узлах, разрабатываются протоколы.
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>Протокол</u></b> – это формализованные правила, с помощью которых осуществляется сетевое взаимодействие расположенных в разных узлах модулей одного и того же уровня.</p>
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>Интерфейс</u></b>– это формализованные правила, с помощью которых взаимодейству­ют находящиеся в одном узле модули, реализующие протоколы соседних уров­ ней.</p>
<p class="p">Уровни работают таким образом, что расположившемуся над ними конечному пользователю можно не заботиться о том, каким образом осуществляется передача данных от одного сетевого узла к другому. Точно так же, как вы, совершая звонок по мобильному телефону, не задумываетесь об особенностях распространения радиосигнала, о помехоустойчивости, задаче поиска абонента, преобразовании аналогового сигнала в цифровую форму и т. п., – вместо этого вам просто требуется набрать номер, все остальное сделает ваш телефон и коммуникационное оборудование.
<p class="p"><B>Замечание</B>
<p class="p">В современных компьютерных сетях доминирующие позиции занимает стек протоколов TCP/IP, гарантирующий доставку пакетов между узлами сети. И хотя стек TCP/IP появился на несколько лет раньше, чем модель OSI, заложенные в нем идеи вполне современны и во многом соответствуют требованиям открытых систем. Так, протокол интернета IP можно отнести к сетевому уровню модели OSI, а TCP при­ надлежит транспортному уровню. Позднее над уровнями TCP/IP был создан ряд высокоуровневых надстроек, активно применяемых в клиент-серверных БД, – это сокеты, именованные каналы, удаленный вызов процедур и т. п.
<p class="p"><B><center>Клиент-серверные СУБД</center></B>
<p class="p">Центральным звеном большинства клиент-серверных БД выступает система управления базами данных. Помимо решения стандартных задач (напомним о существовании функциональных обязанностей СУБД, сформулированных доктором Коддом в 1980-х годах), сервер БД обеспечивает:
<ul>
<li><p class="q">    прозрачный доступ к данным для клиентов. В идеале у удаленно-го пользователя должно сложиться впечатление, что БД располо-жена на его же машине;
<li><p class="q"> независимость от аппаратной, сетевой и программной платформ для станции, на которой выполняется клиентское приложение;
<li><p class="q"> доставку по сети запросов SQL к БД и обработку их;
<li><p class="q"> возврат клиенту результатов выполнения запросов.
</ul>
<p class="p">На сегодняшний день клиент-серверные СУБД стали наиболее востребованной архитектурой в проектах БД. Это произошло благодаря существенным преимуществам данного решения над простыми файл-серверными БД. К достоинствам клиент-серверных проектов можно отнести:
<p class="q"><b> 1.</b>  повышение производительности системы за счет перераспределения обязанностей между сервером и клиентами;
<p class="q"> <b>2.</b>  централизованное хранение данных приводит к повышению целостности и непротиворечивости данных, т. к. все ограничения проверяются в одном месте;
<p class="q"> <b>3.</b>  из-за того, что данные сосредоточены в одном месте, а не распре-делены по всем компьютерам предприятия, существенно упрощается решение задачи обеспечения безопасности данных;
<p class="q"> <b>4.</b>  снижается нагрузка на сеть предприятия, т. к. обмен между клиентом и сервером сводится к передаче SQL-запроса и возврату запрашиваемых данных.
<p class="p"><b> Резюме</b>

<p class="p"><b>Модель клиент-сервер</b> основана на распределении функций между двумя типами процессов – клиентом и сервером. <b>Клиентский</b> процесс нуждается в помощи серверного процесса, для этого он запрашивает от сервера определенные услуги. <b>Сервер</b> выполняет поставленную задачу и возвращает клиенту полученные результаты.

<p class="p">Клиент-серверные базы данных позволяют предоставлять транспарентный доступ к данным одному или нескольким клиентам. Как правило, основная обработка данных в таких системах выполняется СУБД, а клиент освобождается от локальной обработки данных.

<p class="p"><b>Вопросы для самопроверки:</b>
<ul>
<li><p class="q">Опишите назначение уровней в модели взаимодействия откры-тых систем (OSI).
<li><p class="q">Раскройте принципы клиент-серверной архитектуры.
<li><p class="q">Поясните смысл терминов «интерфейс» и «протокол».
<li><p class="q">Какой функционал возлагается на СУБД, работающую в кли-ент-серверной архитектуре?
<li><p class="q">Какими достоинствами обладают БД, работающие в клиент-серверной архитектуре?
</ul>



<div class="navbt">
	<div class=" btn red d">
		<a  href="14_The_manipulation_of_data.php" >Предыдущая 
			<div class="btn__blobs">
		      <div></div>
		      <div></div>
		      <div></div>
    		</div>
  		</a>
  	</div>
	<div class=" btn red d">
		<a href="18_Working_with_BLOB_and_user-defined_functions.php">Следующая
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
    