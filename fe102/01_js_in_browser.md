## 在網頁寫程式關注的三大面向
1. 介面: 如何改變介面，eg: 用 js 改變 html、css
2. 事件: 如何監聽事件並做出反應，eg: click 後的反應
3. 資料: 如何與 Server 交換資料
***
## JavaScript 與 borwser 的溝通
1. JS 執行環境:
   1. 在 node.js (執行環境) 上執行: `node + 檔名`
   2. 在 browser 上執行
      * 在 html檔案內加入`<script></scripi>`並在標籤內撰寫程式
      * srcipt 標籤放置位置會因為 JS 是由上而下逐行解譯，而影響執行後的結果
      * 通常將`<script></srcipt>` 放置在`</body>`前
      * `<srcipt src="./index.js"></scripi>`，將 js 獨立成一個檔案，再用 src 連結
   3. 在 node.js 與 borwser 上執行 js 的差異
      * 兩者語法皆為 JavaScript
      * 兩者為不同的執行環境，在支援度上有所不同
      * eg: node.js 上 `require('')` 用法，在 borwser 不支援
2. DOM，Document Object Model

    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/DOM-model.svg/800px-DOM-model.svg.png" width="70%" height="70%" alt="DOM" align="center">

   * 是 html、xml 和 SVG 文件的程式介面
   * 可以理解成把 Document 轉換成 Object，有階層的結構
   * DOM 為 borwser 與 JS 之間的橋樑，讓 JS 可以與 browser 做溝通
   * JS 可以透過 DOM 取得元素，並改變元素
3. 選取想要的元素，getElement
   * document 為 browser 提供的特殊物件，並將很多的 function 放在 document 上
   * 因為這些元素都是放在 document 上，所以接續`document.`後面使用
   * `document.getElementsByTagName('')`: 獲取所有此 tag name 的元素
   * `document.getElementsByClassName('')`: 獲取所有此 class 的元素
   * `document.getElementById('')`: 獲取所有此 id 的元素
   * `document.querySelector('')`； 獲取第一個符合 css selector name 內的元素
   * `document.querySelectorAll('')`:選取所有符合 css selector name 內的元素
4. 改變元素的 CSS
   1. `變數.style.屬性='屬性值'`: eg: element.style.background='red'
      * "style." 後方屬性內容不可含有 "-"，即 JS 內 object 的用法
      * 上述解決方法可用 [] 將屬性以字串的方式包裹，或是以 "camel case" 方式遇到新的單詞其開頭轉大寫
      * eg: 可用 `.style['padding-top']`、`.style.paddingTop` 代替 `.style.padding-top`
      * 實作上選取到元素再用 ".style" 改變元素 CSS ，其程式或過於冗長，會傾向分開寫，較少使用此方法
   2. * 先改變 class 在讓 class 負責不同的 style
      * 用 JS 動態加入 class: `變數.classList.add('class name')`
      * 用 JS 動態移除 class: `變數.classList.remove('class name')`
      * 用 JS 動態切換加入移除 class: `變數.classList.toggle('class name')`
      * 此作法較為常用
5. 改變內容
   1. `變數.innerText='值'`: 改變元素內的文字內容
   2. `變數.innerHTML='值'`: 改變元素標籤內所有的內容，不含元素自身標籤
   3. `變數.outerHTML='值'`: 改變所有含元素本身標籤的所有內容，可以變成一個新的元素
6. 插入與刪除元素，
   * appendChild 與 removeChild 前要先知道其 parent
   * `變數.removeChild(document.querySelector('變數 child'))`: 移除元素內的 child
   * `document.creatElement('標籤')`: 新增元素
   * `document.creatTextNode('文字')`: 新增純文字
   * `變數1.appendChild('變數2')`: 在變數1的元素內的最後面，新增變數2的元素
***
## JavaScript 網頁事件處理
1. 事件監聽，event listener
   * `變數.addEventListener('event name', callback function)`
   * event: 要觸發事件的名稱，有 click、scroll、keypress、keydown 等
   * anonymous function: 任何沒有 function name 的 function 皆可稱之，與 callback function 沒有關係
   * callback function 可分為兩種
     1. 沒有使用傳入參數，且大多為 anonymous function : `function() {}`
     2. 有使用傳入參數 (event、e、任取): `function(e) {}`
        * 參數 (event、e、任取) 為 borwser 呼叫而來的變數，進而拿到跟事件相關的東西
        * eg: e.target: 觸發了哪個元素
2. 表單事件處理，submit
   * 在表單送出前，對事件作處理，eg:使表單不要送出，通常用於表單驗證
   * `e.preventDefault()`: 阻止 browser 預設行為，可用於密碼的驗證，超連結等
   ```
   <form class='login-form'>
      <div> username: <input name='username' /> </div>
      <div> password: <input name='password1' type='password' /> </div>
      <div> password again: <input name='password2' type='password' /> </div>
   </form>
   <script>
      const element = document.querySelector('.login-form');
      element.addEventListener('submit', function(e){
        const input1 = document.querySelector('input[name=password1]');
        const input2 = document.querySelector('input[name=password2]');
        if(input1.value !== input2.value) {
          alert('密碼不同');
          e.preventDefault();
        }; // 驗證兩次的密碼輸入是否相同
        })
   </scrtpt>
   ```
3. 事件傳遞機制: 捕獲與冒泡

   <img src="https://www.w3.org/TR/DOM-Level-3-Events/images/eventflow.svg" width="100%" height="500px" alt="event dispatch and DOM event flow" align="center">

   * capture
   * jkljk
   * kljkld
4. dlkfl;kl
5. dfkdl;fk'sdfkdl
6. kd;lfk
7. fdkl;
