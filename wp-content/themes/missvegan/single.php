<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/news.css">
    <div>
        <section class="d-flex background">
            <div class="d-flex justify-content-end align-items-center section-scroll">
                <div class="text-center">
                    <p class="section-name">Tin tức</p>
                    <img class="arrow-down" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                </div>
            </div>

            <div class="d-flex page-container">
                <div class="d-flex flex-column news-container">
                    <h1 class="news-heading"><?php the_title(); ?></h1>
                    <p class="post-date"> <?php echo get_the_date(); ?></p>

                    <?php the_content(); ?>

                    <div class="d-flex mb-5">

                        <?php if (have_rows('list-social', 'option')) : ?>
                            <?php while (have_rows('list-social', 'option')) : the_row();
                                $social_icon = get_sub_field('item');
                                $social_link = get_sub_field('link');

                            ?>
                            <a class="me-3 text-decoration-none" href="<?php echo $social_link; ?>">
                                    <?php echo $social_icon ?>
                            </a>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('logo-social','option') ): ?>
                            <?php while( have_rows('logo-social','option') ): the_row(); 
                                $image = get_sub_field('img-logo');
                                $picture = $image['sizes']['thumbnail']; 
                                $link = get_sub_field('link');
                                ?>

                                <a href="<?php echo $link['url'];?>" class="text-decoration-none">
                                    <div class="zalo">
                                        <img class="zalo-logo" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>

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