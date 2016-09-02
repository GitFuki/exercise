<?php
$score = array(
    "鈴木" => 92,
    "佐藤" => 74,
    "中村" => 42,
    "三浦" => 65
);
foreach ($score as $key => $value){
    echo "氏名：".$key." "."点数：".$value." "."評価：";
    if ($value >= 80){
        echo "優";
    } elseif(($value <= 70) && ($value <= 79)){
        echo "良";
    } elseif(($value <= 60) && ($value <= 69)){
        echo "可";
    } else {
        echo "不可";
    }
    echo"<br>";
};