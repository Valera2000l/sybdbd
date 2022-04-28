<link rel="stylesheet"  href="css/user.css">
<link rel="stylesheet" href="https://snipp.ru/cdn/fancybox/2.1.7/source/jquery.fancybox.css">  
  <div data-toggle="adaptive-modal" id="modal_12" style="display: none;">
    <div id="overlay" onclick="off()">
      <div id="text"> 
        <?php 
          require_once('php/bd.php');  
          $u=1;  $u2=1;  $u3=1;  $u4=1;
          $result= mysqli_query($mys, 'SELECT  test.test_name,  result.mark FROM `result`
JOIN `test` ON test.id=result.nazv_test 
JOIN `user` ON user.user_id=result.id_user WHERE  user.login="'.$_COOKIE['user']. '"  '); 
           $result2= mysqli_query($mys, 'SELECT  title_practice.name_practice,  result_practice.mark FROM `result_practice`
JOIN `title_practice` ON title_practice.id_title_practice =result_practice.title_pr
JOIN `user` ON user.user_id=result_practice.id_user_pr WHERE  user.login="'.$_COOKIE['user']. '"  '); 
           $result4= mysqli_query($mys, 'SELECT  title_practice3.name_practice3,  result_practice3.mark FROM `result_practice3`
JOIN `title_practice3` ON title_practice3.id_practice3 =result_practice3.id_result_pr3 
JOIN `user` ON user.user_id=result_practice3.id_user_pr3 WHERE  user.login="'.$_COOKIE['user']. '"  '); 
          echo " <div class='block_t'>";  

echo 
  '<table class="tabl_user ">
     <caption>Все ваши полученные оценки</caption>
      <tr>
        <th>Тесты</th>
        <th>Задание 1</th>
        <th>Задание 2</th>
        <th>Задание 3</th>
      </tr>';
echo "
<tr>
<td> ";
while ($row=mysqli_fetch_array($result)){ 
 echo "".$u++. ". $row[test_name]&nbsp;&nbsp;→&nbsp;Оценка: $row[mark]<br>";
} echo " </td>
<td> ";
while ($row2=mysqli_fetch_array($result2)){
echo "".$u2++. ". $row2[name_practice]&nbsp;&nbsp;→&nbsp;Оценка: $row2[mark]<br>";
} echo " </td>";
echo " <td> ";
/*while ($row=mysqli_fetch_array($result)){
echo "".$u3++. ". $row[test_name]&nbsp;&nbsp;→&nbsp;Оценка: $row[mark]<br>";
}*/echo " </td>";
echo " <td> ";
while ($row4=mysqli_fetch_array($result4)){
echo "".$u4++. ". $row4[name_practice3]&nbsp;&nbsp;→&nbsp;Оценка: $row4[mark]<br>";
}echo " </td>";



   echo "    </tr>";
echo "</table>";










         /* while ($row=mysqli_fetch_array($result))echo $row['test_name']."&nbsp;&nbsp;&#8594;&nbsp;Оценка: ".$row['mark'] . "<br> ";
           echo "<br><hr>";
           while ($row=mysqli_fetch_array($result2))echo $row['name_practice3']."&nbsp;&nbsp;&#8594;&nbsp;Оценка: ".$row['mark'] . "<br> ";*/
           echo "</div>";?>  
      </div>
    </div>
          <?php 
            $name= mysqli_query($mys, 'SELECT `login` FROM `user` WHERE `login` = "'.$_COOKIE['user']. '" ');
            while ($row = mysqli_fetch_array($name)) 
            $splitName = explode(' ', $row['login'],2); 
            $first_name = $splitName[0];
            $last_name = !empty($splitName[1]) ? $splitName[1] : ''; 
            $nam= $first_name .'+'. $last_name;
              function stringToColorCode($nam) {
                $code = dechex(crc32($nam));
                $code = substr($code, 0, 6);
                return $code;
              }
          ?>
      <div class="card-container">
        <div class="upper-container">
          <div class="image-container">
            <img src="https://ui-avatars.com/api/?size=96&name=<?php echo $nam; ?>&font-size=0.33&background=<?php echo stringToColorCode($nam) ?>&color=fff&rounded=true" class="center-block"   height="250" width="250" />
          </div> 
        </div>
          <div class="lower-container">
            <div>
              <?php 
                $gr= mysqli_query($mys, 'SELECT `login`, `group` FROM `user` WHERE `login` = "'.$_COOKIE['user']. '" ');
                  while ($row = mysqli_fetch_array($gr)) 
                    echo "<h3> $row[login] </h3>
                          <h4>Группа: $row[group] </h4>";
              ?>   
            </div>
            <div>
              <a href="#" class="btn"  onclick="on()">Посмотреть оценки</a>
            </div>
          </div>
      </div>
  </div>
  <div data-toggle="adaptive-modal" id="modal_14" style="display: none;">    
    <div class="card-container2">
      <div class="upper-container">
        <div class="image-container">  
          <img src="https://ui-avatars.com/api/?size=96&name=<?php echo $nam; ?>&font-size=0.33&background=<?php echo stringToColorCode($nam) ?>&color=fff&rounded=true" class="center-block"   height="250" width="250" />
        </div>
      </div>
        <div class="lower-container2 lower-container">
          <?php  $query = mysqli_query($mys, 'SELECT * FROM user WHERE `login` = "'.$_COOKIE['user']. '" ');
                  while ($row = mysqli_fetch_array($query)) 
                    {
                    echo '<div id="form">
                              <div class="field"><br>
                                <label>Логин:</label>
                                <input type="text" size="20" autocomplete="off" name="log" class="inp log" size="12"  id="log" value="'.$row['login'].'" /> 
                              </div>
                             <center><div type="submit"  class="btn chan " name="chan" id="chan">Изменить логин
                                  </div> </center><br>
                        
                           
                              <div class="field">
                                <label>Старый пароль:</label>
                                <input type="password" autocomplete="off"  name="lastpass" size="12" class="inp lastpass c"  id="lastpass"  />
                              </div><br>
                              <div class="field">
                                <label>Новый пароль:</label>
                                <input type="password" autocomplete="off"  name="newpass" size="12" class="inp newpass"  id="newpass"  />  
                              </div><br>   
                              <div class="field"> 
                                <label>Повторите пароль:</label>
                                <input type="password" autocomplete="off" size="12" name="comfirmpass" class=" inp comfirmpass"  id="comfirmpass"  />
                              </div><br>   
                            </div>
                            <p  id="war" ></p>
                            <p  id="ok" ></p>
                            <center><div type="submit"  class="btn change " name="change" id="change">Изменить пароль
                                  </div> </center>
                          ';
    }
    mysqli_free_result($query);
  ?>
         </div>
      </div>
    </div>