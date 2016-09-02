<?php
$weatherList = array(
    array("東京", 32, 25),
    array("名古屋", 28, 21),
    array("大阪", 27, 20),
    array("京都", 26, 19),
    array("福岡", 27, 22)
);
echo "<table border='1'>";
echo "<tr style='background-color: yellow'>
            <th>都市名</th>
            <th>最高気温</th>
            <th>最低気温</th>
      </tr>";
foreach($weatherList as $key => $value){
    echo "<tr>";
    foreach($value as $key1 => $value2){
        echo "<td>".$value2."</td>";
    }
    echo "</tr>";
}
echo "</table>";