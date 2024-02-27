<?php
$str = 'サーバーサイド技術'; //一問
print mb_substr($str, -5, 3);
echo '<br>';

print mb_convert_kana($str, 'K'); //二問
echo '<br>';

$str2= '鈴木\t太郎\t男\t50\t広島県'; //三問
print explode("\t", $str2);