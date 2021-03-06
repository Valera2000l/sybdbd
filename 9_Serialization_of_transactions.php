<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/topic.css">

 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 <link rel="shortcut icon" href="image/icon.png" type="image/x-icon"> 

   <title>Сериализация транзакций</title>


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
  <p class="p" ><b>РАЗДЕЛ 2 ВНУТРЕННЯЯ ОРГАНИЗАЦИЯ РЕЛЯЦИОННЫХ СУБД</b>

<p class="title">Тема 2.3 Сериализация транзакций


<p class="p">Понятно, что для того, чтобы добиться изолированности транзакций, в СУБД должны использоваться какие-либо методы регулирования совместного выполнения транзакций.
<p class="p">План (способ) выполнения набора транзакций называется сериальным, если результат совместного выполнения транзакций эквивалентен результату некоторого последовательного выполнения этих же транзакций.

<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>Сериализация транзакций</u></b> - это механизм их выполнения по некоторому сериальному плану. Обеспечение такого механизма является основной функцией компонента СУБД, ответственного за управление транзакциями. Система, в которой поддерживается сериализация транзакций обеспечивает реальную изолированность пользователей.</p>

<p class="p">Основная реализационная проблема состоит в выборе метода сериализации набора транзакций, который не слишком ограничивал бы их параллельность. Приходящим на ум тривиальным решением является действительно последовательное выполнение транзакций. Но существуют ситуации, в которых можно выполнять операторы разных транзакций в любом порядке с сохранением сериальности. Примерами могут служить только читающие транзакции, а также транзакции, не конфликтующие по объектам базы данных.

<p class="p">Между транзакциями могут существовать следующие виды конфликтов:


<ul>
  <li> <p class="q"><b> W-W</b> - транзакция 2 пытается изменять объект, измененный не закончившейся транзакцией 1;
<li> <p class="q"><b>R-W</b> - транзакция 2 пытается изменять объект, прочитанный не закончившейся транзакцией 1;
  <li> <p class="q"><b>W-R</b> - транзакция 2 пытается читать объект, измененный не закончившейся транзакцией 1.
  </ul>
<p class="p">Практические методы сериализации транзакций основывается на учете этих конфликтов.

<p class="p"><b>Методы сериализации транзакций</b>

<p class="p">Существуют два базовых подхода к сериализации транзакций - <b>основанный на синхронизационных захватах объектов базы данных</b> и <b>на использовании временных меток</b>. Суть обоих подходов состоит в обнаружении конфликтов транзакций и их устранении. Ниже мы рассмотрим эти подходы сравнительно подробно.

<p class="p">Предварительно заметим, что для каждого из подходов имеются две разновидности - пессимистическая и оптимистическая. При применении <i>пессимистических</i> методов, ориентированных на ситуации, когда конфликты возникают часто, конфликты распознаются и разрешаются немедленно при их возникновении. <i>Оптимистические</i> методы основываются на том, что результаты всех операций модификации базы данных сохраняются в рабочей памяти транзакций. Реальная модификация базы данных производится только на стадии фиксации транзакции. Тогда же проверяется, не возникают ли конфликты с другими транзакциями.

<p class="p">Далее мы ограничимся рассмотрением более распространенных пессимистических разновидностей методов сериализации транзакций. Пессимистические методы сравнительно просто трансформируются в свои оптимистические варианты.
<p class="p"><b>Синхронизационные захваты</b>

<p class="p">Наиболее распространенным в централизованных СУБД (включающих системы, основанные на архитектуре "клиент-сервер") является подход, основанный на соблюдении двухфазного протокола синхронизационных захватов объектов БД. В общих чертах протокол состоит в том, что перед выполнением любой операции в транзакции T над объектом базы данных r от имени транзакции T запрашивается синхронизационный захват объекта r в соответствующем режиме (в зависимости от вида операции).

<p class="p">Основными режимами синхронизационных захватов являются:

<ul>
  <li> <p class="q"><b>совместный режим - S</b> (Shared), означающий разделяемый захват объекта и требуемый для выполнения операции чтения объекта;
  <li> <p class="q"><b>монопольный режим - X</b> (eXclusive), означающий монопольный захват объекта и требуемый для выполнения операций занесения, удаления и модификации.
</ul>
<p class="p">Захваты объектов несколькими транзакциями по чтению совместимы, т.е. нескольким транзакциям допускается читать один и тот же объект, захват объекта одной транзакцией по чтению не совместим с захватом другой транзакцией того же объекта по записи, и захваты одного объекта разными транзакциями по записи не совместимы. Правила совместимости захватов одного объекта разными транзакциями изображены на следующей таблице:
<p class="p"><center><table>
  <thead>
    <tr><th><b></b></th>
      <th><b>X</b></th>
      <th><b>S</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color "><b>-</b></td>
      <td>да</td>
     <td>да</td></tr>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color "><b>X</b></td>
      <td>нет</td>
    <td>нет</td></tr>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color "><b>S</b></td>
      <td>нет</td>

      <td>да</td></tr>
  </tbody>
</table></center>

<p class="p">В первом столбце приведены возможные состояния объекта с точки зрения синхронизационных захватов. При этом "-" соответствует состоянию объекта, для которого не установлен никакой захват. Транзакция, запросившая синхронизационный захват объекта БД, уже захваченный другой транзакцией в несовместимом режиме, блокируется до тех пор, пока захват с этого объекта не будет снят.
<p class="p">Заметим, что слово "нет" в нашей таблице соответствует описанным ранее возможным случаям конфликтов транзакций по доступу к объектам базы данных (WW, RW, WR). Совместимость S-захватов соответствует тому, что конфликт RR не существует.
<p class="p">Для обеспечения сериализации транзакций (третьего уровня изолированности) синхронизационные захваты объектов, произведенные по инициативе транзакции, можно снимать только при ее завершении. Это требование порождает двухфазный протокол синхронизационных захватов - 2PL. В соответствии с этим протоколом выполнение транзакции разбивается на две фазы:
<ul>
  <li> <p class="q"><b>первая фаза</b> транзакции - накопление захватов;
  <li> <p class="q"><b>вторая фаза</b> (фиксация или откат) - освобождение захватов.
  </UL>
<p class="p">Достаточно легко убедиться, что при соблюдении двухфазного протокола синхронизационных захватов действительно обеспечивается сериализация транзакций на третьем уровне изолированности. Основная проблема состоит в том, что следует считать объектом для синхронизационного захвата?
<p class="p">В контексте реляционных баз данных возможны следующие альтернативы:
 <ul>
  <li> <p class="q"><b>файл</b> - физический (с точки зрения базы данных) объект, область хранения нескольких отношений и, возможно, индексов;
 <li> <p class="q"><b>отношение</b> - логический объект, соответствующий множеству кортежей данного отношения;
 <li> <p class="q"><b>страница данных</b> - физический объект, хранящий кортежи одного или нескольких отношений, индексную или служебную информацию;
 <li> <p class="q"><b>кортеж</b> - элементарный физический объект базы данных.
 </ul>
<p class="p">На самом деле, когда мы говорим про операции над объектами базы данных, то любая операция над кортежем, фактически, является и операцией над страницей, в которой этот кортеж хранится, и над соответствующим отношением, и над файлом, содержащем отношение. Поэтому действительно имеется выбор уровня объекта захвата.
<p class="p">Понятно, что чем крупнее объект синхронизационного захвата (неважно, какой природы этот объект - логический или физический), тем меньше синхронизационных захватов будет поддерживаться в системе, и на это, соответственно, будут тратиться меньшие накладные расходы. Более того, если выбрать в качестве уровня объектов для захватов файл или отношение, то будет решена даже проблема фантомов (если это не ясно сразу, посмотрите еще раз на формулировку проблемы фантомов и определение двухфазного протокола захватов).
<p class="p">Но вся беда в том, что при использовании для захватов крупных объектов возрастает вероятность конфликтов транзакций и тем самым уменьшается допускаемая степень их параллельного выполнения. Фактически, при укрупнении объекта синхронизационного захвата мы умышленно огрубляем ситуацию и видим конфликты в тех ситуациях, когда на самом деле конфликтов нет.
<p class="p">Разработчики многих систем начинали с использования страничных захватов, полагая это некоторым компромиссом между стремлениями сократить накладные расходы и сохранить достаточно высокий уровень параллельности транзакций. Но это не очень хороший выбор. Мы не будем останавливаться на деталях, но заметим, что использование страничных захватов в двухфазном протоколе иногда вызывает очень неприятные синхронизационные проблемы, усложняющие организацию СУБД. В большинстве современных систем используются покортежные синхронизационные захваты.
<p class="p">Но при этом возникает очередной вопрос. Если единицей захвата является кортеж, то какие синхронизационные захваты потребуются при выполнении таких операций как уничтожение отношения? Было бы довольно нелепо перед выполнением такой операции потребовать захвата всех существующих кортежей отношения. Кроме того, это не предотвратило бы возможности параллельной вставки в другой транзакции нового кортежа в уничтожаемое отношение.
<p class="p"><b>Гранулированные синхронизационные захваты</b>
<p class="p">Подобные рассуждения привели к разработки аппарата гранулированных синхронизационных захватов. При применении этого подхода синхронизационные захваты могут запрашиваться по отношению к объектам разного уровня: файлам, отношениям и кортежам. Требуемый уровень объекта определяется тем, какая операция выполняется (например, для выполнения операции уничтожения отношения объектом синхронизационного захвата должно быть все отношение, а для выполнения операции удаления кортежа - этот кортеж). Объект любого уровня может быть захвачен в режиме S или X.
<p class="p">Теперь наиболее важное отличие, на котором, собственно, держится соответствие захватов разного уровня. Вводится специальные протокол гранулированных захватов и новые типы захватов: перед захватом объекта в режиме S или X соответствующий объект более верхнего уровня должен быть захвачен в режиме IS, IX или SIX. Что же из себя представляют эти режимы захватов?
<p class="p"><b>IS</b> (Intented for Shared lock) по отношению к некоторому составному объекту O означает намерение захватить некоторый входящий в O объект в совместном режиме. Например, при намерении читать кортежи из отношения R это отношение должно быть захвачено в режиме IS (а до этого в таком же режиме должен быть захвачен файл).
<p class="p"><b>IX</b> (Intented for eXclusive lock) по отношению к некоторому составному объекту O означает намерение захватить некоторый входящий в O объект в монопольном режиме. Например, при намерении удалять кортежи из отношения R это отношение должно быть захвачено в режиме IX (а до этого в таком же режиме должен быть захвачен файл).
<p class="p"><b>SIX</b> (Shared, Intented for eXclusive lock) по отношению к некоторому составному объекту O означает совместный захват всего этого объекта с намерением впоследствии захватывать какие-либо входящие в него объекты в монопольном режиме. Например, если выполняется длинная операция просмотра отношения с возможностью удаления некоторых просматриваемых кортежей, то экономичнее всего захватить это отношение в режиме SIX (а до этого захватить файл в режиме IS).
<p class="p">Довольно трудно описать словами все возможные ситуации. Мы ограничимся приведением полной таблицы совместимости захватов, анализируя которую можно выявить все случаи:
<p class="p"><center><table>
  <thead>
    <tr><th><b></b></th>
      <th><b>X</b></th>
      <th><b>S</b></th>
      <th><b>IX</b></th>
      <th><b>IS</b></th>
      <th><b>SIX</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color "><b>-</b></td>
      <td>да</td>
     <td>да</td>
     <td>да</td>
     <td>да</td>
     <td>да</td>
   </tr>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color "><b>X</b></td>
      <td>нет</td>
    <td>нет</td>
  <td>нет</td>
<td>нет</td>
<td>нет</td></tr>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color "><b>S</b></td>
      <td>нет</td>
      <td>да</td>
      <td>нет</td>
      <td>да</td>
      <td>нет</td>
      </tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color "><b>IX</b></td>
      <td>нет</td>
      <td>нет</td>
      <td>да</td>
      <td>да</td>
      <td>нет</td>
      </tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color "><b>IS</b></td>
      <td>нет</td>
      <td>да</td>
      <td>да</td>
      <td>да</td>
      <td>да</td>
      </tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color "><b>SIX</b></td>
      <td>нет</td>
      <td>нет</td>
      <td>нет</td>
      <td>да</td>
      <td>нет</td>
      </tr>
  </tbody>
</table></center>
<p class="p"><b>Предикатные синхронизационные захваты</b>
<p class="p">Несмотря на привлекательность метода гранулированных синхронизационных захватов, следует отметить что он не решает проблему фантомов (если, конечно, не ограничиться использованием захватов отношений в режимах S и X). Давно известно, что для решения этой проблемы необходимо перейти от захватов индивидуальных объектов базы данных, к захвату условий (предикатов), которым удовлетворяют эти объекты. Проблема фантомов не возникает при использовании для синхронизации уровня отношений именно потому, что отношение как логический объект представляет собой неявное условие для входящих в него кортежей. <b>Захват отношения</b> - это простой и частный случай предикатного захвата.
<p class="p">Поскольку любая операция над реляционной базой данных задается некоторым условием (т.е. в ней указывается не конкретный набор объектов базы данных, над которыми нужно выполнить операцию, а условие, которому должны удовлетворять объекты этого набора), идеальным выбором было бы требовать синхронизационный захват в режиме S или X именно этого условия. Но если посмотреть на общий вид условий, допускаемых, например, в языке SQL, то становится абсолютно непонятно, как определить совместимость двух предикатных захватов. Ясно, что без этого использовать предикатные захваты для синхронизации транзакций невозможно, а в общей форме проблема неразрешима.
<p class="p">К счастью, эта проблема сравнительно легко решается для случая простых условий. Будем называть простым условием конъюнкцию простых предикатов, имеющих вид
<p class="p">имя-атрибута { = > < } значение
<p class="p">В типичных СУБД, поддерживающих двухуровневую организацию (языковой уровень и уровень управления внешней памяти), в интерфейсе подсистем управления памятью (которая обычно заведует и сериализацией транзакций) допускаются только простые условия. Подсистема языкового уровня производит компиляцию исходного оператора со сложным условием в последовательность обращений к ядру СУБД, в каждом из которых содержатся только простые условия. Следовательно, в случае типовой организации реляционной СУБД простые условия можно использовать как основу предикатных захватов.
<p class="p">Для простых условий совместимость предикатных захватов легко определяется на основе следующей геометрической интерпретации. Пусть R отношение с атрибутами a1, a2, ..., an, а m1, m2, ..., mn - множества допустимых значений a1, a2, ..., an соответственно (все эти множества - конечные). Тогда можно сопоставить R конечное n-мерное пространство возможных значений кортежей R. Любое простое условие "вырезает" m-мерный прямоугольник в этом пространстве (m <= n).
<p class="p">Тогда S-X, X-S, X-X предикатные захваты от разных транзакций совместимы, если соответствующие прямоугольники не пересекаются.
<p class="p">Это иллюстрируется следующим примером, показывающим, что в каких бы режимах не требовала транзакция 1 захвата условия (1<=a<=4) & (b=5), а транзакция 2 - условия (1<=a<=5) & (1<=b<=3), эти захваты всегда совместимы.
<p class="p">Пример: (n = 2)

 <p class="p"><center><img src="lectures/15.png" width="224" height="230" class="top_img" /></center>
<p class="p">Заметим, что предикатные захваты простых условий описываются таблицами, немногим отличающимися от таблиц традиционных синхронизаторов.
<p class="p"><b>Тупики, распознавание и разрушение</b>
<p class="p">Одним из наиболее чувствительных недостатков метода сериализации транзакций на основе синхронизационных захватов является возможность возникновение тупиков (deadlocks) между транзакциями. Тупики возможны при применении любого из рассмотренных нами вариантов.
<p class="p">Вот простой пример возникновения тупика между транзакциями T1 и T2:
<ul>
  <li> <p class="q">транзакции T1 и T2 установили монопольные захваты объектов r1 и r2 соответственно;
  <li> <p class="q">после этого T1 требуется совместный захват r2, а T2 - совместный захват r1;
  <li> <p class="q">ни одна из транзакций не может продолжаться, следовательно, монопольные захваты не будут сняты, а совместные - не будут удовлетворены.
  </ul>
<p class="p">Поскольку тупики возможны, и никакого естественного выхода из тупиковой ситуации не существует, то эти ситуации необходимо обнаруживать и искусственно устранять.
<p class="p">Основой обнаружения тупиковых ситуаций является построение (или постоянное поддержание) графа ожидания транзакций. <b>Граф ожидания транзакций</b> - это ориентированный двудольный граф, в котором существует два типа вершин - вершины, соответствующие транзакциям, и вершины, соответствующие объектам захвата. В этом графе существует дуга, ведущая из вершины-транзакции к вершине-объекту, если для этой транзакции существует удовлетворенный захват объекта. В графе существует дуга из вершины-объекта к вершине-транзакции, если транзакция ожидает удовлетворения захвата объекта.
<p class="p">Легко показать, что в системе существует ситуация тупика, если в графе ожидания транзакций имеется хотя бы один цикл.
<p class="p">Для распознавание тупика периодически производится построение графа ожидания транзакций (как уже отмечалось, иногда граф ожидания поддерживается постоянно), и в этом графе ищутся циклы. Традиционной техникой (для которой существует множество разновидностей) нахождения циклов в ориентированном графе является редукция графа.
<p class="p">Не вдаваясь в детали, редукция состоит в том, что прежде всего из графа ожидания удаляются все дуги, исходящие из вершин-транзакций, в которые не входят дуги из вершин-объектов. (Это как бы соответствует той ситуации, что транзакции, не ожидающие удовлетворения захватов, успешно завершились и освободили захваты). Для тех вершин-объектов, для которых не осталось входящих дуг, но существуют исходящие, ориентация исходящих дуг изменяется на противоположную (это моделирует удовлетворение захватов). После этого снова срабатывает первый шаг и так до тех пор, пока на первом шаге не прекратится удаление дуг. Если в графе остались дуги, то они обязательно образуют цикл.
<p class="p">Предположим, что нам удалось найти цикл в графе ожидания транзакций. Что делать теперь? Нужно каким-то образом обеспечить возможность продолжения работы хотя бы для части транзакций, попавших в тупик. Разрушение тупика начинается с выбора в цикле транзакций так называемой транзакции-жертвы, т.е. транзакции, которой решено пожертвовать, чтобы обеспечить возможность продолжения работы других транзакций.
<p class="p">Грубо говоря, критерием выбора является стоимость транзакции; жертвой выбирается самая дешевая транзакция. Стоимость транзакции определяется на основе многофакторная оценка, в которую с разными весами входят время выполнения, число накопленных захватов, приоритет.
<p class="p">После выбора транзакции-жертвы выполняется откат этой транзакции, который может носить полный или частичный характер. При этом, естественно, освобождаются захваты и может быть продолжено выполнение других транзакций.
<p class="p">Естественно, такое насильственное устранение тупиковых ситуаций является нарушением принципа изолированности пользователей, которого невозможно избежать.
<p class="p">Заметим, что в централизованных системах стоимость построения графа ожидания сравнительно невелика, но она становится слишком большой в по-настоящему распределенных СУБД, в которых транзакции могут выполняться в разных узлах сети. Поэтому в таких системах обычно используются другие методы сериализации транзакций.
<p class="p">Еще одно замечание. Чтобы минимизировать число конфликтов между транзакциями, в некоторых СУБД (например, в Oracle) используется следующее развитие подхода. Монопольный захват объекта блокирует только изменяющие транзакции. После выполнении операции модификации предыдущая версия объекта остается доступной для чтения в других транзакциях. Кратковременная блокировка чтения требуется только на период фиксации изменяющей транзакции, когда обновленные объекты становятся текущими.

<div class="navbt">
	<div class=" btn red d">
		<a  href="8_Transaction_management.php" >Предыдущая 
			<div class="btn__blobs">
		      <div></div>
		      <div></div>
		      <div></div>
    		</div>
  		</a>
  	</div>
  	
	<div class=" btn red d">
		<a href="10_Logging_DATABASE_changes.php">Следующая
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
    <script src="js/registration.js"></script>
    <script src="js/user.js"></script>  
    <script src="js/topic.js"></script>