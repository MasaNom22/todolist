
4
5
6
7
<?php
//Data Source Name
$dsn = 'mysql:dbname=todolist;host=localhost;charset=utf8';
$user = 'root';
$password = 'secret';
try {
  //ハンドル
    $dbh = new PDO($dsn, $user, $password);
}   catch (PDOException $e) {
    echo "データベース接続エラー ：".$e->getMessage();
}
?>