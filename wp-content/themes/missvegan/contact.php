<?php
/*
Template Name: contact page
*/
?>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Asap+Condensed:wght@500&family=Bitter:wght@700&family=Dancing+Script&family=M+PLUS+Rounded+1c:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/contact.css">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/images/miss-vegan-logo.png" type="image/x-icon">
</head>

<body>
    <div class="background">
        <div class="d-flex page-container">
            <div class="d-flex flex-column side-navbar">
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

            <div class="d-flex">
                <div class="d-flex flex-column contact-container">
                    <h1>Liên hệ theo:</h1>
                    <div class="group-contact">
                        <div class="d-flex align-items-center contact">
                            <i class="fas fa-home icon address"></i>
                            <p class="ms-4"><?php echo get_field('address'); ?></p>
                        </div>
                        <div class="d-flex align-items-end text-center contact">
                            <i class="fas fa-phone-alt icon phone"></i>
                            <p class="ms-4"><?php echo get_field('phone'); ?></p>
                        </div>
                        <div class="d-flex text-center contact">
                            <i class="far fa-envelope icon mail"></i>
                            <p class="ms-4"><?php echo get_field('mail'); ?></p>
                        </div>
                        <div class="d-flex contact">
                            <i class="fab fa-facebook-square icon-fb"></i>
                            <p class="ms-4"><?php echo get_field('facebook'); ?></p>
                        </div>
                        <div class="d-flex contact">
                            <img class="icon" src="<?php bloginfo('template_directory') ?>/images/instagram.png" alt="Instagram logo">
                            <p class="ms-4"><?php echo get_field('instagram'); ?></p>
                        </div>
                        <div class="d-flex contact">
                            <i class="fab fa-youtube icon icon-youtube"></i>
                            <p class="ms-4"><?php echo get_field('youtube'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center signup-recieve-info">
                    <h1>Đăng kí nhận thông tin: </h1>
                    <div>
                        <div class="d-flex flex-column align-items-center">
                            <?php echo do_shortcode( '[contact-form-7 id="296" title="Contact form 1"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="d-flex justify-content-between">
        <div class="d-flex align-items-center footer-logo">
            
                <?php 
                $image = get_field('logo-footer','option');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

            <p class="mb-0"><?php echo get_field('text1','option'); ?></p>
        </div>
        <div>
            <div class="d-flex justify-content-end align-items-baseline lt-footer">
                <p class="mb-2"><?php echo get_field('text2','option'); ?></p>

                <div>
                    
                    <?php if (have_rows('social', 'option')) : ?>
                        <?php while (have_rows('social', 'option')) : the_row();
                            $social_icon = get_sub_field('icon');
                            $social_link = get_sub_field('link');

                        ?>
                        <a class="social-link" href="<?php echo $social_link; ?>">
                                <?php echo $social_icon ?>
                        </a>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                
            </div>
            <p><?php echo get_field('text3','option'); ?></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>