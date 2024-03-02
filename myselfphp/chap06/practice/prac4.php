<?php
// 1問
function square(float $base = 1, float $height = 1) : float{
  return $base * $height;
}
print square();
print '<br>';

//2問
//require, include, require_once, include_once
//require, require_once命令は指定したファイルが見つからなかった場合Fatal Error(致命的なエラー)を発生させ、処理を中断する。
//include, include_once命令はWarning（警告）を発するだけで、処理は継続。
// requireとrequire_once, includeとinclude_onceはそれぞれの違いは、指定されたファイルが既に読み込み済みである場合、_onceの方はスクリプトを読み込まず処理をスキップする。

//3問
function processNumber(callable $func, float ...$args): array {
  foreach($args as $arg){
    $result[] = $func($arg);
  }
  return $result;
}
[$x, $y] = processNumber(
fn($num) => $num ** 25, 15);
print '<br>';

//4問
function refCheck(int &$num) : void {
  print $num. '<br />'; //1
  $num++;
  unset($num);
  print $num. '<br />'; //null
}
$num = 1;
refCheck($num);
print $num; //2