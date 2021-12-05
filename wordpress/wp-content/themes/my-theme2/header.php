<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!--viewportの設定-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <!--font-awesomeのスタイルシートの呼び出し-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- スタイルシート読み込み 1分毎にCSSがと見込まれるのでCSSが反映されないのを防ぐ事が出来る -->
    <link rel="stylesheet" href="./css/cm_pc.css?<?php echo date('Ymd-Hi'); ?>" type="text/css">
    <!-- リセットCSSファイル読み込み -->
    <link rel=https://qumeru.com/magazine/70"stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- BootStrap読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- サイトのタイトル（タグに表示される） -->
    <title>HELLO-RUNNER</title>
    <!-- システム・プラグイン用 -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header>
    <div class="container-fluid">
        <div class="text-center header-inner">
            <h2>HELLO-RUNNER</h2>
            <!---------- プルダウンメニュー機能 JavaScriptで実装 ---------->
            <div class="text-left menu">
                <p>メニューを選択すると画面が切り替わります</p>
                <form id="form">
                    <select name="select">
                        <option value="#">選択してください</option>
                        <option value="<?php echo home_url('/signup'); ?>">会員登録ページへ</option> <!-- optionタグで選択肢の一つを作成する valueでurlを指定するとページ遷移する -->
                        <option value="<?php echo home_url('/inguiry'); ?>" >お問い合わせページへ</option>
                    </select>
                </form>
            </div>
            <!---------- プルダウン機能 ここまで ---------->
        </div> <!-- end header-inner -->
    </div> <!-- end container -->
</header>
