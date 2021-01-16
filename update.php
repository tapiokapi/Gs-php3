<?php
// DB接続
require_once('./dbconnect.php');
require_once('./funcs.php');


// 画面で入力された値の取得
$date = $_POST['date'];
$title = $_POST['title'];
$amount = $_POST['amount'];
$type = $_POST['type'];
$id = $_POST['id'];

// SQL文を作成（更新）
$sql = "UPDATE 
          records
        SET 
          title = :title,
          type = :type,
          amount = :amount,
          date = :date,
          updated_at = now()
        WHERE id = :id";

// SQL実行の準備をする
$stmt = $pdo->prepare($sql);

// DBに登録する値を取得する
$stmt->bindParam(':title', $title, PDO::PARAM_STR);
$stmt->bindParam(':type', $type, PDO::PARAM_INT);
$stmt->bindParam(':amount', $amount, PDO::PARAM_INT);
$stmt->bindParam(':date', $date, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// SQL実行
$stmt->execute();

// index.phpに画面遷移する
redirect('./index.php');
?>