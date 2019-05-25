## npm
1. Node Package Manager: node套件(package)管理，以 Javascript 編寫
2. (https://docs.npmjs.com/about-npm/)
3. 可透過原生的npm命令下載並安裝指定模組，也可分享自己設計的模組
***

## install & share npm (以 left-pad 為例)
1. (https://www.nodejs.com/package/left-pad)
2. `npm init`:初始化 npm
   * 當有其他套件下載時，會自動產生 node_modules 的資料夾
   * node_modules 放置下載套件的檔案
   * 一般將 node_modules 加入 .gitignore
3. `npm install left-pad` (install 可簡寫為 i):install
4. 因為 npm 官網皆有副其套件的下載方式，所以在上傳檔案時可以不用附上下載的 npm 套件，附上其 package.json 即可
5. package.json : 紀錄檔案的詳細資料，其中 dependences 紀錄所使用的 npm 套件
6. `npm install`: 下載 package.json 中所使用的 npm 套件
7. `npm install left-pad --save`: 將 left-pad 的資訊寫入 dependences
   * npm 5 以後， --save 已設為預設選項，npm install 可省略 --save
***
## npm script
1. 在 package.json 中可找到
  * "scripts":{ "代號(別名)":"執行動作"}
  * "scripts":{ "test":"jest"} // 執行 jest 在所有含有 test 檔名的檔案 (hw1.test.js)
  * "scripts":{ "test":"jest hw1 test.js"} // 只用 jest 執行單一檔案 (hw1.test.js)
2. 在 npm 使用某個指令時，會自動執行的動作(腳本)
   * eg: `npm run star`
***

## yarn
1. 由 facebook 開發的 npm
2. (https://yarnpkg.com/zh-Hant/)
3. `yarn -v`:yarn 版本號
4. `yarn`: 效果等同於 `npm install`
5. `yarn add left-pad`: 效果等同於 `npm install left-pad --save`
6. `yarn run start`: 效果等同於 `npm run test`
7. `yarn init`: 效果等同於 `npm init`
8. (https://yarnpkg.com/zh-Hant/docs/usage)
9. 新的專案常用 yarn，速度較快
