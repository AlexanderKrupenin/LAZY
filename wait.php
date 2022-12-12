<!DOCTYPE HTML>
    <html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MyApp</title>
    </head>
    <body>
        <h1> Отдохните </h1>
        <p> если отдохнули, то нажмите на кнопку "Вернуться" </p>
        <a href="<?php	// начинаем первый PHP скрипт
      $link='http://lazy:3006/';	// переменная с адресом ссылки
      $current_page=true;	// переменная, определяющая активность пункта меню
      echo $link;	// выводим адрес ссылки
      ?>"><?php	// начинаем второй PHP скрипт
      if( $current_page )	// если пункт меню активный
      echo ' '; // выводим соответствующий класс 
      echo $name;	// выводим текст ссылки
      ?><button  style = "position:absolute; left: 2%;top:15%; width: 15%;height: 5%;">Вернуться</button></a>
    </body>
    </html>