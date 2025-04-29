# Laravel 12 圖形查詢語言

引入 nuwave 的 lighthouse 套件來擴增圖形查詢語言，它提供了一個更靈活、高效的方式來請求和操作數據，允許客戶端指定所需的數據結構，從而解決了傳統具象狀態傳輸應用程式介面中的過度或不足數據問題。圖形查詢語言支持讀取（查詢）、寫入（變更）和訂閱（實時更新）操作，使其成為應對現代應用程式需求的理想選擇。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/api/v1/sanctum/token` 來進行存取權杖取得。
- 你可以經由 `/graphql` 來進行圖形查詢語言操作。
- 或可以經由 `/api/v1/sanctum/token/destroy` 來進行存取權杖撤銷。

----

## 畫面截圖
![](https://i.imgur.com/aS80BJq.png)
> 傳送 HTML 表單資料產生存取權杖

![](https://i.imgur.com/XPf8gR0.png)
> 在 Authorization 請求標頭中指定存取權杖作為憑證令牌來做透過運算式查詢單一端點，以便一次擷取多種型別的資料

![](https://i.imgur.com/T6zRXSH.png)
> 在 Authorization 請求標頭中指定存取權杖作為憑證令牌來做撤銷存取權杖
