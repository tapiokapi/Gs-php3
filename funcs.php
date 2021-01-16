<?php

// XSS対策
function h($value) {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

//リダイレクト関数: redirect($file_name)
function redirect($file_name) {
  header("Location: " . $file_name);
  exit();
}

