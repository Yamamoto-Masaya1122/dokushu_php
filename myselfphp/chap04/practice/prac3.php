<?php
// $sum = 0;
// while($sum <= 100){
//   if($sum % 2 !== 0){ continue; }
//   $sum += 1;
// }
// print "合計値は{$sum}です。";
//自分のコードだと、１回目のループが終わった後、$sumは1になり、while文の条件がtrueになる。その後、偶数かどうかの判定は偶数ではないので、条件がtrueになりcontinueが実行。$sumは1のままなので、whileがtrueになり、偶数判定もtrueにcontinue実行というように無限ループに陥っている。

$sum = 0;
$i = 0;
while($i <= 100){
  $i++;
  if($i % 2 !== 0){ continue; }
  $sum += $i;
}
print "合計値は{$sum}です。";