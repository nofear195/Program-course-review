let firstNumber = null
let secondNumber = null
let operator = null

// eval() 執行運算，www.wibibi.com/info.php?id=264


for (let i = 1; i <= 3; i++) {
    document.querySelector('.number' + i).addEventListener(
        'click', () => {
            clickNumber(i)
        })
}
/* 為 closure 議題 因為 alert 內的 i 在 block 找不到變數所以往上找
   let 作用域為一個 block，所以在跑每個迴圈時，i 會有一個新的變數
   eg: for(let i=1; i<=3; i++) { let i = 1、2 、3 ... }
   所以每圈都會抓到最新的值
*/
document.querySelector('.operator.plus').addEventListener(
    'click', () => {
        handleOperator('+')
    })
document.querySelector('.operator.minus').addEventListener(
    'click', () => {
        handleOperator('-')
    })
document.querySelector('.operator.calculate').addEventListener(
    'click', () => {
        handleOperator('=')
    })

function clickNumber(num) {
    appendResult(num)
}

function handleOperator(op) {
    if (op === '=') {
      secondNumber = Number(getResult())
      if(operator === '+') {
          setResult(firstNumber + secondNumber)
      } else if (operator === '-') {
          setResult(firstNumber - secondNumber)
      }
    } else {
        firstNumber = Number(getResult()) //轉回數字
        setResult('') // 清空
        operator = op
    }
}

function setResult(str) {
    document.querySelector('.result').innerText = str
}

function appendResult(str) {
    document.querySelector('.result').innerText += str
}

function getResult() {
    return document.querySelector('.result').innerText
}
