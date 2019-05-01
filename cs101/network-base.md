## 網路基礎概論
1. ip address: 由四個數字組成，range: 0-255，eg:101.13.113.80
2. domain: 網域，較方便使用，即我們常用的網址，eg: google.com
3. **D**omain **N**ame **S**ystem (DNS): 將 donmain name 轉成 ip address
4. Google 提供免費的DNS server
5. 前後端的差異
   * 前端：負責打開網頁後，所有可以看的到的畫面、按鈕、功能等等的工具設置實現
   * 後端：負責網頁看不見的部份，並根據由前端接受到的資訊，進行對應的處理，最後再把結果傳回前端
6. 假設我今天去 Google 首頁搜尋框打上：JavaScript 並且按下 Enter，請說出從這一刻開始到我看到搜尋結果為止發生在背後的事情。
   1. Server 收到來自瀏覽器搜尋有關 JavaScript 的 request
   2. Server 詢問資料庫有關 JavaScript 的資料
   3. 資料庫將找到的資料回傳給 Server
   4. Server 再將資料回傳給瀏覽器
   5. 瀏覽器解析傳回的資料並呈現解析後的內容
***

## 內網與外網
1. 內網與外網: 由 ip 分享器建置的一個環境(內網)，對內有各自分配到的不同虛擬 ip address，對外(在外網)共用一個 ip address
2. Virtual Private Network (VPN): 先連到某個 server，再由其 server連接到其他地方，eg: 中國翻牆
***

## 登入功能 (tool: session & cookie)
1. 登入功能:
   1. 瀏覽登入網頁，發送 Request
   2. Server 生到回應，回應 request
   3. Browser parse Response，出現登入頁面
   4. 填入帳號密碼，送出
   5. Browser 送出 Request，並且帶有帳號密碼
   6. Server 收到請求，去資料庫查詢是否有紀錄
   7. 資料庫返回結果
   8. Server 回傳 Response，登入成功
   9. Browser parse Response，出現登入成功頁面
2. 登入完成以後，Server 如何知道剛剛的 request 跟現在是同一個人?
   1. 背後原理與"識別證"相同，利用 Session 系統
   2. Session 表格儲存於 Server
   3. 表格 eg: Session ID ==>12fd5f1fd21，內容 ==> username = bob
   4. cookie: 讓 Browser 儲存資訊的地方
   5. server 可以要求 Browser 設置 cookie，每個 Request。Browser都須帶上對應的 cookie
   6. Server 只認 session id ，不認 user
***

## about Browser
1. 網頁分為三部分: HTML、CSS、JavaScript，由 Browser parse
2. HTML: 網頁的內容、骨架、身體，是一個網頁最重要的一部分
3. CSS: 網頁的衣服，裝飾網頁，與網頁看起來的樣子有關
   * (https://www.csszengarden.com/tr/zh-tw/)
4. JavaScript: 網頁的互動，程式碼，讓網頁可以跟使用者互動
