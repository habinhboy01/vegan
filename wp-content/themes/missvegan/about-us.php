<?php

/*
Template Name: about us
*/

get_header(); ?>

    <div id="fullpage" class="page-container">
        <section class="section background" id="section-1" data-anchor="section1">
            <div class="d-flex">
                <div class="d-flex justify-content-end align-items-center section-scroll">
                    <div class="text-center">
                        <p class="section-name">Giới thiệu</p>
                        <img class="arrow-down" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                    </div>
                </div>

                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-center introduction">
                        <p>
                            <?php the_field('intro-about-us'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section background" id="section-2" data-anchor="section2">
            <div class="d-flex">
                <div class="d-flex justify-content-end align-items-center section-scroll">
                    <div class="text-center">
                        <img class="arrow-up" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                        <p class="section-name">Tổng quan</p>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-center overall">
                        <div class="round">
                            <p>
                               <?php echo get_field('episode-1'); ?>
                            </p>
                        </div>
                        <div class="round">
                            <p>
                                <?php echo get_field('episode-2'); ?>
                            </p>
                        </div>
                        <div class="round">
                            <p>
                                <?php echo get_field('episode-3'); ?>
                            </p>
                        </div>
                        <div class="round">
                            <p>
                                <?php echo get_field('episode-4'); ?>
                            </p>
                        </div>
                        <div class="round">
                            <p>
                                <?php echo get_field('episode-5'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>