<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>missvegan</title>
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Asap+Condensed:wght@500&family=Bitter:wght@400;700&family=Dancing+Script&family=M+PLUS+Rounded+1c:wght@500;700&family=Marmelad&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/dist/fullpage.css" />

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">

    <?php if (is_page('trang-chu')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/index.css">
    <?php } ?>

    <?php if (is_page('giam-khao')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/index.css">
    <?php } ?>

    <?php if (is_page('about-us')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/about-us.css">
    <?php } ?>

    <?php if (is_page('ung-vien')) { ?>
       <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/index.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-1')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-2')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-3')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-4')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-5')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-6')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-7')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-8')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-9')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-10')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-11')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('thi-sinh-12')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/candidate.css">
    <?php } ?>

    <?php if (is_page('chi-tiet-giam-khao-1')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/examiner.css">
    <?php } ?>

    <?php if (is_page('chi-tiet-giam-khao-2')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/examiner.css">
    <?php } ?>

    <?php if (is_page('chi-tiet-giam-khao-3')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/examiner.css">
    <?php } ?>

    <?php if (is_page('chi-tiet-giam-khao-4')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/examiner.css">
    <?php } ?>

    <?php if (is_page('chi-tiet-giam-khao-5')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/examiner.css">
    <?php } ?>

    <?php if (is_page('chi-tiet-giam-khao-6')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/examiner.css">
    <?php } ?>

    <?php if (is_page('tin-tuc')) { ?>
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/home-news.css">
    <?php } ?>

    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/images/miss-vegan-logo.png" type="image/x-icon">
</head>

<body>
    <div class="d-flex flex-column position-fixed side-navbar">
        <a class="home-url" href="<?php echo home_url(); ?>">
            <img class="img_logo mv-logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
        </a>

        <button class="btn-side-navbar" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar" aria-controls="navbar">
            <i class="fas fa-bars me-2"></i>
            Menu
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar" aria-labelledby="navbar">
            <button type="button" class="btn-close position-absolute top-0 end-0 mt-2 me-2 text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            <div class="offcanvas-header text-center">
                <a class="home-url" href="<?php echo home_url(); ?>">
                    <img class="img_logo mv-logo" src="<?php echo get_theme_mod( 'Logo' ); ?>">
                </a>
            </div>
            <div class="offcanvas-body">
                <?php wp_nav_menu (
                    array('theme_location' => 'menu-1', 'menu_class' => 'navbar-nav')) ;?>
            </div>
        </div>
    </div>