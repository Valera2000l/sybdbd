<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/topic.css">

  <link rel="stylesheet" href="css/registration.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 <link rel="shortcut icon" href="image/icon.png" type="image/x-icon"> 

   <title>Выборка данных с использованием предложения SELECT</title>


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

<p class="title">Тема 3.2. Выборка данных с использованием предложения SELECT

<p class="p"><b>SQL SELECT</b>
<p class="p">Огромное количество программ позволяют выбирать данные для финансовых и других отчетов в считанные минуты. Одна из самых простых и к тому же удобных — SQL SELECT. При знакомстве с ней любой программист сможет без проблем рассказать о том, что SQL – это язык программирования, помогающий структурировать все необходимые запросы, а SELECT – это команда, используемая в комбинации с SQL. Безусловно, в сочетании SQL SELECT позволяют проводить все необходимые действия, изложенные на примерах данной страницы. В связи, с чем нижеизложенный материал более подробно и наглядно характеризует возможности SQL SELECT. Поэтому, установив программу, используемую SQL SELECT, вы сэкономите время своих сотрудников, а также деньги предприятия.
<p class="p">С помощью запроса <b>SQL SELECT</b> можно выполнять выборку данных из таблицы. Следующие примеры запросов <b>SQL SELECT</b> используются в таких <b>SQLСУБД</b> как <b>MySQL, Oracle, Access</b> и других.
<p class="p">Для выполнения следующих <b>SQL</b> запросов <b>SELECT</b> нам необходимо прежде всего изучить структуру таблиц.
<p class="p"><center><table>
  <thead >
    <tr ><th><b>Имя таблицы</b></th>
      <th><b>Имя поля</b></th>
       <th><b>Тип поля</b></th>
        <th><b>Примечание</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color "  rowspan="2">FAKULTET</td>
      <td>KOD_F</td>
      <td>Integer</td>
      <td>PRIMARY KEY</td>
    </tr>
    <tr>
       <td>NAZV_F</td>
      <td>Char, 30</td>
     <td></td>
   </tr>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color "rowspan="3" >SPEC</td>
        <td>KOD_S</td>
      <td>Integer</td>
     <td>PRIMARY KEY</td>
   </tr>
      <tr>
        <td>KOD_F</td>
      <td>Integer</td>
     <td></td>
   </tr>
      <tr>
         <td>NAZV_S</td>
      <td>Char, 50</td>
     <td></td>
   </tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color " rowspan="7">STUDENT</td>
        <td>KOD_STUD</td>
      <td>Integer</td>
     <td>PRIMARY KEY</td>
   </tr>
      <tr>
        <td>KOD_S</td>
      <td>Integer</td>
     <td></td>
   </tr>
      <tr>
         <td>FNAME</td>
      <td>Char, 30</td>
     <td></td>
   </tr>
      <tr>
        <td>IM</td>
      <td>Char, 15</td>
     <td></td>
   </tr>
      <tr>
        <td>OT</td>
      <td>Char, 15</td>
     <td></td>
   </tr>
      <tr>
        <td>STIP</td>
      <td>Decimal, 3</td>
     <td></td>
   </tr>
    <tr>
        <td>BALL</td>
      <td>Decimal, 3</td>
     <td></td>
   </tr>
  </tbody>
</table></center>

<p class="p"><b>SQL SELECT Пример №1</b>
<p class="p">Выбрать студентов, получающих стипендию, равную 150.
<p class="definition def">SELECT fname<br>
FROM STUDENT <br>
WHERE STIP=150;</p>
<p class="p">С помощью данного SQL запроса SELECT выбираются все значения из таблицы STUDENT, поле STIP которых строго равно 150.
<hr>
<p class="p"><b>SQL SELECT Пример №2</b>
<p class="p">Выбрать студентов, имеющих балл от 82 до 90. Студенты должны быть отсортированы впорядке убывания балла.
<p class="definition def">SELECT FAM<br>
FROM STUDENT <br>
WHERE BALL BETWEEN 81 AND 91<br>
ORDER BY BALL DESC;</p>
<p class="p">Как видно из SQL примера, чтобы выбрать студентов, которые имеют балл от 82 до 90, мы используем условие BETWEEN. Чтобы отсортировать в убывающем порядке DESC.
<hr>
<p class="p"><b>SQL SELECT Пример №3</b>
<p class="p">Выбрать студентов, фамилии которых начинаются с буквы «А».
<p class="definition def">SELECT FAM<br>
FROM STUDENT <br>
WHERE FAM LIKE “А*”;</p>
<p class="p">Для того, чтобы выбрать фамилии, начинающиеся с буквы «А», мы используем оператор SQL LIKE для поиска значений по образцу.
<hr>
<p class="p"><b>SQL SELECT Пример №4</b>
<p class="p">Подсчитать средний балл на каждом факультете.
<p class="definition def">SELECT NAZV_F As Facultet, ROUND(AVG(BALL), 2) As SrBall<br>
FROM (FAKULTET INNER JOIN SPEC ON SPEC.KOD_F=FAKULTET.KOD_F) INNER JOIN  <br>
STUDENT ON STUDENT.KOD_S=SPEC.KOD_S<br>
GROUP BY NAZV_F;</p>
<p class="p">Пример запроса SQL SELECT показывает нам использование функции SQLAVG для вычисления среднего значения, ROUND для округления значения, раздела GROUP BY для группировки столбцов.
<hr>
 <p class="p"><b>SQL SELECT Пример №5</b>
<p class="p">Упорядочить студентов по факультетам, специальностям, фамилиям.
<p class="definition def">SELECT NAZV_F, NAZV_S, FAM<br>
FROM (FAKULTET INNER JOIN SPEC ON SPEC.KOD_F=FAKULTET.KOD_F) INNER JOIN    <br>
STUDENT ON STUDENT.KOD_S=SPEC.KOD_S<br>
ORDER BY NAZV_F, NAZV_S, FAM;</p>
<hr>
  <p class="p"><b>SQL SELECT Пример №6</b>
<p class="p">Определить, кто учится на специальности, к которой относится студент «Асанов».
<p class="definition def">SELECT FAM <br>
FROM STUDENT  <br>
WHERE STUDENT.KOD_S=<br>
     (SELECT KOD_S<br>
      FROM STUDENT <br>
      WHERE FAM=’Асанов’);</p>
<p class="p">В данном SQL примере мы используем подзапрос SQL SELECT, который возвращает код специальности, на которой учится студент по фамилии Асанов.
<hr>
 <p class="p"><b>SQL SELECT Пример №7</b>
<p class="p">Показать, какие специальности встречаются в таблице STUDENT. Дубликаты исключить. Вывести в запросе названия специальностей.
<p class="definition def">SELECT DISTINCT NAZV_S <br>
FROM (FAKULTET INNER JOIN SPEC ON SPEC.KOD_F=FAKULTET.KOD_F) INNER JOIN     <br>
STUDENT ON STUDENT.KOD_S=SPEC.KOD_S;</p>
<p class="p">Здесь мы с помощью SQL ограничения DISTINCT выводим только различные значения.
<hr>

<p class="p"><b>Раздел WHERE</b>
<p class="p">Если в табличном выражении присутствует раздел <b>WHERE</b>, то следующим вычисляется он.
<p class="p">Условие, следующее за ключевым словом <b>WHERE</b>, может включать предикат условия поиска, булевские операторы <b>AND</b> (и), <b>OR</b> (или) и <b>NOT</b>(нет) и скобки, указывающие требуемый порядок вычислений.
<p class="p">Вычисление раздела <b>WHERE</b> производится по следующим правилам: Пусть R — результат вычисления раздела <b>FROM</b>. Тогда условие поиска применяется ко всем строкам R, и результатом раздела <b>WHERE</b> является таблица <b>SQL</b>, состоящая из тех строк R, для которого результатом вычисления условия поиска является <b>true</b>. Если условие выборки включает <b>подзапросы</b>, то каждый <b>подзапрос</b> вычисляется для каждого кортежа таблицы R (в стандарте используется термин <b>“effectively”</b> в том смысле, что результат должен быть таким, как если бы каждый подзапрос действительно вычислялся заново для каждого кортежа R).
<p class="p">Среди предикатов условия поиска в соответствии со стандартом могут находиться следующие предикаты: <b>предикат сравнения, предикат between, предикат in, предикат like, предикат null, предикат с квантором и предикат exists</b>.
<p class="p">При проверке условия выборки числа сравниваются алгебраически: отрицательные числа считаются меньше, чем положительные, независимо от их абсолютной величины. Строки сравниваются в соответствии с их представлением в коде <b>ANSI</b>. При сравнении двух строк, имеющих разные длины, предварительно более короткая строка дополняется справа пробелами для того, чтобы обе строки имели одинаковую длину.
<p class="p"><b>Предикат сравнения с выражениями или результатами подзапроса</b>. Условие определяется из двух выражений, разделенных одним из знаков операции отношения: =, <><b>(не равно)</b>, >, >=, < и <=.
<p class="p">Арифметические выражения левой и правой частей предиката сравнения строятся по общим правилам построения арифметических выражений и могут включать в общем случае имена столбцов таблиц из раздела <b>FROM</b> и константы. Типы данных арифметических выражений должны быть сравнимыми (например, если тип столбца a таблицы A является типом символьных строк, то предикат “a = 5” недопустим).
<p class="p">Если правый операнд операции сравнения задается подзапросом, то дополнительным ограничением является то, что мощность результата подзапроса должна быть не более единицы. Если хотя бы один из операндов операции сравнения имеет неопределенное значение, или если правый операнд является подзапросом с пустым результатом, то значение предиката сравнения равно unknown.
<p class="p"><b>Раздел ORDER BY</b>
<p class="p">Фраза <b>ORDER BY</b> используется для того, чтобы упорядочить строки, извлекаемые запросом.
<p class="p">В предложении <b>ORDER BY SQL</b> можно задавать несколько выражений. Сначала <b>сортируются</b> строки, основываясь на их значениях для первого выражения. Строки с одним и тем же значением для первого выражения затем <b>сортируются</b> по второму выражению и так далее. <b>NULL-значения</b> располагает после всех других при упорядочивании <b>в порядке возрастания</b> и перед всеми другими при сортировке <b>в убывающем порядке</b>.
<p class="p">Вместо имени столбца можно указать его позицию для сокращения записи длинного выражения.
<p class="p">Кроме того, при составлении сложных запросов, содержащих множественные операторы <b>UNION, INTERSECT, MINUS</b>, или <b>UNION ALL</b>, в предложении <b>ORDER BY</b> лучше использовать позиции, чем непосредственно сами выражения. Предложение <b>ORDER BY</b> может появляться только в последнем составляющем запросе и сортирует строки, полученные всем составным запросом в целом.
<p class="p">Предложение <b>ORDER BY</b> подчинено следующим ограничениям:
 <ul>
<li><p class="q"> Если в утверждении <b>SELECT</b> используются и оператор <b>ORDER BY</b> и оператор <b>DISTINCT</b>, то  предложение <b>ORDER BY</b> не может ссылаться на столбцы, не упоминаемые в списке выбора выбираемых столбцов.
<li><p class="q"> Предложение <b>ORDER  BY</b> не может появляться в подзапросах внутри других утверждений.
</ul>
<p class="p"><b>ORDER BY в обратном порядке</b>
<p class="p">Выбрать из EMP записи по всем продавцам, и упорядочить результаты по размерам комиссионных в обратном порядке (убывающем порядке):
<p class="definition def">SELECT *<br>
FROM emp<br>
WHERE job = ‘SALESMAN’<br>
 ORDER BY comm DESC;</p>
<p class="p"><b>ORDER BY в возрастающем порядке</b>
<p class="p">Выбрать из EMP записи по всем сотрудникам, и упорядочить результаты по размерам комиссионных в возрастающем порядке:
<p class="definition def">SELECT *<br>
 FROM emp<br>
  WHERE job = ‘SALESMAN’<br>
   ORDER BY comm ASC;</p>
<p class="p"><b>ORDER BY в возрастающем и убывающем порядке</b>
<p class="p">Выбрать из EMP записи по служащим, упорядоченные сначала по возрастанию номера отдела а затем по убыванию размера оклада:
<p class="definition def">SELECT ename, deptno, sal<br>
FROM emp <br>
ORDER BY deptno ASC, sal DESC;</p>
<p class="p"><b>Раздел GROUP BY</b>
<p class="p">Если в табличном выражении присутствует раздел <b>GROUP BY SQL</b>, то следующим выполняется <b>GROUP BY</b>.
<p class="p">Если обозначить через R таблицу, являющуюся результатом предыдущего раздела (<b>FROM</b> или <b>WHERE</b>), то результатом раздела <b>GROUP BY</b> является разбиение R на множество групп строк, состоящего из минимального числа групп таких, что для каждого столбца из списка столбцов раздела <b>GROUP BY</b> во всех строках каждой группы, включающей более одной строки, значения этого столбца равны. Для обозначения результата раздела <b>GROUP BY</b> в стандарте используется термин <b>“сгруппированная таблица”</b>.
<p class="p">Если утверждение <b>SELECT</b> содержит предложение <b>GROUP BY(SELECT GROUP BY)</b>, список выбора может содержать только следующие <b>типы выражений</b>:
 <ul>
<li><p class="q"> <b> Константы;</b>
<li><p class="q"><b> Агрегатные функции;</b>
<li><p class="q"> <b>Функции</b> USER, UID, и SYSDATE;
<li><p class="q"> <b>Выражения</b>, соответствующие перечисленным в предложении <b>GROUP BY</b>;
<li><p class="q"><b>Выражения</b>, включающие вышеперечисленные выражения.
   </ul>
<p class="p"><b>Пример 1.</b> Вычислить общий объем покупок для каждого товара:
<p class="definition def"><b>SELECT</b> stock,  <b>SUM</b>(quant)<br>
<b>FROM</b> ordsale<br> 
<b>GROUP BY</b> stock;</p>
<p class="p">Фраза <b>GROUP BY</b> не предполагает упорядочивания строк. Для упорядочивания результата этого примера по кодам товаров, следует поместить фразу <b> ORDER BY</b> stock следом за фразой <b>GROUP BY</b>.
<p class="p"><b>Пример 2.</b> Можно использовать группировки данных <b>GROUP BY</b> совместно с условием. Например, выбрать для каждого покупаемого товара его код и общий объем покупок, за исключением покупок покупателя с кодом 23:
<p class="definition def"><b>SELECT</b> stock,  <b>SUM</b>(quant)<br>
<b>FROM</b> ordsale<br>
<b>WHERE</b> customerno <> 23 <br>
<b>GROUP BY</b> stock;</p>
<p class="p">Строки, не удовлетворяющие условию <b>WHERE</b>, исключаются перед группированием данных.
<p class="p">Строки таблицы можно группировать по любой комбинации ее полей. Если поле, по значениям которого осуществляется группирование, содержит какие-либо неопределенные значения, то каждое из них порождает отдельную группу.
<p class="p">Допустим, есть задача на вычисление количества какого-либо продукта. Поставщик поставляет нам продукцию по определённой цене. Вычислим общее количество каждого из продуктов. В этом нам поможет фраза GROUP BY. Результатом задачи станет таблица, состоящая из нескольких колонок. Поставки будут группироваться по ПР. Компоновка происходит по группам, которую и инициирует GroupBy SQL. Необходимо отметить, что данная фраза предполагает применение фразы Select, она же в свою очередь определяет единственное значение для каждого выражения сформированной группы. Бывают три случая для конкретного выражения: оно принимает арифметическое значение, оно становится SQL-функцией, которая будет сводить все значения столбца к сумме или другому заданному значению, также выражение может стать константой. Строки таблицы не обязательно должны быть строго сгруппированы, они могут группироваться по любой комбинации столбцов таблицы. Необходимо учитывать, что упорядочивание запросы по ПР возможно в том случае, если будет сделан соответствующий запрос.

<p class="p"><b>Раздел HAVING</b>
<p class="p">Наконец, последним при вычислении табличного выражения используется раздел <b>HAVING</b> (если он присутствует).
<p class="p">Раздел <b>HAVING</b> может осмысленно появиться в табличном выражении только в том случае, когда в нем присутствует раздел<b> GROUP BY</b>. Условие поиска этого раздела задает условие на группу строк сгруппированной таблицы. Формально раздел <b>HAVING </b>может присутствовать и в табличном выражении, не содержащем <b>GROUP BY</b>. В этом случае полагается, что результат вычисления предыдущих разделов представляет собой сгруппированную таблицу, состоящую из одной группы без выделенных столбцов группирования.
<p class="p">Условие поиска раздела<b> HAVING </b>строится по тем же синтаксическим правилам, что и условие поиска раздела <b>WHERE</b>, и может включать те же самые предикаты. Однако имеются специальные синтаксические ограничения по части использования в условии поиска спецификаций столбцов таблиц из раздела <b>FROM</b> данного табличного выражения. Эти ограничения следуют из того, что условие поиска раздела <b>HAVING</b> задает условие на целую группу, а не на индивидуальные строки.
<p class="p">Поэтому в арифметических выражениях предикатов, входящих в условие выборки раздела <b>HAVING</b>, прямо можно использовать только спецификации столбцов, указанных в качестве столбцов группирования в разделе <b>GROUP BY</b>. Остальные столбцы можно специфицировать только внутри спецификаций агрегатных функций <b>COUNT, SUM, AVG, MIN и MAX</b>, вычисляющих в данном случае некоторое агрегатное значение для всей группы строк. Аналогично обстоит дело с подзапросами, входящими в предикаты условия выборки раздела <b>HAVING</b>: если в подзапросе используется характеристика текущей группы, то она может задаваться только путем ссылки на столбцы группирования.
<p class="p">Результатом выполнения раздела <b>HAVING</b> является сгруппированная таблица, содержащая только те группы строк, для которых результат вычисления условия поиска есть <b>TRUE</b>. В частности, если раздел <b>HAVING</b> присутствует в табличном выражении, не содержащем <b>GROUP BY</b>, то результатом его выполнения будет либо пустая таблица, либо результат выполнения предыдущих разделов табличного выражения, рассматриваемый как одна группа без столбцов группирования.
<p class="p"><b>HAVING COUNT</b>
<p class="p">Выбрать коды товаров, покупаемых более чем одним покупателем:
<p class="definition def"><b>SELECT</b> stock<br>
 <b>FROM</b> ordsale <br>
 <b>GROUP</b> BY stock<br>
<b>HAVING</b> COUNT(*) > 1;</p>
<p class="p"><b>HAVING MIN</b>
<p class="p">Получить значения минимального и максимального оклада для клерков каждого отдела, где  самое низкое жалованье составляет менее $1,000:
<p class="definition def"><b>SELECT</b> deptno, MIN(sal), MAX(sal) <br>
  <b>FROM</b> emp<br>
  <b>WHERE</b> job = ‘CLERK’ <br>
  <b>GROUP BY</b> deptno <br>
  <b>HAVING</b> MIN(sal) < 1000;</p>
<p class="p"><b>SQL Подзапросы</b>
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>Подзапрос</u></b> — форма команды <b>SELECT</b>, которая появляется внутри другого утверждения <b>SQL</b>. Подзапрос иногда называется вложенным запросом. Утверждение, содержащее подзапрос называется родительским выражением. Строки, возвращенные подзапросом, используются родительским выражением.</p> 
<p class="p">Подзапросы могут использоваться для следующих целей: 
 <ul>
<li><p class="q"> Для определения множества строк, вставляемых в целевую таблицу выражениями INSERT или <b>CREATE TABLE</b>;
<li><p class="q"> Для определения одного или более значений, назначаемых существующим строкам в утверждении UPDATE;
<li><p class="q"> Для обеспечения необходимых условий в выражениях WHERE, HAVING утверждений SELECT, UPDATE, и DELETE.
</ul>
<p class="p">Чтобы определить таблицу, обрабатываемую запросом, подзапрос располагается после оператора FROM запроса вместо имени таблицы. Можно использовать подзапросы вместо таблиц таким же образом и в утверждениях INSERT, UDPATE и DELETE. Подзапросы, используемые таким образом, могут применять переменные корреляции, но только если эти переменные определены внутри самого запроса и не содержат внешних ссылок.
<p class="p"><b>1.</b> Например, чтобы определить, кто работает в отделе Тейлора, можно сначала использовать подзапрос, чтобы определить, в каком отделе этот Тейлор работает:
<p class="definition def">SELECT ename, deptno<br>
 FROM emp<br>
  WHERE deptno =<br>
   (SELECT deptno  FROM emp WHERE ename = ‘Taylor’);</p>
<p class="p">Подзапрос выполняется один раз для всего родительского утверждения, в отличие от соотнесенного подзапроса, который выполняется для каждой строки, обрабатываемой родительским утверждением.
<p class="p">Подзапрос может и сам содержать подзапрос, уровень вложенности не ограничивается.
<p class="p"><b>2. </b>Подзапрос можно использовать для создания копий таблиц.
 <p class="p">Например, создадим копию таблицы DEPT с именем NEWDEPT:
<p class="definition def">CREATE TABLE newdept (deptno, dname, loc) AS SELECT deptno, dname, loc 
FROM dept;</p>

<p class="p"><b>SQL UNION</b>
<p class="p">Объединением двух множеств называется множество всех элементов, принадлежащих какому-либо одному или обоим исходным множествам. Результатом объединения будет множество, состоящее из всех строк, входящих в какое-либо одно или в оба первоначальных отношения. Однако, если этот результат сам по себе должен быть другим отношением, а не просто разнородной смесью строк, то два исходных отношения должны быть совместимыми по объединению, т. е. строки в обоих отношениях должны быть одной и той же формы. Что касается SQL, то две таблицы совместимы по объединению (и к ним может быть применен оператор объединения UNION) тогда и только тогда, когда:
<ul>
<li><p class="q">Они имеют одинаковое число полей (например, m);
<li><p class="q">Для всех i (i = 1, 2, …, m) i-е поле первой таблицы и i-е поле второй таблицы имеют в точности одинаковый тип данных.
</ul>
<p class="p"><b>1.</b> В качестве примера выберем коды товаров, которые имеют стоимость, превышающую 1000, либо покупаются покупателем с кодом 23 (либо то и другое):
<p class="definition def">SELECT stock<br>
 FROM goods<br>
  WHERE unitprice> 1000<br>
   UNION SELECT stock<br>
    FROM ordsale<br>
     WHERE customerno = 23;</p>
<p class="p">Из результата выборки, использующей оператор <b>UNION</b>, всегда исключаются избыточные дубликаты. Поэтому, хотя в рассматриваемом примере товар выбирается обеими из двух составляющих предложений <b>SELECT</b>, в результирующей таблице каждый товар присутствует только один раз.
<p class="p">Оператором <b>UNION</b> можно соединить любое число конструкций <b>SELECT</b>.
<p class="p">Оператор <b>ORDER BY</b> в запросе с использованием оператора <b>UNION</b> может входить только в последнее предложение <b>SELECT</b>. При указании критерия упорядочивания используйте номера полей результирующей таблицы.
<p class="p">При использовании оператора <b>UNION</b> часто оказывается полезным включение константы в результирующую таблицу.
<p class="p"><b>2.</b> Например, текстовую константу можно использовать в качестве пояснения условия выборки товаров:
<p class="definition def">SELECT stock, ‘Стоимостьтовара> 1000′<br>
 FROM goods<br>
  WHERE unitprice> 1000 <br>
  UNION SELECT stock, ‘Товар куплен покупателем 23′<br>
   FROM ordsale<br>
    WHERE customerno = 23<br>
     ORDER BY 2,1;</p>
<p class="p"><b>UNION ALL</b>
<p class="p">Оператор UNION ALL позволяет, в отличие от UNION, разрешить выборку повторяющихся значений.
<p class="definition def">SELECT name<br>
 FROM employees_Rus<br>
  UNION ALL SELECT name<br>
   FROM employees_Usa;</p>
<p class="p"><b>SQL Строки и выражения</b>
<p class="p">Предположим, нам необходимо выполнить простые числовые операции с данными для представления их в более удобном виде. SQL позволяет вносить скалярные выражения и константы в выбранные поля. Эти выражения могут дополнять или заменять поля в предложениях SELECT и могут содержать множество выбранных полей.
<p class="p"><b>1.</b> Например, можно представить комиссионные продавцов в виде процентов, а не десятичных чисел:
<p class="definition def">SELECT snum, sname, city, comm * 100<br>
 FROM Salespeople;</p>
<p class="p">Последний столбец в данном примере не имеет имени, так как является вычисляемым. Вычисляемые (выходные) столбцы – это столбцы, которые создаются с помощью запроса в тех случаях, когда в предложении SELECT используются агрегатные функции, константы или выражения, а не извлекаются непосредственно из таблицы. Поскольку имена столбцов являются атрибутами таблицы, столбцы, не переходящие из таблицы в выходные данные, не имеют имен. Почти во всех ситуациях выходные столбцы отличаются от столбцов, извлекаемых из таблицы тем, что они не поименованы.
<p class="p">Константы, а также текст, можно включать в предложение запроса SELECT. Однако, буквенные константы, в отличие от числовых, нельзя использовать в выражениях. В SELECT-предложение можно включить 1+2, но не «А»+ «В», поскольку «А» и «В» здесь просто буквы, а не переменные или символы, используемые для обозначения чего-либо отличного от них самих. Тем не менее, возможность вставить текст в выходные данные запроса вполне реальна.
<p class="p"><b>2.</b> Например, можно пометить комиссионные продавцов, выраженные в процентах, символом «процент» (%), что позволяет представить их в выходных данных в виде символов и комментариев:
<p class="definition def">SELECT snum, sname, city, ‘%’, comm * 100<br>
 FROM Salespeople;</p>
<p class="p">Результат выполнения запроса:
<p class="p"><center><table>
  <thead>
    <tr><th><b>snum</b></th>
      <th><b>sname</b></th>
       <th><b>city</b></th>
         <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">1001</td>
       <td>Peel</td>
      <td>London</td>
    <td>%</td>
    <td>12</td></tr>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">1002</td>
       <td>Monika</td>
      <td>NewYork</td>
    <td>%</td>
    <td>15</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">1004</td>
       <td>Rifkin</td>
      <td>London</td>
    <td>%</td>
    <td>11</td></tr>

  </tbody>
</table></center>
<p class="p"><b>3.</b> Можно пометить выходные данные, включив в них некоторый комментарий. Однако нужно помнить, что один и тот же комментарий будет печататься не один раз для всей таблицы, а в каждой строке выходных данных. Например, генерируются выходные данные для отчета, в котором фиксируется количество заказов на каждый день:
<p class="definition def">SELECT odate, ‘поступило’, COUNT (DISTINCT onum), ‘заказов’<br>
 FROM Orders<br>
  GROUP BY odate;</p>
<p class="p">Результат выполнения запроса:
<p class="p"><center><table>
  <thead>
    <tr><th><b>оdate</b></th>
         <th colspan="3"></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">10/03/05</td>
       <td>поступило</td>
      <td>5</td>
    <td>заказов</td>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">11/03/05</td>
       <td>поступило</td>
      <td>1</td>
    <td>заказов</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">12/03/05</td>
       <td>поступило</td>
      <td>1</td>
    <td>заказов</td>
  </tr>

  </tbody>
</table></center>
<p class="p">Выходные данные запроса также можно изменить путем объединения столбцов. Метод, применяемый для слияния выходных данных двух столбцов в единое целое, называется <b>конкатенацией</b> и обозначается символами <b>||</b> :
<p class="definition def">SELECT odate || ‘поступило’ || COUNT (DISTINCT onum) || ‘заказов’<br>
 FROM Orders<br>
  GROUP BY odate;</p>
<p class="p"><b>4.</b> Любому столбцу при выдаче оператора SELECT можно присвоить любое, более информативное имя, не нарушая правил по длине, установленных в описании типа данных столбца. Такое имя называется псевдонимом. Псевдонимы указываются двумя способами: после описания столбца через пробел или при помощи ключевого слова AS, отмечающего псевдоним более четко:
<p class="definition def">SELECT snum, sname, city, comm * 100 AS commis<br>
 FROM Salespeople;</p>
<p class="p"><b> SQL INNER JOIN</b>
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>INNER JOIN</u></b>  - возвращает строки, когда есть хотя бы одно совпадение в обеих таблицах.</p>
<p class="p"><b>Синтаксис SQL INNER JOIN:</b>
 <p class="definition def">SELECT column_name(s)<br>
FROM table_name1<br>
INNER JOIN table_name2<br>
ON table_name1.column_name = table_name2.column_name</p>
<p class="p"><b>Замечание:</b> INNER JOIN это тоже что и JOIN.
<p class="p"><b>Пример SQL INNER JOIN</b>
<p class="p">Есть таблица "Persons":
<p class="p"><center><table>
  <thead>
    <tr><th><b>P_Id</b></th>
        <th><b>LastName</b></th>
        <th><b>FirstName</b></th>
        <th><b>Address</b></th>
        <th><b>City</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">1</td>
       <td>Hansen</td>
      <td>Ola</td>
    <td>Timoteivn 10</td>
    <td>Sandnes</td>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">2</td>
       <td>Svendson</td>
      <td>Tove</td>
    <td>Borgvn 23</td>
  <td>Sandnes</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">3</td>
       <td>Pettersen</td>
      <td>Kari</td>
    <td>Storgt 20</td>
    <td>Stavanger</td>
  </tr>

  </tbody>
</table></center>
<p class="p">Есть таблица "Orders":
  <p class="p"><center><table>
  <thead>
    <tr><th><b>O_Id</b></th>
        <th><b>OrderNo</b></th>
        <th><b>P_Id</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">1</td>
       <td>77895</td>
      <td>3</td>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">2</td>
        <td>44678</td>
      <td>3</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">3</td>
         <td>22456</td>
      <td>1</td>
  </tr>
<tr><td class="sql-code sql-code-line sql-code-line--blue-color ">4</td>
         <td>24562</td>
      <td>1</td>
  </tr>
<tr><td class="sql-code sql-code-line sql-code-line--blue-color ">5</td>
         <td>34764</td>
      <td>15</td>
  </tr>

  </tbody>
</table></center>
<p class="p">Теперь мы хотим выбрать все лица имеющих какие-либо заказы.
<p class="p">Для этого используем такой запрос:
<p class="definition def">SELECT Persons.LastName, Persons.FirstName, Orders.OrderNo<br>
FROM Persons<br>
INNER JOIN Orders<br>
ON Persons.P_Id=Orders.P_Id<br>
ORDER BY Persons.LastName</p>
<p class="p">Результат запроса:
 <p class="p"><center><table>
  <thead>
    <tr><th><b>LastName</b></th>
        <th><b>FirstName</b></th>
        <th><b>OrderNo</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Hansen</td>
       <td>Ola</td>
      <td>22456</td>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Hansen</td>
        <td>Ola</td>
      <td>24562</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Pettersen</td>
         <td>Kari</td>
      <td>77895</td>
  </tr>
<tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Pettersen</td>
         <td>Kari</td>
      <td>44678</td>
  </tr>


  </tbody>
</table></center>

<p class="p"><b> SQL LEFT JOIN</b>
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>LEFT JOIN</u></b> - возвращает строки из левой таблицы(table_name1), даже если их нет в правой таблице (table_name2).</p>
<p class="p"><b>Синтаксис SQL LEFT JOIN JOIN:</b>
 <p class="definition def">SELECT column_name(s)<br>
FROM table_name1<br>
 LEFT JOIN table_name2<br>
ON table_name1.column_name = table_name2.column_name</p>
<p class="p"><b>Замечание:</b>В некоторых базах данных LEFT JOIN имеет имя LEFT OUTER JOIN.
<p class="p"><b>Пример SQL  LEFT JOIN</b>
<p class="p">Есть таблица "Persons":
<p class="p"><center><table>
  <thead>
    <tr><th><b>P_Id</b></th>
        <th><b>LastName</b></th>
        <th><b>FirstName</b></th>
        <th><b>Address</b></th>
        <th><b>City</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">1</td>
       <td>Hansen</td>
      <td>Ola</td>
    <td>Timoteivn 10</td>
    <td>Sandnes</td>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">2</td>
       <td>Svendson</td>
      <td>Tove</td>
    <td>Borgvn 23</td>
  <td>Sandnes</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">3</td>
       <td>Pettersen</td>
      <td>Kari</td>
    <td>Storgt 20</td>
    <td>Stavanger</td>
  </tr>

  </tbody>
</table></center>
<p class="p">Есть таблица "Orders":
  <p class="p"><center><table>
  <thead>
    <tr><th><b>O_Id</b></th>
        <th><b>OrderNo</b></th>
        <th><b>P_Id</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">1</td>
       <td>77895</td>
      <td>3</td>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">2</td>
        <td>44678</td>
      <td>3</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">3</td>
         <td>22456</td>
      <td>1</td>
  </tr>
<tr><td class="sql-code sql-code-line sql-code-line--blue-color ">4</td>
         <td>24562</td>
      <td>1</td>
  </tr>
<tr><td class="sql-code sql-code-line sql-code-line--blue-color ">5</td>
         <td>34764</td>
      <td>15</td>
  </tr>

  </tbody>
</table></center>
<p class="p">Теперь мы хотим получить список всех лиц и их заказов из таблицы выше.
<p class="p">Для этого используем такой запрос:
<p class="definition def">SELECT Persons.LastName, Persons.FirstName, Orders.OrderNo<br>
FROM Persons<br>
LEFT JOIN Orders<br>
ON Persons.P_Id=Orders.P_Id<br>
ORDER BY Persons.LastName</p>
<p class="p">Результат запроса:
 <p class="p"><center><table>
  <thead>
    <tr><th><b>LastName</b></th>
        <th><b>FirstName</b></th>
        <th><b>OrderNo</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Hansen</td>
       <td>Ola</td>
      <td>22456</td>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Hansen</td>
        <td>Ola</td>
      <td>24562</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Pettersen</td>
         <td>Kari</td>
      <td>77895</td>
  </tr>
<tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Pettersen</td>
         <td>Kari</td>
      <td>44678</td>
  </tr>
<tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Svendson</td>
         <td>Tove</td>
      <td></td>
  </tr>

  </tbody>
</table></center>
<p class="p"><b> SQL RIGHT JOIN  JOIN</b>
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>RIGHT JOIN </u></b> - возвращает строки из правой таблицы(table_name2), даже если их нет левой таблице (table_name1).</p>
<p class="p"><b>Синтаксис SQL RIGHT JOIN JOIN:</b>
 <p class="definition def">SELECT column_name(s)<br>
FROM table_name1<br>
 RIGHT JOIN table_name2<br>
ON table_name1.column_name = table_name2.column_name</p>
<p class="p"><b>Замечание:</b>В некоторых базах данных RIGHT JOIN имеет имя RIGHT OUTER JOIN.
<p class="p"><b>Пример SQL  RIGHT JOIN</b>
<p class="p">Есть таблица "Persons":
<p class="p"><center><table>
  <thead>
    <tr><th><b>P_Id</b></th>
        <th><b>LastName</b></th>
        <th><b>FirstName</b></th>
        <th><b>Address</b></th>
        <th><b>City</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">1</td>
       <td>Hansen</td>
      <td>Ola</td>
    <td>Timoteivn 10</td>
    <td>Sandnes</td>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">2</td>
       <td>Svendson</td>
      <td>Tove</td>
    <td>Borgvn 23</td>
  <td>Sandnes</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">3</td>
       <td>Pettersen</td>
      <td>Kari</td>
    <td>Storgt 20</td>
    <td>Stavanger</td>
  </tr>

  </tbody>
</table></center>
<p class="p">Есть таблица "Orders":
  <p class="p"><center><table>
  <thead>
    <tr><th><b>O_Id</b></th>
        <th><b>OrderNo</b></th>
        <th><b>P_Id</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">1</td>
       <td>77895</td>
      <td>3</td>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">2</td>
        <td>44678</td>
      <td>3</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">3</td>
         <td>22456</td>
      <td>1</td>
  </tr>
<tr><td class="sql-code sql-code-line sql-code-line--blue-color ">4</td>
         <td>24562</td>
      <td>1</td>
  </tr>
<tr><td class="sql-code sql-code-line sql-code-line--blue-color ">5</td>
         <td>34764</td>
      <td>15</td>
  </tr>

  </tbody>
</table></center>
<p class="p">Теперь мы хотим получить список всех лиц и их заказов из таблицы выше.
<p class="p">Для этого используем такой запрос:
<p class="definition def">SELECT Persons.LastName, Persons.FirstName, Orders.OrderNo<br>
FROM Persons<br>
RIGHT JOIN Orders<br>
ON Persons.P_Id=Orders.P_Id<br>
ORDER BY Persons.LastName</p>
<p class="p">Результат запроса:
 <p class="p"><center><table>
  <thead>
    <tr><th><b>LastName</b></th>
        <th><b>FirstName</b></th>
        <th><b>OrderNo</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Hansen</td>
       <td>Ola</td>
      <td>22456</td>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Hansen</td>
        <td>Ola</td>
      <td>24562</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Pettersen</td>
         <td>Kari</td>
      <td>77895</td>
  </tr>
<tr><td class="sql-code sql-code-line sql-code-line--blue-color ">Pettersen</td>
         <td>Kari</td>
      <td>44678</td>
  </tr>
<tr><td class="sql-code sql-code-line sql-code-line--blue-color "></td>
         <td></td>
      <td>34764</td>
  </tr>

  </tbody>
</table></center>
<p class="p">
  <p class="definition ">
<iframe src="ind2.php" width="100%" height="80%" frameborder
="0"></iframe></p>


<div class="navbt">
	<div class=" btn red d">
		<a  href="11_Features_and_key_features_of_the_SQL_language.php" >Предыдущая 
			<div class="btn__blobs">
		      <div></div>
		      <div></div>
		      <div></div>
    		</div>
  		</a>
  	</div>
  	
	<div class=" btn red d">
		<a href="13_Nested_subqueries.php">Следующая
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