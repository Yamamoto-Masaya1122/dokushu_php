<?php
//高階関数myArrayWalkを定義
function myArrayWalk(array $array, callable $func) : void {
  //配列$arrayの内容を順に処理
  foreach ($array as $key => $value) {
    $func($value, $key);
  }
}
//配列を処理するためのユーザー定義関数
function showItem(mixed $value, int | string $key) : void {
  print "{$key} : {$value}<br />";
}
$data = ['杉山', '長田', '杉沼', '和田', '土井'];
myArrayWalk($data, 'showItem');