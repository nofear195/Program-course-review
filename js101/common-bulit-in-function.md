##Number type
[reference](https://developer.mozilla.org/zh-TW/docs/Web/JavaScript/Reference/Global_Objects/Number)
1. `Number(string)`: 字串轉數字
2. `.toString()`: 數字轉字串
    eg. a.toString or 用 (a + '')轉字串
3. `parseInt(string,index)`: 解析成整數 +index(表進位，default 10進位)，為 optional)
4. `parseFloat(float number)`: 解析成浮點數
5. `numObj.toFixed([digits])`: 取到小數點下幾位數(digits)，四捨五入
6. `Math.ceil()`: 回傳大於等於所給數字的最小整數 ceiling
7. `Math.floor()`: 回傳無條件捨去後的最大整數 floor
8. `Math.round()`: 回傳四捨五入後的近似值
9. `Math.sqrt()` : 開根號
10. `Math.max() `: 回傳最大值
11. `Math.min() `: 回傳最小值
12. `Math.pow(base, exponent)`: 開次方
13. `Math.random()`: 產生 0~1 區間的隨機數(含 0 ，不含 1)
    eg. `Math.floor((Math.random()*10+1))`: 產生 1~10的隨機數
---
##String type
[reference](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String)
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
eg. console.log(String.fromCharCode(65)) // =>A
5. 字串可比大小 eg. 判斷小寫字母 `char >='a' && char <='z'`
6. `str.indexOf(searchValue, fromIndex)`:  尋找字串內某字串是否存在，存在則回傳該字串第一個字的位置，不存在則回傳(-1)，fromIndex (表搜尋起始位置，optional)
eg. 'Blue Whale'.indexOf('Whale', 5) // returns  5
eg. 'Blue Whale'.indexOf('Whale', 7); // returns -1
7. `var newStr = str.replace(regexp|substr, newSubstr|function)`
---
