## CSS concept
1. Cascading Style Sheet，階層樣式表
2. CSS 規則: `selector { attribute: value; }`
3. 有三個方式更改樣式
   1. 直接加在元素內
      * 方法 `style="attribute: value;"`
      * eg: `<div style="background:red;">hello</div>`
      * 缺點: 不易修改、維護，少用
   2. 將`<style> CSS 規則 </style>` 加在 `<head></head>` 內
   3. 將 CSS 獨立成一個檔案，eg: style.css
      * 需再`<head></head>` 內加上 `<link rel="stylesheet" href="./style.css"/>`
      * `rel="stylesheet"`: 與 CSS 的關係
      * `href="./style.css"`: CSS 檔案位置，通常在同一位置可用" ./檔名 "
      * 最常做使用，方便修改、維護
4. Google chrome 的 devtool 可幫助進行除錯
5. CSS Naming
   * 當元素越來越多的時候，需要有一種規則的命名方法
   1. BEM (Block Element Modifier) : 同一block同一命名+ __ +不同副標
   2. block_element--modifier
6. reset.css vs normalize.css
   * reset.css : 針對所有標籤的樣式清空，保證在所有瀏覽器呈現樣式都相同，為了在瀏覽器上的支援
   * normalize.css: 正規化，目的是取代 reset.css，試著跟隨瀏覽器的樣式，盡可能各瀏覽器上看起來一致
***
## CSS selector
1. 選取所有元素:`* {attribute: value;}`，universal selectors
2. 選取所有相同 tag name 的元素:`tag name {attribute: value;}`，tag selector，盡量少用
3. 選取特定元素:
   * `#id {attribute: value;}`，id selector，為 unique，不可共用
   * `.class {attribute: value;}`，class selector，可以有很多個，可以共用
   * 以上兩種最為常用
4. 選取同時符合多種樣式的元素: 直接串聯
   * eg: div.bg-yellow.bg-rel-yellow {attribute: value;}
5. 選取階層底下元素: 適用於有多個層次包裹的標籤
   * 選取下一層: `>`， eg: div1 > div2{attribute: value;}
   * 選取底下全部: `(空一格)`， eg: div1 div2{attribute: value;}
6. 選取旁邊的元素:
   * 選取規則: 上下關係，視為左右關係，需同一層才有用
   * 選取同一層旁邊那一個元素:`+`， eg: .eg + .ed{attribute: value;}
   * 選取同一層旁邊所有元素:`~`， eg: .eg ~ .ed{attribute: value;}
   * 常用於 list 中元素的間距，第一個前面不要間距，後面元素前後有間距
7. Pesudo-classes
   * `:hover`，滑鼠移動到選定地方時所採取的動作，eg: span:hover{attribute: value;}
   * debug 時可用 chrome 的 devtool => Elements => Styles => :hov => Force element state 檢視
   * `:nth-child(number)`，取第幾個元素，( )內可用 odd/even、3n(倍數)、簡單的數學式
   * eg: .v span:nth-child(3){attribute: value;}，選取順序是由後往前(先看數字再看標籤)
   * `:not(元素)`: 除了指定元素外，做{attribute: value;}
   * (https://developer.morzilla.org/en-US/docs/Web/CSS/Pesudo-classes)
8. Pesudo-elements
   * 用 CSS 產生元素
   * `::before{ content:value;}`，eg: .price::before{content: "$"} // $1000
   * `::after{ content: value;}`，eg: .price::after{ content: "NTD"} // 1000 NTD
   * 適用於加入特別符號，eg: $、* 等
   * `::before/after{ content: attr();}`: 將 content 放入指定 html 元素的屬性(內容)
   * `data-`: html 內自定義元素ˋ，eg: data-id="hello yoyo" 放入標籤元素內
   * eg: .price::after{ content: attr(data-id);} // 1000 hello yoyo
   * Pesudo-element 內 "content:" 不可略
   * (https://developer.morzilla.org/en-US/docs/Web/CSS/Pesudo-elements)
9. 權重 (weight) 計算方式
   * 權重相同，以後面設定為優先，前面設定會被覆蓋
   * 權重大小: id > class > 標籤，越詳細的贏
   * 公式: (0, 0, 0,) 分別對應 (id, class/pseudo class/attribute, element(標籤))
   * 公式按照左至右的順序比下來，左邊數量不管多少一定大於右邊
   * eg: div.wrapper > div.list > div.item{attribute: value;} => (0, 3, 3)
   * 以上都敵不過 inline style，(1, 0, 0, 0)，eg: style="attribute: value;"
   * 權重最大 `!important`，(1, 0, 0, 0, 0)，放在 value 後面
   * `!important`，會覆蓋所有樣式，盡量少用
10. [CSS Diner](https://flukeout.github.io/)
***
## CSS decoration {attribute: value;}
1. color : 通常設定採用 RGB、RGBA，其方式如下
   * `#rrggbb`: RGB 以 00 - ff 的 16進位表示
   * `rgb(n, n, n)`: RGB 以 n = 0 - 255 的十進位表示，也可用 % 表示
   * `rgba(n, n, n, n)`: RGBA，A : Alpha，透明度，範圍 0 - 1
2. 背景:`background: value;`
   * `width: 大小; 、 height: 大小;`:背景區域寬度、高度
   * value 可為顏色、圖片`url("圖片位置")`
   * 背景圖片設定: 接續在 url 後面，須按照順序
     * no-repeat : 不重複接續圖片
     * center center: x 軸與 y 軸位置
   * `background-size: 寬度 高度;`: 背景本身寬度、高度，可用 px，% 表示
   * `background-size: contain;`: 將背景圖片按比例的方式放進背景區域中
   * `background-size: cover;`:將背景圖片填滿背景區域中，常用
   * 可在 devtool上檢視、修改
3. 邊框: border、outline
   * border: 往內延伸，會影響元素大小
   * outline: 向外延伸，不影響元素大小，用法與 border 相同，少用
   * `border: 大小, 類型, 顏色;`， 類型 (boder-style) 常用 solid (實線)
   * `border-radius: 大小`:邊角弧度
   * 利用 border 畫圖形:
     * 圓形: `border-radius: 50px(50$)`，半徑各縮 50% 即為圓形
     * border 四邊的範圍從梯形最高可至三角形
     * 三角形
     ```
     #box1 {
       width: 0px;
       heighr: 0px;
       border-top: 100px solid transparent; // transparent: 透明
       border-bottom: 100px solid yellow;
       border-left: 100px solid transparent;
       border-right: 100px solid transparent;
       // output: 黃色正三角形
       // 可透過參數設定三角形的樣子
     }
     ```
4. 邊距: padding、margin
   * padding: 內邊距，內容與邊框的距離
   * margin: 外邊距，邊框與外面的距離，用法與 padding 相同
   * 許多瀏覽器會預設 margin，可在CSS 最上方用 `body:{margin: 0px;}`清除
   * `margin: 大小;`: 一次設定四個方位的 margin 大小
   * `margin 上下 左右;`: 一次設定上下、左右的 margin 大小
5. 文字相關
   * `color: 顏色;`
   * `font-size: 大小;`: 文字大小，chrome: font-size 最小定在12px
   * `font-weight: 粗細`: 文字粗細，有 normal、bold、100 - 900
   * `font-family: 字體`
   * `letter-spacing: 間距大小`:字的距離
   * `line-height: 大小`: 行的高度，常用單位: em，eg: 1.5 em = 1.5倍行高
   * `text-align: 位置`: 文字對齊，有 center、left、right、
   * 單行文字恆常置中: 將 height 與 line-height 設置相同大小
   * 多行文字恆常置中: 不要設定任何高度，使用 padding 撐開，缺點要自己算
   * `word-break: break-all;`: 文字長度到寬度大小，即自動換行
   * `word-break: break-word;`: 文字長度到寬度大小，換行時保留完整單字
   * `white-space: nowrap;`: 將超出寬度的文字保留在同一行，不要換行
   * `white-space: pre;`: 保留在 html 時的樣子
   * `white-space: pre-line;`: 保留原本的換行
6. 處理溢出: overflow、text-overflow
   * `overflow: hidden;`: 將超出寬度的元素截斷，並隱藏
   * `overflow: scroll;`: 將超出寬度的元素整個變成可以滾動的區域，設定 auto 會自動判定
   * `text-overflow: elipsis;`；省略號(...)，針對文字使用，其先決條件是
     1. 文字長度超出設定寬度
     2. 設定 white-space: nowrap;
     3. 設定 overflow: hidden;
7. 漸變效果: transition
   * `transition: 作用屬性 秒數 漸變方法`
   * "漸變方法" 可直接至 devtool 參考與調整
   * 常搭配 `:hover`使用
   ```
   #box1 {
     width: 200px;
     height: 100px;
     border: 5px solid orange;
     border-radius: 10px;
     transition: all 1s ease-in; // 作用於全部屬性 1s ，不可放在 hover 內
   }

   #box1:hover {
     background: green;
     color: white;
     cursor: pointer; 游標屬性:手型
     width: 300px;
     height: 200px;
     //若調到的屬性會影響周圍的元素，周圍元素會重新排列，會牽涉到效能問題
   }
   ```
8. 變形、轉換: transform
   * 常搭配 `transition` 以及 `:hover` 使用， transform 放在 hover 內
   * `transform: scale(n)`: 以中心處開始放大 n 倍
   * `transform: rotate(x deg)`: 旋轉 x 度
   * `transform: translateX(正數)`: 水平向右移動
   * `transform: translate(正數, 負數)`: 往右上方移動
   * 用 transform 是按照原本位置偏移，不影響周圍元素，在動畫中移位置常用
   * 將元素置於畫面中央
   ```
   #box1 {
     position: absolute; // 用 absolute or fixed 皆可
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%); // 移動元素本身位置
   }
   ```
***
## Box Model
![box model form MDN](https://mdn.mozillademos.org/files/13647/box-model-standard-small.png)
1. `box-sizing: content-box;`: 預設值，元素寬高包含: 內容、padding、border 寬高，改變整體寬高
2. `box-sizing: border-box;`: 將 padding、border 寬高納入設定寬高，自動調整內容寬高，不改變整體寬高
3. display 三種形式: {display: value;}
   1. `{display: block;}`:
      * 預設元素為 block 的有 div, h1, p ...
      * 特性: 元素本身占滿一整行，做任何調整皆可
   2. `{display: inline;}`:
      * 預設元素為 inline 的有 span, a
      * 特性: 調整寬高無效，上下邊距無效
      * 用 margin 只能改變元素間距
      * 用 padding 調整寬度可改變元素間距
      * 用 padding 調整高度不影響元素位置，仍會依元素為中心，上下撐開元素
   3. `{display: inline-block;}`:
      * 預設元素為 inline-block 的有 button, input, select ...
      * 特性: 對外像 inline 可並排，對內像 block 可調整各種屬性
      * 與 block 差別在於 inline-box 可以並排
      * inline-block 並排時的小陷阱: block 的間距會因為 html 元素的空格，使得即使刪去 css margin 的設定，依舊存在間距
      ```
      <div>
      </div>
      <div> // 此行<div>與上方的</div> 有空格
      </div>
      // solution 1: 縮排
      <div>
      </div><div>
      </div>
      // solution 2: 加入註解
      <div>
      </div><!--
      --><div>
      </div>
      ```
    4. `{display: flex}`: 將底下的元素排成一左一右並排
       * [Flex Froggy](http://flexboxfroggy.com/)
    5. `{display: none}`:隱藏元素與其位置
       * `{visibility: hidden}`:只隱藏元素，仍保留位置空間
***
## Position (定位)
1. static、relative
   * `position: static;`: 預設值，依照 display 形式，依序定位排列
   * `position: relative;`: 相對定位，依原本位置做調整，只改變自身位置
   * relative 可用 top、right、 bottom、left 調整
2. absolute、fixed
   * `position: absolute;`: 絕對定位，需針對某個參考點定位
   * absolute 參考參考定位點即往上找非 static 的元素進行定位
   * absolute 參考定位點可設成 relative
   * absolute 會將原本元素的位置抽去，下個元素會依序遞補原本元素位置
   * `position: fixed;`: 固定定位，相對於 viewport (瀏覽器窗口)做定位去固定
3. 決定圖層前後定位: z-index
   * `z-index: n;`: 預設值為 auto， n: 從 0 開始往上
4. `position: sticky;`: 當往上滑動元素至小於 top 設定值，則似 relative 固定在上方
***
## RWD
1. 前置作業:在`<head></head>`內加入
   * `<meta name="viewport" content="width=device-width, initial-scale=1.0">`
2. 斷點 (breakpoint) 格式:`@media screen and (max-width: XX px) { css}`
3. 常用 max-width: 1200px, 992px, 768px, 680px, 480px
