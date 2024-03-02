<?php
function product(float ...$args): float {
  $result = 1;
  foreach ($args as $arg) {
    $result *= $arg;
  }
  return $result;
}
print product(10, 10, 10);