<?php // phpコードのみなのでファイル最後の閉じタグ？＞は書かない（予期せぬ挙動を防ぐ為）
    //テーマのセットアップ
    //HTML5でマークアップさせる
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    //feedのリンクを自動で生成する
    add_theme_support('automatic-feed-links');

    //アイキャッチ画像を使用する設定
    add_theme_support('post-thumbnails');

    function my_scripts_method() {
        wp_enqueue_script(
            'custom_script',
            get_template_directory_uri() . '/index.js',
        );
    }
    add_action('wp_enqueue_scripts', 'my_scripts_method');

    //Bootstrapを読み込む
    function themebs_enqueue_styles() {
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
        wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
    }

    add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');
    function themebs_enqueue_scripts() {
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ) );
    }

    add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');

    //管理画面で外観→メニューを表示させる
    add_action( 'after_setup_theme', 'register_menu' );
    function register_menu() {
        register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
    }

    //メニューを設置する
    add_theme_support("menu");

    //画像ファイル読み込みの画像パスを短くする
    function imagepassshort($arg) {
        $content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
        return $content;
    }
    add_action('the_content', 'imagepassshort');

    //Advanced Contact Form（送信されたデータをデータベースに保存するプラグイン）でIPアドレスの保存を制限する
    do_shortcode('[cf7-db-display-ip]');