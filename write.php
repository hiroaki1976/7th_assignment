<?php
session_start();

$jigyousyo = $_POST['jigyousyo']. "\n";
$a_gata = 'A型' . $_POST['a_gata'];
$b_gata = 'B型' . $_POST['b_gata'];
$ikou = '移行' . $_POST['ikou'];
$other = 'その他' . $_POST['other']. "\n";
$postcode = $_POST['postcode']. "\n";
$prefecture = $_POST['prefecture']. "\n";
$city = $_POST['city']. "\n";
$town = $_POST['town']. "\n";
$name = $_POST['name']. "\n";
$name_kana = $_POST['name_kana']. "\n";
$email = $_POST['email']. "\n";
$password1 = $_POST['password1']. "\n";
$password2 = $_POST['password2']. "\n";

$time = date('Y/m/d H:i:s') . "\n";
file_put_contents('data/data.txt', $time . $jigyousyo . $a_gata . $b_gata . $ikou . $other . $postcode . $prefecture . $city . $town . $name . $name_kana . $email . $password1 . $password2, FILE_APPEND);

$_SESSION['jigyousyo'] = $jigyousyo;
$_SESSION['a_gata'] = $a_gata;
$_SESSION['b_gata'] = $b_gata;
$_SESSION['ikou'] = $ikou;
$_SESSION['other'] = $other;
$_SESSION['postcode'] = $postcode;
$_SESSION['prefecture'] = $prefecture;
$_SESSION['city'] = $city;
$_SESSION['town'] = $town;
$_SESSION['name'] = $name;
$_SESSION['name_kana'] = $name_kana;
$_SESSION['email'] = $email;
$_SESSION['password1'] = $password1;
$_SESSION['password2'] = $password2;
$_SESSION['time'] = $time;
?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録完了</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>ユーザー登録完了</h1>
    <h2>「確認する」からご登録内容が確認できます</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>
</html>