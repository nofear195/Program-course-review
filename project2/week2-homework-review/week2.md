## week1 homework review
1. 首字母大寫
```JavaScript
function capitalize(str) {
  return str[0].toUpperCase() + str.slice(1); // 法一
  return str.replace(str[0],str[0].toUpperCase()); //法二
}
```
1. 實作 join()
```JavaScript
function join(arr, concatStr) {
  let result = arr[0]; //直接將第 0 項排除，在後面找規律
  for (var i=1; i< arr.length; i++) {
    result += concatStr + arr[i];
  }
  ruturn result;
}
```
***

## week1 review & week2 study
1. object: 非常直覺地表達出任何東西
2. JSON (**J**/ava**S**cript **O**bject **N**otation): 資料格式
   * key & value 皆放在 " " 內
   * 由 JavaScript 而來，可輕易在 JavaScript 內轉成物件
3. '==' 與 '===' 差別在 '==' 會自動轉型
4. '[1] == [1]' // false : 等號背後實際在比的是其底層記憶體位置
5. call by Reference
```JavaScript
var a = {name: 'yo'}
var b = a
var b.name = 'hi'
console.log(a.name) // hi
```
6. module syntx
7. npm
8. run unit test by Jest
9. ES6
