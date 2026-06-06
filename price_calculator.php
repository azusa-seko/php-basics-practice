<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題：商品価格計算プログラム</title>
</head>

<body>

    <h1>課題：商品価格計算プログラム作成</h1>

    <?php
    //変数の定義
    $product_name = "ノートパソコン";
    $price = 80000;
    $quantity = 2;
    $tax_rate = 0.1;

    //計算の結果格納
    $subtotal = $price * $quantity;
    $tax_amount = $subtotal * $tax_rate;
    $total = $subtotal + $tax_amount;


    //echoで出力
    echo "商品名:" . $product_name . "<br>";

    echo "単価:" . $price . "円<br>";

    echo "数量:" . $quantity . "個<br>";

    echo "小計:" . $subtotal . "円<br>";

    echo "消費税(10%):" . $tax_amount . "円<br>";

    echo "合計金額:" . $total . "円<br>";


    ?>
</body>

</html>