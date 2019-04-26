## 用 console.log()
1. 需自己舉例，一個一個測
2. 要測 edge case(極端案例)，以保程式正確
3. 無法規模化
***

## Jest
1. [下載與使用範例](https://jestjs.io/docs/en/getting-started.html)
2. 只安裝在專案底下，非電腦全域
3. `npx jest 檔案名`: 在專案底下找 jest
4. 在 package.json 中的 "scripts" 內加入 or 修改成 "test": "jest"
5. 通常要測試的檔案名稱為: '原檔案.test.js'，其內容為
```JavaScript
var variable  = require('./檔案路徑');

test('測試名稱', function(){
  expect(測試項目).toBe(期望測試的結果);
  })
```
6. `test('test name',function(){})`:可依需求加
7. `describe('test name',function(){test, test, ...})`: 將同類型的 test 包裝起來
8. test 為 unit test :一個一個測試
***
## TDD
1. 為 Test-driven Development (測試驅動開發) : 為一種開發方式
2. 與傳統的先寫完程式碼在寫測試碼不同
3. 採先寫程式架構，寫測試碼，最後在寫相對應的程式碼
4. 在寫測試碼時，要將 edge case 考慮進去
