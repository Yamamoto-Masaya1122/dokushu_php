<?php
function getTriangleArea(float $base = 5, float $height = 1): float {
  return $base * $height / 2;
}

$area = getTriangleArea(height: 10);
print "三角形の面積は{$area}です。<br />";
$area = getTriangleArea(height: 10, base: 50); //実引数は仮引数を同じ名前にする
print "三角形の面積は{$area}です。<br />";