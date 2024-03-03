<?php
require '../vendor/autoload.php';
// require_once __DIR__ . '/../../../vendor/autoload.php'; これにしてもパスが見つからないとエラーが出た。


//クライアントを作成
$cli = new GuzzleHttp\Client([
  'base_url' => 'https://wings.msn.to',
]);
//リクエストを送信
$res = $cli->request('get', 'tmp/sample.txt');
//取得したコンテンツを出力
print $res->getBody();