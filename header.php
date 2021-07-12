<!-- ----<!DOCTYPE html> ~ </header>を切り取る -> header.phpとして保存---- -->
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8">

    <!-- レスポンシブ対応：デバイスの幅を使うことを指定 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="検索ワードを記述（５つまで）">

    <!-- グーグルフォント -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <?php wp_head(); ?>

</head>
<!-- ◇----------------------------------------------------------------------------------------------◇ -->

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="l-container">
        <header class="l-header u-display-between">
            <span id="js-ttl"><a href="<?php echo home_url(); ?>"
                    class="p-site-ttl"><?php bloginfo('name'); ?></a></span>
            <button class="p-menu-btn-sub js-btn-menu u-grid">
                <p>Menu</p><span>サイドバーを開く</span>
            </button><!-- spanの文字はリーダブルのため -->
        </header>