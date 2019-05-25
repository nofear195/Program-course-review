## 綜合示範: 動態表單通訊錄
### demonstration
```
<div>
  <button class='add-btn'>新增聯絡人</button>
</div>
<div class='contacts'>
  <div class='row'>
     姓名 : <input name='name'/>
     電話 : <input name='phone'/>
     <button class="delete">刪除</button>
     // 刪除
  </div>
</div>
<script>
// 新增聯絡人，tip: 只要新增 row 即可
  document.querySelector('.add-btn').addEventListener('click',
    function() {
      const div = document.creatElement('div')
      div.classList.add('row')
      div.innerHTML = `
      姓名 : <input name='name'/>
      電話 : <input name='phone'/>
      <button class="delete">刪除</button>
      `
      document.querySelector('.contacts').appendChild()
    }
  )
// 刪除聯絡人，tip: 只要找到刪除按鈕的 parent 即可 (使用事件代理的方法)
// [closest 用法](https://developer.mozilla.org/en-US/docs/Web/API/Element/closest)
  document.querySelector('.contacts').addEventListener('click',
    function(e) {
      if (e.target.classList.contains('delete')) {
        document.querySelector('.contacts').removeChild(
          e.target.closest('.row'))

      }
    }
  )
</script>
```
