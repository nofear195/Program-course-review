## 純文字與自定義格式
1. 好處:可自訂義格式
2. 壞處；要自己寫出可以處理相對應格式的 function
3. 一般來說不會用純文字格式，常用 XML 與 JSON
***
## XML
1. Extensive Markup Language (XML)
2. 用標籤的方式來呈現資料，與 html 相似
3. 使用程度逐漸被 JSON 取代
```XML
<?xml version = "1.0" encoding = "UTF-8"?>
<user>
  <id>2</id>
  <firstName>Janet</firstName>
  <LastName>Veaver</LastName>
  <avatar>http://s3.amazonaws.com/uifaces/faces/twitter/josephstein/128.jpg</avatar>
</user>
```
***
## JSON
1. JavaScript Object Notation (JSON)
2. 基於 JavaScript 的物件所產生的一個資料格式
3. 與 JavaScript 相容性極高，最為直覺
4. 內容看起來與 JavaScript Object 相似，但有其規範
5. key & value 皆放在 " " 內
   * object : { name :'hello'} 
   * JSON   : {"name": "hello"}
6. 資料大小因為沒有標籤，所以比 XML 小
7. `JSON.parse(str)`: 將 JSON 格式的字串轉為 JavaScript 的 object
8. `JSON.stringify(object)`:將 JavaScript 的 object 轉為 JSON 格式的字串
9. 任何資料格式在任何語言內都可處理對應格式的 library，而 JSON 最常被使用
10. (https://github.com/Lidemy/mentor-program-3rd/tree/master/examples/week4)
