<?php session_start();     header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="en">
  <head>
	   <title>администратор</title>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.css">  
	   <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">
     <link rel="stylesheet"  href="css/admin.css">
  </head>
<body>

   <header> 	
		  <?php include('nav.php');
	          include('reg.php');
            include('user.php');
		        require('php/administr.php');
      ?>  
	 </header>

<main class="m">

 <div class="sn">
 

<!---------------создание теста----------------------->
<figure class="snip0025">
    <img src="image/fff.png" height="220"/>
    <div>   
        <h2>&nbsp; &nbsp; &nbsp;Добавить тест</h2>  
        <i class="ion-ios-arrow-thin-right">
        <a href="#modal_3" class="modal-inline1"></a>
    <div data-toggle="adaptive-modal" id="modal_3" style="display: none;">
      <form  id="form" class="formWithValidation" method="POST">
        <h1>Создание теста</h1> 
           <p class="n2">Задайте название теста:  <input class="fil za" type="text" size="60" maxlength="100"
  name="nazv" id="nazv"> </p>
            <h2 id="questionNumber1"></h2>  
           <p>Введите вопрос:  <input type="text" size="65" maxlength="200"  name="vopros" id="vopros" class="cx" autocomplete="off"> </p>
          
             <!--   <p class="custom-drop kol_va ">Выберите кол-во вариантов ответа:
    <select id="selecttest" name="selecttest" >
     
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
        <option value="5">5</option>
    </select> </p >-->
 <p>Введите варианты ответов: <i class="fas fa-question-circle  podsk tooltip"> <span class="tooltiptext">Только один вариант ответа может быть правильным(обозначается: 1)</span></i></p>
                        <div class="var"> 
              
                 <p>1) <input type="text"  class="fil va" size="70" maxlength="150" name="otvet1" id="otvet1" autocomplete="off">
                      <input type="number" data-min="0" data-max="1"  max="1" min="0" class="fil tru "   id="pravotvet1"  name="pravotvet1" autocomplete="off"> </p>
                    <p>2) <input type="text" class="fil va" size="70" maxlength="150" name="otvet2" id="otvet2" autocomplete="off">
                      <input type="number"  data-min="0" data-max="1" max="1" min="0" class="fil tru"   id="pravotvet2"  name="pravotvet2" autocomplete="off"> </p>
                       <p>3) <input type="text" class="fil va" size="70" maxlength="150" name="otvet3" id="otvet3" autocomplete="off">
                    <input type="number"  data-min="0" data-max="1" max="1" min="0"  class="fil tru"   id="pravotvet3"  name="pravotvet3" autocomplete="off"> </p>
                    <p>4) <input type="text" class="fil va" size="70" maxlength="150" name="otvet4" id="otvet4" autocomplete="off">
                    <input type="number"  data-min="0" data-max="1" max="1" min="0" class="fil tru"   id="pravotvet4"  name="pravotvet4" autocomplete="off"> </p>
                    <p>5) <input type="text" class="fil va" size="70" maxlength="150" name="otvet5" id="otvet5" autocomplete="off">
                    <input type="number"  data-min="0" data-max="1" max="1" min="0" class="fil tru"  id="pravotvet5"  name="pravotvet5" autocomplete="off"> </p>
                </div>
                 
            
          <div  class="btn red d" name="save" id="save"  >Далее 
            <div class="btn__blobs">
               <div></div>
               <div></div>
               <div></div>
            </div>           
          </div>
      </form>
             <p id="warning1"></p>
    </div>
        </i>
        <div class="curl"></div>
        <a href="#"></a>
    </div>      
</figure>
<!---------------------ввод текста------------------------------->
<figure class="snip0025">
  <img src="image/gg.png"  height="220"/>
  <div>
    <h2>Добавить Задание 1</h2>   
    <i class="ion-ios-arrow-thin-right">
        <a href="#modal_2" class="modal-inline1"></a>
  <div data-toggle="adaptive-modal" id="modal_2" style="display: none;">
   <form id="2" method="POST">
      <h1>Практика на ввод данных</h1> 
       <p >Напишите номер варианта:  <input id="numbervariant2" type="text" size="50" maxlength="50" class="nu" name="numbervariant2" > </p>  
       <h2 id="questionNumber3"></h2>  
       <p>Введите вопрос:  <input id="inputQuestion2" type="text" size="60" maxlength="200" class="nv"  name="inputQuestion2" autocomplete="off" > </p>
       <p>Введите ответ:  <input id="inputQuery2" type="text" size="50" maxlength="80" class="no"   name="inputQuery2" autocomplete="off" > </p>
          <div  class="btn red d" name="save2"  id="save2" >Далее
        <div class="btn__blobs">
            <div></div>
            <div></div>
            <div></div>
          </div>                
        </div> 
   </form>
      <p id="warning3"></p>
  </div>
    </i> 
    <div class="curl"></div>
  </div>        
</figure>

<!--перетаскивания--
<figure class="snip0025">
  <img src="image/nn.png" height="220"/>
  <div>
  <h2>Добавить Задание 2 </h2>
    <i class="ion-ios-arrow-thin-right">
         <a href="#modal_4" class="modal-inline1" ></a>
         <div data-toggle="adaptive-modal" id="modal_4" style="display: none;">
         <form  id="form3"  method="POST">
            <h1>Практика на перетаскивание блоков</h1> 
                <p class="n2">Задайте название теста:  <input type="text" size="40" class="nu" maxlength="40"> </p> 
                <h2><center>Вопрос 1</center></h2>  
                <p>Введите вопрос:  <input  type="text" size="60" maxlength="150" class="nv"  autocomplete="off"> </p>
                <p>Введите запрос:  <input  type="text" class="no" size="40" maxlength="40"   autocomplete="off"> </p>
	              <div  class="btn red d" name="save3"  id="save3">Далее 
                      <div class="btn__blobs">
                          <div></div>
                          <div></div>
                          <div></div>
                      </div>              
                </div>
         </form>
         <p id="warning4"></p>
         </div>
      </i>
  <div class="curl"></div>
  <a href="#"></a>
  </div>        
</figure>
----->

<!----------------------------------составление запроса----------------------->
<figure class="snip0025">
     <img src="image/hh.png"  height="220"/>
     <div>   
     <h2>Добавить Задание 3</h2>  
     <i class="ion-ios-arrow-thin-right">
     <a href="#modal_5" class="modal-inline1"></a>
     <div data-toggle="adaptive-modal" id="modal_5" style="display: none;">
         <form  id="form4" method="POST">
           <h1>Практика на составление запроса</h1> 
            <p >Напишите номер варианта:  <input id="numbervariant" type="text" size="50" maxlength="50" class="nu"  name="numbervariant" > </p>  
            <h2 id="questionNumber"></h2>  
            <p>Введите вопрос:  <input id="inputQuestion" type="text" size="60" maxlength="100" class="nv" name="inputQuestion" autocomplete="off" > </p>
            <p>Блок 1:  <input id="inputQuery1 inputQuery" type="text" size="20" maxlength="50"  name="inputQuery1" autocomplete="off" ></p>
            <p>Блок 2:   <input id="inputQuery2 inputQuery" type="text" size="20" maxlength="50"  name="inputQuery2" autocomplete="off" > </p>
            <p>Блок 3: <input id="inputQuery3 inputQuery" type="text" size="20" maxlength="50"  name="inputQuery3" autocomplete="off" >
             <p>Блок 4:    <input id="inputQuery4 inputQuery" type="text" size="20" maxlength="50"  name="inputQuery4" autocomplete="off" ></p>
               <p>Блок 5:    <input id="inputQuery5 inputQuery" type="text" size="20" maxlength="50"  name="inputQuery5" autocomplete="off" ></p>
                <p>Блок 6:     <input id="inputQuery6 inputQuery" type="text" size="20" maxlength="50"  name="inputQuery6" autocomplete="off" ></p>
                <p>Блок 7:       <input id="inputQuery7 inputQuery" type="text" size="20" maxlength="50"  name="inputQuery7" autocomplete="off" ></p>
                   <p>Блок 8:      <input id="inputQuery8 inputQuery" type="text" size="20" maxlength="50"  name="inputQuery8" autocomplete="off" ></p>
           <!----    <a class="btn btn-sm btn-outline-primary" href="#" id="btn-2">Добавить блоки </a>------>
                <div  class="btn red d" name="save4"  id="save4" >Далее
                  <div class="btn__blobs">
                  <div></div>
                  <div></div>
                  <div></div>
                  </div>                
                </div>

        </form>
        <p id="warning"></p>
    </div>
    </i>
    <div class="curl"></div>
    <a href="#"></a>
  </div>      
</figure>


<!----------------------------------добавление примеров----------------------->
<figure class="snip0025">
     <img src="image/oo.png"  height="220"/>
     <div>   
     <h2>&nbsp; &nbsp; &nbsp;Добавить пример</h2>  
     <i class="ion-ios-arrow-thin-right">
     <a href="#modal_6" class="modal-inline1"></a>
     <div data-toggle="adaptive-modal" id="modal_6" style="display: none;">
         <form  id="form5" method="post" >
          <h1>Добавление примеров</h1>        
  <p class="custom-dropdown sel_ex" >Выбирите название: <select id="select" name="select">
  <option  >Команды DML</option>
  <option>Подзапросы</option>
  <option >Логические операторы</option>
  <option>Команды DDL</option>
   <option >Запросы на дату</option>
  <option>Агрегирующие функции</option>
  <option>Строковые функции</option>
  <option>Оператор CONCAT</option>
  <option>Оператор GROUP BY</option>
  <option>Команды DCL</option>
  <option>Оператор ORDER BY</option>
</select> </p >
            <h2 id="primerNumber"></h2>  
            <p>Введите условие:  <input  type="text" size="50" id="vopr_examp" name="vopr_examp" class="vy" autocomplete="off"> </p>
            <p>Введите ответ:  <input  type="text" size="40" id="otv_examp" name="otv_examp" class="vo"  autocomplete="off"> </p>
                <div  class="btn red d" name="save5"  id="save5" >Добавить
                  <div class="btn__blobs">
                  <div></div>
                  <div></div>
                  <div></div>
                  </div>              
                </div>
        </form>
          <p id="warning2"></p>
    </div>
    </i>
    <div class="curl"></div>
    <a href="#"></a>
  </div>      
</figure>
<!------------------------добавление лаб----------------------------------->
<figure class="snip0025">
     <img src="image/ll.png"  height="220"/>
     <div>   
     <h2>Добавить лабораторную</h2>  
     <i class="ion-ios-arrow-thin-right">
     <a href="#modal_7" class="modal-inline1"></a>
     <div data-toggle="adaptive-modal" id="modal_7" style="display: none;">
         <form  id="form7" method="POST">
           <h1>Добавление лабораторной</h1> 
            <p >Название лабораторной:  <input id="lab" type="text" size="40" maxlength="70" class="vy"  name="lab" autocomplete="on" > </p>  
            <p>Ссылка на нее:  <input id="link" type="text" size="50" maxlength="100"  name="link" class="lin" autocomplete="off" > </p>
                <div  class="btn red d" name="save8"  id="save8" >Добавить
                  <div class="btn__blobs">
                  <div></div>
                  <div></div>
                  <div></div>
                  </div>                
                </div>
        </form>
        <p id="addlab"></p>  <p id="warning11"></p>
    </div>
    </i>
    <div class="curl"></div>
    <a href="#"></a>
  </div>      
</figure>


<!------------------------добавление учебников----------------------------------->
<figure class="snip0025">
     <img src="image/book.png"  height="220"/>
     <div>   
     <h2>Добавить учебник</h2>  
     <i class="ion-ios-arrow-thin-right">
     <a href="#modal_77" class="modal-inline1"></a>
     <div data-toggle="adaptive-modal" id="modal_77" style="display: none;">
         <form  id="form77" method="POST">
           <h1>Добавление учебника</h1> 
            <p >Название учебника:  <input id="book" type="text" size="60" maxlength="70" class="vy"  name="book" autocomplete="on" > </p> 
            <p>Информация:  <input id="inf" type="text" size="65" maxlength="100"  name="inf" class="lin" autocomplete="off" value="Автор: ...<br> 
Год выхода: ...<br>
Страниц: ..." > </p>
             <p>Обложка учебника(ссылкой):  <input id="img_book" type="text" size="50" maxlength="100"  name="img_book" class="lin" autocomplete="off" > </p>
              <p>Ссылка на учебник:  <input id="book_link" type="text" size="60" maxlength="100"  name="book_link" class="lin" autocomplete="off" > </p>
                <div  class="btn red d" name="savebook"  id="savebook" >Добавить
                  <div class="btn__blobs">
                  <div></div>
                  <div></div>
                  <div></div>
                  </div>                
                </div>
        </form>
        <p id="addbook"></p>  <p id="warning_book"></p>
    </div>
    </i>
    <div class="curl"></div>
    <a href="#"></a>
  </div>      
</figure>



  <!--------------------редактировать------------->
  </div>

   <div  class="btn red res " >
            <a href="editTests.php" class="editTests" >Редактировать данные</a> 
          <div class="btn__blobs">
            <div></div>
            <div></div>
            <div></div>
          </div>        
    </div> 
     <br>    
   <!--------------------вывод результатов------------->
     <div  class="btn red res " >
            <a  href="#modal_10" class="modal-inline1 " name="result" id="result" >Просмотреть результаты учащихся</a> 
            <div class="btn__blobs">
            <div></div>
            <div></div>
            <div></div>
          </div> 
</div>

<div data-toggle="adaptive-modal" id="modal_10" style="display: none;">   
  <form  id="form10" > 
        <h3><center>Просмотр результатов</center></h3>   

        <p class="custom-dropdown dropdown sel_rez">Выберите: 
    <select id="select2" name="select2"  >
       <option value="1">Тест</option>
       <option value="2">Задание на ввод данных</option>
       <option  value="3">Задание на перетаскивание</option>
       <option value="4">Задание на составление запроса</option>
    </select>    <div  class="btn red d_tab_rez " name="save77"  id="save77" >Далее
          <div class="btn__blobs">
            <div></div>
            <div></div>
            <div></div>
          </div>              
        </div></p >
 

        <?php require('php/admin_rez.php');  ?>
     
   
  </form>
 
</div>
  <div  class="btn red res " >
            <a  href="#modal_20" class="modal-inline1 " name="del_gr" id="del_gr" >Удалить группу</a> 
            <div class="btn__blobs">
            <div></div>
            <div></div>
            <div></div>
          </div> 
</div>
<div data-toggle="adaptive-modal" id="modal_20" style="display: none;">   
  <form  id="form20" > 
        <h3><center>Выберите группу для удаления:</center></h3> <br>  <center>
  <?php $del_userrez= mysqli_query($mys,'SELECT DISTINCT `group` FROM `user` WHERE  `group` <> ""  '); 
     echo '<div class="custom-dropdown sel_rez dlt" style="visibility: visible" >
         <select id="select20" name="select20">';
             while ($row20 = mysqli_fetch_array($del_userrez)) echo "<option value='$row20[group]'> $row20[group]</option>";
     echo '</select> </div >'; 
 ?><br> <br> 
     <div  class="btn red d_tab_rez" name="save2020"  id="save2020"  >Удалить
          <div class="btn__blobs">
            <div></div>
            <div></div>
            <div></div>
          </div>              
        </div>
</center>



  </form>
  <p id="delete"></p>
</div>
</main>
    <script src="js/admin.js"></script> 
    <script src="js/admin_sost_zapr.js"></script>
    <script src="js/admin_addexample.js"></script>
    <script src="js/admin_addpractice.js"></script>
    <script src="js/admin_addtest.js"></script>
    <script src="js/admin_addlab.js"></script>
     <script src="js/admin_addbook.js"></script>
    <script src="js/admin_rezult.js"></script>
    <script src="//malsup.github.io/min/jquery.form.min.js"></script>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
    <script src="js/registration.js"></script>	
    <script src="js/user.js"></script>
</body>
</html>