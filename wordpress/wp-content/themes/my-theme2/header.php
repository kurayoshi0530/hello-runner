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
    <title>hello-runner</title>
    <!-- システム・プラグイン用 -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header>
    <div class="text-center header-inner">
        <h1>hello-runner</h1>
    </div> <!-- end header-inner -->
</header>
