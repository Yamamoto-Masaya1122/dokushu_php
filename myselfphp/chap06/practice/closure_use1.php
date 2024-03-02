<?php
function myArrayWalk(array $array, callable $func) : void {
  //配列$arrayの内容を順に処理
  foreach ($array as $key => $value) {
    $func($value, $key);
  }
}

$data = [100, 50, 10, 5];
$result = 0;
myArrayWalk($data, function($value, $key) use (&$result) {
  $result += $value;
});

print "合計値 : {$result}";