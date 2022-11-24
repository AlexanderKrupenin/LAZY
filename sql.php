<?php
//-----------------Получаем из БД все данные об устройстве-------------------
    $result = mysqli_query($mysql, "SELECT * FROM DEVICE_TABLE WHERE DEVICE_ID = '$id'");
    if (mysqli_num_rows($result) == 1) { //Если в БД есть данные о имени для этого устройства
        $Arr = mysqli_fetch_array($result);
        $device_name = $Arr['NAME'];
    } else { //Если в БД нет данных о имени для этого устройства
        $device_name = '?';
    }

    $result = mysqli_query($mysql, "SELECT * FROM TEMPERATURE_TABLE WHERE DEVICE_ID = '$id'");
    if (mysqli_num_rows($result) == 1) { //Если в БД есть данные о температуре для этого устройства
        $Arr = mysqli_fetch_array($result);
        $temperature = $Arr['TEMPERATURE'];
        $temperature_dt = $Arr['DATE_TIME'];
    } else { //Если в БД нет данных о температуре для этого устройства
        $temperature = '?';
        $temperature_dt = '?';
    }

    $result = mysqli_query($mysql, "SELECT * FROM OUT_STATE_TABLE WHERE DEVICE_ID = '$id'");
    if (mysqli_num_rows($result) == 1) { //Если в БД есть данные о реле для этого устройства
        $Arr = mysqli_fetch_array($result);
        $out_state = $Arr['OUT_STATE'];
        $out_state_dt = $Arr['DATE_TIME'];
    } else { //Если в БД нет данных о реле для этого устройства
        $out_state = '?';
        $out_state_dt = '?';
    }

    $result = mysqli_query($mysql, "SELECT * FROM COMMAND_TABLE WHERE DEVICE_ID = '$id'");
    if (mysqli_num_rows($result) == 1) { //Если в БД есть данные о реле для этого устройства
        $Arr = mysqli_fetch_array($result);
        $com = $Arr['COMMAND'];
        $com_dt = $Arr['DATE_TIME'];
    } else { //Если в БД нет данных о реле для этого устройства
        $com = '?';
        $com_dt = '?';
    }
   if($out_state != $com){
     $out_state = $com;

     $date_today = date("Y-m-d H:i:s");
     $mysql->query("UPDATE OUT_STATE_TABLE SET OUT_STATE='$out_state', DATE_TIME='$date_today' WHERE DEVICE_ID = '$id'");
        if (mysqli_affected_rows($mysql) != 1) //Если не смогли обновить - значит в таблице просто нет данных о команде для этого устройства
        { //вставляем в таблицу строчку с данными о команде для устройства
            $result = mysqli_query($mysql, "INSERT OUT_STATE_TABLE SET DEVICE_ID='$id', OUT_STATE='1', DATE_TIME='$date_today'");
        }
   }

    //----------------------------------------------------------------------------------------
    
    //------Проверяем данные, полученные от пользователя---------------------
       
    /*while ($_POST['button_off'] && $temp == 0) {
        $temp = $temp -35;
        $date_today = date("Y-m-d H:i:s");
        $mysql->query("UPDATE TEMPERATURE_TABLE SET TEMPERATURE='$temp', DATE_TIME='$date_today' WHERE DEVICE_ID = '$id'");
        
    }  */
   //UPDATE COMMAND_TABLE SET COMMAND='1' WHERE DEVICE_ID = '1'
    if ($_POST['button_on']) {
        $temp = $temperature;
        $temp = 16;
        $date_today = date("Y-m-d H:i:s");
        $mysql->query("UPDATE COMMAND_TABLE SET COMMAND='1', DATE_TIME='$date_today' WHERE DEVICE_ID = '$id'");
        $mysql->query("UPDATE TEMPERATURE_TABLE SET TEMPERATURE='$temp', DATE_TIME='$date_today' WHERE DEVICE_ID = '$id'");
        if (mysqli_affected_rows($mysql) != 1) //Если не смогли обновить - значит в таблице просто нет данных о команде для этого устройства
        { //вставляем в таблицу строчку с данными о команде для устройства
            $result = mysqli_query($mysql, "INSERT COMMAND_TABLE SET DEVICE_ID='$id', COMMAND='1', DATE_TIME='$date_today'");
        }
    }    

    if ($_POST['button_off']) {
        $date_today = date("Y-m-d H:i:s");
        $temp = $temperature;
        $temp = 12;
        $result = mysqli_query($mysql, "UPDATE COMMAND_TABLE SET COMMAND='0', DATE_TIME='$date_today' WHERE DEVICE_ID = '$id'");
        $mysql->query("UPDATE TEMPERATURE_TABLE SET TEMPERATURE='$temp', DATE_TIME='$date_today' WHERE DEVICE_ID = '$id'");
        if (mysqli_affected_rows($mysql) != 1) //Если не смогли обновить - значит в таблице просто нет данных о команде для этого устройства
        { //вставляем в таблицу строчку с данными о команде для устройства
            $result = mysqli_query($mysql, "INSERT COMMAND_TABLE SET DEVICE_ID='$id', COMMAND='0', DATE_TIME='$date_today'");
        }
    }
    ?>