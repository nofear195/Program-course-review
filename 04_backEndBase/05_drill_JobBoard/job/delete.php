<?php
  require_once('./conn.php');
  // 使用 GET 方式帶入資訊 eg: url?key=value&a=b
  $id = $_GET['id'];
  //  echo $id; 確認拿對資料
  $sql = "DELETE FROM jobs WHERE id = " . $id;
  if ($conn->query($sql)) {
      header('Location: ./admin.php');
  }else {
      echo "failed:" . $conn->error;
  }
?>