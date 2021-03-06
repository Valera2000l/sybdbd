<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/topic.css">

  <link rel="stylesheet" href="css/registration.css">
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
 <link rel="shortcut icon" href="image/icon.png" type="image/x-icon"> 

   <title>Работа с BLOB и функции, определенные пользователем</title>


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
  <p class="p" ><b>РАЗДЕЛ 4. АРХИТЕКТУРА КЛИЕНТ-СЕРВЕР (INTERBASE, MYSQL,ORACLE)   </b>

<p class="title">Тема 4.2. Работа с BLOB и функции, определенные пользователем

<p class="p">Тип данных переменной длины, называемый <b>BLOB</b> (Binary Large Object, большой двоичный объект). Обычно этот тип данных применяется для хранения изображений, аудио- , видео- информации и вообще может применяться для любых типов данных. Если хочется как то преобразовывать BLOB, то для этого существуют специальные функции называемые BLOB фильтры, их можно даже писать самому.
<p class="p">Следующая таблица представляет в алфавитном порядке функции используемые для работы с BLOB.
<p class="p"><center><table>
  <thead>
    <tr><th><b>№</b></th>
      <th><b>Функция</b></th>
       <th><b>Описание</b></th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">1</td>
       <td>isc_blob_default_desc()</td>
      <td>Загружает BLOB дескриптор с информацией по умолчанию о BLOB, включающую инфо подтипах, кодовой табл, и размере сегмента BLOB.</td></tr>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">2</td>
       <td>isc_blob_gen_bpb()</td>
      <td>Создает буфер параметров (BPB) для исходного и целевого BLOB дескрипторов и разрешает динамический доступ к BLOB подтипу и кодовой таблице символов.</td></tr>
    <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">3</td>
        <td>isc_blob_info()</td>
      <td>Возвращает информацию о открытом BLOBE.</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">4</td>
        <td>isc_blob_lookup_desc()</td>
      <td>Определяет подтип, набор символов, и размер сегмента BLOB, учитывая название таблицы и название столбца BLOB.</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">5</td>
        <td>isc_blob_set_desc()</td>
      <td>Инициализирует дескриптор BLOB из переданных ей параметров</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">6</td>
        <td>isc_cancel_blob()</td>
      <td>Отмена  BLOB</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">7</td>
        <td>isc_close_blob()</td>
      <td>Закрытие открытого BLOB</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">8</td>
        <td>isc_create_blob2()</td>
      <td>Создает и открывает BLOB для  записи, и при желании пользователя определяет фильтр, который нужно использовать, чтобы конвертировать BLOB из одного подтипа в другой</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">9</td>
        <td>isc_get_segment()</td>
      <td>Возвращает данные из BLOB столбца в строке, возвращенной выполнением инструкции SELECT</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">10</td>
        <td>isc_open_blob2()</td>
      <td>Открывает существующий  BLOB для  поиска, и при желании пользователя определяет фильтр, который нужно использовать, чтобы конвертировать BLOB из одного подтипа в другой</td></tr>
      <tr><td class="sql-code sql-code-line sql-code-line--blue-color ">11</td>
        <td>isc_put_segment()</td>
      <td>Пишет данные в BLOB</td></tr>
  </tbody>
</table></center>
<p class="p">Кроме управления данными обычными способами, подобными управлению другими типами данных, Interbase предоставляет  более гибкие правила  типов данных для данных BLOB. Поскольку существует много собственных типов данных разработчика, то вы можете определять их как данные BLOB, Interbase работает с ними как со своими и позволяет Вам определять ваш собственный тип данных, называемый подтип BLOB. Interbase также предоставляет два своих предопределенных подтипа: 0, неструктурированный подтип, вообще применимый к любым двоичным данным или данным неопределенного типа, и 1,применимый  к простому тексту.
<p class="p">Пользовательские данные должны быть всегда представлены как отрицательные числа от –1 до –32678. Подтип BLOB определяет как определен BLOB столбец.
<p class="p">Приложение ответственно за то, чтобы данные, хранимые в столбце BLOB согласовывались с его подтипом; Interbase не проверяет тип или формат данных BLOB.
<p class="p">Конечно чем  хранить данные Blob непосредственно в поле Blob записи таблицы, InterBase хранит там BlobID. BlobID является уникальным числовым значением которое ссылается на данные Blob. Данные Blob хранятся в другом месте в базы данных, в ряде сегментов Blob, по сегментам и осуществляется чтение и запись BLOB. Сегменты Blob могут иметь изменяющуюся длину. Длина индивидуального сегмента определяется при записи. Сегменты удобны при работе с данными, который является слишком большим для одного  буфера памяти приложения. Но не необходимо использовать множественные сегменты; Вы можете помещать все ваши данные Blob на единственном сегменте.
<p class="p"><b>Операции над BLOB данными:</b>
<p class="p">Interbase поддерживает следующие операции над BLOB данными:
<p class="q">1.  Чтение из BLOB.
<p class="q">2.   Вставка новой строки включающей BLOB данные
<p class="q">3.  Замена данных ссылающихся на  BLOB столбец.
<p class="q">4.  Обновление данных ссылающихся на  BLOB столбец.
<p class="q">5.  Удаление BLOB.
<p class="p">API Функции динамического SQL (DSQL) и  структура данных XSQLD A необходимы, чтобы выполнить SELECT, INSERT, и инструкции UPDATE, требующиеся, чтобы выбирать, вставлять, или модифицировать уместные данные Blob.
<p class="p"><b>1.Чтение данных из BLOB.</b>
<p class="p">Эти шесть шагов требуются для чтения данных из существующего BLOB:
<p class="q">1.  Создается обычная инструкция SELECT для выбора строки содержащей BLOB столбец.
<p class="q">2. Подготавливается структура для вывода данных XSQLDA.
<p class="q">3. Подготавливается SELECT инструкция.
<p class="q">4. Выполняется инструкция.
<p class="q">5. Выбираем строки одну задругой
<p class="q">6. Читаем и обрабатываем BLOB данные для каждой строки.

<p class="p"><b>2.Запись данных в BLOB</b>
<p class="q">1.  Перед тем как создать новый BLOB  и записать туда данные вы должны сделать следующее.
<p class="q">2.  Включить BLOB данные в строку вставляемую в таблицу
<p class="q">3.  Заменить данные ссылающиеся на BLOB столбец строки
<p class="q">4.  Обновить данные ссылающиеся на BLOB столбец строки
<p class="p">Вносимый  в столбец Blob фактически не содержит данных Blob. Он содержит BlobID ссылающийся на данные, которые сохранены в другом месте. Так, чтобы установить или изменить столбец Blob, Вы должны установить (или сбросить) BlobID, сохраненный в нем. Если столбец Blob содержит BlobID, и Вы изменяете столбцы относящиеся к различным  Blob (или содержащим NULL), Blob на который ссылается предварительно сохраненный BlobID будет удален в течение следующей сборки "мусора".(????)
<p class="p">Все эти операции требуют следующих шагов:
<p class="p"><b>1.</b> Подготовьте соответствующую инструкцию DSQL. Это будет инструкция INSERT, если Вы вставляете новую строку в таблицу, или инструкция UPDATE для изменения строки. Каждая из этих инструкций будет нуждаться в соответствующей  структуре ввода XSQLDA для передачи параметров  инструкции во время выполнения. BlobID нового Blob будет одним переданных значений
<p class="p"><b>2.</b> Создайте новый BLOB, и запишите в него данные.
<p class="p"><b>3.</b> Свяжите BLOB ID нового BLOB со столбцом таблицы строк над которой вы будете выполнять INSERT и UPDATE.
<p class="p"><i>Примечание:</i> вы не можете непосредственно обновлять BLOB данные. Если вы желаете модифицировать BLOB данные, вы должны:
<p class="p">Создать новый BLOB
<p class="p">Прочитать данные из старого BLOBA в буфер где вы сможете отредактировать и модифицировать их.
<p class="p">Записать измененные данные в новый BLOB.
<p class="p">Подготовить и выполнить инструкцию UPDATE которая модифицирует BLOB столбец содержащий BLOBID нового BLOB, заменяющий старый BLOB ID.
<p class="p"><b>3.Удаление BLOB</b>
<p class="p">существуют четыре способа удаления BLOB.
<p class="p">Удаляем строку содержащую BLOB. Вы можете использовать DSQL для выполнения DELETE инструкции.
<p class="p">Заменяем различные BLOB. Если Blob столбец содержит BlobID, и вы модифицируете столбец ссылающийся на разные BLOB, ранее сохраненный BLOB будет удален следующей сборкой “мусора”.
<p class="p">Сбрасываем в NULL столбец ссылающийся на BLOB, к примеру, используя DSQL инструкцию  как следующую:
<p class="p">UPDATE PROJECT SET PROJ_DESC = NULLWHERE PROJ_ID = "VBASE"
<p class="p">Blob на который указывал удаленный blob_id будет удален следующей сборкой «мусора»
<p class="p">- Отказываемся от BLOB, после того как он был создан но, не был связан еще с определенным столбцом в таблице, используя isc_cancel_blob() функцию.
<p class="p">isc_cancel_blob(status_vector,&blob_handle);
<p class="p">Запрос информации об открытом BLOB
<p class="p">После того, как приложение открывает Blob, оно может получить информацию о Blob.
<p class="p">Isc_blob_info () позволяет приложению сделать запрос для информации о Blob типа общего количества
<p class="p">числа сегментов в Blob, или о длине, в байтах, самого длинного сегмента. В дополнение к указателю на вектор состояния ошибки и дескриптор Blob, isc_blob_info () требует двух предоставляемых приложением буферов, буфера списков элементов, где приложение определяет информацию, которая требуется, и буфер результатов, куда InterBase возвращает требуемую информацию. Приложение заполняет буфер списков элементов с информационными запросами для isc_blob_info(), и передает ему  указатель на буфер списков элементов, а также размер, в байтах, этого буфера.
<p class="p">Приложение должно также создать буфер результата, достаточно большой, чтобы хранить информацию, возвращенную InterBase. Оно передает указатель на буфер результата, и размер, в байтах, этого буфера в isc_blob_info(). Если InterBase пытается поместить, больше информации чем может вместить буфер результатов, она помещает значение, isc_info_truncated, определенное в ibase.h, в последний байт буфера результатов. 
<p class="p">Буфер списка элементов запрашиваемой информации и буфер результатов.
<p class="p">Буфер списка элементов это char массив содержащий запрашиваемые байты значений. Каждый байт есть пункт определяющий тип желаемой информации.

<div class="navbt">
	<div class=" btn red d">
		<a  href="15_Main_features_of_the_client-server_architecture.php" >Предыдущая 
			<div class="btn__blobs">
		      <div></div>
		      <div></div>
		      <div></div>
    		</div>
  		</a>
  	</div>
  	
	<div class=" btn red d">
		<a href="19_Transactions_The_transaction_mechanism.php">Следующая
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