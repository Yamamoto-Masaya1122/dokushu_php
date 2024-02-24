<?php
$data = ['高江', '掛谷', '日尾', '薄井', '和田'];
foreach($data as &$value){
  $value = 'New' . $value;
}
print_r($data);
// 値変数を参照渡ししているので、元の配列の内容にも処理結果が反映される。