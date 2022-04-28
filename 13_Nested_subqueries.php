<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/topic.css">

  <link rel="stylesheet" href="css/registration.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 <link rel="shortcut icon" href="image/icon.png" type="image/x-icon"> 

   <title>Вложенные подзапросы</title>


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
  <p class="p" ><b>РАЗДЕЛ 3. ЭЛЕМЕНТЫ ЯЗЫКА SQL   </b>

<p class="title">Тема 3.3. Вложенные подзапросы

<p class="p">SQL позволяет использовать одни запросы внутри других запросов, то есть вкладывать запросы друг в друга. Предположим, известна фамилия студента («Петров»), но неизвестно значение поля STUDENT_ID для него. Чтобы извлечь данные обо всех оценках этого студента, можно записать следующий запрос:
<p class="definition def">SELECT *<br>
FROM EXAM_MARKS<br>
WHERE STUDENT_ID =<br>
(SELECT STUDENT_ID<br>
FROM STUDENT SURNAME = 'Петров');</p>
<p class="p">Как работает запрос SQL со связанным подзапросом?
 <ul>
  <li> <p class="q">Выбирается строка из таблицы, имя которой указано во внешнем запросе.
 <li> <p class="q">Выполняется подзапрос и полученное значение применяется для анализа этой строки в условии предложения WHERE внешнего запроса.
 <li> <p class="q"> По результату оценки этого условия принимается решение о включении или не включении строки в состав выходных данных.
 <li> <p class="q"> Процедура повторяется для следующей строки таблицы внешнего запроса.
 </ul>
<p class="p">Следует обратить внимание, что приведенный выше запрос корректен только в том случае, если в результате выполнения указанного в скобках подзапроса возвращается единственное значение. Если в результате выполнения подзапроса будет возвращено несколько значений, то этот подзапрос будет ошибочным. В данном примере это произойдет, если в таблице STUDENT будет несколько записей со значениями поля SURNAME = 'Петров'.
<p class="p">В некоторых случаях для гарантии получения единственного значения в результате выполнения подзапроса используется <b>DISTINCT</b>. Одним из видов функций, которые автоматически всегда выдают в результате единственное значение для любого количества строк, являются агрегирующие функции.
<p class="p">Оператор <b>IN</b> также широко применяется в подзапросах. Он задает список значений, с которыми сравниваются другие значения для определения истинности задаваемого этим оператором предиката.
<p class="p">Данные обо всех оценках (таблица EXAM_MARKS) студентов из Воронежа можно выбрать с помощью следующего запроса:
<p class="definition def" >SELECT *<br>
FROM EXAM_MARKS<br>
WHERE STUDENT_ID IN<br>
(SELECT STUDENT_ID<br>
FROM STUDENT<br>
WHERE CITY = 'Воронеж');</p>
<p class="p">Подзапросы можно применять внутри предложения <b>HAVING</b>. Пусть требуется определить количество предметов обучения с оценкой, превышающей среднее значение оценки студента с идентификатором 301:
<p class="definition def" >SELECT COONT(DISTINCT SUBJ_IDj, MARK
FROM EXAM_MARKS<br>
GROUP BY MARK<br>
HAVING MARK ><br>
(SELECT AVG(MARK)<br>
FROM EXAM_MARKS<br>
WHERE STUDENT_ID = 301);</p>
<p class="p"><b>Формирование связанных подзапросов</b>
<p class="p">При использовании подзапросов во внутреннем запросе можно ссылаться на таблицу, имя которой указано в предложении <b>FROM </b>внешнего запроса. В этом случае такой связанный подзапрос выполняется по одному разу для каждой строки таблицы основного запроса.
<p class="p"><i><b>Пример:</b></i> выбрать сведения обо всех предметах обучения, по которым проводился экзамен 20 января 1999 г.
<p class="definition def" >SELECT *<br>
FROM SUBJECT SU<br>
WHERE '20/01/1999' IN<br>
(SELECT EXAM_DATE<br>
PROM EXAM_MARKS EX<br>
WHERE SU.SUBJ_ID = EX.SUBJ_ID);</p>
<p class="p">В некоторых СУБД для выполнения этого запроса может потребоваться преобразование значения даты в символьный тип. В приведенном запросе su и ЕХ являются псевдонимами (алиасами), то есть специально вводимыми именами, которые могут быть использованы в данном запросе вместо настоящих имен. В приведенном примере они используются вместо имен таблиц SUBJECT и EXAM_MARKS.
<p class="p">Эту же задачу можно решить с помощью операции соединения таблиц:
<p class="definition def" >SELECT DISTINCT SU.SUBJ_ID, SUBJJJAME, HOUR, SEMESTER<br>
PROM SUBJECT FIRST,EXAM_MARKS SECOND<br>
WHERE FIRST.SUBJ_ID = SECOND.SUBJ_ID<br>
AND SECOND.EXAM_DATE = '20/01/1999';</p>
<p class="p">В этом выражении алиасами таблиц являются имена FIRST И SECOND.
<p class="p">Можно использовать подзапросы, связывающие таблицу со своей собственной копией. Например, надо найти идентификаторы, фамилии и стипендии студентов, получающих стипендию выше средней на курсе, на котором они учатся.
<p class="definition def" >SELECT DISTINCT STUDENT_ID,SURNAME, STIPEND<br>
FROM STUDENT El<br>
WHERE STIPEND ><br>
(SELECT AVG(STIPEND)<br>
FROM STUDENT E2<br>
WHERE El.KURS = E2.KURS);</p>
<p class="p">Тот же результат можно получить с помощью следующего запроса:
<p class="definition def" >SELECT DISTINCT STUDENT_ID, <br>SURNAME,STIPEND<br>
FROM STUDENT El,<br>
(SELECT KURS, AVG (STIPENDj AS AVG_STIPEND<br>
FROM STUDENT E2<br>
GROUP BY E2.KURS) E3<br>
WHERE El.STIPEND > AVG_STIPEND AND El.KURS=E3.KURS;</p>
<p class="p">Обратите внимание — второй запрос будет выполнен гораздо быстрее. Дело в том, что в первом варианте запроса агрегирующая функция AVG выполняется над таблицей, указанной в подзапросе, для каждой строки внешнего запроса. В другом варианте вторая таблица (алиас Е2) обрабатывается агрегирующей
функцией один раз, в результате чего формируется вспомогательная таблица (в запросе она имеет алиас ЕЗ), со строками которой затем соединяются строки первой таблицы (алиас Е1). Следует иметь в виду, что реальное время выполнения запроса в большой степени зависит от оптимизатора запросов конкретной СУБД.
<p class="p"><b>Связанные подзапросы в HAVING</b>
<p class="p">В разделе 2.4 указывалось, что предложение GROUP BY позволяет группировать выводимые SELECT-запросом записи по значению некоторого поля. Использование предложения HAVING позволяет при выводе осуществлять фильтрацию таких групп. Предикат предложения HAVING оценивается не для каждой строки результата, а для каждой группы выходных записей, сформированной предложением GROUP BY внешнего запроса. Пусть, например, необходимо по данным из таблицы EXAM_MARKS определить сумму полученных студентами оценок (значений поля MARK), сгруппировав значения оценок по датам экзаменов и исключив те дни, когда число студентов, сдававших в течение дня экзамены, было меньше 10.
<p class="definition def" >SELECT EXAM_DATE, SUM(MARK)<br>
FROM EXAM_MARKS A<br>
GROUP BY EXAM_DATE<br>
HAVING 10 <<br>
(SELECT COUNT(MARK)<br>
FROM EXAM_MARKS В<br>
WHERE A.EXAM_DATE = В.EXAM_DATE);</p>
<p class="p">Подзапрос вычисляет количество строк с одной и той же датой, совпадающей с датой, для которой сформирована очередная группа основного запроса.
<p class="p"><b>Упражнения:</b>
<p class="q"><b>1.</b> Напишите запрос с подзапросом для получения данных обо всех оценках студента с фамилией «Иванов». Предположим, что его персональный номер неизвестен. Всегда ли такой запрос будет корректным?
<p class="q"><b>2.</b> Напишите запрос, выбирающий данные об именах всех студентов, имеющих по предмету с идентификатором 101 балл выше общего среднего балла.
<p class="q"><b>3.</b> Напишите запрос, который выполняет выборку имен всех студентов, имеющих по предмету с идентификатором 102 балл ниже общего среднего балла
<p class="q"><b>4.</b> Напишите запрос, выполняющий вывод количества предметов, по которым экзаменовался каждый студент, сдававший более 20 предметов.
<p class="q"><b>5.</b> Напишите команду SELECT, использующую связанные подзапросы и выполняющую вывод имен и идентификаторов студентов.


<div class="navbt">
	<div class=" btn red d">
		<a  href="12_Selecting_data_using_the_select_clause.php" >Предыдущая 
			<div class="btn__blobs">
		      <div></div>
		      <div></div>
		      <div></div>
    		</div>
  		</a>
  	</div>
  	
	<div class=" btn red d">
		<a href="14_The_manipulation_of_data.php">Следующая
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