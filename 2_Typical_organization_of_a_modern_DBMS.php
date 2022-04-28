<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/topic.css">

  <link rel="stylesheet" href="css/registration.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 <link rel="shortcut icon" href="image/icon.png" type="image/x-icon"> 

   <title>Типовая организация современной СУБД</title>


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
  <p class="p" ><b>РАЗДЕЛ 1. ОСНОВНЫЕ КОНЦЕПЦИИ ОРГАНИЗАЦИИ ДАННЫХ И РЕЛЯЦИОННАЯ МОДЕЛЬ ДАННЫХ</b>
  <p class="title">Тема 1.1. Типовая организация современной СУБД</p>
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>База данных (БД)</u></b> – это систематизированное хранилище информации о конкретных объектах некой предметной области.</p>
<p class="definition"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info" class="svg-inline--fa fa-info fa-w-6 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path fill="currentColor" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20zM96 0C56.235 0 24 32.235 24 72s32.235 72 72 72 72-32.235 72-72S135.764 0 96 0z"></path></svg><b><u>Система управления базами данных (СУБД)</u></b> – это комплекс языковых и программных средств, предназначенных для создания, ведения и совместного использования базы данных многими пользователями.</p>

<p class="p"><b>Функции СУБД</b>
<p class="p"> Традиционных возможностей файловых систем оказывается недостаточно для построения даже простых <a href="glossary.php#Information_system" class="gl" title="Узнать значение">информационных систем</a>. Выявлено несколько потребностей, которые не покрываются возможностями систем управления файлами: поддержание логически согласованного набора файлов; обеспечение языка манипулирования данными; восстановление информации после разного рода сбоев; реально параллельная работа нескольких пользователей. Можно считать, что если прикладная информационная система опирается на некоторую систему управления данными, обладающую этими свойствами, то эта система управления данными является <i>системой управления базами данных (СУБД).</i>
	<p class="p">К числу функций СУБД принято относить следующие:
<p class="q"> <b> 1. Непосредственное управление данными во внешней памяти</b>
	<p class="p">Эта функция включает обеспечение необходимых структур внешней памяти как для хранения данных, непосредственно входящих в БД, так и для служебных целей, например, для убыстрения доступа к данным в некоторых случаях (обычно для этого используются индексы). В некоторых реализациях СУБД активно используются возможности существующих файловых систем, в других работа производится вплоть до уровня устройств внешней памяти. Но подчеркнем, что в развитых СУБД пользователи в любом случае не обязаны знать, использует ли СУБД файловую систему, и если использует, то, как организованы файлы. В частности, СУБД поддерживает собственную систему именования объектов БД.
<p class="q"> <b> 2. Управление буферами оперативной памяти</b>
	<p class="p">СУБД обычно работают с БД значительного размера; по крайней мере, этот размер обычно существенно больше доступного объема оперативной памяти. Понятно, что если при обращении к любому элементу данных будет производиться обмен с внешней памятью, то вся система будет работать со скоростью устройства внешней памяти. Практически единственным способом реального увеличения этой скорости является буферизация данных в оперативной памяти. При этом, даже если операционная система производит общесистемную буферизацию (как в случае ОС UNIX), этого недостаточно для целей СУБД, которая располагает гораздо большей информацией о полезности буферизации той или иной части БД. Поэтому в развитых СУБД поддерживается собственный набор буферов оперативной памяти с собственной дисциплиной замены буферов.
	<p class="p">	Заметим, что существует отдельное направление СУБД, которое ориентировано на постоянное присутствие в оперативной памяти всей БД. Это направление основывается на предположении, что в будущем объем оперативной памяти компьютеров будет настолько велик, что позволит не беспокоиться о буферизации. Пока эти работы находятся в стадии исследований.
<p class="q">  <b>3.	Управление транзакциями</b>
	<p class="p">Транзакция - это последовательность операций над БД, рассматриваемых СУБД как единое целое. Либо транзакция успешно выполняется, и СУБД фиксирует (COMMIT) изменения БД, произведенные этой транзакцией, во внешней памяти, либо ни одно из этих изменений никак не отражается на состоянии БД. Понятие транзакции необходимо для поддержания логической целостности БД. Таким образом, поддержание механизма транзакций является обязательным условием даже однопользовательских СУБД (если, конечно, такая система заслуживает названия СУБД). Но понятие транзакции гораздо более важно в многопользовательских СУБД.
	<p class="p">	То свойство, что каждая транзакция начинается при целостном состоянии БД и оставляет это состояние целостным после своего завершения, делает очень удобным использование понятия транзакции как единицы активности пользователя по отношению к БД. При соответствующем управлении параллельно выполняющимися транзакциями со стороны СУБД каждый из пользователей может в принципе ощущать себя единственным пользователем СУБД (на самом деле, это несколько идеализированное представление, поскольку в некоторых случаях пользователи многопользовательских СУБД могут ощутить присутствие своих коллег).
	<p class="p">	С управлением транзакциями в многопользовательской СУБД связаны важные понятия сериализации транзакций и сериального плана выполнения смеси транзакций. Под сериализаций параллельно выполняющихся транзакций понимается такой порядок планирования их работы, при котором суммарный эффект смеси транзакций эквивалентен эффекту их некоторого последовательного выполнения. Сериальный план выполнения смеси транзакций - это такой план, который приводит к сериализации транзакций. Понятно, что если удается добиться действительно сериального выполнения смеси транзакций, то для каждого пользователя, по инициативе которого образована транзакция, присутствие других транзакций будет незаметно (если не считать некоторого замедления работы по сравнению с однопользовательским режимом).
	<p class="p">	Существует несколько базовых алгоритмов сериализации транзакций. В централизованных СУБД наиболее распространены алгоритмы, основанные на синхронизационных захватах объектов БД. При использовании любого алгоритма сериализации возможны ситуации конфликтов между двумя или более транзакциями по доступу к объектам БД. В этом случае для поддержания сериализации необходимо выполнить откат (ликвидировать все изменения, произведенные в БД) одной или более транзакций. Это один из случаев, когда пользователь многопользовательской СУБД может реально (и достаточно неприятно) ощутить присутствие в системе транзакций других пользователей.
<p class="q"><b>4.	Журнализация</b>
	<p class="p">Одним из основных требований к СУБД является надежность хранения данных во внешней памяти. Под надежностью хранения понимается то, что СУБД должна быть в состоянии восстановить последнее согласованное состояние БД после любого аппаратного или программного сбоя. Обычно рассматриваются два возможных вида аппаратных сбоев: так называемые мягкие сбои, которые можно трактовать как внезапную остановку работы компьютера (например, аварийное выключение питания), и жесткие сбои, характеризуемые потерей информации на носителях внешней памяти. Примерами программных сбоев могут быть: аварийное завершение работы СУБД (по причине ошибки в программе или в результате некоторого аппаратного сбоя) или аварийное завершение пользовательской программы, в результате чего некоторая транзакция остается незавершенной. Первую ситуацию можно рассматривать как особый вид мягкого аппаратного сбоя; при возникновении последней требуется ликвидировать последствия только одной транзакции.
		<p class="p">Понятно, что в любом случае для восстановления БД нужно располагать некоторой дополнительной информацией. Другими словами, поддержание надежности хранения данных в БД требует избыточности хранения данных, причем та часть данных, которая используется для восстановления, должна храниться особо надежно. Наиболее распространенным методом поддержания такой избыточной информации является ведение журнала изменений БД.
			<p class="p">Журнал - это особая часть БД, недоступная пользователям СУБД и поддерживаемая с особой тщательностью (иногда поддерживаются две копии журнала, располагаемые на разных физических дисках), в которую поступают записи обо всех изменениях основной части БД. В разных СУБД изменения БД журнализуются на разных уровнях: иногда запись в журнале соответствует некоторой логической операции изменения БД (например, операции удаления строки из таблицы реляционной БД), иногда - минимальной внутренней операции модификации страницы внешней памяти; в некоторых системах одновременно используются оба подхода.
				<p class="p">Во всех случаях придерживаются стратегии "упреждающей" записи в журнал (так называемого <a href="glossary.php#Protocol" class="gl" title="Узнать значение">протокола</a> Write Ahead Log - WAL). Грубо говоря, эта стратегия заключается в том, что запись об изменении любого объекта БД должна попасть во внешнюю память журнала раньше, чем измененный объект попадет во внешнюю память основной части БД. Известно, что если в СУБД корректно соблюдается протокол WAL, то с помощью журнала можно решить все проблемы восстановления БД после любого сбоя.
	<p class="p">Самая простая ситуация восстановления - индивидуальный откат транзакции. Строго говоря, для этого не требуется общесистемный журнал изменений БД. Достаточно для каждой транзакции поддерживать локальный журнал операций модификации БД, выполненных в этой транзакции, и производить откат транзакции путем выполнения обратных операций, следуя от конца локального журнала. В некоторых СУБД так и делают, но в большинстве систем локальные журналы не поддерживают, а индивидуальный откат транзакции выполняют по общесистемному журналу, для чего все записи от одной транзакции связывают обратным списком (от конца к началу).
	<p class="p">При мягком сбое во внешней памяти основной части БД могут находиться объекты, модифицированные транзакциями, не закончившимися к моменту сбоя, и могут отсутствовать объекты, модифицированные транзакциями, которые к моменту сбоя успешно завершились (по причине использования буферов оперативной памяти, содержимое которых при мягком сбое пропадает). При соблюдении <a href="glossary.php#Protocol" class="gl" title="Узнать значение">протокола</a> WAL во внешней памяти журнала должны гарантированно находиться записи, относящиеся к операциям модификации обоих видов объектов. Целью процесса восстановления после мягкого сбоя является состояние внешней памяти основной части БД, которое возникло бы при фиксации во внешней памяти изменений всех завершившихся транзакций и которое не содержало бы никаких следов незаконченных транзакций. Для того чтобы этого добиться, сначала производят откат незавершенных транзакций (undo), а потом повторно воспроизводят (redo) те операции завершенных транзакций, результаты которых не отображены во внешней памяти. Этот процесс содержит много тонкостей, связанных с общей организацией управления буферами и журналом. Более подробно мы рассмотрим это в соответствующей лекции.
	<p class="p">Для восстановления БД после жесткого сбоя используют журнал и архивную копию БД. Грубо говоря, архивная копия - это полная копия БД к моменту начала заполнения журнала (имеется много вариантов более гибкой трактовки смысла архивной копии). Конечно, для нормального восстановления БД после жесткого сбоя необходимо, чтобы журнал не пропал. Как уже отмечалось, к сохранности журнала во внешней памяти в СУБД предъявляются особо повышенные требования. Тогда восстановление БД состоит в том, что исходя из архивной копии по журналу воспроизводится работа всех транзакций, которые закончились к моменту сбоя. В принципе, можно даже воспроизвести работу незавершенных транзакций и продолжить их работу после завершения восстановления. Однако в реальных системах это обычно не делается, поскольку процесс восстановления после жесткого сбоя является достаточно длительным.
<p class="q"><b> 5.	Поддержка языков БД</b>

<p class="p">Для работы с базами данных используются специальные языки, в целом называемые <i>языками баз данных</i>. В ранних СУБД поддерживалось несколько специализированных по своим функциям языков. Чаще всего выделялись два языка - <i>язык определения схемы БД (SDL - Schema Definition Language)</i> и <i>язык манипулирования данными (DML - Data Manipulation Language)</i>.SDL служил главным образом для определения логической структуры БД, т.е. той структуры БД, какой она представляется пользователям. DML содержал набор операторов манипулирования данными, т.е. операторов, позволяющих заносить данные в БД, удалять, модифицировать или выбирать существующие данные.
<p class="p">В современных СУБД обычно поддерживается единый интегрированный язык, содержащий все необходимые средства для работы с БД, начиная от ее создания, и обеспечивающий базовый пользовательский интерфейс с базами данных. Стандартным языком наиболее распространенных в настоящее время реляционных СУБД является язык SQL (Structured Query Language). Перечислим основные функции реляционной СУБД, поддерживаемые на "языковом" уровне (т.е. функции, поддерживаемые при реализации интерфейса SQL).
<p class="p">Прежде всего, язык SQL сочетает средства SDL и DML, т.е. позволяет определять схему реляционной БД и манипулировать данными. При этом именование объектов БД (для реляционной БД - именование таблиц и их столбцов) поддерживается на языковом уровне в том смысле, что компилятор языка SQL производит преобразование имен объектов в их внутренние идентификаторы на основании специально поддерживаемых служебных таблиц-каталогов. Внутренняя часть СУБД (ядро) вообще не работает с именами таблиц и их столбцов.
<p class="p">Язык SQL содержит специальные средства определения ограничений целостности БД. Опять же, ограничения целостности хранятся в специальных таблицах-каталогах, и обеспечение контроля целостности БД производится на языковом уровне, т.е. при компиляции операторов модификации БД компилятор SQL на основании имеющихся в БД ограничений целостности генерирует соответствующий программный код.
<p class="p">Специальные операторы языка SQL позволяют определять так называемые представления БД, фактически являющиеся хранимыми в БД запросами (результатом любого запроса к реляционной БД является таблица) с именованными столбцами. Для пользователя представление является такой же таблицей, как любая базовая таблица, хранимая в БД, но с помощью представлений можно ограничить или наоборот расширить видимость БД для конкретного пользователя. Поддержание представлений производится также на языковом уровне.

<p class="p">Наконец, авторизация доступа к объектам БД производится также на основе специального набора операторов SQL. Идея состоит в том, что для выполнения операторов SQL разного вида пользователь должен обладать различными полномочиями. Пользователь, создавший таблицу БД, обладает полным набором полномочий для работы с этой таблицей. В число этих полномочий входит полномочие на передачу всех или части полномочий другим пользователям, включая полномочие на передачу полномочий. Полномочия пользователей описываются в специальных таблицах-каталогах, контроль полномочий поддерживается на языковом уровне.
<p class="p"><b><u><center>СУБД и БД, их классификация и основные компоненты.</center></u></b>
<p class="p">	Основными   средствами   СУБД  являются:
<p class="q">средства задания (описания) структуры базы данных
<p class="q">средства конструирования экранных форм, предназначенных для ввода данных, просмотра и их обработки в диалоговом режиме;
<p class="q">средства создания запросов для выборки данных при заданных условиях, а также выполнения операций по их обработке;
<p class="q">средства создания отчетов из базы данных для вывода на печать результатов обработки в удобном для пользователя виде;
<p class="q">языковые средства - макросы, встроенный алгоритмический язык (Dbase, Visual Basic или другой), язык запросов (QBE - Query By Example, SQL) и т.п., которые используются для реализации нестандартных алгоритмов обработки данных, а также процедур обработки событий в задачах пользователя;
<p class="q">средства создания приложений пользователя (генераторы приложений, средства создания меню и панелей управления приложениями), позволяющие объединить различные операции работы с базой данных в единый технологический процесс.
<p class="p"><b><center>	Свойства СУБД и базы данных</center></b>
<p class="p">К основным свойствам СУБД и базы данных можно отнести:
<ul>
<li><p class="q">отсутствие дублирования данных в различных объектах модели, обеспечивающее однократный ввод данных и простоту их корректировки;
<li><p class="q">непротиворечивость данных;
<li><p class="q">целостность БД;
<li><p class="q">возможность многоаспектного доступа;
<li><p class="q">всевозможные выборки данных и их использование различными задачами и приложениями пользователя;
<li><p class="q">защиту и восстановление данных при аварийных ситуациях, аппаратных и программных сбоях, ошибках пользователя;
<li><p class="q">защиту данных от несанкционированного доступа средствами разгра-ничения доступа для различных пользователей;
<li><p class="q"> возможность модификации структуры базы данных без повторной загрузки данных;
<li><p class="q"> обеспечение независимости программ от данных, позволяющее сохранить программы при модификации структуры базы данных:
<li><p class="q">реорганизацию размещения данных базы на машинном носителе для улучшения объемно-временных характеристик БД;
<li><p class="q">наличие языка запросов высокого уровня, ориентированного на конечного пользователя, который обеспечивает вывод информации из базы данных по любому запросу и предоставление ее в виде соответствующих отчетных форм, удобных для пользователя.
</ul>

<p class="p"><b><center>Классификация  баз  данных</center></b>
<p class="q">I.	По <b><i>технологии обработки данных</i></b> базы данных подразделяются на централизованные и распределенные.
<p class="p"><b>Централизованная база данных</b> хранится в памяти одной <a href="glossary.php#Computing" class="gl" title="Узнать значение">вычислительной системы</a>. Если эта вычислительная система является компонентом сети ЭВМ, возможен распределенный доступ к такой базе. Такой способ использования баз данных часто применяют в локальных сетях ПК.
<p class="p"><b>Распределенная база данных</b> состоит из нескольких, возможно пересекающихся или даже дублирующих друг друга частей, хранимых в различных ЭВМ вычислительной сети. Работа с такой базой осуществляется с помощью системы управления распределенной базой данных (СУРБД).
<p class="q">II.	По  <b><i>способу доступа к данным</i></b> базы данных разделяются на базы данных с локальным доступом и базы данных с удаленным (сетевым) доступом.
<p class="p">Системы централизованных баз данных с сетевым доступом предполагают различные <b>архитектуры</b> подобных систем:
<ul>
<li><p class="q">файл-сервер;
<li><p class="q">клиент-сервер.
</ul>
<p class="p"><b>Файл-сервер</b>. Архитектура систем БД с сетевым доступом предполагает выделение одной из машин сети в качестве центральной (сервер файлов). На такой машине хранится совместно используемая централизованная БД. Все другие машины сети выполняют функции рабочих станций, с помощью которых поддерживается доступ пользовательской системы к централизованной базе данных. Файлы базы данных в соответствии с пользовательскими запросами передаются на рабочие станции, где в основном и производится обработка. При большой интенсивности доступа к одним и тем же данным производитель¬ность информационной системы падает. Пользователи могут создавать также на рабочих станциях локальные БД, которые используются ими монопольно. Концепция файл-сервер условно отображена на рис. 1.

<p class="p"><center><img src="lectures/4.png" width="622" height="241" class="top_img"  /></center>
<p class="p"><center>Рис.1 Схема обработки информации в БД по принципу файл-сервер	</center>
	<p class="p"><b>Клиент-сервер</b>. В этой концепции подразумевается, что помимо хранения централизованной базы данных центральная машина (сервер базы данных) должна обеспечивать выполнение основного объема обработки данных. Запрос на данные, выдаваемый клиентом (рабочей станцией), порождает поиск и извлечение данных на сервере. Извлеченные данные (но не файлы) транспортируются по сети от сервера к клиенту. Спецификой архитектуры клиент-сервер является использование языка запросов SQL. Концепция клиент-сервер условно изображена на рис. 2.
		<p class="p"><center><img src="lectures/5.png" width="441" height="231" class="top_img"  /></center>
	<p class="p"><center>	Рис.2  Схема обработки информации в БД по принципу клиент-сервер</center>

	<p class="p"><b><u>	Типовая организация СУБД.</u></b>
<p class="p">В современных субд можно логически выделить следующие компоненты:
<p class="q">1) ядро субд
<p class="q">2) компилятор языка БД
<p class="q">3) подсистема поддержки времени выполнения.
<p class="q">4) набор утилит
<p class="q"><b>1.</b>	ядро субд отвечает за управление данными во внешней памяти: управление буферами, управление транзакциями и журнализацию
<p class="p"><b>Транзакция</b> — это последовательность операций с БД, которые воспринимаются как единое тело.
<p class="p"><b>Журнализация</b> — это особая часть БД, недоступная пользователю субд, но поддерживающаяся с особой тщательностью, куда поступают записи обо всех изменениях основной части БД. Можно выделить такие компоненты, как менеджерданных, менеджер буферов, менеджер транзакций, менеджер журнала. Ядро субд обладает собственным интерфейсом, недоступным обычному пользователю, и используется в программах созданных средствами скл (и некоторыми утилитами бд). При использовании клиент-сервер ядро является основным компонентом серверной части системы. 
<p class="q"><b>2.</b>	Основной функцией компилятора языка БД является компиляция операторов в некоторую управляющую программу. Результатом компиляции является выполняемая программа, выполненная в некоторых системах в машинных кодах, но более часто в выполняемом внутреннем машинно-независимым кодом. в последнем случае выполнение оператора производится с привлечением подсистемы поддержки времени выполнения, которая представляет собой интерпретатор внутреннего языка. субд.
<p class="q"><b>3.</b>	В отдельные утилиты БД обычно выделяют такие процедуры, которые слишком накладно выполнять с использованием языка БД  (сбор статистики, глобальная проверка целостности и т.д.)
Утилиты программируются с использованием интерфейса ядра субд, а в некоторых случаях с проникновением внутрь ядра. Бд и субд являются структурными компонентами информационных систем.
<p class="p">
  <p class="definition ">
<iframe src="ind.php" width="100%" height="80%" frameborder
="0"></iframe></p>
	
  
<div class="navbt">
	<div class=" btn red d">
		<a  href="1_introduction_to_database_systems.php" >Предыдущая 
			<div class="btn__blobs">
		      <div></div>
		      <div></div>
		      <div></div>
    		</div>
  		</a>
  	</div>
  
	<div class=" btn red d">
		<a href="3_Early_approaches_to_DBMS_organization.php">Следующая
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
    