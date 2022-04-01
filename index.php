<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test01</title>
  <style>
    table{
      
      margin: 32px 0 0 32px;
    }

    td {
      text-align: right;
    }
  </style>
</head>

<body>
  <?php
  // for ($i = 1; $i <= 100; $i++) {
  //   echo $i;
  //   while ($i % 10 === 0) {
  //     echo $i . "<br>";
  //     break;
  //   }
  // }
  ?>
  <!-- 表の出力 -->
  <table border = "1">
    <?php
    // for ($i = 1; $i <= 100; $i++) {
    //   echo "<tr>";
    //   echo $i;
    //   while ($i % 10 <= 10) {
    //     echo "<td>" . $i . "<br>" ."</td>";
    //     break;
    //   }
    //   echo "</tr>";
    // }
    // for($a = 1;$a <= 9; $a++){
    //   echo "<tr>".$a."<br>"."</tr>";
    //   for($b = 1;$b <= 9;$b++){
    //     echo "<tr><td>". $b."</td></tr>";
    //   }
    // }

    // 参考文献を見てコードを書きました。(実力不足ですみません。)
    // 九九の表を見やすくするための空間確保
    echo "<br>";
    echo "<hr>";

    // 九九の表の縦方向に出力するためのループ
    for($i=1;$i<=9;$i++){
      // テーブルの縦方向のタグを出力
      echo "<tr>";

      for($j=1;$j<=9;$j++){
        echo "<td>";

        // 計算結果が10未満(数字一桁)ならば、空間を設けるために半角スペースを出力する
        if($i * $j < 10) echo "&nbsp;";

        echo $i * $j; //計算結果を出力する

        echo "</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>
</html>