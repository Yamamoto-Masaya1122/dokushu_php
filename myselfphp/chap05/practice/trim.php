<?php
$str = "  こんにちわ \t\n\r";
var_dump($str);
var_dump(trim($str));
var_dump(ltrim($str));
var_dump(rtrim($str));

$str2 = "!======[独習PHP]======!";
var_dump(trim($str2, "!=[]"));

$str = "  こ ん に ち は  ";
var_dump(str_replace(' ', '', $str));