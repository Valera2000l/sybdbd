<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/topic.css">

  <link rel="stylesheet" href="css/registration.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 <link rel="shortcut icon" href="image/icon.png" type="image/x-icon"> 

   <title>Этапы создания приложения</title>


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
  <p class="p" ><b>РАЗДЕЛ 5. РАЗРАБОТКА ПРИЛОЖЕНИЙ ДЛЯ РАБОТЫ С БД  </b>

<p class="title">Тема 5.1. Этапы создания приложения
<p class="p" ><b>Этап 1. Постановка задач</b>
<p class="p">На первом этапе составляется список всех основных задач, которые должны решаться приложением.
<p class="p" ><b>Этап 2. Анализ данных</b>
<p class="p">После формирования списка задач, наиболее важным этапом является составление подробного перечня всех данных, необходимых для решения каждой задачи. Эти данные и будут храниться в <a href="glossary.php#bd" class="gl" title="Узнать значение">БД</a>. Некоторые данные будут получены с помощью вычислений и в БД вноситься они не будут.  
  <p class="p" ><b>Этап 3 Определение структуры данных.</b>
<p class="p">После предварительного анализа всех необходимых элементов данных нужно упорядочить их по объектам и определить связи между ними.
  <p class="p" ><b>Этап 4. Физическая реализация БД средствами выбранной СУБД.</b>
     <p class="p" ><b>Этап 5. Создание приложения, включая пользовательский интерфейс.</b>
<p class="p">На этом этапе разрабатываются процедуры и создаются другие объекты (например, триггеры), позволяющие полностью реализовать бизнес-логику и автоматизировать решение всех намеченных в проекте задач. Помимо этого, создается пользовательский интерфейс. При этом пользовательский интерфейс может создаваться программными средствами, не входящими в состав <a href="glossary.php#sybd" class="gl" title="Узнать значение">СУБД</a>.
  <p class="p" ><b>Этап 6. Тестирование, усовершенствование и внедрение приложения.</b>
<p class="p">После завершения работ по отдельным компонентам приложения необходимо проверить функционирование приложения в каждом из возможных режимов. После того как заказчик ознакомится с работой приложения на тестовых данных, у него практически всегда возникают дополнительные предложения по его усовершенствованию. Наконец, осуществляется загрузка реальных данных и начинается эксплуатация приложения.
 <p class="p" ><b><center> ОБЗОР ПРОГРАММНЫХ СРЕДСТВ ДЛЯ СОЗДАНИЯ БАЗ ДАННЫХ</center></b>
  <p class="p" >В настоящее время наблюдается широкое распространение использования инновационных технологий. Информационно-коммуникационные технологии являются одной из основных составляющих жизни современного человека. Очень часто мы сталкиваемся с проблемой управления большими объемами информации. В этих случаях на помощь приходят базы данных. База данных – это объединение больших объемов однотипных взаимосвязанных данных в целях дальнейшего их хранения, изменения и обработки [1]. Использование баз данных в наше время очень рентабельно, так как практически во всех сферах человеческой деятельности постоянно осуществляются работы по сбору, управлению, оперированию и модификации больших объемов информации.
<p class="p" >Развитие информационно-коммуникационных технологий и появление новых позволило перевести все эти большие объемы информации в электронный вид. Появились системы управления базами данных (СУБД), которые позволили в значительной степени упростить работу практически во всех сферах деятельности: образовании, медицине, финансовых институтах, производственных предприятиях, криминалистике и т.д. СУБД обеспечивают правильность, полноту и непротиворечивость данных, а также удобный доступ к ним [1]. Рассмотрим основные программные средства для реализации баз данных.
<p class="p" >Microsoft Access – прикладная программа пакета Microsoft Office, относится к реляционным, то есть построенным на основании таблиц, СУБД. Эта программа имеет широкий спектр функций, включая связанные запросы, связь с внешними таблицами и базами данных. Благодаря встроенному языку VBA, в Microsoft Access можно писать приложения, работающие с базами данных. При работе с СУБД Access взаимодействие с жёстким (или гибким) диском происходит иначе, нежели в других программах. Обычно файл сохраняется только после выполнения команды Файл – Сохранить. В Access при заполнении ячейки, данные сохраняются автоматически, что очень удобно и безопасно со стороны целостности данных. Основными преимуществами Access являются: простой дружелюбный интерфейс, широкий спектр возможностей, возможность программировать благодаря встроенному языку VBA.
<p class="p" >Рассмотрим еще одну среду – Borland Delphi. Borland Delphi – это среда быстрой разработки приложений (RAD-среда, от Rapid Application Development – быстрая разработка приложений) на языке Delphi, в основе которого лежит язык Pascal [2]. Delphi является одним из наиболее популярных инструментов разработки прикладных программ. Она имеет функцию быстрой разработки, основанную на технологии визуального и событийного проектирования, то есть Delphi берет на себя большую часть работы, оставляя пользователю работу по созданию диалоговых окон и процедур обработки событий. Для начинающих при малом опыте программирования Delphi дает возможность создавать программы, неотличимые от программ, созданных профессионалами, а для опытного пользователя и вовсе открываются неограниченные возможности. Возможности Delphi практически безграничны. Если говорить о базах данных, то используя механизм BDE (Borland Database Engine – механизм доступа к базам данных), создаваемые формы и отчеты получают доступ к:
  <ul>
  <li> <p class="q">локальным базам данных, таким как Paradox и Dbase;
  <li> <p class="q">сетевым базам данных SQL Server, InterBase, SysBase;
  <li> <p class="q">любым другим источникам данных, доступным даже через ODBC (открытую связь с базами данных).
  </ul>
  <p class="p" >Учитывая все вышеизложенное, можно сказать, что инструментальная среда Delphi предоставляет широчайшие возможности по их созданию и обработке различных видов баз данных.
<p class="p" >Еще одним представителем программных средств по работе с базами данных является программа Microsoft SQL Server, которую нельзя назвать лишь системой баз данных. Она является, большей частью, платформой, которая управляет структурированными, частично структурированными и вовсе неструктурированными данными, а также предоставляет всеобъемлющее, операционно-интегрированное и обладающее средствами анализа программное обеспечение, которое дает возможность организациям надежно управлять критически важной информацией [3]. Удобный интерфейс утилит администрирования, высокая производительность и относительно невысокая цена делают эту СУБД одной из популярных. Так же популярным Microsoft SQL Server делает наличие таких сервисов как Data Engine, сервис анализа (Analysis Services), сервисы отчетов (Reporting Services) и сервисы интеграции (Integration Services), что является лучшим выбором для специалистов, создающих базы данных. Microsoft SQL Server интегрируется с остальными программами из семейства Microsoft, такими как Visual Basic, Visual C++, Access, Visual FoxPro и разработками других производителей. Для этой цели имеются ODBC-драйвер и OLE DB-провайдер, а также содержащий их набор библиотек Microsoft Data Access Components (MDAC), позволяющий использовать в средствах разработки объекты ActiveX Data Objects (ADO) – COM-объекты для доступа к данным. В отличие от Oracle, Microsoft не производит средств разработки, использующих тот же самый язык программирования, что и язык для создания кода триггеров и хранимых процедур, однако производит средства отладки серверного кода (например, SQL Server Debugger входит в состав Visual Basic и Visual C++).
<p class="p" >Не менее популярной является программа Oracle. Компания Oracle выпустила первую в мире СУБД поддерживающий язык SQL. Ее первая версия вышла еще в 1979 году. Все это время она является лидером среди производителей СУБД и второй по величине компании по производству программного обеспечения. Будучи первыми создателями СУБД, Oracle первой использовала предоставляемые некоторыми серверными платформами средства параллельных вычислений – Oracle Parallel Server (до его появления параллельные вычисления использовались только для решения научных задач). Сейчас последние версии открывают перед пользователями большие возможности. Производя собственные средства разработки, Oracle предоставляет своим пользователям возможность создавать клиентские приложения с помощью других средств. В частности, помимо стандартного в таких случаях клиентского API (Oracle Call Interface), клиентская часть Oracle содержит также объектную модель (Oracle Objects for OLE), позволяющую использовать клиентскую часть Oracle как набор COM-объектов для доступа к данным. Кроме того, обычно клиентская часть Oracle содержит также ODBC-драйвер для доступа к данным этой СУБД. Отметим, что и многие другие компании производят ODBC-драйверы и OLE DB-провайдеры для доступа к Oracle (в частности, Microsoft). Компании, производящие средства разработки, использующие собственные библиотеки доступа к данным (такие как Inprise или Gupta/Centura), также включают библиотеки доступа к Oracle в состав наиболее дорогих версий своих продуктов.
<p class="p" >Из готовых информационных систем на базе Oracle следует особо отметить несколько крупных систем управления предприятием, в частности SAP/R3. На Западе также нередко используются готовые решения от самой Oracle Corporation, объединенные под общим названием Oracle Applications, такие как Oracle Financials, Oracle Human Resources, Oracle Market Management, Oracle Project Systems и др.
<p class="p" >В данной статье рассмотрены четыре, на наш взгляд, наиболее популярные системы управления базами данных. Реальное количество СУБД очень велико.
<p class="p" >Тема реализации баз данных очень актуальна в современном обществе, где информация имеет колоссальное значение, так как наше общество нуждается в нахождении оптимальных способов хранения, сортировки, модификации и осуществления быстрого доступа к необходимой информации.
 <p class="p" ><b> CUBRID</b>
 <p class="p" >Бесплатный вариант с открытым исходным кодом, оптимизированный специально для веб-приложений. Сервис предназначен для обработки больших объемов данных и генерации многочисленных параллельных запросов. Это решение реализовано на языке программирования C.
 <p class="p" ><b>Достоинства:</b>
 <ul>
  <li> <p class="q">Множественная степень дробления блокировок;
<li> <p class="q">Создание резервных копий онлайн;
<li> <p class="q">Инструменты <b>GUI</b> и драйверы для <b>JDBC, PHP, Python, Perl</b> и <b>Ruby</b>;
<li> <p class="q">Поддержка встроенного сегментирования базы данных для масштабирования;
<li> <p class="q">В крупных системах данные разделяются по нескольким экземплярам базы данных;
<li> <p class="q">Репликация <b>полнотекстовых баз данных</b> и согласованность транзакций.
</ul>
 <p class="p" ><b>Недостатки:</b>
  <ul>
<li> <p class="q">Не работает в системах <b>Apple</b>;
<li> <p class="q">Нет отладчика сценариев;
<li> <p class="q">Руководство доступно только на английском и корейском языках;
<li> <p class="q">Обсуждения на официальном <u>форуме</u>, как правило, устаревшие <i>(большинству из них несколько лет)</i>.
   </ul> 

  <p class="p" ><b> Firebird</b>
<p class="p" >Эта реляционная база данных использовалась в производственных системах (под разными названиями) с 1981 года и реализует многие стандарты <b>ANSI SQL. Firebird</b> может работать на <b>Linux, Windows</b> и различных <b>Unix-платформах</b>.
<p class="p" ><b>Достоинства:</b>
 <ul>
<li> <p class="q"><b>API</b> трассировки для мониторинга в реальном времени;
<li> <p class="q">Аутентификация с проверкой подлинности <b>Windows</b>;
<li> <p class="q">Четыре поддерживаемые архитектуры: <b>SuperClassic, Classic, SuperServer</b> и <b>Embedded</b>;
<li> <p class="q">Разнообразные средства разработки: коммерческие инструменты – FIBPlus и IBObjects;
<li> <p class="q">Возможность автоматического развертывания для очистки базы данных;
<li> <p class="q">Уведомления о событиях из триггеров базы данных и хранимых процедур;
<li> <p class="q"> Бесплатная поддержка глобального сообщества <b>Firebird</b>. Что важно при <b>разработке требований к базам данных</b>.
  </ul>
<p class="p" ><b>Недостатки:</b>
  <ul>
<li> <p class="q"> Интегрированная поддержка репликации не включена и доступна только в качестве дополнения;
<li> <p class="q">Нехватка временных таблиц и интеграции с другими системами управления базами данных;
<li> <p class="q">Аутентификация с проверкой подлинности <b>Windows</b> недостаточна по сравнению с решениями, доступными в других операционных системах.
</ul>
 <p class="p" ><b>MariaDB</b>
<p class="p" >Созданная разработчиками <b>MySQL, MariaDB</b> используется такими техническими гигантами, как <b>Wikipedia, Facebook</b> и даже <b>Google. MariaDB</b> – это сервер базы данных, который предлагает встраиваемую замену функционала <b>MySQL</b>. Безопасность является главным принципом и приоритетом разработчиков<b> СУБД</b>. В каждом релизе они добавляют все патчи безопасности <b>MySQL</b> и при необходимости улучшают их.
<p class="p" ><b>Достоинства:</b>
<ul>
<li> <p class="q">Масштабируемость с простой интеграцией;
<li> <p class="q">Доступ в режиме реального времени;
<li> <p class="q">Основные функции <b>MySQL</b> (<i><b>MariaDB</b> является альтернативой <b>MySQL</b></i>);
<li> <p class="q"> Альтернативные механизмы хранения, оптимизация серверов и патчи;
<li> <p class="q"> Обширная база знаний по<b> разработке баз данных SQL</b>, накопленная в течение 20 лет работы <b>MariaDB</b>.
  </ul>
<p class="p" ><b>Недостатки:</b>
<ul>
<li> <p class="q">Отсутствует плагин проверки сложности пароля;
<li> <p class="q"> Отсутствует <b>memcached</b> интерфейс (<i>распределённая система кэширования в оперативной памяти</i>);
<li> <p class="q">Нет трассировки оптимизатора.
</ul>
 <p class="p" ><b>MongoDB</b>
<p class="p" ><b>MongoDB</b> была основана в 2007 году и известна как «<i>база данных для великих идей</i>». Проект финансируется такими известными инвесторами, как <b>Fidelity Investments, Goldman Sachs Group, Inc.,</b> и <b>Intel Capital</b>. С момента своего создания <b>MongoDB</b> была скачена 20 миллионов раз и поддерживается более чем 1000 партнерами. Эти партнеры придерживаются принципа бесплатного решения с открытым исходным кодом.
<p class="p" ><b>Достоинства:</b>
<ul>
<li> <p class="q">Проверка документов;
<li> <p class="q">Зашифрованный механизм хранения.
  </ul>

<p class="p" >Популярные варианты использования:
<ul><li> <p class="q">мобильные приложения;
<li> <p class="q">каталоги продуктов;
<li> <p class="q">управление контентом;
<li> <p class="q"><b>Real-time</b> Приложения с механизмом хранения в памяти (<i>бета-версия</i>);
<ul><li> <p class="q"> сокращает время между первичным сбоем и восстановлением.
  </ul>

<p class="p" ><b>Недостатки:</b>
<li> <p class="q"> Не подходит для приложений, требующих сложных транзакций;
<li> <p class="q"> Не подходит для устаревших приложений;
<li> <p class="q"> Молодое решение: программное обеспечение меняется и быстро развивается.
</ul>
 <p class="p" ><b>MySQL</b>
<p class="p" >Самый именитый представитель нашего <b>обзора программ для разработки базы данных. MySQL</b> существует с 1995 года и теперь принадлежит компании <b>Oracle. СУБД</b> имеет открытый исходный код. Также существует несколько платных версий, которые предлагают дополнительные функции, такие как гео-репликация кластера и автоматическое масштабирование.
<p class="p" >Поскольку <b>MySQL</b> является отраслевым стандартом, она совместима практически со всеми операционными системами и написана на языках <b>C </b>и <b>C ++</b>. Это решение является отличным вариантом для международных пользователей. Сервер <b>СУБД</b> может выводить клиентам сообщения об ошибках на нескольких языках.
<p class="p" ><b>Достоинства:</b>
<ul><li> <p class="q">Проверка на стороне сервера;
<li> <p class="q">Возможность локального использования;
<li> <p class="q"> Гибкая система привилегий и паролей;
<li> <p class="q"> Безопасное шифрование всего трафика паролей;
<li> <p class="q"> Библиотека, которая может быть встроена в автономные приложения;
<li> <p class="q"> Предоставляет сервер в качестве отдельной программы для сетевого окружения клиент/сервер.</ul>
<p class="p" ><b>Недостатки практической разработки и администрирования баз данных MySQL</b> Приобретена компанией <b>Oracle</b>:
<ul><li> <p class="q">пользователи полагают, что <b>MySQL</b> больше не подпадает под категорию бесплатного и открытого программного обеспечения;
<li> <p class="q">больше не поддерживается сообществом;
<li> <p class="q"> пользователи не могут исправлять ошибки и патчи;
<li> <p class="q"> проигрывает другим решениям из-за медленных обновлений.
</ul>
<p class="p" ><b>PostgreSQL</b>
<p class="p" ><b>PostgreSQL</b> является еще одним выдающимся решением с открытым исходным кодом, работающим во всех основных операционных системах, включая <b>Linux, UNIX (AIX, BSD, HP-UX, SGI IRIX, Mac OS X, Solaris, Tru64)</b> и <b>Windows. PostgreSQL</b> полностью отвечает принципам ACID(<i>атомарность, согласованность, изолированность, устойчивость</i>).
<p class="p" ><b>Достоинства:</b>
<ul>
  <li> <p class="q">Возможность создания пользовательских типов данных и методов запросов;
<li> <p class="q"><b>Среда разработки баз данных</b> выполняет хранимые процедуры более чем на десятке языков программирования: <b>Java, Perl, Python, Ruby, Tcl, C/C ++</b> и собственный <b>PL/pgSQL</b>;
<li> <p class="q"><b>GiST</b> (<i>система обобщенного поиска</i>): объединяет различные алгоритмы сортировки и поиска: <b>B-дерево, B+-дерево, R-дерево</b>, деревья частичных сумм и ранжированные <b>B+ -деревья</b>;
<li> <p class="q">Возможность создания для большего параллелизма без изменения кода <b>Postgres</b>, например, <b>CitusDB</b>.
<p class="p" ><b>Недостатки:</b>
<li> <p class="q">Система <b>MVCC</b> требует регулярной «<i>чистки</i>»: проблемы в средах с высокой скоростью транзакций;
<li> <p class="q">Разработка осуществляется обширным сообществом: слишком много усилий для улучшений.
</ul>
<p class="p" ><b>SQLite</b>
<p class="p" >Провозгласившая себя самой распространенной <b>СУБД</b> в мире, <b>SQLite</b> зародилась в 2000 году и используется <b>Apple, Facebook, Microsoft</b> и <b>Google</b>. Каждый релиз тщательно тестируется. Разработчики <b>SQLite</b> предоставляют пользователям списки ошибок, а также хронологию изменений кода каждой версии.
<p class="p" >Достоинства:</b>
<ul>
  <li> <p class="q">Нет отдельного серверного процесса;
<li> <p class="q">Формат файла – кросс-платформенный;
<li> <p class="q"> Транзакции соответствуют требованиям <b>ACID</b>;
<li> <p class="q"> Доступна профессиональная поддержка.
</ul>
<p class="p" >Недостатки:</b>
<p class="p" >Не рекомендуется для:
<ul>
  <li> <p class="q">клиент-серверных приложений;
<li> <p class="q"> крупномасштабных сайтов;
<li> <p class="q"> больших наборов данных;
<li> <p class="q"> программ с высокой степенью многопоточности.
</ul>
<div class="navbt">
	<div class=" btn red d">
		<a  href="19_Transactions_The_transaction_mechanism.php" >Предыдущая 
			<div class="btn__blobs">
		      <div></div>
		      <div></div>
		      <div></div>
    		</div>
  		</a>
  	</div>
  	
	<div class=" btn red d">
		<a href="30_PHP_functions_for_working_with_dbms.php">Следующая
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