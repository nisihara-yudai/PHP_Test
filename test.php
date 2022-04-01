<?php
$results = "";

if (isset($_POST['name'])) {
  $results = "{$_POST['name']}さんご登録有難うございます";
  if ($_POST['name'] == "") {
    $results = $errmsg . "<p>お名前が入力されていません</p>";
  }
}
echo $results;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
</body>

</html>