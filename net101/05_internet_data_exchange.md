## SOAP
1. Simple Object Access Protocal (SOAP)
2. 除了 API 外，其中一種與 Server 進行溝通的方式
2. 透過 XML 進行資料交換
3. (https://soap.org/learn/api/soap-vs-rest-api.html)
4. (https://github.com/vpulim/node-soap)
5. 大部分的分類: SOAP 與 SOAP 以外的 HTTP API，但還有更多的 Protocal 進行資料交換，也可以自訂義資料格式
***
## RESTful
1. 不是一個協定，只是一個 "風格"
2. 建議網址的使用對應其 HTTP request methods

說明  |request method   |對應網址(舊)|對應網址(新)
--|---|---|--
新增使用者 |POST   | /new_user | /users
刪除使用者 |~~POST~~ => DELETE | /delete_user | /user/:id
查詢使用者 |GET   | /users_data/:id | /users/:id
使用者列表 |GET   | /users_list | /users
更改使用者 |~~POST~~ => PATCH | /update_user | /users/:id
***
## API 串結實戰 again
1. (https://github.com/request/request)-> request.METHOD()
2. (https://reqres.in)
```JavaScript
const request = require('request');

request.delete(
  'https://reqres.in/api/users/2',
  fuction (err, response, body) {
    console.log(response.statusCode);
    // 204，表示成功刪除，body空了，沒有東西回傳
  }
  );
request.patch(
  {
    url:'https://reqres.in/api/users/2',
    form: {
      name:'hello'
    }
  },
  function (error, response, body) {
    console.log(response.statusCode); // 200，表示成功
    console.log(body);
    // {"name":"hello","updatedAt":"2019-04-07T07:59:12.4172"}
  }
  );
```
