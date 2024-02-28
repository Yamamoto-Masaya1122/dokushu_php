<?php
$data = ['高江', '青木', '片渕'];
print array_push($data, '山田', '土井'); // 配列の最後尾に要素を追加し、合計の要素数を返す
print_r($data);
print array_pop($data); // 最後の要素を除去し、除去した要素の値を返す
print_r($data);
print array_shift($data); //最初の要素を除去し、除去した要素の値を返す
print_r($data);
print array_unshift($data, '掛谷', '横塚', '上垣'); // 配列の先頭に要素を追加し、合計の要素数を返す
print_r($data);