## API
1. Application Programming "Interface" (應用程式介面)
2. Interface: 與他人溝通的方式
3. API: 定義一個資料交換的格式，方便讓雙方交換資料
4. 使用 API，存取對方的資料
5. 提供 API，讓對方依照自己定義去存取指定的資料，可以有效進行控
6. 在電腦上存取檔案，便是由 OS 所提供的 API
7. [什麼是 API？](https://www.youtube.com/watch?v=zvKadd9Cflc)
8. [什麼是API，接口？](https://www.youtube.com/watch?v=Pbx4elFAXR0)
***
## API 與 WebAPI
1. 提供 API 不一定要由網路，而 WebAPI 則一定是從網路
2. WebAPI => HTTP API (透過 HTTP 協定的 API)
3. 透過 HTTP 協定的 API，也就是透過 HTTP 協定由 request & response 一來一往組成
4. `SDK (Software Development kit)`:將根據 HTTP 協定產生的東西打包起來的工具包
***
## 串接 HTTP API 實戰
1. (https://reqres.in): 提供測試用的 API
2. 使用 node.js 內建 library: `request`、`process` (都需先 npm install)
3. `process`: npm 內建 library，用於提取輸入的參數
4. `process.argv[i]`: 輸入參數的第幾位內容，argv (argument variable)
5. 串接 API 只要讀懂相關文件，再發出 request，即可得到相對應的 response
6. (https://www.npmjs.com/package/request)
```JavaScript
const request = require('request');
const process = require('process');

console.log(process.argv);
//呈現一個陣列對應 node file.js 3
/*
[ 'C:\\Program Files\\nodejs\\node.exe', ==> node
  'C:\\Users\\CS7565\\Desktop\\file.js', ==> file.js
  '3' ==> 3 ]
*/
request(
  'https://reqres.in/api/users/' + process.argv[2],
  // node file.js 3  => id 為3 的 user
  function (error, response, body) {
    console.log(body);
  }
  );
//跑 node index.js 即可得當返回的資料，為 JSON 格式
```
