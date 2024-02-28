<?php
$str = 'サーバーサイド技術'; //一問
print mb_substr($str, -5, 3);
echo '<br>';

$str2 = 'ｻｰﾊﾞｰｻｲﾄﾞ技術';
print mb_convert_kana($str2, 'KV'); //二問
echo '<br>';

$str3= '鈴木\t太郎\t男\t50\t広島県'; //三問
print_r(explode("\t", $str3));