<?php
$data = [3, 7, 9];
$result = array_map(function($v) {return sqrt($v);}, $data);
print_r($result);

// アロー関数で書き換え
$result = array_map(fn($v) => sqrt($v), $data);