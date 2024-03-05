<?php
// 1問 ①オブジェクト指向データベース ②PDO ✖️ → データベース抽象化レイヤー ③ロールバック ④SQLite ⑤結果セット
// 2問
//①✖️ トランザクションは関連する更新の一部が失敗した時にデータの不整合が発生するのを防ぐ仕組みです。
//②✖️ データベース抽象化レイヤーを利用することでデータベース製品個々の機能を意識することなくコーディングができる。
//③✖️ DDLはデータ定義言語 
//④◯ 
//⑤✖️ 検索処理にはqueryメソッド。更新処理にはexecメソッドを使う。
// 3問
// ① UPDATE book SET price = price * 0.9;
// ② DELETE FROM book WHERE price >= 2500 AND published < '2021-04-01';
// ③ SELECT title, price, publish, published FROM book WHERE publish= '翔泳社' ORDER BY price, publish DESC;
// ④ SELECT uid, unam FROM usr WHERE unam LIKE '山田%';
// ⑤ SELECT publish, AVG(price) FROM book GROUP BY publish;