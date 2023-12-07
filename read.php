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
    <title>登録内容確認</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    $jigyousyo = $_SESSION['jigyousyo'];
    $a_gata = $_SESSION['a_gata'];
    $b_gata = $_SESSION['b_gata'];
    $ikou = $_SESSION['ikou'];
    $other = $_SESSION['other'];
    $postcode = $_SESSION['postcode'];
    $prefecture = $_SESSION['prefecture'];
    $city = $_SESSION['city'];
    $town = $_SESSION['town'];
    $name = $_SESSION['name'];
    $name_kana = $_SESSION['name_kana'];
    $email = $_SESSION['email'];
    $password1 = $_SESSION['password1'];
    $password2 = $_SESSION['password2'];
    $time = $_SESSION['time'];
    ?>
    <h1>登録内容確認</h1>
    <div id="myForm">
        <dl>
            <dt>登録日時</dt><dd><?php echo $time; ?></dd>
            <dt>事業所名</dt><dd><?php echo $jigyousyo; ?></dd>
            <dt>事業所種別</dt><dd><?php echo $a_gata; ?><?php echo $b_gata; ?><?php echo $ikou; ?><?php echo $other; ?></dd>
            <dt>郵便番号</dt><dd><?php echo $postcode; ?></dd>
            <dt>都道府県</dt><dd><?php echo $prefecture; ?></dd>
            <dt>市区町村</dt><dd><?php echo $city; ?></dd>
            <dt>町名など</dt><dd><?php echo $town; ?></dd>
            <dt>ご担当者様氏名</dt><dd><?php echo $name; ?></dd>
            <dt>ご担当者様氏名（カナ）</dt><dd><?php echo $name_kana; ?></dd>
            <dt>E-MAIL</dt><dd><?php echo $email; ?></dd>
            <dt>Password登録</dt><dd><?php echo $password1; ?></dd>
            <dt>Password登録（確認用）</dt><dd><?php echo $password2; ?></dd>
        </dl>
    </div>
    
</body>
</html>

<?php 
session_destroy();
?>