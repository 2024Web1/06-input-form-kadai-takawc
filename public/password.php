<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>パスワードの練習(送信後)</title>
</head>

<body>
    <!--
    * フォームとして受け取った`user`,`pass`の値をそれぞれPHPの命令で出力する
        * それぞれを**pタグでくくる**こと
        * 「入力されたユーザーIDは、XXXX(`user`の値)です」
        * 「入力されたパスワードは、XXXX(`pass`の値)です」
-->

    <h4>0J01020 重永隆良</h4>

    <?php
    // PHPのコードは以下に記述
    echo '<p> 入力されたユーザーIDは、' . $_POST['user'] . 'です</p>';
    echo '<p> 入力されたパスワードは、' . $_POST['pass'] . 'です</p>';
    ?>

    <a href='password.html'>戻る</a>
</body>

</html>
