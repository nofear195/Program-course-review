## 資料庫系統簡介
1. database system vs Server
   * database system => 程式，專門處理資料的程式
   * Server => 程式，專門處理 request 與 response 的程式
2. 主要價值: 提供方便的介面、指令、語法供使用者作資料的操作與存取
3. 優點: 較傳統的存取檔案的方式更方便、更有效率、更好維護
4. 種類:
   1. Relational database，關聯式資料庫:

        ![Relational database terminology](https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Relational_database_terms.svg/1920px-Relational_database_terms.svg.png)
       ![行（屬性Attribute）和列（值組Tuple）的形式](https://upload.wikimedia.org/wikipedia/commons/8/8d/Relational_model_concepts.png)
       
       SQL term | Relational database term| Description
       ---------|-------------------------|------------
       Table    | Relation or Base relvar | 行與列的集合
       Row      | Tuple or record         | 單一個東西的資料集合
       Column   | Attribute or field      | 列的標籤
      * 一個 table 就是一個關聯，一個資料庫可包含多個 table
      * 藉由不同 table 間的關聯 (eg: 相同 id )獲取所需資料以及將資料切分更精確
      * (https://en.wikipedia.org/wiki/Relational_database)
      * (https://Zh.wikipedia.org/wiki/关系数据库)
      * SQL (Structured Query Language): 關聯性資料庫語言
      * 適用於大多情形
      * 將之實作的有: MySQL、PostgreSQL、MSSQL
      * 同類型的資料庫主要功能、概念大同小異
   2. NoSQL (Not only SQL)
      * 相較於傳統 SQL 固定的儲存型態，存在一些限制，NoSQL 會將一個物件儲存像是 JSON、Object 形式，以彈性換取固定結構的概念
      * 適用於東西繁多、瑣碎且不連續的情形，eg: log(日誌)
      * 將之實作的有: MongoDB
      * (https://zh.wikipedia.org/wiki/NoSQL)
## jkljlk
