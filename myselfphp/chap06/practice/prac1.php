<?php
function diamond(float $diagonal1, float $diagonal2) : float {
  return $diagonal1 * $diagonal2 / 2;
}

$result = diamond(8, 10);
print $result;