<?php
$score = array(
    "鈴木" => 92,
    "佐藤" => 74,
    "中村" => 42,
    "三浦" => 65
);
echo "ソート前 <br>";
foreach ($score as $key => $value){
    echo "キー：".$key." "."要素：".$value." "."<br>";
};
echo "ソート後 <br>";
$clone = $score;
asort($clone);
foreach ($clone as $key => $value){
    echo "キー：".$key." "."要素：".$value." "."<br>";
};