<?php
$score = array(80, 60, 92, 22, 50);
echo "<table border='1'>";
echo "<tr>
            <th>番号</th>
            <th>点数</th>
      </tr>";
$grade = 0;
foreach($score as $key => $value){
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$value."</td>";
    echo "</tr>";
    if ($value >= 70){
    $grade++;
    }
}
echo "</table>";
echo "最高点：".max($score)."点"."<br>";
echo "70点以上：".$grade."名";
