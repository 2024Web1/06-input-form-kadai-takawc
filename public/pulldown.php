<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プルダウンメニューの練習(結果)</title>
</head>
<body>
    <!--
        * H4タグに自分の`出席番号 氏名`を入れる
        * フォームとして受け取った`frult`を出力する
        * 出力するテキストはpタグでくくる
        * pタグ内のテキストは「あなたの好きなフルーツは、XXX(fruitで受け取ったもの)ですね。」とする
    -->
    <h4>0J01020 重永隆良</h4>
    <?php
    // PHPのコードは以下に記述
    echo '<p> あなたの好きなフルーツは、' . $_POST['fruit'] . 'ですね。</p>';
    
    ?>
    <a href='pulldown.html'>戻る</a>
</body>

</html>
