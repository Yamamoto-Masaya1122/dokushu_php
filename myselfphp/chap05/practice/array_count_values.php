<?php
$data = ['い', 'ろ', 'は', 'に', 'ほ', 'へ', 'と', 'い', 'ろ'];
print_r(array_count_values($data)); 
//戻り値は「要素数=>登場回数」の連想配列