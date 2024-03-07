<?php
class TriangleFigure {
  // プロパティはprivate権限で定義
  private float $base;
  private float $height;

  // プロパティ値を初期化(コンストラクター)
  public function __construct(){
    $this->setBase(1);
    $this->setHeight(1);
  }

  //baseプロパティのゲッター（取得）メソッド
  public function getBase(): float {
    return $this->base;
  }
  // baseプロパティのセッター（設定）メソッド
  public function setBase(float $base) : void {
    if($base <= 0) {
      throw new Exception('baseは正数で指定します。');
    }
    $this->base = $base;
  }
  //heightプロパティのゲッター（取得）メソッド
  public function getHeight(): float {
    return $this->height;
  }
  // heightプロパティのセッター（設定）メソッド
  public function setHeight(float $height) : void {
    if($height <= 0) {
      throw new Exception('heightは正数で指定します。');
    }
    $this->height = $height;
  }
  //プロパティ値を基に面積を取得
  public function getArea(): float {
    return $this->getBase() * $this->getHeight() / 2;
  }
}