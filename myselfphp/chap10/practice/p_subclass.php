<?php
require_once 'p_inherit.php';

class MySubClass extends MyClass {
  public function getData(): string {
    return '['.parent::getData().']';
  }
}

$obj = new MySubClass('composer');
print $obj->getData();