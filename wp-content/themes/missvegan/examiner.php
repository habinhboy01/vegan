<?php
/*

Template Name: examiner page

*/
get_header(); ?>

        <!-- Giám khảo -->
        <section class="section s4-background" id="section-4" data-anchor="section4">
            <div class="d-flex section-4 ">
                <div class="d-flex justify-content-end align-items-center section-scroll">
                    <div class="text-center">
                        <img class="arrow-up" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                        <p class="section-name">Giám khảo</p>
                        <img class="arrow-down" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                    </div>
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1 examiner-container">
                    <div class="d-flex images-top">

                        <?php if( have_rows('examiner1') ): ?>
                            <?php while( have_rows('examiner1') ): the_row(); 
                                $image = get_sub_field('img-examiner');
                                $picture = $image['sizes']['thumbnail']; 
                                $link = get_sub_field('link-examiner');
                                ?>

                            <a href="<?php echo $link['url'];?>" class="border-end border-bottom">
                                <div class="text-center image-container">
                                     <img class="candidate-image rounded-circle" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                </div>
                                <div class="d-flex flex-column align-items-center examiner-info">
                                    <p><?php the_sub_field('appellation'); ?></p>
                                    <p><?php the_sub_field('name-examiner'); ?></p>
                                </div>
                            </a>

                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('examiner2') ): ?>
                            <?php while( have_rows('examiner2') ): the_row(); 
                                $image = get_sub_field('img-examiner');
                                $picture = $image['sizes']['thumbnail']; 
                                $link = get_sub_field('link-examiner');
                                ?>

                            <a href="<?php echo $link['url'];?>" class="border border-top-0">
                                <div class="text-center image-container">
                                    <img class="candidate-image rounded-circle" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                </div>
                                <div class="d-flex flex-column align-items-center examiner-info">
                                    <p><?php the_sub_field('appellation'); ?></p>
                                    <p><?php the_sub_field('name-examiner'); ?></p>
                                </div>
                            </a>

                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('examiner3') ): ?>
                            <?php while( have_rows('examiner3') ): the_row(); 
                                $image = get_sub_field('img-examiner');
                                $picture = $image['sizes']['thumbnail']; 
                                $link = get_sub_field('link-examiner');
                                ?>

                            <a href="<?php echo $link['url'];?>" class="border-start border-bottom">
                                <div class="text-center image-container">
                                    <img class="candidate-image rounded-circle" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                </div>
                                <div class="d-flex flex-column align-items-center examiner-info">
                                    <p><?php the_sub_field('appellation'); ?></p>
                                    <p><?php the_sub_field('name-examiner'); ?></p>
                                </div>
                            </a>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <div class="d-flex images-bottom">
                        <?php if( have_rows('examiner4') ): ?>
                            <?php while( have_rows('examiner4') ): the_row(); 
                                $image = get_sub_field('img-examiner');
                                $picture = $image['sizes']['thumbnail']; 
                                $link = get_sub_field('link-examiner');
                                ?>

                            <a href="<?php echo $link['url'];?>" class="border-top border-end">
                                <div class="text-center image-container">
                                    <img class="candidate-image rounded-circle" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                </div>
                                <div class="d-flex flex-column align-items-center examiner-info">
                                    <p><?php the_sub_field('appellation'); ?></p>
                                    <p><?php the_sub_field('name-examiner'); ?></p>
                                </div>
                            </a>

                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('examiner5') ): ?>
                            <?php while( have_rows('examiner5') ): the_row(); 
                                $image = get_sub_field('img-examiner');
                                $picture = $image['sizes']['thumbnail']; 
                                $link = get_sub_field('link-examiner');
                                ?>

                                <a href="<?php echo $link['url'];?>" class="border border-bottom-0">
                                    <div class="text-center image-container">
                                        <img class="candidate-image rounded-circle" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                    </div>
                                    <div class="d-flex flex-column align-items-center examiner-info">
                                        <p><?php the_sub_field('appellation'); ?></p>
                                        <p><?php the_sub_field('name-examiner'); ?></p>
                                    </div>
                                </a>

                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('examiner6') ): ?>
                            <?php while( have_rows('examiner6') ): the_row(); 
                                $image = get_sub_field('img-examiner');
                                $picture = $image['sizes']['thumbnail']; 
                                $link = get_sub_field('link-examiner');
                                ?>

                                <a href="<?php echo $link['url'];?>" class="border-top border-start">
                                    <div class="text-center image-container">
                                        <img class="candidate-image rounded-circle" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                                    </div>
                                    <div class="d-flex flex-column align-items-center examiner-info">
                                        <p><?php the_sub_field('appellation'); ?></p>
                                        <p><?php the_sub_field('name-examiner'); ?></p>
                                    </div>
                                </a>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- end Giám khảo -->

<?php get_footer(); ?>

