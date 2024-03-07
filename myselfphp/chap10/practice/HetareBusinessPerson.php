<?php
require_once 'BusinessPerson.php';

class HetareBusinessPerson extends BusinessPerson {
  // BusinessPersonクラスのworkメソッドをオーバーライド
  public function work() : void {
    parent::work();
    print 'ただし、ボチボチと...';
  }
}