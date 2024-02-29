<?php
$data = ['フレンチブルドック', 'ヨークシャーテリア', 'ダックスフント', 'ポメラニアン', 'コーギー'];
$result = array_filter($data, function($v) {
  return mb_strlen($v) < 8;
}
);
print_r($result);

// $data2 = ['男' => '山田', '女' => '白石', '男' => '大槻', '女' => '河合'];
// $result2 = array_filter($data2, function($s) {return $s === '女';}, ARRAY_FILTER_USE_KEY);
// print_r($result2);