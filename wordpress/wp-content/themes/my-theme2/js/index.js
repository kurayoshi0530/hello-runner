/*
新しいJavaScriptを実行するモード（ストリクトモード）にする為、'use strict'と記述する
ストリクトモードにしないとエラー検出機能などの一部機能が働かなくなってしまう
*/
'use strict';

console.log('testです');

// ---------- プルダウンメニューを選択するとページ遷移 ----------
document.getElementById('form').select.onchange = function() {
    location.href = document.getElementById('form').select.value; // formオブジェクトからurlを取得してページ遷移する
}