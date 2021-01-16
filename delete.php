<?php


// DB接続
require_once('./dbconnect.php');
// funcs.phpを読み込む
require_once('./funcs.php');

$id = $_GET['id'];

// DELETEのSQLを準備
$sql = 'DELETE FROM records WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// SQLを実行
$stmt->execute();

// index.phpに画面遷移
redirect('./index.php');

?>