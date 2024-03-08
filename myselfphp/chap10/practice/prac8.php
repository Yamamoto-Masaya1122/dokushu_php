<?php
// 10.8 1問
// .htaccessでPHPのパラメータを設定する場合に確認すべき事項を2点上げなさい
// httpd.confのAllowOverrideディレクティブを「All」になっているかどうか。
// .htaccessで設定可能なパラメーターのアクセスレベルが6,7かどうか確認する。

sql_autoload_register(function(string $name) : void {
  require_once "php_{$name}.class.php";
});
