<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 contents">
            <p>サンプルだよ</p>
        </div> <!-- end contents -->
        <div class="col-lg-4 px-0 sidebar"> <!-- px-0で左右の空白（padding）をなくす -->
            <?php get_sidebar(); ?>
        </div>
    </div> <!-- end row -->
</div> <!-- end container -->
<script src="<?php echo get_template_directory_uri() ?>/js/index.js" type="text/javaScript" charset="utf-8"></script>

<?php get_footer(); ?>