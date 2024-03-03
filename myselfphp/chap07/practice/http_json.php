<?php
require '../vendor/autoload.php';
$cli = new GuzzleHttp¥Clint([
  'base_uri' => 'https://wings.msn.to',
]);
$res = $cli->get('/tmp/books.json');
$obj = json_decode($res->getBody());
print_r($obj);