<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テキストエリア練習問題(結果)</title>
</head>
<body>
<!--
* H4タグに自分の`出席番号 氏名`を入れる
* フォームとして受け取った`input_text`の値を出力する
    * 出力するテキストはpタグでくくる

-->
<h4>0J01020 重永隆良</h4>
<?php
    // PHPのコードは以下に記述
    echo '<p> 入力された文章はつぎのとおりです。';
    echo '<p> ここに文章を入力する。' . $_POST['input_text'] . 'です</p>';
    ?>
    <a href='textarea.html'>戻る</a>
</body>
</html>
