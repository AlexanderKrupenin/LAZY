<?php
    include "db.php";
echo '
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>My App</title>
      <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
      <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <header>
    </header>';
 echo'
    <div class= "div_history">
    <form action="http://lazy:3006/index.php" method="post">
    <p>Логин: <input type="text" name="name" /></p>
    <p>Пароль: <input type="text" name="password" /></p>
    <p><input class = "button_main"  type="submit" /></p>
   </form>
    </div>';
    echo'
  </body>
  </html>';
  ?>
 <?php
 $name = $_POST['name'];
 $password = $_POST['password'];
 echo '<div>' . $name . '</div>';
 echo '<div>' . $password . '</div>';
 $io = 'ID';
 $result = mysqli_query($mysql, "SELECT '$io' FROM `USER_TABLE` WHERE USER_NAME ='$name' AND PASSWORD = '$password'");
 if (mysqli_num_rows($result) != "") { //Если в БД есть данные о температуре для этого устройства
    echo '<div>' . mysqli_num_rows($result) . '</div>';
     $id_user = mysqli_num_rows($result);
     echo '<div>' . $id_user . '</div>';
     Header("Location:main.php?id=$id_user");
 }
 ?>