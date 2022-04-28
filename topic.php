<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Лекции</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/topic.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="shortcut icon" href="image/icon.png" type="image/x-icon"> 
</head>
<body>
	<header>
			<?php 
			   include('nav.php');
			   include('reg.php');
			   require_once('php/lab.php');
         include('user.php');
      ?> 
	</header>
	<main class="m">

<div class="snn row">
    <figure class="snip1104 yellow "><img  src="image/398ab2fead7f99503066d0709bfa420b--motivation-to-study-school-starts.jpg" alt="sample35" height="220" width="320" /><a href="#topic"  class="column" onclick="openTab('topic');" ></a>
      <figcaption><h2>Лекции</h2></figcaption>
      
    </figure> 
    <figure class="snip1104 blue  " ><img src="image/80b66d52d4401c7b927d100ed017dc90.jpg" alt="sample34" height="220" width="320"  />
      <figcaption><h2>Учебники</h2></figcaption>
      <a href="#books"  class="column" onclick="openTab('books');"></a>
    </figure>
    <figure class="snip1104   "  ><img src="image/10883121-química-de-vidrio-de-laboratorio.jpg" alt="sample35" height="220" width="320" />
      <figcaption><h2>Лабораторные</h2></figcaption>
      <a href="#labs"  class="column"  onclick="openTab('labs');"></a>
    </figure>
    <figure class="snip1104 redd" ><img src="image/jYtiu2Kc174.jpg" alt="sample35" height="220" width="320"  />
      <figcaption><h2>Экзамены</h2></figcaption>
      <a href="#ekzamen" class="column" onclick="openTab('ekzamen');"></a>
    </figure>
</div>

      <!---------------------------------Лекции-------------------------->
<div id="topic" class="containerTab tabcontent topic" >
  <p onclick="this.parentElement.style.display='none'" ></p>
  <h2 class="h2">Содержание</h2>
    <p class="title">Введение</p>
     <div class="item">
        <div class="number">
          <div class="items">
     <p> <a  href="1_introduction_to_database_systems.php" >Введение в системы баз данных
 </a></p>
     </div> 
        </div> 
      </div>
    <p class="title">Раздел 1. Основные концепции организации данных и реляционная модель данных</p> 
      <div class="item">
        <div class="number">
          <div class="items">
            <p>1.1.  <a  href="2_Typical_organization_of_a_modern_DBMS.php" >Типовая организация современной СУБД </a></p>
            <p>1.2.  <a  href="3_Early_approaches_to_DBMS_organization.php" >Ранние подходы к организации СУБД</a></p>
            <p>1.3. <a href="4_General_concepts_of_the_relational_approach_to_database_organization.php"  >Общие понятия реляционного подхода к организации баз данных. Основные концепции и термины </a>
            <p>1.4.  <a href="5_Basic_tools_for_manipulating_relational_data.php"  >Базисные средства манипулирования реляционными данными </a></p>
            <p>1.5.  <a  href="6_Designing_relational_databases_using_normalization.php"  >Проектирование реляционных баз данных с использованием нормализации</a></p> 
          </div> 
        </div> 
      </div>
    <p class="title">Раздел 2. Внутренняя организация реляционных СУБД</p> 
      <div class="item">
        <div class="number">
          <div class="items">
            <p>2.1. <a  href="7_The_structure_of_the_external_memory.php"  >Структуры внешней памяти, методы организации индексов </a></p>
            <p>2.2. <a  href="8_Transaction_management.php" >Управление транзакциями</a></p>
            <p>2.3. <a  href="9_Serialization_of_transactions.php" >Cериализация транзакций </a></p>
            <p>2.4. <a  href="10_Logging_DATABASE_changes.php" >Журнализация изменений БД</a></p>   
          </div> 
        </div> 
      </div>
    <p class="title">Раздел 3. Элементы языка SQL</p> 
      <div class="item">
        <div class="number">
          <div class="items">
            <p>3.1. <a href="11_Features_and_key_features_of_the_SQL_language.php" >Функции и основные возможности языка SQL </a></p>
            <p>3.2. <a  href="12_Selecting_data_using_the_select_clause.php" >Выборка данных с использованием предложения SELECT </a></p>
            <p>3.3. <a  href="13_Nested_subqueries.php" >Вложенные подзапросы</a></p>
            <p>3.4. <a  href="14_The_manipulation_of_data.php" >Манипулирование данными</a></p>   
          </div> 
        </div> 
      </div>
    <p class="title">Раздел 4. Архитектура клиент-сервер (InterBase, MySQL,Oracle)</p> 
      <div class="item">
        <div class="number">
          <div class="items">
            <p>4.1. <a  href="15_Main_features_of_the_client-server_architecture.php" >Основные особенности архитектуры клиент-сервер </a></p>
         <!--   <p>4.2. <a  href="" >Описание данных на основе SQL</a></p>
            <p>4.3.   <a  href="" >Триггеры и хранимые процедуры</a></p> -->
            <p>4.2.   <a  href="18_Working_with_BLOB_and_user-defined_functions.php" >Работа с BLOB и функции, определенные пользователем</a></p>
            <p>4.3.   <a  href="19_Transactions_The_transaction_mechanism.php">Транзакции. Механизм транзакций</a></p>  
          </div> 
        </div> 
      </div>
    <p class="title">Раздел 5. Разработка приложений для работы с БД</p> 
     <div class="item">
        <div class="number">
          <div class="items">
            <p>5.1.   <a  href="20_Steps_for_creating_an_application.php" >Этапы создания приложения </a></p>
           <!-- <p>5.2.   <a  href="" >Описание интерфейса среды и ее компоненты для работы с клиент-серверной БД</a></p>
            <p>5.3.   <a  href="" >Компоненты доступа к данным и визуальные компоненты</a></p>
            <p>5.4.1. <a  href="" >Общие особенности технологии dbExpress </a></p>
            <p>5.4.2. <a  href="" >Технология dbExpress.  Использование процедур при разработке приложений</a></p> 
            <p>5.4.3. <a  href="" >Технология доступа к данным с использованием процедур</a></p>
            <p>5.4.4. <a  href="" >Основные особенности технологии доступа к данным ADO</a></p> --> 
          </div> 
        </div> 
      </div>
    <p class="title">Раздел 6. Разработка приложений на основе веб-технологий</p> 
      <div class="item">
        <div class="number">
          <div class="items">
          <!--  <p>6.1.  <a  href="" >Основы языка PHP. Конфигурация </a></p>
            <p>6.2.  <a  href="" >Инструментальные средства разработки</a></p>
            <p>6.3.  <a  href="" >Получение данных. Поддержка нескольких соединений</a></p>-->
            <p>6.1.  <a  href="30_PHP_functions_for_working_with_dbms.php" >Функции PHP для работы с СУБД </a></p>
          <!--  <p>6.5.  <a  href="" >Способы интерактивного редактирования данных</a></p> -->
          </div> 
        </div> 
      </div>
    <p class="title">Раздел 7. Трехзвенная архитектура </p> 
      <div class="item">
        <div class="number">
          <div class="items">
            <p>7.1. <a  href="32_Introduction_to_three-tier_architecture.php">Введение в трехзвенную архитектуру  </a></p>
         <!--   <p>7.2. <a  href="" >Сервер приложений. Технологии удаленного доступа</a></p>
            <p>7.3. <a  href="" >Клиентское приложение. Виды связи. Управление связью</a></p>-->     
          </div>
        </div>
      </div>
</div>


			<!---------------------------------Лабораторные-------------------------->
<div id="labs" class="tabcontent containerTab"> 
  <div class="col">
    <p onclick="this.parentElement.style.display='none'" ></p>
      <?php $labs=get_labs();  ?>
        <?php if ($labs): ?>
          <?php foreach ($labs as $lab): ?> 
            <script  type="text/javascript">
                var txt ='<?=$lab['link']?>';
                document.write('<li><a href="' + txt + '" target="_blank"><?=$lab['name']?></a>');
            </script>
          <?php  endforeach; ?>          
        <?php    else:  ?>
            <H3>Лабораторных нет</H3>
        <?php endif; ?>  
  </div>
</div>




         <!--   <script  type="text/javascript">
                document.write('<li>  <a href="#modal_lab1" class="modal-inline1"><//?=$lab['name']?></a>');
            </script>
<div data-toggle="adaptive-modal" id="modal_lab1" style="display: none;">
         <form  id="modal_lab1" method="POST">
          <div id="otp_wgt_hrl6qo7oioyeq"></div>
<script type="text/javascript">
    var otp_wjs_dt = (new Date).getTime();
    (function (w, d, n, s, rp) {
        w[n] = w[n] || [];
        rp = {};
        w[n].push(function () {
            otp_render_widget(d.getElementById("otp_wgt_hrl6qo7oioyeq"), 'onlinetestpad.com', 'hrl6qo7oioyeq', rp);
        }); 
        s = d.createElement("script");
        s.type = "text/javascript";
        s.src = "//onlinetestpad.com/js/widget.js?" + otp_wjs_dt;
        s.async = true;
        d.getElementsByTagName("head")[0].appendChild(s);
    })(this, this.document, "otp_widget_callbacks");
</script>
<br><br>
                <div  class="btn red d">
                  <script  type="text/javascript">
                var txt ='<//?=$lab['link']?>';
                   document.write('   <a href="' + txt + '" target="_blank">'); </script>Открыть лаб
                  <div class="btn__blobs">
                  <div></div>
                  <div></div>
                  <div></div>
                  </div>                
                </div>
        </form>
        <p id="addlab"></p>  <p id="warning11"></p>
    </div>
-->

      <!--------------------------------Учебники-------------------------->
   
 


    




<div id="books" class="containerTab tabcontent" >
  <p onclick="this.parentElement.style.display='none'" ></p>
    <div class="flex">
      <?php $books=get_books();  ?>
        <?php if ($books): ?>
          <?php foreach ($books as $book): ?> 
            
            
  <div class="container">
    <div class="book" >
      <div class="front">
        <a href="<?=$book['book_link']?>"></a>
        <div class="cover" >
         
         <img src="<?=$book['book_img']?>"  width= "220" height="300"  href="<?=$book['book_link']?>" target="_blank">
        </div>
      </div>
      <div class="left-side">

        <h2>
          <span ><?=$book['book_name']?></span>
        </h2>
      </div>
    </div>
  </div>
<div  class="su-post">
   <a class="su-post-thumbnail" href="<?=$book['book_link']?>" target="_blank" title="Перейти"><?=$book['book_name']?></a>
              
                    <div class="su-post-excerpt">
                      <p><?=$book['book_info']?></p>
                    </div>
            </div>

       




          <?php  endforeach; ?>          
        <?php    else:  ?>
        <H3>Книг нет</H3>
        <?php endif; ?>  
    </div> 
</div>
      <!--------------------------------Экзамены-------------------------->
   <div id="ekzamen" class="containerTab tabcontent" >
  <p onclick="this.parentElement.style.display='none'"></p>
 
      <ul class="col">
          <li><a href="https://drive.google.com/file/d/19_2yRdjGDcdmE1ipLt5ooqJP7jk9_RJ2/preview" target="_blank" class="ekzam">Вопросы к экзамену </a>
          <li><a href="https://drive.google.com/file/d/15wh4kseOIzSG5j8HjKHr0Tp28czq3e9D/preview"  target="_blank">Практические задания к билетам </a>
          <li><a href="https://drive.google.com/file/d/1H5Dpm0ADA9b_D20fx8YybOavmF0Pvs4z/preview"  target="_blank">Задачи для самостоятельной</a>
          <li><a href="https://drive.google.com/file/d/1Mm5gKurHeKCsEjMb8yer0eIByICnUfdQ/preview"  target="_blank">Задачи для решения</a>  
      </ul>
   </div>


<script type="text/javascript">
  function openTab(tabName) {
    var i, x;
    x = document.getElementsByClassName("containerTab");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
  }
    document.getElementById(tabName).style.display = "block";
}
</script>
   
</main>
 
  <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
  <script src="js/topic.js"></script>
  <script src="js/registration.js"></script>
  <script src="js/user.js"></script>	
</body>
</html>