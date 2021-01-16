<?php
// DB接続

try {
  $db_name = "Gs_accounting";    //データベース名
  $db_id   = "root";      //アカウント名
  $db_pw   = "root";      //パスワード：XAMPPはパスワード無しに修正してください。
  $db_host = "localhost"; //DBホスト
  $pdo = new PDO(
    'mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
  );
} catch (PDOException $e) {
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());
}