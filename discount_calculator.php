<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>追加課題：演算子を使ったプログラム</title>
    
</head>

<body>
    <div class="result">
        <h1>追加演習：演算子を使ったプログラム</h1>

        <h2>課題１：割引計算プログラム</h2>
        <?php
        // 変数の定義
        $original_price = 5000;  //元の価格
        $discount_rate = 0.20;  //割引率
        $discount_amount = $original_price * $discount_rate;  //割引金額
        $final_price = $original_price - $discount_amount;  //割引後金額

        // 結果の表示
        echo "・元の価格：" . $original_price . "円<br>";
        echo "・割引率：" . ($discount_rate * 100) . "%<br>";
        echo "・割引後の価格：" . $final_price . "円<br>;
        ?>


        <h2>課題２：偶数・奇数判定プログラム</h2>
        <?php
        $number = 7;

        if ($number % 2 == 0) (
            echo '$number は偶数です';
        ) else (
            echo '$number は奇数です';
        )
        ?>

        <h2>課題３：複数条件の判定</h2>
        <?php
        $age = 25;
        $is_member = true;
        $is_student = false;

        // 条件1: 18歳以上かつ会員
        if ($age >= 18 && $is_member) {
            echo '割引が適用されます<br>';
        }

        // 条件2: 65歳以上または学生
        if ($age >= 65 || $is_student) {
            echo 'シニア・学生割引が適用されます<br>';
        }
        ?>

        <h2>課題４：複合代入演算子の練習</h2>
        <?php
        $score = 100;
        echo '初期スコア: ' {$score}'点<br>';

        $score += 50;  // ボーナスステージクリア
        echo 'ボーナス後: ' {$score}'点<br>';

        $score -= 30;  // ダメージ
        echo 'ダメージ後: ' {$score}'点<br>';

        $score *= 2;   // 2倍アイテム
        echo '最終スコア: ' {$score} '点<br>';
        ?>
    </div>
    </body>
</html>