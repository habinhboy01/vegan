<?php

/*
    Template Name: news page
*/

get_header(); ?>

    <div>
        <section class="d-flex background">
            <div class="d-flex justify-content-end align-items-center section-scroll">
                <div class="text-center">
                    <p class="section-name">Tin tức</p>
                    <img class="arrow-down" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                </div>
            </div>

            <div class="d-flex page-container">
                <div class="news-container">
                    <div class="d-flex">

                        <?php
                            $args = array(
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'posts_per_page' => 1, //Số lượng bài viết muốn lấy 
                                'meta_key' => 'meta-checkbox',
                                'meta_value' => 'yes'
                                );

                                $featured = new WP_Query($args);
                            ?>

                            <?php
                            if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
                                <?php if ( has_post_thumbnail()) : ?>

                                    <a class="news-top" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                                            <?php the_post_thumbnail(); ?>
                                        <h1 class="news-title"><?php the_title(); ?></h1>
                                        <p class="mb-0 news-post-date"><?php echo get_the_date(); ?></p>
                                    </a>

                                <?php endif; ?>
                            <?php
                            endwhile;
                            endif;
                        ?>
                    </div>

                    <div class="d-flex news-bottom-container">

                        <?php
                            $args = array(  
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'posts_per_page' => 4,
                                'order' => 'DSC',
                                
                            );
                        ?>
                        <?php $getposts = new WP_query($args); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php echo get_the_category()->cat_ID; ?>

                                <a class="news-bottom-item" href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full'); ?>
                                    <h1 class="news-title"><?php the_title(); ?></h1>        
                                    <p class="news-post-date"><?php echo get_the_date(); ?></p>
                                </a>

                        <?php endwhile; wp_reset_postdata(); ?>

                    </div>
                </div>

                <div class="d-flex flex-column more-news-container">

                    <?php
                            $args = array(  
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'posts_per_page' => 6,
                                'order' => 'DESC',
                                
                            );
                        ?>
                        <?php $getposts = new WP_query($args); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <?php echo get_the_category()->cat_ID; ?>

                                <a class="d-flex more-news-item" href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full'); ?>
                                    <div class="d-flex flex-column ps-4 pe-2">
                                        <p class="flex-grow-1 more-news-title">
                                            <?php the_title(); ?>
                                        </p>
                                        <p class="more-news-post-date">
                                            <?php echo get_the_date(); ?>
                                        </p>
                                    </div>
                                </a>

                    <?php endwhile; wp_reset_postdata(); ?>

                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>