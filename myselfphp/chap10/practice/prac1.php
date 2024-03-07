<?php
// 10.1 一問 コンストラクターについて簡単に説明せよ。
// インスタンス化する際に実行されるメソッドです。

// 10.1 二問
class Book {
  public function __construct(
    public string $title,
    public int $price
  ) {}
}