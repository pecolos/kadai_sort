<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way(array $nums, string $order): array
    {
      if ($order === "ASC") {
        sort($nums);
      } elseif ($order === "DESC") {
        rsort($nums);
      }
      return $nums;
    }

    $nums = [15, 4, 18, 23, 10];

    $sortedAsc = sort_2way($nums, "ASC");
    echo "昇順にソートする:<br>";
    foreach ($sortedAsc as $num) {
      echo $num . "<br>";
    }

    echo PHP_EOL;

    $sortedAsc = sort_2way($nums, "DESC");
    echo "降順にソートする:<br>";
    foreach ($sortedAsc as $num) {
      echo $num . "<br>";
    }

    ?>
  </p>
</body>

</html>