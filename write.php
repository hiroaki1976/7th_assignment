<?php
$jigyousyo = $_POST['jigyousyo']. "\n";
$a_gata = 'A型' . $_POST['a_gata'];
$b_gata = 'B型' . $_POST['b_gata'];
$ikou = '移行' . $_POST['ikou'];
$other = 'その他' . $_POST['other']. "\n";
$name = $_POST['name']. "\n";
$name_kana = $_POST['name_kana']. "\n";
$email = $_POST['email']. "\n";
$password1 = $_POST['password1']. "\n";
$password2 = $_POST['password2']. "\n";

$time = date('Y/m/d H:i:s') . "\n";
file_put_contents('data/data.txt', $time . $jigyousyo . $a_gata . $b_gata. $ikou. $other. $name . $name_kana . $email . $password1 .$password2, FILE_APPEND);

?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>
</html>