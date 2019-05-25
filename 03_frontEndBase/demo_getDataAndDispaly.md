## 綜合示範: 抓取資料並顯示
### Steps
1. 抓取資料
2. 切版
3. 用 JS 動態新增範例
   * 完全與 Server 連動的網頁
### demonstration
1. 抓取資料
```javascript
<body>
<div class='app'></div>
<script>
   const request = new XMLHttpRequest()

   request.addEventListener('load', function() {
     if (request.status >= 200 && request.status < 400) {
       console.log(request.responseText)
     } else {
     console.log(request.status, request.responseText)
     }
   })

   request.onerror = function() {
     console.log('error')
   }

   request.open('GET', 'https://reqres.in/api/users', true)
   request.send()
<script>
</body>
```
2. 切版
   * 依照回傳的資料切版
   * 版面刻好後存留一個做為範例
```javascript
<head>
  <style>
    body {
      font-size: 30px;
    }
    .profile {
      border: 1px solid #333;
      margin-top: 20px;
      display: inline-flex; //並排
      align-items: center; //垂直置中
    }
    .profile__name {
      margin: 0px 10px;
    }
  </style>
<head>
<body>
// 排版與建立範例
<div class='app'>
  <div class="profie">
    <div class="profile__name">Grorge Bluth</div>
    <img class="profile__img" src= " "/>
  </div>
</div>
<script>
  ...
</script>
</body>
```
3. 用 JS 動態新增像範例的版面
```javascript
<body>
  ...
  <script>
     const request = new XMLHttpRequest()
     const container = document.querySelector('.app')

     request.addEventListener('load', function() {
       if (request.status >= 200 && request.status < 400) {
         const response = request.responseText
         const json = JSON.parse(response) // 用 JSON parse data
         console.log(json) //檢閱要拿甚麼樣的 data
         const user = json.data
         for(let i=0; i< user.lenght; i++) {
           const div = document.createElement('div')
           div.classList.add('profile')
           div.innerText = `
             <div class="profile__name">${users[i].first_name} ${users[i].last_name}</div>
             <img class="profile__img" src="${users[i].avatar}">
           `
           container.appendChild(div)
         }
       } else {
       console.log(request.status, request.responseText)
       }
     })

     request.onerror = function() {
       console.log('error')
     }

     request.open('GET', 'https://reqres.in/api/users', true)
     request.send()
  <script>
</body>
```
### 補充
1. client side rendering: 呈現的內容是用 JS 動態新增，所以在原始碼檢視是看不到任何內容
2. client side rendering 缺點 : 很多 search engine 不會自動執行 JS，只會執行 body 的內容，所以看不到有任何東西
