<?php
// 新しいレコードを追加するための処理

// dbconnect.phpを読み込む ⇨ DBに接続
require_once('./dbconnect.php');
require_once('./funcs.php');

// 画面で入力された値の取得
// var_dump($_POST);
$date = $_POST['date'];
$title = $_POST['title'];
$amount = $_POST['amount'];
$type = $_POST['type'];

// SQL文を作成して、画面で入力された値をrecordsテーブルに追加

// INSERT文の作成
$sql = "INSERT INTO records(title, type, amount, date, created_at, updated_at) VALUES(:title, :type, :amount, :date, now(), now())";

// SQL実行の準備
$stmt = $pdo->prepare($sql);

// 値の設定
$stmt->bindParam(':title', $title, PDO::PARAM_STR);
$stmt->bindParam(':type', $type, PDO::PARAM_INT);
$stmt->bindParam(':amount', $amount, PDO::PARAM_INT);
$stmt->bindParam(':date', $date, PDO::PARAM_STR);

// SQLを実行　
$stmt->execute();

// index.phpに画面遷移する
redirect('./index.php');
?>