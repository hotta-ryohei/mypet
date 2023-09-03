<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>mypet</title>
    <link rel="stylesheet" href="style.css">
</head>
<div>
    <?php include('./header.php') ?>
</div>
<h1>ログインページ</h1>
<form action="login.php" method="post">
<div>
    <label>
        名前：
        <input type="text" name="name" required>
    </label>
</div>
<div>
    <label>
        パスワード：
        <input type="password" name="password" required>
    </label>
</div>
<input type="submit" value="ログイン">
</form>
<?php include('./footer.php') ?>
</html>