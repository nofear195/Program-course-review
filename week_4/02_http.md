## HTTP introduction
1. HyperText Transfer Protocol (超文本傳輸協定)
2. 為全球資訊網的資料通訊基礎: 前後端溝通橋梁
3. 平常上網跟 Server 溝通即是透過 HTTP
4. 為應用層
***
## HTTP 溝通流程
![clint-server](https://i.stack.imgur.com/uKIb7.png)
1. Browser (Clint端) -> 製造 http request -> 傳給 Server
2. Server  -> 處理資料 -> 傳 response 回來給 Browser
3. Browser 只是一個程式，幫助我們與 Server 溝通
4. 脫離 Browser，我們一樣可以發 request 到任何 Server，拿到 response
5. npm 的 requset 套件即可辦到與 Browser 相同的作用
***
## Header & Body
1. Header :放額外資訊
2. Body : 放主要內容
3. requset & response 都放著 Header & Body，分別帶著不同的資訊
***
## HTTP request methods
[Reference  MDN](https://developer.mozilla.org/zh-TW/docs/Web/HTTP/Methods)
1. `GET`: 使用於取得資料
2. `POST`: 提交狀態
3. `PUT`: 改變資源
   * 傳統與 `PATCH`相似，但現在混合使用，須看文件規定
   * `PUT`: PUT 的內容會取代原本所有的內容
   * `PATCH`: 針對指定內容進行修改
4. `DELETE`: 刪除資源
***
## HTTP response status codes
[Reference  wikipedia](https://zh.wikipedia.org/wiki/HTTP%E7%8A%B6%E6%80%81%E7%A0%81)

![How to remember HTTP status codes](https://drtomcrick.files.wordpress.com/2017/04/http-status-code-cheat-sheet1.png)
1. `1xx`: clint 端要進行一些的處理，較少見
   * `101 Switching Protocol`
2. `2xx`: 表示成功，較常見
   * `200 Ok`: 表示請求成功、被接受
   * `204 No content`: Server 成功處理請求，沒有返回任何內容，eg: 刪除資源成功，沒有任何資源要回傳
3. `3xx`: 重新導向
   * `301 Move Permanently`: 被請求的資源已永久移動到新位置，
   * 若 Browser 收到 `301`，其伴隨一個 header 為 Location: new address，下次要發送 request 到舊位置時，Browser 會自動導向新的位置
   * `302 Found`: 被請求的資源暫時移動到新位置
   * 與 `301`相似，差別在`302`依舊會先導向舊位置詢問，在看狀況是否要導向新的位置
4. `4xx`: 用戶端錯誤
   * `400 Bad Request`: 明顯的用戶端錯誤，eg:格式錯誤、無效的請求訊息
   * `404 Not Found`: 請求的資源沒有在 Server上發現
5. `5xx`: 伺服器錯誤
   * `500 Internal Server Error`: Server 端出現了錯誤，eg: 搶演唱會票門票
   * `503 service Unavailable`: Server 維護或過載，目前無法處理請求
***
## 實作一個簡易 HTTP Server
1. 利用 node.js 引用 npm 內建的 library : `http`
2. 根據要 request 的資源，決定要給怎樣的 response
3. 要有 status codee 與 header 資訊，才能知道要如何回應
```JavaScript
var http = require('http');

var server = http.createServer(function(req, res){ //建立 Srver 及其函數
  console.log(req.url);
//以下是不同頁面及其作用
  if (req.url === '/') {  //根目錄
    res.write('welcome!');
    res.end();
    return;
  }
  if (req.url === '/hello') {
    res.write('hello');
    res.end();
    return;
  }
  if (req.url === '/redirect'){
     res.writeHead(302,{
       'Location': '/hello';
     })
     res.end();
     return;
  }
  res.writeHead(404);
  res.end();
  })

server.listen(5000); // port (服務代碼)
// 跑 node Server檔名 (停止指令:control +c )
// 在 Browser 輸入 localhost:5000/hello 會出現 hello
```
