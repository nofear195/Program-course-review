<?php
  require_once('./conn.php'); 
  //引入連線到資料庫的程式碼，可直接使用 conn.php 內的變數

  $title = $_POST['title'];
  $desc = $_POST['description'];
  $salary = $_POST['salary'];
  $link = $_POST['link'];
  /*
    echo $title . ' ' . $desc . ' ' . $salary . ' ' . $link;
    確認有沒有拿到資料
  */
  if (empty($title) || empty($desc) || empty($salary) || empty($link)) {
      die('請檢查資料');
  }
  /*
    empty():判斷該值是否為空
    die(): 使之後的程式瑪不會執行
    加入上述條件判斷式，可確保之後使用的變數一定含有資料
  */

  // 連線進入資料庫的程式碼時常會重複使用到，故將之獨立成 conn.php
  
  // 執行 sql insert 指令
  $sql = "INSERT INTO jobs(title, description, salary, link) VALUES('$title',
          '$desc', '$salary', '$link')";
  //echo $sql; 確認指令正確
  $result = $conn->query($sql);
  
 //判斷是否寫入成功
  if ($result) {
      header('Location: ./admin.php');
      // 寫入成功後，導向 admin.php
  } else {
      echo "failed," . $conn->error;
  }
?>
