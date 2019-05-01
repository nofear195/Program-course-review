## API
1. Application Programming "Interface" (應用程式介面)
2. Interface: 與他人溝通的方式
3. API: 定義一個資料交換的格式，方便讓雙方交換資料
4. 使用 API，存取對方的資料
5. 提供 API，讓對方依照自己定義去存取指定的資料，可以有效進行控
6. 在電腦上存取檔案，便是由 OS 所提供的 API
***
## API 與 WebAPI
1. 提供 API 不一定要由網路，而 WebAPI 則一定是從網路
2. WebAPI => HTTP API (透過 HTTP 協定的 API)
3. 透過 HTTP 協定的 API，也就是透過 HTTP 協定由 request & response 一來一往組成
4. `SDK (Software Development kit)`:將根據 HTTP 協定產生的東西打包起來的工具包
***
## 串接 HTTP API 實戰
1. (https://reqres.in): 提供測試用的 API
2. 使用 node.js 內建 library: `request`、`process`
3. 串接 API 只要讀懂相關文件，再發出 request，即可得到相對應的 response
```JavaScript
const request = require('request');

request(
  'https://reqres.in/api/users/2',
  function (error, response, body) {
    console.log(body);
  }
  );
//跑 node index.js 即可得當返回的資料
//在網址後面加入 '/id' 在跑 node index.js，即可得 ID 的值
```
