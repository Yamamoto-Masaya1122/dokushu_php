<?php
namespace wings\selfphp\chap10;

class MyClass {
  //現在のクラス名を表示するための静的メソッドshowClass
  public static function showClass() : void {
    print __CLASS__;
  }
}