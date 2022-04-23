<?php

/*
Template Name: candidate page

*/
get_header(); ?>


        <!-- Thí sinh -->
        <section class="section s3-background" id="section-3" data-anchor="section3">
            <div class="d-flex section-3">
                <div class="d-flex justify-content-end align-items-center section-scroll">
                    <div class="text-center">
                        <img class="arrow-up" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                        <p class="section-name">Thí sinh</p>
                        <img class="arrow-down" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center s3-carousel">

                    <?php if( have_rows('carousel-items') ): ?>
                        <?php while( have_rows('carousel-items') ): the_row(); 
                            $image = get_sub_field('img-carousel');
                            $picture = $image['sizes']['thumbnail']; 
                            $link = get_sub_field('link-item');
                            ?>

                        <a href="<?php echo $link['url'];?>" class="carousel-items">
                            <div class="image-container">
                                <img data-lazy="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                            </div>

                            <div class="d-flex flex-column align-items-center candidate-info">
                                <p><?php the_sub_field('applicant-name'); ?></p>
                                <p><?php the_sub_field('identification-number'); ?></p>
                            </div>
                        </a>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </section>
        <!-- end Thí sinh -->
<?php get_footer();?>

