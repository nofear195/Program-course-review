<?php
  require_once('./conn.php');
  $id = $_GET['id'];

  $sql = "SELECT * FROM jobs where id = " . $id;
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Job board 職缺報報</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <h1>Job board 職缺報報 - 編輯職缺</h1>
        <a href="./admin.php">回到管理頁</a>
        <form method="POST" action="./handle_update.php">
            <div>職缺名稱:<input name="title" value="<?php echo $row["title"] ?>"></div>
            <div>職缺描述:<textarea name="description" rows="10"><?php echo $row["description"] ?></textarea></div>
            <div>薪水範圍:<input name="salary" value="<?php echo $row["salary"] ?>"></div>
            <div>職缺連結:<input name="link" value="<?php echo $row["link"] ?>"></div>
            <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
            <!-- 設定type="hidden" 在畫面中隱藏，將 id 傳過去 handle_update.php 去指定要更新哪個 id 的資料-->
            <input type="submit" value="送出">
        </form>
    </div>
</body>
</html>
