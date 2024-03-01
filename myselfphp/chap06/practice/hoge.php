<?php
function hoge(?int $value) : void {
  var_dump($value);
}

hoge(10);
hoge(null);
hoge();