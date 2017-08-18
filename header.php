<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Подключенные стили -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bourbon/_bourbon.scss" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/color.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />

    <?php wp_enqueue_script("jquery"); ?>

    <?php wp_head(); ?>
    <script type="text/javascript"
            src="<?php bloginfo("template_url"); ?>/js/common.js"></script>

</head>
<body>

<div class="loader">
    <div class="loader_inner"></div>
</div>
<!-- HEADER -->
<header  class="main_head"  class="parallax-window"   data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg5.jpg" data-z-index="-3" data-position-y="top">
    <div class="container">
        <div class="row">
            <div class="col-md 12">
                <div class="logo_container" >
                    <?php dynamic_sidebar('logo'); ?>
                </div>
                <button class="toggle_menu">
                    <a class="hamburger">
                        <span class="first-child">&nbsp;</span>
                        <span class="second-child">&nbsp;</span>
                        <span class="third-child">&nbsp;</span>
                        <span class="fourth-child">&nbsp;</span>
                    </a>
                </button>
                <nav class="top_menu">
                    <ul>
                        <li><a href="#about">Обо мне</a></li>
                        <li><a href="#standart">Стандарты</a></li>
                        <li><a href="#portfolio">Портфолио</a></li>
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
    <div class="top_wraper">
        <div class="top_descr">
            <div class="top_centered">
                <div class="top_text">
                    <h1><?php echo  get_bloginfo('name'); ?></h1>
                    <p><?php  echo get_bloginfo('description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</header>