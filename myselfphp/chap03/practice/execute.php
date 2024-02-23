<pre>
<?php
// シェルコマンドを実行している。ls -laはカレントフォルダー配下のファイルをリスト表示するコマンド。
$result = `ls -la`;
print $result;