<?php
include "db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM `HYSTORY` WHERE DEVICE_ID = '$id'";
if($result = $mysql->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>USER_ID</th><th>DEVICE_ID</th><th>NAME</th><th>OUT_STATE</th><th>DATE_TIME</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["USER_ID"] . "</td>";
            echo "<td>" . $row["DEVICE_ID"] . "</td>";
            echo "<td>" . $row["NAME"] . "</td>";
            echo "<td>" . $row["OUT_STATE"] . "</td>";
            echo "<td>" . $row["DATE_TIME"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
}
echo'<form method=POST action = "index.php">
<button formmethod=POST name=1 value=1>Назад</button>
</form><br>';
?>