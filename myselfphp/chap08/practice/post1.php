<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ポストデータ</title>
</head>
<body>
<!-- action属性にはポストデータの送信先を指定-->
<form method="POST" action="post2.php">
<label for="name">名前:</label>
<input id="name" type="text" name="name" size="15" />
<input type="submit" value="送信" />
</form>
</body>
</html>