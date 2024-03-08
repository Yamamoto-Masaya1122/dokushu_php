<?php
class Person {
  public string $firstName;
  public string $lastName;

  private function show() :void {
    print "<p>ボクの名前は{$this->lastName}{$this->firstName}です。";
  }
}