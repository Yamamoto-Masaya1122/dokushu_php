<?php
class Myparent {
  public static function show() {
    print __CLASS__;
  }

  public static function staticTest() {
    static::show();
  }
}

class MyChild extends Myparent {
  public static function show() {
    print __CLASS__;
  }
}

MyChild::staticTest();