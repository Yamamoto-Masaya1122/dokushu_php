<?php
// 親子関係にあるMyparent / MyChildクラスを定義
class MyParent {}
class MyChild extends MyParent {}

// 親子関係にあるMyMain / MySubクラスを定義
class MyMain {
  // public function hoge(MyChild $p) : MyParent { ... }

}

class MySub extends MyMain {
  // public function hoge(MyParent $p) : MyChild { ... }

}