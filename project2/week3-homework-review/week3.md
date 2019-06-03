## week2 homework review
1. 好多星星
```JavaScript
function stars(n) {
  const result = [];
  for (var i = 1; i <= n; i++) {
    result.push('*'.repeat(i));
  }
  return result;
}
```
2. 判斷質數
```JavaScript
//先找出因數個數，再利用質數因數只有 1 與自己本身共 2 個來做判斷
function returnFactor(n) {
  const result = [];
  for (var i = 1; i <= n; i++) {
    if (n % i === 0) {
      result.push(i);
    }
  }
  return result
}
function isPrime(n) {
  if (n === 1) return false
  const factor = returnFactor(n);
  return factor.length === 2;
}
```
3. 判斷回文
```JavaScript
function isPalindromes(str) {
  return str === str.split('').reverse().join('');
}
```
4. 大數加法
```JavaScript
// 將數字反轉就可以直接從第一項
function add(a, b) {
  const arrA = a.split('').reverse();
  const arrB = b.split('').reverse();
  const ans = [''];
  const length = Math.max(arrA.length, arrB.length);

  let carry = 0;
  for (let i = 0; i < length; i++) {
    const n = ans[i] = Number(arrA[i] || 0) + Number(arrB[i] || 0) + carry;
    ans[i] = n % 10;
    carry = Math.floor(n / 10);
    }
  if (carry) {
    ans.push(carry)
  } // 處理兩個一位數相加變兩位數的時候
  return ans.reverse().join('');
}


```
***

## week2 review & week3 study
