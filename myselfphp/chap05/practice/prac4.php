<?php
// 1-1
$str = 'PHPはPHP:Hypertext Preprocessorの略です';
print mb_strrpos($str, 'PHP') . '文字目';
print '<br>';

//1-2
printf('%sの気温は%.1f度です。', '弘前', 15.156);
print '<br>';

//1-3
$str = 'wings knowledge';
print mb_convert_case($str, MB_CASE_TITLE);
print '<br>';

//1-4
$str = 'ボクの名前はリオです。';
print str_replace(['ボク', 'リオ'], ['私', '凛生'], $str);
print '<br>';

//1-5
$str = 'https://wings.msn.to/';
var_dump(str_starts_with($str, 'http://'));

