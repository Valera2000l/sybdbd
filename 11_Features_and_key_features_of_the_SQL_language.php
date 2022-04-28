<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/topic.css">

  <link rel="stylesheet" href="css/registration.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 <link rel="shortcut icon" href="image/icon.png" type="image/x-icon"> 

   <title>Функции и основные возможности языка SQL</title>


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
  <p class="p" ><b>РАЗДЕЛ 3. ЭЛЕМЕНТЫ ЯЗЫКА SQL  </b>
  <p class="title">Тема 3.1. Функции и основные возможности языка SQL</p>

<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>SQL</u></b>  (англ. <i>structured query language</i> — «язык структурированных запросов») является прежде всего информационно-логическим языком, предназначенным для описания, изменения и извлечения данных, хранимых в реляционных базах данных. </p>
<p class="p"><div class="iframe_video"><iframe width="80%" height="315" src="https://www.youtube.com/embed/xV9kH0ozcak" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
<p class="p">SQL можно назвать языком программирования, при этом он не является тьюринг-полным, но вместе с тем стандарт языка спецификацией SQL/PSM предусматривает возможность его процедурных расширений.
<p class="p">Изначально SQL был основным способом работы пользователя с базой данных и позволял выполнять следующий набор операций:
 <ul>
<li><p class="q">создание в базе данных новой таблицы;
<li><p class="q">добавление в таблицу новых записей;
<li><p class="q">изменение записей;
<li><p class="q">удаление записей;
<li><p class="q"> выборка записей из одной или нескольких таблиц (в соответствии с заданным условием);
<li><p class="q"> изменение структур таблиц.
</ul>
<p class="p">Со временем SQL усложнился — обогатился новыми конструкциями, обеспечил возможность описания и управления новыми хранимыми объектами (например, индексы, представления, триггеры и хранимые процедуры) — и стал приобретать черты, свойственные языкам программирования.
<p class="p">При всех своих изменениях SQL остаётся единственным механизмом связи между прикладным программным обеспечением и базой данных. В то же время современные СУБД, а также информационные системы, использующие СУБД, предоставляют пользователю развитые средства визуального построения запросов.

<p class="p">Язык SQL представляет собой совокупность:
<ul>
<li><p class="q">операторов;
<li><p class="q">инструкций;
<li><p class="q"> вычисляемых функций.
</ul>
<p class="p"><b><center>Некоторые правила создания запросов. Знакомство с SQL.</center></b>
<p class="p"><b>1)</b>  1.1 Если в запросе участвуют несколько таблиц тогда между ними обязательно должна существовать связь. Если таблицы не взаимосвязаны, в запрос необходимо добавить связующую таблицу.
<p class="p">      1.2 Необходимо себе представлять результат запроса. Рисовать результат.
 <p class="p">   <b> 2)</b> Выполнять запрос по частям.
 <p class="p">   <b> 3)</b> При группировке можно сгруппировать поля, значения которого повторяются.
<p class="p"><b><center>Функции для работы с датой:</center></b>
<p class="p"><b>Now()</b> –  возвращает текущую дату.
<p class="p"><b>Year(Data)</b>  - возвращает год.
<p class="p"><b>Month(Data)</b> – возвращает месяц.
<p class="p"><b>Day(Data)</b> – возвращает день.

<p class="p"><b><center>Запрос на SQL</center></b>

  <p class="p"><b>SELECT</b> –  работа с полями, выбирает поля, создает новые, а также связывает имеющиеся. 
<p class="p"><b>FROM</b> -  все, что связанно с таблицами.
<p class="p"><b>WHERE</b> –  указывает условие  
<p class="p"><b>Group By</b> – поле которое нужно группировать.
<p class="p"><b>Order By</b> – поле которое нужно сортировать.
<p class="p"><b>CREATE</b> – позволяет создавать таблицу.
<p class="p"><b>DROP</b> -  удаляет  таблицу. 
<p class="p"><b>ALTER</b> -  изменяет структуру таблицы.
<p class="p"><b>INSERT</b> -  добавляет данные в таблицу. 
<p class="p"><b>Like</b> -  определяет соответствие строкового значения.
<p class="p"><b>IN</b> -  определяет присутствует ли значение в списке предложенных.
<p class="p"><b>BETWEEN</b> -  попадает ли значение в заданный диапазон. 
<p class="p"><b>NULL </b>-  является ли ячейка пустой.
<p class="p"><b>TOP N </b>-  выбирает первые n записей.
<p class="p"><b>NOT </b>– синоним не, отрицание. 
<p class="p"><b>DISTINCT</b> -  выбор значения поля без повторения.
<p class="p"><b><center>Пример использования ключевых слов</center></b>
<p class="p">WHERE Familia Like “А*”;
<p class="p">WHERE Citi  IN (“Гродно “, “Москва”,“Минск”);
<p class="p">WHERE Citi  Like  “Гродно” OR Citi Like “Москва”; 
<p class="p">WHERE Ocenka Between 8 and 10;

<p class="p"><b><center>Операторы</center></b>
<p class="p">Согласно общепринятому стилю программирования, операторы (и другие зарезервированные слова) в SQL обычно рекомендуется писать прописными буквами.
<p class="p">Операторы SQL делятся на:
<p class="p"><b>1) Операторы определения данных (Data Definition Language, DDL):</b>
<ul>
<li><p class="q"><b>CREATE</b> создаёт объект БД (саму базу, таблицу, представление, пользователя и т. д.),
<li><p class="q"><b>ALTER</b> изменяет объект,
<li><p class="q"><b>DROP</b> удаляет объект;
</ul>
<p class="p"><b>2) Операторы манипуляции данными (Data Manipulation Language, DML):</b>
<ul>
<li><p class="q"><b>SELECT</b> выбирает данные, удовлетворяющие заданным условиям,
<li><p class="q"><b>INSERT</b> добавляет новые данные,
<li><p class="q"><b>UPDATE</b> изменяет существующие данные,
<li><p class="q"><b> DELETE</b> удаляет данные;
  </ul>
<p class="p"><b>3) ператоры определения доступа к данным (Data Control Language, DCL):</b>
  <UL>
<li><p class="q"><b> GRANT</b> предоставляет пользователю (группе) разрешения на определённые операции с объектом,
<li><p class="q"><b> REVOKE</b> отзывает ранее выданные разрешения,
<li><p class="q"><b> DENY</b> задаёт запрет, имеющий приоритет над разрешением;
  </ul>
<p class="p"><b>4) Операторы управления транзакциями (Transaction Control Language, TCL):</b>
   <UL>
<li><p class="q"><b>COMMIT</b> применяет транзакцию,
<li><p class="q"><b>ROLLBACK</b> откатывает все изменения, сделанные в контексте текущей транзакции,
<li><p class="q"><b>SAVEPOINT</b> делит транзакцию на более мелкие участки.
</ul>


<p class="p"><b><center>Команды для работы с базами данных</center></b>
<p class="p"><b>1. Просмотр доступных баз данных</b>
<p class="definition def">SHOW DATABASES;</p>
<p class="p"><b>2. Создание новой базы данных</b>
<p class="definition def">CREATE DATABASE;</p>
<p class="p"><b>3. Выбор базы данных для использования</b>
<p class="definition def">USE (database_name); </p>
<p class="p"><b>4. Импорт SQL-команд из файла .sql</b>
<p class="definition def">SOURCE (path_of_.sql_file); </p>
<p class="p"><b>5. Удаление базы данных</b>
<p class="definition def">DROP DATABASE (database_name); </p>
<p class="p"><b><center>Работа с таблицами</center></b>
<p class="p"><b>6. Просмотр таблиц, доступных в базе данных</b>
<p class="definition def">SHOW TABLES; </p>

<p class="p"><b>7. Создание новой таблицы</b>
<p class="definition def">
CREATE TABLE (table_name1) (<br>
  (col_name1) (col_type1),<br>
  (col_name2) (col_type2),<br>
  (col_name3) (col_type3)<br>
  PRIMARY KEY ((col_name1)),<br>
  FOREIGN KEY ((col_name2)) REFERENCES (table_name2)( (col_name2) )
); </p>
<p class="p">Может понадобиться создать ограничения для определённых столбцов в таблице. При создании таблицы можно задать следующие ограничения:
<ul>
<li><p class="q">ячейка таблицы не может иметь значение NULL;
<li><p class="q"> первичный ключ — PRIMARY KEY (col_name1, col_name2, …);
<li><p class="q">внешний ключ — FOREIGN KEY (col_namex1, …, col_namexn) REFERENCES table_name(col_namex1, …, col_namexn).
</ul>
<p class="p">Можно задать больше одного первичного ключа. В этом случае получится составной первичный ключ.
<p class="p"><b>Пример: </b>
Создайте таблицу «instructor».
<p class="definition def">CREATE TABLE instructor (<br>
  ID CHAR(5),<br>
  name VARCHAR(20) NOT NULL,<br>
  dept_name VARCHAR(20),<br>
  salary NUMERIC(8,2),<br>
  PRIMARY KEY (ID),<br>
  FOREIGN KEY (dept_name) REFERENCES department(dept_name)
); </p>
<p class="p"><b>8. Сведения о таблице</b>
<p class="p">Можно просмотреть различные сведения (тип значений, является ключом или нет) о столбцах таблицы следующей командой:
<p class="definition def">DESCRIBE (table_name);</p>

<p class="p"><b>9. Добавление данных в таблицу</b>
<p class="definition def">INSERT INTO (table_name) ((col_name1), (col_name2), (col_name3), …)<br>
  VALUES ((value1), (value2), (value3), …); </p>
<p class="p">При добавлении данных в каждый столбец таблицы не требуется указывать названия столбцов.
<p class="definition def">INSERT INTO (table_name)  VALUES
 ((value1), (value2), (value3), …); </p>
<p class="p"><b>10. Обновление данных таблицы</b>
<p class="definition def">UPDATE (table_name)<br>
  SET  (col_name1) = (value1),(col_name2) = (value2), ...<br>
  WHERE (condition); </p>
<p class="p"><b>11. Удаление всех данных из таблицы</b>
<p class="definition def">DELETE FROM (table_name);</p>
<p class="p"><b>12. Удаление таблицы</b>
<p class="definition def">DROP TABLE (table_name);</p>
<p class="p"><b><center>Команды для создания запросов</center></b>
<p class="p"><b>13. SELECT</b>
<p class="p"><b>SELECT</b> используется для получения данных из определённой таблицы:
<p class="definition def">
SELECT   (col_name1), (col_name2), …<br>
 FROM (table_name)</p>
<p class="p">Следующей командой можно вывести все данные из таблицы:
<p class="definition def">SELECT * FROM (table_name);</p>

<p class="p"><b>14. DISTINCT</b>
<p class="p">В столбцах таблицы могут содержаться повторяющиеся данные. Используйте SELECT <b>DISTINCT</b> для получения только неповторяющихся данных.
 <p class="p"><b>Синтаксис:</b> <p class="definition def">
SELECT DISTINCT  (col_name1), (col_name2), …<br>
 FROM (table_name)</p>
<p class="p"><b>15. WHERE</b>
<p class="p">Можно использовать ключевое слово <b>WHERE</b> в SELECT для указания условий в запросе:
<p class="definition def">SELECT (col_name1), (col_name2), …<br>
 FROM (table_name)<br>
  WHERE (condition); </p>
<p class="p">В запросе можно задавать следующие условия:
<ul>
<li><p class="q"> сравнение текста;
<li><p class="q"> сравнение численных значений;
<li><p class="q"> логические операции AND (и), OR (или) и NOT (отрицание).</ul>
<p class="p"><b>Пример: </b>Попробуйте выполнить следующие команды. Обратите внимание на условия, заданные в WHERE.
<p class="definition def">SELECT * FROM course WHERE dept_name=’Comp. Sci.’;<br>
SELECT * FROM course WHERE credits>3;<br>
SELECT * FROM course WHERE dept_name='Comp. Sci.' AND credits>3; </p>

<p class="p"><b>16. GROUP BY</b>
<p class="p">Оператор <b>GROUP BY</b>  часто используется с агрегатными функциями, такими как <b> COUNT, MAX, MIN, SUM</b>  и <b> AVG</b> , для группировки выходных значений.
 <p class="p"><b>Синтаксис:</b> <p class="definition def">SELECT (col_name1), (col_name2), …<br>
 FROM (table_name)<br>
  GROUP BY (col_namex);</p>
<p class="p"><b>Пример: </b>Выведем количество курсов для каждого факультета.
<p class="definition def">SELECT COUNT(course_id), dept_name<br>
  FROM course<br>
  GROUP BY dept_name; </p>

<p class="p"><b>17. HAVING</b>
<p class="p">Ключевое слово <b>HAVING</b> было добавлено в SQL потому, что WHERE не может быть использовано для работы с агрегатными функциями.
<p class="p"><b>Синтаксис:</b> 
  <p class="definition def">SELECT (col_name1), (col_name2), …<br>
 FROM (table_name)<br>
  GROUP BY (column_namex)<br>
  HAVING (condition) </p>
<p class="p"><b>Пример: </b>Выведем список факультетов, у которых более одного курса.
<p class="definition def">SELECT COUNT(course_id), dept_name<br>
  FROM course<br>
  GROUP BY dept_name<br>
  HAVING COUNT(course_id)>1; </p>

<p class="p"><b>18. ORDER BY</b>
<p class="p"><b>ORDER BY</b> используется для сортировки результатов запроса по убыванию или возрастанию. ORDER BY отсортирует по возрастанию, если не будет указан способ сортировки <b>ASC</b> или <b>DESC</b>.
<p class="p"><b>Синтаксис:</b> 
  <p class="definition def">SELECT (col_name1), (col_name2), …<br>
  FROM (table_name)<br>
  ORDER BY (col_name1), (col_name2), … ASC|DESC; </p>
<p class="p"><b>Пример: </b>Выведем список курсов по возрастанию и убыванию количества кредитов.
<p class="definition def">SELECT * FROM course ORDER BY credits;
SELECT * FROM course ORDER BY credits DESC; </p>

<p class="p"><b>19. BETWEEN</b>
<p class="p"><b>BETWEEN</b> используется для выбора значений данных из определённого промежутка. Могут быть использованы числовые и текстовые значения, а также даты.
<p class="p"><b>Синтаксис:</b> 
  <p class="definition def">SELECT (col_name1), (col_name2), …<br>
  FROM (table_name)<br>
  WHERE (col_namex) BETWEEN (value1) AND (value2);</p> 
<p class="p"><b>Пример: </b>Выведем список инструкторов, чья зарплата больше 50 000, но меньше 100 000.
<p class="definition def">SELECT * FROM instructor<br>
  WHERE salary BETWEEN 50000 AND 100000; </p>

<p class="p"><b>20. LIKE</b>
<p class="p">Оператор <b>LIKE</b> используется в WHERE, чтобы задать шаблон поиска похожего значения.
<p class="p">Есть два свободных оператора, которые используются в LIKE:
<ul>
<li><p class="q"><b>% </b>(ни одного, один или несколько символов);
<li><p class="q"><b>_ </b>(один символ).</ul>
<p class="p"><b>Синтаксис:</b>   
<p class="definition def">SELECT (col_name1), (col_name2), …<br>
  FROM (table_name)<br>
  WHERE (col_namex) LIKE (pattern); </p>
<p class="p"><b>Пример:</b> Выведем список курсов, в имени которых содержится «to», и список курсов, название которых начинается с «CS-».
<p class="definition def">SELECT * FROM course WHERE title LIKE ‘%to%’;<br>
SELECT * FROM course WHERE course_id LIKE 'CS-___';</p> 
<p class="p"><b>21. IN</b>
<p class="p">С помощью IN можно указать несколько значений для оператора WHERE:
<p class="definition def">SELECT (col_name1), (col_name2), …<br>
  FROM (table_name)<br>
  WHERE (col_namen) IN ((value1), (value2), …); <br>
<p class="p"><b>Пример:</b> Выведем список студентов с направлений Comp. Sci., Physics и Elec. Eng..
<p class="definition def">SELECT *<br>
 FROM student<br>
  WHERE dept_name IN (‘Comp. Sci.’, ‘Physics’, ‘Elec. Eng.’); </p>
<p class="p"><b>22. JOIN</b>
<p class="p">JOIN используется для связи двух или более таблиц с помощью общих атрибутов внутри них. На изображении ниже показаны различные способы объединения в SQL. Обратите внимание на разницу между левым внешним объединением и правым внешним объединением:
  <p class="p"><center><img src="lectures/13.png" width="900" height="230" class="top_img" /></center>
 <p class="p"><b>Синтаксис:</b>   
<p class="definition def">SELECT (col_name1), (col_name2), …<br>
  FROM (table_name1)<br>
  JOIN (table_name2)<br>
  ON (table_name1.col_namex) = ( table2.col_namex); </p>
<p class="p"><b>Пример 1: </b>Выведем список всех курсов и соответствующую информацию о факультетах.
<p class="definition def">SELECT * FROM course <br>
    JOIN department <br>
    ON course.dept_name=department.dept_name;<br>
<p class="p"><b>Пример 2: </b>Выведем список всех обязательных курсов и детали о них.
<p class="definition def">SELECT prereq.course_id, title, dept_name, credits, prereq_id<br>
  FROM prereq<br>
  LEFT OUTER JOIN course<br>
  ON prereq.course_id=course.course_id; </p>
<p class="p"><b>Пример 3: </b>Выведем список всех курсов вне зависимости от того, обязательны они или нет.
<p class="definition def">SELECT course.course_id, title, dept_name, credits, prereq_id<br>
  FROM prereq<br>
  RIGHT OUTER JOIN course<br>
  ON prereq.course_id=course.course_id; </p>
<p class="p"><b>23. View</b>
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>View </u></b> — это виртуальная таблица SQL, созданная в результате выполнения выражения. Она содержит строки и столбцы и очень похожа на обычную SQL-таблицу. View всегда показывает самую свежую информацию из базы данных.
<p class="p">Создание:
<p class="definition def">CREATE VIEW (view_name) AS<br>
  SELECT (col_name1), (col_name2), …<br>
  FROM (table_name)<br>
  WHERE (condition); </p>
<p class="p">Удаление:
<p class="definition def">DROP VIEW (view_name); </b>
<p class="p"><b>24. Агрегирующие функции</b>
<p class="p">Эти функции используются для получения совокупного результата, относящегося к рассматриваемым данным. Ниже приведены общеупотребительные агрегированные функции:
 <ul>
<li><p class="q"> <b> COUNT (col_name)</b> — возвращает количество строк;
<li><p class="q"> <b> SUM (col_name)</b> — возвращает сумму значений в данном столбце;
<li><p class="q"> <b> AVG (col_name)</b> — возвращает среднее значение данного столбца;
<li><p class="q"> <b> MIN (col_name)</b> — возвращает наименьшее значение данного столбца;
<li><p class="q"> <b> MAX (col_name)</b> — возвращает наибольшее значение данного столбца.
   </ul>
<p class="p"><b>25. Вложенные подзапросы</b>
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>Вложенные подзапросы </u></b>— это SQL-запросы, которые включают выражения SELECT, FROM и WHERE, вложенные в другой запрос.
<p class="p"><B>Пример:</B> Найдём курсы, которые преподавались осенью 2009 и весной 2010 годов:
<p class="definition def">SELECT DISTINCT course_id<br>
  FROM section<br>

  WHERE semester = ‘Fall’ AND year= 2009 AND course_id IN (<br>
    SELECT course_id<br>
    FROM section<br>
    WHERE semester = ‘Spring’ AND year= 2010); </p>


<div class="navbt">
	<div class=" btn red d">
		<a  href="10_Logging_DATABASE_changes.php" >Предыдущая 
			<div class="btn__blobs">
		      <div></div>
		      <div></div>
		      <div></div>
    		</div>
  		</a>
  	</div>
  
	<div class=" btn red d">
		<a href="12_Selecting_data_using_the_select_clause.php">Следующая
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
   <script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
    <script src="https://snipp.ru/cdn/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
    
       <script src="js/topic.js"></script> <script src="js/registration.js"></script>
    <script src="js/user.js"></script>  
    