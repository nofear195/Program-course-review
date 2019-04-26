## Module(模組、模塊)
1. def: 將不同的功能切分開來，需要時再載入功能
2. **node.js**:本身有提供模組
   * eg: (https://nodejs.org/dist/latest-v10.x/docs/api/os.html)
4. `var 變數名稱 = require('nodule name')`: 使用 require 引入模組
   * eg: `var deal = require('os')`
5. 引入模組後即可使用其內建的函式(功能)
   * eg: `deal.platform()` // win32(表示在 windows system 中)
***

## 自製 Module
1. 好處: 可隨時用 require 引入，方便不同檔案使用
2. `var myModule = require('./檔案路徑')`:引入自製模組
3. `module.exports = 輸出`:指定引入 module 時，輸出的東西，類別不限
4. `module.exports = object`:輸出物件，即可用'.'呼叫物件內容
   * eg:`module.exports = {double: double function, tirple: function(n){ return n*3}}`
   //引入模組後即可用 myModule.triple(3) // =9
5. `exports.物件內容`: 直接將 exports 當成一個空物件 {}
   * eg:`exports.tirple = function(n){ return n*3}}`
