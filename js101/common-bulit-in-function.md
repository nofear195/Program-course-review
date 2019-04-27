## Number type
[Reference](https://developer.mozilla.org/zh-TW/docs/Web/JavaScript/Reference/Global_Objects/Number)
1. `Number(string)`: 字串轉數字
2. `.toString()`: 數字轉字串
    * eg. a.toString or 用 (a + '') 轉字串
3. `parseInt(string,index)`: 解析成整數
   * index: 表進位，default:10 進位，為 optional)
4. `parseFloat(float number)`: 解析成浮點數
5. `numObj.toFixed([digits])`: 取到小數點下幾位數(digits)，四捨五入
6. `Math.ceil()`: 回傳大於等於所給數字的最小整數 ceiling
7. `Math.floor()`: 回傳無條件捨去後的最大整數 floor
8. `Math.round()`: 回傳四捨五入後的近似值
9. `Math.sqrt()` : 開根號
10. `Math.abs()` : 絕對值
11. `Math.max() `: 回傳最大值
12. `Math.min() `: 回傳最小值
13. `Math.pow(base, exponent)`: 開次方
14. `Math.random()`: 產生 0-1 區間的隨機數(含 0 ，不含 1)
    * eg. `Math.floor((Math.random()*10+1))`: 產生 1-10的隨機數
***

## String type
[Reference](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String)
1. `toLowerCase()`: 字串變小寫
2. `toUpperCase()`: 字串變大寫
3. `str.charCodeAt(index)`: 取得字串對應位置(0~字串長度-1)之ASCII code
    ```JavaScript
    var code = 'Aa'
    var acode = code.charCodeAt(0)
    var bcode = code.charCodeAt(1)
    console.log(acode) // A=>65
    console.log(bcode) // a=>97
    // 97-65=32 =>小寫=大寫+32 (可用於大小寫轉換)
    console.log('g'.charCodeAt(0) - 'G'.charCodeAt(0)) // =32
    ```
4. `String.fromCharCode(num1[, ...[, numN]])`: 將數字轉回對應的code
   * eg. console.log(String.fromCharCode(65)) // =>A
5. 字串可比大小 eg. 判斷小寫字母 `char >='a' && char <='z'`
6. `str.indexOf(searchValue, fromIndex)`:  尋找字串內某字串是否存在，存在則回傳該字串第一個字的位置，不存在則回傳(-1)
   * fromIndex: 搜尋起始位置，為 optional
   * eg. 'Blue Whale'.indexOf('Whale', 5) // returns  5
   * eg. 'Blue Whale'.indexOf('Whale', 7); // returns -1
7. `var newStr = str.replace(regexp|substr, newSubstr|function)`: 取代字串
   * 因為 replace 不會更改原字串，所以要用新的變數 assign
   * \[substr\]: 只找第一個符合的字串取代
   * \[regexp\]: 正規表達式，(語法: /substr/gi g:global)，找所有符合的字串並取代
8. `str.split([separator[, limit]])`； 將字串切成 array
   * separator: 用甚麼來分字串( , or '' or...)，default不切，optional
   * limt: 切到第幾串
   * 常用。方便處理字串
9. `str.trim()`: 去掉字串前後空格，不影響源自串
10. `str.length`: 字串長度，可如同 array 存取第幾個字串，str[i]
11. `str.repeat(count)`: 增加字串內容幾次
***

## Array type
[Reference](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array)
1. `arr.join([separator])`: 將陣列中的每個元素間的空格用 separator 隔開，default:","，回傳型態為"字串"
2. `arr.push()`: 將一個或多個元素加入陣列尾端
3. `arr.pop()`: 移除陣列最後一個元素
4. `var new_array = arr.map(callback function)`: 將陣列元素帶入自訂的 function，回傳至新的陣列中
   * `callback function (currentValue, index, array) {}`
     1. currentValue: 原陣列目前所處理的元素
     2. index: 原陣列目前所處理的元素的索引，為 optional
     3. array: 呼叫 filter的陣列，為 optional
   * map 含有 immutable 機制，不更改原有陣列，所以要新增陣列放置運算後的元素
   * 可無限接續 .map(function)
   * 常用
5. `arr.forEach(function)`: 將陣列元素帶入自訂的 function，不用回傳
6. `var new_array = arr.filter(callback function)`: 將陣列元素帶入自訂的 function，過濾回傳值
   * `callback function (element, index, array) {}`
     1. element: 原陣列目前所處理的元素
     2. index: 原陣列目前所處理的元素的索引，為 optional
     3. array: 呼叫 filter的陣列，為 optional
     4. 若回傳值為 true (>0)，則保留元素至新的陣列
     5. 若回傳值為 false (<=0)，則不保留元素
   * 可無限接續 .filter
   * 常用
7. `arr.reduce(callback function, initialValue)`:將 accumulater 及陣列中每項元素(由左至右)傳入 callback function，將陣列化為單一值
   * `callback function (accumulater, currentValue) {}`
     1. accumulater(累加器): 累積函式傳回值或狀態
     2. currentValue: 目前處理的元素

     ```JavaScript
     var sum = [0, 1, 2, 3].reduce(function (acc ,cur) {
     return acc + cur;
     }, 0); // sum=6
     ```
   * 常用
8. `arr.slice([begin[, end]])`: 提取陣列中的元素
   * begin: 開始提取index處，default:0，可用負數代表從尾項開始，為 optional
   * end: 到 index 前停止提取，不含本身 index，default:最後項，可用負數代表從尾項開始，為 optional
   * eg. arr.slice(2)，從第三個元素開始提取後面全部
   * eg. arr.slice(2,-1)，從第三個元素提取直到最後二個元素
9. `arr.splice(start[, deleteCount[, item1[, item2[, ...]]]])`: 藉由加入新元素、刪除既有元素、刪除既有元素並插入新元素來改變陣列內容
   * 改變原本陣列
   * start: 開始更動index處，default:0，可用負數代表從尾項開始
   * deleteCount: 0 表示加入，省略表示從 start 開始到陣列中最後一個元素都會被刪除，為 optional
   * item1, item2, ...: 從 start 開始，要加入到陣列的元素，省略表示從 start 開始到陣列中最後一個元素都會被刪除，為 optional
10. `arr.sort([compareFunction])`: 排序
    * default 依陣列第一個元素其字串的 Unicode 編碼位置排序
    * compareFunction: 指定一個函式來定義排序，為 optional
    ```JavaScript
    var month = ['March','Jan','Feb','Dec'];
    month.sot(); // output: Array ['Dec','Feb','Jan','March'];
    var array1 = [1, 30, 4, 21, 10000];
    array1.sot(); // output: Array [1, 10000, 21, 30, 4];
    // 範例: 目的由小至大
    //compareFunction(a, b)， 表示原始位置 a 在前面，b 在後面
    function compare1(a, b) {
      if (a === b) return 0;
      if (a > b) return  1; //return >0 (正數) 交換位置
      if (a < b) return -1; //return <0 (負數)不換位置
      // or可寫成 return a-b ? 1 : -1
    }
    function compare2(a ,b) {return a - b;} //直接回傳值讓電腦判斷正負
    ```
11. `Array(a).fill(b)`:產生 a 個元素的陣列，將陣列每個元素都填 b
12. `Array.isArray(value)` : 判斷 value 是否為 Array
    * 回傳值為 true，則 value 為 Array，否則為 false
