<?php

    //--------------------------Настройки подключения к БД-----------------------
    include "db.php";
    //----------------------------------------------------------------------------------------
    $id = 2;
    include "sql.php";
    ?>
    
     <!DOCTYPE HTML>
    <html id=2>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MyApp</title>
    <script src="/UpdateScript.js"> </script>
    </head>
    <body>
        
    <table>
    <tr>
    <td width=100px> Устройство:
    </td>
    <td width=40px><?php echo($device_name); ?> 
    </td>
    </tr>
    </table>
    <table border=1>
    <tr>
    <td width=100px> Tемпература
    </td>
    <td width=40px><?php echo($temperature); ?>
    </td>
    <td width=150px><?php echo($temperature_dt); ?>
    </td>
    </tr>
    <tr>
    <td width=100px> Реле
    </td>
    <td width=40px><?php echo($out_state); ?>
    </td>
    <td width=150px> <?php echo($out_state_dt); ?>
    </td>
    </tr>
    </table>
    <form method=POST>
    <button name=button_on value=1>Включить реле</button>
    </form>
    <form method=POST>
    <button  name=button_off value=1>Выключить реле</button>
    </form><br>

    </body>
    </html>