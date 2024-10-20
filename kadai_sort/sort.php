<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
            // $order が true なら昇順、false なら降順でソートする
            if ($order) {
              echo '昇順で表示します<br>';
              sort($array);  // 昇順ソート
            } else {
              echo '降順で表示します<br>';
              rsort($array); // 降順ソート
            }
          
            // ソート済みの配列を表示する
            foreach ($array as $value) {
              echo $value . "<br>";
            }
          }
          
          // テストデータ
          $nums = [15, 4, 18, 23, 10];
          
          // 昇順でソート
          sort_2way($nums, true);
          
          echo "<br>"; // 出力の区切り
          
          // 降順でソート
          sort_2way($nums, false);
          
        ?>
    </p>
</body>

</html>
