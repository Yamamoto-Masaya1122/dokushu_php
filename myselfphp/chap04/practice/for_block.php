<?php
for($i = 1; $i <= 10; $i++){
  if($i % 2 == 0){
    $i++;
  }
  print "{$i}<br />";
}

//以下だとエラーになる。原因不明。
// for($i = 1; $ <= 10; $i += 2){
//   if($i % 2 == 0){
//     print "{$i}<br />";
//   }
// }