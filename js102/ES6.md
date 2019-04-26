## ES6 introduction
1. ECMAScript:  一種規格、規範
2. JavaScript: 根據 ECMAScript 標準來實作的語言
3. ES6 = ES2015 : ECMAScript 在 2015 年發布的版本
***

## ES6 新增的語法
1. `let / const`: 宣告變數
   * 用法與原 var 一樣
   * const (constant): 常數，用在不想改變的值，只有用物件可以改值
   * Scoope (作用域): 變數可取嗽的範圍
   * var 的 Scoope 為最近的一個 function(){}內
   * let 與 const 的 Scoope 為最近的一個 block {}內
   * 盡量用 let 取代 var，let Scoope 範圍較小可避免 Scoope 互相干擾
2. `Template literals`: 取代字串使用上的不便，eg:字串拼接(+)
   * 使用 `` 取代 '' 與 "":可用於一般字串，也可直接用於多行字串，不用拼接
   * `${變數 or 程式碼}`: 省去用字串拼接，直接內嵌進去字串
```JavaScript
//不便一:多行字串需用拼接(+)完成
var str = 'alan'+ '\n' +
'vian' + '\n' +
'vijj'
/* output為
alan
vian
vijj
*/
// 使用 `` 達到相同效果
var str = `
alan
vian
vijj
`
//不便二:字串拼接
function sayHi(name){
  console.log('hello,'+ name + ' now is '+ new Date())
  // output為 hello, May now is 時間
  // template string 用法
  console.log('hello, ${name} now is ${new Date()}')
}
```
3. `Destructuring (解構)`:將 array、object 結構內的多個元素一次提取出來放進對應的多個變數或 function
   * 將宣告變數與從結構提取的初始值的步驟合併，可持續堆疊
```JavaScript
const arr = [1, 2, 3, 4];
// before destructuring
var first = arr[0];
var second = arr[1]
// after destructuring
var [first, second] = arr
console.log(second, third) // 2 3

const obj = {
  name: 'nick',
  age: 30;
  family: { father: 'hello'}
}
// before destructuring
var name = obj.name;
var age = obj.age;
var say = obj.family.father
// after destructuring
var {name, age, family, family:{father}} = obj;
console.log(age, family, father) // 30 {father:'hello'} hello

// 其他用法
// before destructuring
function test(obj) { console.log(obj.a)} // 1
// after destructuring
function test({a, b}) {console.log(a)}   // 1
test({a:1, b:2})
```
5. `Spread Operator '...' `(展開運算子):將 array、object 內容一一展開
   * 可用於將原有的內容複製至新的 array、object
   * 一般為 copy by value ，除非是複製後扔有指向原內容的array、object
```JavaScript
var nestedArray = [4];
var arr1 = [1, 2, 3, nestedArray];
var arr2 = [...arr];
console.log(arr2); // [1, 2, 3, [4]];
console.log(arr1 === arr2); // false,call by value
console.log(arr1[3] === arr[3]) // true,call by reference
```
6. `Rest Parameters '...rest'`: 打包 array、object 剩下的內容
   * 概念似反向展開
   * ...rest 只能放最後項，若只有單獨 ...rest 則囊括所有內容
   * 常與解構一起使用
   * 可將 rest 改成其他名稱
   * 可將此概念用在 function
```JavaScript
var arr = [1, 2, 3, 4]
var [first, ...rest] = arr // rest = [2, 3, 4]
var obj = { a: 1, b: 2, c: 3}
var {a, ...obj2} = obj; //  a=1 obj2 = {b: 2, c: 3}
function add(a, ...args) {  // args 為很像陣列的物件
  console.log(args);    // [2]
  return a + args[0];   // 3
}
console.log(add(1, 2))
```
7. `Default Parameters`: 在 function 的 Parameters 加入預設值
   * Parameter: 參數，放在被呼叫的 function
   * argument : 引數，放在主動呼叫 function 的式子
   * eg: function repeat(str = 'hello', time = 5) {}
   * array、object 也適用
   * eg: const {a = 123, b= 'hello'} = obj // obj = {a:1}
   * 也可用於測試 input 是否為 null、undefined
8. `Arrow Function '=>'`: 宣告 function 的新方法
   * 增加可讀性
   * 用於 array 相關函式時，更加方便
   * 與 this 有關
```JavaScript
var arr = [1, 2, 3, 4, 5]
arr.filter(function(value){ return value > 1; })
//下列意思與上方相同，下方皆為 arrow function 的寫法
arr.filter((value) => { return value > 1; })
arr.filter(value => { return value > 1; }) //只有一個參數時，'()'可略
arr.filter(value => value > 1) // 用於單純回傳一個值
```
9. `Import & Export 新增用法`
```JavaScript
// index.js: 引入module的檔案
// utils.js: module本身的檔案
// 左: index.js ,右: utils.js
// ES5
var add = require('./utils') | function add(a, b) { return a+b}

console.log(add(3,5));       | module.exports = add;
// ES6
// export 與 inport {}，兩者成對使用
import {add, PI} from './utils'  | export function add(a, b) { return a+b}

console.log(add(3,5), PI);       | export const PI = 3.14
// 原生 node 不支援 import ，用 npx babel-node 跑程式
// export {} 另一種用法(export{} 非 object) + 使用別名 (as)
import {addfunc as a, PI} from './utils'  | add(a, b) { return a+b}

console.log(a(3,5), PI);                  | const PI = 3.14
                                          | export {add as addfunc , PI}
// import  * as，一次引用 module 所有內容，'*':代表所有東西
import * as utils from'./utils'

console.log(utils.addfunc(3,5), utils.PI);
// export default 直接將預設函式 inport，不用加{}在外面
import add, {PI} from './utils' | export default function add(a, b) { return a+b}

  console.log(add(3,5), PI);    | export const PI = 3.14
// add, {PI} 也可寫成 {default as add, PI}
```
10. `Babel`
