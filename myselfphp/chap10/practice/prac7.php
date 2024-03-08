<?php
// 10.7
class MyClass {
  public function __get(string $name) : mixed {
    print "{$name}プロパティは存在しません。";
  }
}

$p = new MyClass();
$stt = $p->From;