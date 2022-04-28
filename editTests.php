<?php session_start();     header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="en">
  <head>
	   <title>Редакатирование тестов</title>
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
      ?>  
	 </header>

<main class="m">
	  <div  id="back" ><a href="admin.php" >     &lArr; Назад</a></div>

<div class="row">
 
  <div class="column" onclick="openTab('b2');" style="background:#9370DB;">Примеры</div>
  <div class="column" onclick="openTab('b3');" style="background:#9370DB;">Практика</div>
  <div class="column"  onclick="openTab('b4');" style="background:#9370DB;">Лабораторные</div>
  <div class="column"  onclick="openTab('b5');" style="background:#9370DB ;">Учебники</div>
  <!-- <div  class="column n1" onclick="openTab('b1');" style="background:#9370DB  ;">Тесты</div>-->
</div>


<!--<div id="b1" class="containerTab" style="display:none;background:#9370DB" >
  <p onclick="this.parentElement.style.display='none'" class="closebtn">x</p>
    <?php /*
    require_once('php/bd.php');
    
    $del = mysqli_query($mys, 'DELETE test_name FROM test LEFT JOIN questions ON test.id =questions.parent_test WHERE questions.parent_test IS NULL'); 
    $query = mysqli_query($mys, 'SELECT DISTINCT test_name FROM test ORDER BY `test_name` ASC;');
    echo '<center>Название теста: <p class="custom-dropdown">  <select class="listOfTests ">';
    while ($row = mysqli_fetch_array($query)) 
    {
      echo '<option data-test-id='.$row['test_name'].'>'.$row['test_name'].'</option>';
    }
    echo '
      </select>
      <div  class="btn red "  id="selectTest" >Выбрать
                  <div class="btn__blobs">
                  <div></div>
                  <div></div>
                  <div></div>
                  </div>              
                </div>
                </center>
                <div id="questionsOfTest"></div>';*/
                 ?>
</div>-->

<div id="b2" class="containerTab" style="display:none;background:#9370DB">
  <p onclick="this.parentElement.style.display='none'" class="closebtn">x</p>
  <?php 
  $del5 = mysqli_query($mys, 'DELETE title_practice FROM title_practice LEFT JOIN practice ON title_practice.id_title_practice = practice.title_practice WHERE practice.title_practice IS NULL'); 
    $query5 = mysqli_query($mys, 'SELECT DISTINCT name_example  FROM title_example ORDER BY `name_example` ASC; ');
    echo '<center>Название темы: <p class="custom-dropdown">  <select class="listOfExamples ">';
    while ($row = mysqli_fetch_array($query5)) 
    {
      echo '<option data-example-id='.$row['name_example'].'>'.$row['name_example'].'</option>';
    }
    echo '
      </select>
      <div  class="btn red"  id="selectExample" >Выбрать
                  <div class="btn__blobs">
                  <div></div>
                  <div></div>
                  <div></div>
                  </div>              
                </div>
                </center>
                <div id="questionsOfExample"></div>';
                
                  ?>
</div>

<div id="b3" class="containerTab" style="display:none;background:#9370DB">
  <p onclick="this.parentElement.style.display='none'" class="closebtn">x</p>
   <?php         $query2 = mysqli_query($mys, 'SELECT DISTINCT name_practice  FROM title_practice ORDER BY `name_practice` ASC;');
    echo '<center> <p class="custom-dropdown">Название практики:  <select class="listOfPractics ">';
    while ($row = mysqli_fetch_array($query2)) 
    {
      echo '<option data-practice-id='.$row['name_practice'].'>'.$row['name_practice'].'</option>';
    }
    echo '
      </select>
      <div  class="btn red"  id="selectPractice" >Выбрать
                  <div class="btn__blobs">
                  <div></div>
                  <div></div>
                  <div></div>
                  </div>              
                </div>
                </center>
                <div id="questionsOfPractice"></div>';
                 ?>
</div>

<div id="b4" class="containerTab" style="display:none;background:#9370DB">
  <p onclick="this.parentElement.style.display='none'" class="closebtn">x</p>
    <?php include('php/selectLab.php');         ?>  
       <div id="questionsOfLab"></div>
</div>

<div id="b5" class="containerTab" style="display:none;background:#9370DB ">
  <p onclick="this.parentElement.style.display='none'" class="closebtn">x</p>
   <?php   
  $bb = 1;   
    $query99 = mysqli_query($mys, 'SELECT * FROM books');
    while ($row = mysqli_fetch_array($query99)) 
    {
echo '
  <div id="form'.$row['id_book'].'"  name='.$row['id_book'].'>
    <h2 >№  '.$bb++.'</h2><br> 
     
       
        <label>Ссылка: </label>
         <textarea class="link_book " name="book_link" cols="50" rows="2">'.$row['book_link'].'</textarea>
      <br>
       <label>Обложка:</label>
        <textarea class="img_book " name="img_book" cols="50" rows="2">'.$row['book_img'].'</textarea>
      <br>
        <label>Название:</label>
        <textarea class="name_book " name="name_book" cols="50"  rows="2">'.$row['book_name'].'</textarea>
      <br>
       <label>Информация:</label>
        <textarea class="name_inf " name="name_inf" cols="80" rows="3">'.$row['book_info'].'</textarea>
      <br>
    <p class="warning99'.$row['id_book'].'" id="green" ></p>
    <center>
      <div  class="btn red editQuestionbook"  id='.$row['id_book'].' >Изменить
        <div class="btn__blobs">
            <div></div>
            <div></div>
            <div></div>
        </div>              
      </div>
      <div  class="btn red  removeQuestion_book" id='.$row['id_book'].'>Удалить
        <div class="btn__blobs">
            <div></div>
            <div></div>
            <div></div>
        </div>              
      </div>
    </center>
        <hr>
  </div>
  ';
    
    }
    mysqli_free_result($query99);
  mysqli_close($mys);
                 ?>
</div>

<script>
function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}

/*$(".column").click(function () {
  $('html,body').animate({
        scrollTop: $(".containerTab").offset().top},
       2600);
  });*/
</script>
   

 


</div>
	</main>


	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/selectTest.js"></script>
    <script type="text/javascript" src="js/selectExample.js"></script>

        <script type="text/javascript" src="js/selectLab.js"></script>
           <script type="text/javascript" src="js/selectBook.js"></script>
     <script type="text/javascript" src="js/selectPractice.js"></script>
	<script src="//malsup.github.io/min/jquery.form.min.js"></script>
    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.pack.js"></script>
    <script src="js/registration.js"></script>
</body>
</html>