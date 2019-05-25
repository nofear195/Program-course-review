## TCP/IP
![tcp/ip](http://linux.vbird.org/linux_server/0110network_basic//osi_tcpip.gif)

[Reference 鳥哥的 Linux 私房菜 -- 基礎網路概念](http://linux.vbird.org/linux_server/0110network_basic.php)
1. OSI七層協定將網路標準化，而TCP/IP 將之簡化，作為現在主流使用
2. 由上而下建立的階層關係為 HTTP -> TCP -> IP
3. 分層的好處在於只需處理該層碰到的問題，無須考慮其他層
***
## IP address
![Reference techbang.tw](https://cdn1.techbang.com/system/images/72468/original/b3d300c1476695ab75763ea11234172c.jpg?1327981168)
1. Internet protocal (IP) : 網路協定
2. IPV4、IPV6: 為網路協定的版本
3. 固定 IP: 每次連接 IP 都一樣，常用於: Server、公司行號
4. 浮動 IP: 每次連接 IP 都不一樣，較安全，常用於: 一般用戶
5. 虛擬 IP: 使用 IP 分享器時，在內網連接使用的IP
   * 通常為 192.168.X.X，專門保留給內網使用，在不同內網間可重複，節省資源
   * 對外連接只有一個真實 IP(固定或浮動)，內網的 IP 不能對外連接
   * 常見於公司內部網路
***
## 常用的 Port
1. Port (連接埠、端口): 指定哪個程式的服務，易於做區別，eg: address:80
2. `HTTP 80`
3. `HTTPS 443`
4. `FTP 21`
5. `:3000、:4000、:8080、:8000`: 常使用冷門的 Port 做為測試之用
***
## TCP & UDP
1. TCP & UDP 為傳輸層的協議
2. TCP: 可靠的連接，大部分的應用層服務都建立在 TCP 上
3. UDP: 需要快速或是即時的連線，即使不這麼可靠也可以接受，eg:視訊的連接
***
## TCP 三次握手
![three-way handshake](https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Connection_TCP.png/220px-Connection_TCP.png)


[Reference wikimedia](https://zh.wikipedia.org/wiki/%E4%BC%A0%E8%BE%93%E6%8E%A7%E5%88%B6%E5%8D%8F%E8%AE%AE)
***
## Conclusion
protocal | 聯想
---------|----
HTTP | 紙條上的內容  
TCP/UDP | 傳紙條時的三次確認 / 不確認，一直傳紙條
IP | 寄紙條，寫收件者跟寄件人
實體層 | 郵差幫忙寄信
