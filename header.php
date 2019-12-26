<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/site_icon.jpg">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- animate -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <!-- style.css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- jquery -->
    <?php wp_enqueue_script('jquery'); ?>
</head>

<body>
    <header>
        <nav class="header-nav">
            <a href="<?php echo home_url(); ?>" class="hover-opacity-05 d-md-none">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_black.png" class="w-50px">
            </a>
            <div class="nav-open-bar float-right d-md-none">
                <hr width="40" color="#666666" class="bar-upper-line m-0">
                <hr width="40" color="#666666" class="bar-under-line m-0">
            </div>
            <div class="header-nav-list d-md-block">
                <ul class="list-unstyled row m-0 text-center font-size-28px font-size-md-18px py-5 p-md-0">
                    <li class="col-1-1 col-md-1-5 y-center py-4 p-md-0">
                        <a href="<?php echo home_url(); ?>/about"
                            class="nav-link-about color-666666 hover-color-999999">
                            居酒屋について
                        </a>
                    </li>
                    <li class="col-1-1 col-md-1-5 y-center py-4 p-md-0">
                        <a href="<?php echo home_url(); ?>/menu" class="nav-link-menu color-666666 hover-color-999999">
                            おしながき
                        </a>
                    </li>
                    <li class="col-1-1 col-md-1-5 d-none d-md-block y-center">
                        <a href="<?php echo home_url(); ?>" class="hover-opacity-05">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_black.png" class="w-70px">
                        </a>
                    </li>
                    <li class="col-1-1 col-md-1-5 y-center py-4 p-md-0">
                        <a href="<?php echo home_url(); ?>#store_section"
                            class="nav-link-access link-access color-666666 hover-color-999999">
                            店舗情報
                        </a>
                    </li>
                    <li class="col-1-1 col-md-1-5 y-center py-4 p-md-0">
                        <a href="<?php echo home_url(); ?>/news" class="nav-link-news color-666666 hover-color-999999">
                            お知らせ
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>