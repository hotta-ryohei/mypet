<?php
session_start();
$name = $_POST['name'];
$dsn = "mysql:host=localhost; dbname=mypet; charset=utf8";
$username = "root";
$password = "root";
try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $msg = $e->getMessage();
}

$sql = "SELECT * FROM user WHERE name = :name";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':name', $name);
$stmt->execute();
$member = $stmt->fetch();
//指定したハッシュがパスワードにマッチしているかチェック
if (!empty($member) && isset($member['password'])) {

    $_SESSION['name'] = $member['name'];
    $_SESSION['password'] = $member['password'];
    $msg = 'ログインしました。';
    $link = '<a href="mypet.php">ホーム</a>';
} else {
    $msg = 'ユーザー名もしくはパスワードが間違っています。';
    $link = '<a href="login_form.php">戻る</a>';
}
?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>

