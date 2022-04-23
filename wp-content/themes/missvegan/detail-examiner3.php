<?php
/*

Template Name: detail examiner 3 page

*/
get_header(); ?>

    <div class="page-container">
        <section class="d-flex background">
            <div class="d-flex justify-content-end align-items-center section-scroll">
                <div class="text-center">
                    <p class="section-name">Giám khảo</p>
                    <img class="arrow-down" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                </div>
            </div>

            <div class="d-flex examiner-container">
                <div class="d-flex flex-column justify-content-center position-relative examiner-info">
                    <div>
                        <p><?php echo get_field('examiner'); ?></p>
                        <p><?php echo get_field('appellation'); ?></p>
                        <p><?php echo get_field('name-examiner'); ?></p>
                    </div>

                    <div>
                        <p>
                            <?php the_field('content'); ?>
                        </p>
                    </div>
                    <button class="btn-prev position-absolute">
                        <svg class="arrow-prev" width="24" height="39" viewBox="0 0 24 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.0606 0.93934C12.4749 0.353553 11.5251 0.353554 10.9393 0.93934L1.39339 10.4853C0.807603 11.0711 0.807603 12.0208 1.39339 12.6066C1.97918 13.1924 2.92892 13.1924 3.51471 12.6066L12 4.12132L20.4853 12.6066C21.0711 13.1924 22.0208 13.1924 22.6066 12.6066C23.1924 12.0208 23.1924 11.0711 22.6066 10.4853L13.0606 0.93934ZM13.5 39L13.5 2L10.5 2L10.5 39L13.5 39Z"
                                fill="#decc87" />
                        </svg>
                    </button>
                </div>

                <div class="position-relative images-container">
                    <div class="carousel-container">
                        <?php if( have_rows('img-examiner') ): ?>
                            <?php while( have_rows('img-examiner') ): the_row(); 
                                $image = get_sub_field('img');
                                $picture = $image['sizes']['thumbnail']; 
                                
                                ?>

                                <div class="image-container">
                                    <img class="examiner-img" data-lazy="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <button class="btn-next position-absolute">
                        <img class="arrow-next" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                    </button>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>

