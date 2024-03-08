<?php
class MyClass {
  public string $pub = 'public';
  protected string $pro = 'protected';
  private string $pri = 'private';

  // プロパティをリスト表示するためのshowPropertyメソッド
  public function showProperty() : void {
    foreach($this as $key => $value){
      print "{$key}:{$value} <br />";
    }
  }
}