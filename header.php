<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TakeTechBlog</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <h1>TakeTechBlog</h1>

        <input type="checkbox" id="drawer-check" class="drawer-hidden">
        <!-- ハンバーガーアイコン -->
        <label for="drawer-check" class="drawer-open"><span></span></label>

        <nav class="global_navi">
            <ul>
                <li><a href="#">ホーム</a></li>
                <li><a href="#section_profile">プロフィール</a></li>
                <li><a href="#section_blog">ブログ</a></li>
                <li><a href="#section_program">プログラム</a></li>
                <li><a href="#section_contact">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>