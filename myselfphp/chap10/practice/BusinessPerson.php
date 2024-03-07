<?php
// 継承元のクラスファイルをインポート
require_once 'Person4.php';

class BusinessPerson extends Person {
  //サブクラス独自のworkメソッドを定義
  public function work() : void {
    print "<p>{$this->lastName}{$this->firstName}は働いてます。</p>";
  }
}