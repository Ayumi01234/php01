<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信画面</title>
</head>
<body>
    <form action="write.php" method="post">
    名前：<input type="text" name="name"><br>
    メール：<input type="text" name="email"><br>
    備考：<textarea name ="memo" cols="30" rows="10"></textarea><br>
    <input type="submit" value="送信">
</body>
</html>