<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ソート関数を実装してみよう</title>
</head>
<body>
    <p>
        <?php
        // 独自のソート関数を作成
        function sort_2way ($nums,$order){

            if ($order) {
                //条件が成り立つときの処理
                echo '昇順にソートします。<br>';
                sort($nums);

              } else {
                //条件が成り立たないときの処理
                echo '降順にソートします。<br>';
                rsort($nums);
            }

            foreach($nums as $num){
                echo $num .'<br>';
            }
        }
       
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        //関数を呼び出してソートを実行
        $sort_ascending= sort_2way ($nums, true);

        //関数を呼び出してソートを実行
        $sort_descending= sort_2way ($nums, false);
        ?>
    </p>
</body>
</html>
