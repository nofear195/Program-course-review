## HTML basic
1. [網頁模板網站](https://html5up.net)
2. index.html 通常代表主頁面的檔案
3. .html 是 Browser 能辨識的純文字檔案，主要是依賴 Browser 去呈現網頁的面貌
4. HyperText Markup Language (html，超文本標記語言)，非程式語言
5. HTML 內 標籤`< >`是成雙成對
   * 開頭標籤: `< >`
   * 結束標籤: `</ >`
   * 開頭與結束標籤若無內容則可以合併成: `< />`， '/' 大多可略
   *`<meta charset="utf-8" />`: 方法 => meta，屬性(attribute) => charset(屬性名稱) + "utf-8"(屬性內容)
6. `<!DOCTYPE HTML>`:宣告使用最新 HTML 格式
7. HTML 基本組成: `<html>、<head>、<body>`
   ```
   <html>
      <head>
      </head>
      <body>
      </body>
   </html>
   ```
8. `<!-- -->`:註解
***
## Tags in `<head></head>`
1. `<meta />`:提供網頁內容的資給瀏覽器或搜尋引擎
   * eg: 網頁內容的描述、網頁重要關鍵字、網頁編碼等
   * 也可標示網頁作者、網頁發布時間、所使用的編輯器等較不重要的資訊
   * `<meta charset="utf-8" />`: 表示網頁編碼為 utf-8 (萬國碼)
2. `<title></title>`: 網頁標題

***
## Tags in `<body></body>`
1. 標題: `<h1></h1>`，Heading，由大至小有 h1-h6
2. 段落: `<p>`， paragraph
   * [Lorem Ipsum](https://www.lipsum.com): 產生文字，用來測試版面大致樣貌
3. 區塊: `<div></div>、<span></span>`，將包含的元素視為一個區塊
   * `<div>`: division，區塊元素，標籤前後會自動換行
   * `<span>`: 行內元素，標籤前後不會換行，常用於對文字做特定的動作
4. 圖片: `<img  title=" " src=" " alt=" " />`，image
   * title=" " : 滑鼠移動到圖片上方所顯示的文字
   * src= " " : source，圖片網址
   * alt= " " : alternitive，當圖片無法顯示，所呈現的替代文字
5. 清單: list
   * `<ul>`: unordered list
   * `<ol>`: ordered list
   * `<li>`: list item，包裹在 `<ul>、<ol>` 內
6. 保留完整格式: `<pre></pre>`，preformatted text，保留程式碼原本格式
7. 換行: `<br />`， line break
8. 表格: table
   * `<table></table>`: 表格，在最外層，包裹所有內容
   * `<tr></tr>`: table row，包裹 th or td
   * `<th></th>`: table header，表格標題，放在第一個 row
   * `<td></td>`: table cell，表格內容
9. 超連結: `<a href=" " target=" "></a>`，anchor，錨點
   * href= " ": hypertext reference，連結參考位置
   * taget=" ": 連結開啟方式，常用的有
     1. target="_self": 在目前所在的視窗中開啟連結，為預設值
     2. target="_blank": 開啟新的分頁並在其頁面開啟連結
   * 可以連結到網頁外面的位置與網頁內部的位置(網頁導覽)
   * 連結到網頁內部時，需將連結的目標設置 `id=" "`，本身設置 href="#id內容"
10. 語意化標籤: Semantic elements，便於判讀
    * (https://developer.mozilla.org/en-US/docs/Glossary/Semantics)
    * (https://www.w3schools.com/html/html5_semantic_elements.asp)
    * `<main></main>`: 包裹網頁重要內容
    * `<nav></nav>`: navigation，導覽列
    * `<footer></footer>`: 網頁底部資訊
11. 嵌入他人網頁:`<iframe src=" " width=" " height=" "/>`
    * 大多網站的 Server 會設定拒絕被嵌入頁面
12. 表單: form
    * `<form></form>`: 表單，在最外層，包裹所有內容
    * `<input type=" " />`: 表格的輸入框，常見的 type 有
      1. type="text": 純文字
      2. type="submit": 提交按鈕，後面可加 `value=" "`，修改按鈕的內容
      3. type="password":在頁面上自動隱蔽輸入內容
      4. type="email"
      5. type="date"
      6. type="radio":單選框，後面可加`name= " "`，多個選項的類別，`id=" "`，選項 id ，`<label for="id 名稱"></label>`
      ```
      <div>
        gender:<input type="radio" name="gender" id="male" />
        <label for="male">male</label>
        <input type="radio" name="gender" id="female" />
        <label for="female">female</label>
      </div>
      ```
      7. type="checkbox":多選框，後面內容與 radio 相同
      8. [more input types](https://developer.mozilla.org/en-US/docs/Web/HTML/Elements/input)
***
## SEO
1. Search Engine Optimization，搜尋引擎優化
2. 目的: 利用固定格式化的方法，主動協助 search engine 理解你的網頁
3. 相關 meta tag 有 keywords、description
4. [The Open Graph protocal](ogp.me) : 讓其他 social media 更理解這個網站
   * 用法: eg:`<meta property="og:title"` => 用固定格式去描述網頁
   * 常用於 Facebook
   * [檢視網頁在 Facebook 看起來的樣貌](https://developers.facebook.com/tools/debug/)
5. JSON-ld: 與 ogp 目的相似
   * JSON for Linking Data
   * (https://json-ld.org)
   * 通常是給 Google search engine 使用
6. robots.txt: 給網頁爬蟲看的檔案
   * 通常放於根目錄底下(直接在網址後面加 robots.txt)
   * 目的:告訴網頁爬蟲允許跟不允許做的事
   * sitemap.xml: 網站的地圖，網站內相關的連結，供 Search engine 使用
7. `<link rel="alternate" hreflang="en" href=" ">`: 給其他語言使用的網站
8. `<meta property="al:ios:app_name" content=" "`: 設定在ios 上瀏覽會跳至 app store 下載
9. [Google SearchConsole](https://search.google.com/search-console/about): 看網頁成效
***
## Escape
1. 目的: 跳脫，在網頁顯示帶有 html 格式的標籤，以純文字顯示
2. `&` 替換成 `&amp;`
3. `<` 替換成 `&lt;` (less than)
4. `>` 替換成 `&gt;` (greater than)
5. eg: `<meta /> ==> &lt;meta /&gt;`
***
## 切版
1. 用 div 把東西包裹起來，可以將元素變成一個視覺上的區塊，方便管理
1. 將版面用`<div class=" ">`切割一個個大區塊，在向下細分成一個個的小區塊
   ```
   <div class="post">
      <div class="post__header"> // 用 __ (兩底線)命名較佳，較不會重複
      </div>
      <div class="post__option">
      </div>
   </div>
   <div class="preview">
   </div>
   ```
