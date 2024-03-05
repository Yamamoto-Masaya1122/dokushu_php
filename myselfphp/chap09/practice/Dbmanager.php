<?php
function getDb() : PDO {
  $dsn = 'mysql:dbname=selfphp; host=localhost; charset=utf8';
  $usr = 'selfuser';
  $passwd = 'selfpass';

  //データベースへの接続を確立
  $db = new PDO($dsn, $usr, $passwd);
  return $db;
}