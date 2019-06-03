/*
有兩種做法:
1. 表單送出前即檢查是否有少填的項目
2. 表單送出後再檢查是否有少填的項目
*/
document.querySelector('#submit').addEventListener('click', function (e) {
    e.preventDefault()
    const element = document.querySelector('input[name=nickname]')
    const value = element.value
    if (value === '') {
        element.parentNode.className += ' invalid'
    }
})
