<?php
require_once 'MachineTrait.php';

class Fax {
  use MachineTrait;

  // Faxを送信
  public function send() : void {
    print 'send Fax...sended!';
  }
}

$fx = new Fax();
$fx->run();
$fx->send();