<?php
class FriendList implements IteratorAggregate {
  //ダミーのプロパティを定義
  public string $version = '1.0.0';
  public string $name = '友人リスト';
  // Personオブジェクトのリストを格納するためのprivate変数
  private array $list = [];

  // 反復処理の対象を定義
  public function getIterator(): Traversable {
    return new ArrayIterator($this->list);
  }
  public function add(Person $p) : void {
    $this->list[] = $p;
  }

  public function __clone() : void {
    foreach ($this->list as &$value){
      $value = clone $value;
    }
  }

  // 指定されたインデックス番号に対応するPersonオブジェクトを取得する
  public function __invoke(int $index) : mixed {
    return $this->list[$index];
  }
}