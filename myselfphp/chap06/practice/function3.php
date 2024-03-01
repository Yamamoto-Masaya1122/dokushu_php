<?php

if(true) {
  function getTriangleArea(float $base, float $height): float {
    return $base * $height / 2;
  }
}

$area = getTriangleArea(8, 10);

print $area;