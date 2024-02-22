<?php
// 連想配列の分割代入。キーの値を変数に代入している。
$map = ['title' => '独習Python', 'price' => '3000'];
['title' => $title, 'price' => $price] = $map;

print $title;
print $price;

?>