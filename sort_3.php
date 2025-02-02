<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way(array $nums, string $order): void
    {
      if ($order === "ASC") {
        usort($nums, function ($a, $b) {
          return $a - $b;
        });
        echo "昇順:<br>";
      } elseif ($order === "DESC") {
        usort($nums, function ($a, $b) {
          return $b - $a;
        });
        echo "降順:<br>";
      }

      foreach ($nums as $num) {
        echo $num . "<br>";
      }

      echo "<br>"; // 空行を挟む
    }

    $nums = [15, 4, 18, 23, 10];

    // 昇順ソートと表示
    sort_2way($nums, "ASC");

    // 降順ソートと表示
    sort_2way($nums, "DESC");
    ?>
  </p>
</body>

</html>