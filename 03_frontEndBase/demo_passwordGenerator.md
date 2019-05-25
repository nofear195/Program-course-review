## 綜合示範: 簡易密碼產生器
### demonstration
```
// 選擇密碼的種類
<div class='app'>
   <div><label><input type='checkbox' name='en '/>英文</label></div>
   <div><label><input type='checkbox' name='num '/>數字</label></div>
   <div><label><input type='checkbox' name='sp '/>特殊符號</label></div>
</div>
// 產生密碼的按鈕
<div>
   <button class='btn-generate'>產生</button>
</div>
// 結果
<div class='result'></div>
<script>
   // 所有事件皆起始於按鈕按下，所以在按鈕處設置監聽
   document.querySelector('.btn-generate').addEventListener('check',
     function() {
       // 先收集有勾選的字串，再根收集到的字串內容隨機產出字串
       let availableChar = ''
       // 判斷字串是否被勾選，若有，則將字串加入 availableChar
       if (document.querySelector('input[name=en]').checked) {
         availableChar +='abcdefghijklmnopqrstuvwxyz'
       }
       if (document.querySelector('input[name=num]').checked) {
         availableChar +='0123456789'
       }
       if (document.querySelector('input[name=sp]').checked) {
         availableChar +='!@#$%*()'
       }

       let result = ''
       for (let i=0; i<10; i++) {
         // 產生 0 ~ availableChar.lengh-1 的亂數
         const number = Math.floor(Math.random * availableChar.length)
         result += availableChar[number]
       }

       //將結果寫回 .result
       ducument.querySelector('.result').innerText = result
    }
   )
</script>
```
### optimization 1
```
  ...
<script>
   //將勾選的判斷式寫成 function
   function getChar(name, char) {
     if (document.querySelector('input[name=' + name + ']').checked) {
       return char
     }
   }

   document.querySelector('.btn-generate').addEventListener('check',
     function() {
       let availableChar = ''
       // 帶入 getchar function
       availableChar += getchar('en','abcdefghijklmnopqrstuvwxyz')
       availableChar += getchar('num','0123456789')
       availableChar += getchar('sp','!@#$%*()')
       ...
</script>
```
### optimization 2
```
// 將資料跟 html 元素放在一起，方便新增
<div class='app'>
   <div><label><input type='checkbox' name='en' data-char="abcdefghijklmnopqrstuvwxyz"/>英文</label></div>
   <div><label><input type='checkbox' name='num' data-char="0123456789"/>數字</label></div>
   <div><label><input type='checkbox' name='sp' data-char="!@#$%*()"/>特殊符號</label></div>
</div>
<div>
   <button class='btn-generate'>產生</button>
</div>
<div class='result'></div>
<script>
   document.querySelector('.btn-generate').addEventListener('check',
     function() {
       let availableChar = ''
       // 將所有勾選的選項放入 availableChar
       const elments = document.querySelectorAll('input[type=checkbox]')
       for(let i=0; i<element.length; i++) {
         if (elements[i].checked) {
           availableChar += elements[i].getAttribute('add-char')
         }
       }
       ...
 </script>
```
