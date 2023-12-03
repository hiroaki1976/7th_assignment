<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ユーザー登録画面</h1>
    <p>ユーザー登録をお願い致します</p>
    <form action="write.php" method="post">
        <dl>
        <dt>【必須】事業所名：</dt><dd><input type="text" name="jigyousyo" required></dd>
        <dt>【必須】事業所種別：</dt>
        <dd><input type="checkbox" name="a_gata" id="">就労継続支援A型
            <input type="checkbox" name="b_gata" id="">就労継続支援B型
            <input type="checkbox" name="ikou" id="">就労移行支援
            <input type="checkbox" name="other" id="">その他</dd>
        <dt>【必須】ご担当者様氏名：</dt><dd><input type="text" name="name" required></dd>
        <dt>ご担当者様氏名（カナ）：</dt><dd><input type="text" name="name_kana"></dd>
        <dt>【必須】E-MAIL:</dt><dd><input type="email" name="email" id="" required></dd>
        <dt>【必須】Password登録：</dt><dd><input type="password" name="password1" id="password1" required></dd>
        <p id="result"></p>
        <dt>【必須】Password登録（確認用）：</dt><dd><input type="password" name="password2" id="password2" required></dd>
        </dl>
        <input type="submit" value="送信" id="submit">
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>