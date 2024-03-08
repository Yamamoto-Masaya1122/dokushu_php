<?php
// 型を定義
interface IFax {
  function send();
}

interface IPrinter {
  function print();
}

// 実装を定義
trait FaxTrait {
  public function send() : void {
    print 'send Fax...sended!';
  }
}

trait PrinterTrait {
  public function print() : void {
    print 'printing...completed';
  }
}

class FaxPrinter implements IFax, IPrinter {
  use FaxTrait, PrinterTrait;
}

$fp = new FaxPrinter();
$fp->send();
$fp->print();