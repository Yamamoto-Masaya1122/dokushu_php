<?php
try {
  $db = new PDO('mysql:dbname=selfphp; host=localhost; charset=utf8', 'selfuser', 'selfpass');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  print 'データベースへの接続を確立しました';
} catch(PDOException $e) {
  print "エラーメッセージ:{$e->getMessage()}";
}