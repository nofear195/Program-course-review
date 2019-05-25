## curl
1. (https://curl.haxx.se)
2. `curl url`:發一個 GET request 到網址去，然後返回其 response
3. `curl url > name.html`:將 response 導向至 html (下載頁面)
4. `curl -I url`: 只要該頁面的 header
5. 可用 command line 或 node.js request library 操作 curl
6. 任何網路的相關操作皆可用 curl 搞定
7. 可當作測試 HTTPS Server 是否是好的
8. (https://stackoverflow.com/questions/7172784/how-do-i-post-json-data-with-curl-from-a-terminal-commandline-to-test-spring-res)
```javascript
// 在 commandline 輸入
curl --header "Content-Type: application/json" \
  --request POST \
  --data '{"name":"tozy","job":"xyz"}' \
  http://reqres.in/api/users
// output
{"name":"xyz","job":"xyz","id":"993","creatAt":"2019-04-07T08:24:10.909Z"}
```
***
## 常用指令
1. `nslookup url`:解析 domain name、ip address
2. `ping url`: 會一直不斷送封包，去測試是否可以連接到該網站
3. `telnet donmain name`:用途
   * ping 一個指定的 port
   * 傳遞資料
   * ptt.cc (建立於 telnet 的協定) => `telnet ptt.cc +port(default:23)`
