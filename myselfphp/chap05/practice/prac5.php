<?php
// 2-1
$data = ['高江', '青木', '片渕'];
array_push($data, '山田', '日尾');
print_r($data);
print '<br>';

//2-2
array_unshift($data, '掛谷', '土井');
print_r($data);
print '<br>';

// 2-3
print_r(array_slice($data, 3, 3));