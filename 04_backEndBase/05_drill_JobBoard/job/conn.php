<?php
  // 連線進入資料庫的程式碼時常會重複使用到，故將之獨立

  // 寫入資料庫的準備
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'example'; // dbname => database name

  // 使用 new mysqli 連線進入資料庫， conn => connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // 設定編碼，否則會出現亂碼
  $conn->query('SET NAMES UTF8');

  //檢查是否有連線成功， 利用"->" 存取屬性，因為"." 以被使用為字串拚接
  if ($conn->connect_error) {
      die("connection failed" . $conn->connect_error);
  }
?>