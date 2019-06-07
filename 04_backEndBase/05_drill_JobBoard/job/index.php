<?php require_once('./conn.php');// 引入 conn.php ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Job board 職缺報報</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <h1>Job board 職缺報報</h1>
        <div class="jobs">
           <!--利用 php 執行原理撈出資料-->
           <?php
             // 從 jobs table 中，選擇所有東西並依照 created_at 做降冪的排序
             $sql = 'SELECT * from jobs ORDER BY created_at DESC';
             $result = $conn->query($sql);

             /*
                $result->num_rows: 回傳有幾筆資料
                if ($result->num_rows > 0) { }: 回報是否有拿到資料
                $result->fetch_assoc(): 拿到一筆資料，若拿不到資料則回傳 false
                while($row = $result->fetch_assoc()) { }: 若有拿到資料(true)，則可以一直把 $row 的東西拿出來
                括號的使用 (" ")、(' ') 盡量統一
             */
             if ($result->num_rows > 0) { 
                 while($row = $result->fetch_assoc()) { 
                    echo "<div class='job'>";
                    echo   "<h2 class='job__title'>" . $row['title'] . "</h2>";
                    echo   "<p class='job__desc'>" . $row['description'] . "</p>";
                    echo   "<p class='job__salary'>薪水範圍︰" . $row['salary'] . "</p>";
                    echo   "<a class='job__link' href='" . $row['link'] . "'>更多資訊</a>";
                    echo   "</div>";
                 }
             }
            ?>
        </div>
    </div>
</body>
</html>
