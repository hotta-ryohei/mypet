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
<h1>新規会員登録</h1>
<form action="register.php" method="post">
<div>
    <label>
        名前：
        <input type="text" name="name" required>
    </label>
</div>
<div>
    <label>
        パスワード：
        <input type="password" name="pass" required>
    </label>
</div>
<input type="submit" value="新規登録">
</form>
<p>すでに登録済みの方は<a href="login_form.php">こちら</a></p>
<?php include('./footer.php') ?>
</html>