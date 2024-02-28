<?php
$data = [
  ['X-1', 'X-2', 'X-3'],
  ['Y-1', 'Y-2', 'Y-3'],
  ['Z-1', 'Z-2', 'Z-3']
];
print count($data); //第二引数にCOUNT_RECURSIVEを設定すると、入れ子の要素を認識したカウントが行われる。