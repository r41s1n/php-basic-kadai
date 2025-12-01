<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // 2つの値を受け取り、昇順・降順で並び替えて表示する関数
    function sort_2way($array, $order)
    {
      if ($order === true) {
        // 昇順
        echo '昇順にソートします。<br>';
        sort($array);
      } else {
        // 降順
        echo '降順にソートします。<br>';
        rsort($array);
      }
      foreach ($array as $value) {
        echo $value . '<br>';
      }
    }
    ?>
  </p>
  <p>
    <?php
    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10];

    // 昇順でソート
    $sorted_asc = sort_2way($nums, true);

    // 降順でソート
    $sorted_desc = sort_2way($nums, false);

    ?>
  </p>
</body>

</html>