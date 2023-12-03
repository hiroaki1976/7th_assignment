<?php
session_start();

// $data = file_get_contents('data/data.txt');
// echo nl2br($data);
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $jigyousyo = $_SESSION['jigyosyo'];
    $a_gata = $_SESSION['a_gata'];
    $b_gata = $_SESSION['b_gata'];
    $ikou = $_SESSION['ikou'];
    $other = $_SESSION['other'];
    $name = $_SESSION['name'];
    $name_kana = $_SESSION['name_kana'];
    $email = $_SESSION['email'];
    $password1 = $_SESSION['password1'];
    $password2 = $_SESSION['password2'];
    $time = $_SESSION['time'];
    ?>
    <dl>
        <dt>登録日時</dt><?php echo $time; ?>
        <dt>事業所名</dt><dd><?php echo $jigyousyo; ?></dd>
        <dt>事業所種別</dt><dd><?php echo $a_gata; ?><?php echo $b_gata; ?><?php echo $ikou; ?><?php echo $other; ?></dd>
        <dt>ご担当者様氏名</dt><dd><?php echo $name; ?></dd>
        <dt>ご担当者様氏名（カナ）</dt><dd><?php echo $name_kana; ?></dd>
        <dt>E-MAIL</dt><dd><?php echo $email; ?></dd>
        <dt>Password登録</dt><dd><?php echo $password1; ?></dd>
        <dt>Password登録（確認用）</dt><dd><?php echo $password2; ?></dd>
    </dl>
</body>
</html>