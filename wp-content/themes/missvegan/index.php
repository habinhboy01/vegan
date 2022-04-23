<?php 
/*

	Template Name: Home page

*/	
get_header(); ?>

    <div id="fullpage" class="page-container">
        <section class="section s1-background" id="section-1" data-anchor="section1">
            <div class="d-flex section-1">
                <div class="position-relative col-6 s1-left">
                    <h1 class="heading"><?php echo get_field('header1'); ?></h1>

                    <?php 
	                $image = get_field('img1');
	                if( !empty( $image ) ): ?>
	                    <img class="position-absolute" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
	                <?php endif; ?>

                </div>

                <div class="d-flex justify-content-start col-6 s1-right">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h1 class="heading"><?php echo get_field('header-register'); ?></h1>
                        <p><?php echo get_field('register-south'); ?></p>
                        <p><?php echo get_field('register-north'); ?></p>
                        <p class="mt-2"><?php echo get_field('buy-ticket'); ?></p>
                        <p><?php echo get_field('hotline'); ?></p>
                        <div class="d-flex flex-column align-items-center social-media">
                            <div class="d-flex align-items-center mb-1">
                                <i class="fab fa-tiktok"></i>
                                <p><?php echo get_field('email'); ?></p>
                            </div>
                            <div class="d-flex">
                                <div class="d-flex align-items-center me-5">
                                    <i class="fas fa-globe"></i>
                                    <p><?php echo get_field('name-web'); ?></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fab fa-facebook-square me-2"></i>
                                    <i class="fab fa-instagram-square"></i>
                                    <p><?php echo get_field('social'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Giới thiệu -->
        <section class="section s2-background" id="section-2" data-anchor="section2">
            <div class="d-flex section-2">
                <div class="d-flex justify-content-end align-items-center section-scroll">
                    <div class="text-center">
                        <a href="#section1">
                            <img class="arrow-up" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                        </a>
                        <p class="section-name">Giới thiệu</p>
                        <img class="arrow-down" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                    </div>
                </div>

                <div class="d-flex">
                    <div class="d-flex flex-column justify-content-center align-items-center col-6 s2-left">
                        <div>
                            <h1 class="heading"><?php echo get_field('header-show'); ?></h1>
                            <p>
                            	<?php the_field('content-show'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="position-relative col-6 s2-right">
                        <img class="position-absolute triangle" src="<?php bloginfo('template_directory') ?>/images/s2-triangle.svg" alt="triangle">
	                   	<?php 
		                $image = get_field('img-show');
		                if( !empty( $image ) ): ?>
		                    <img class="position-absolute" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		                <?php endif; ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- end Giới thiệu -->

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

        <!-- Tin tức -->
        <section class="section s5-background" id="section-5" data-anchor="section5">
            <div class="d-flex section-5 ">
                <div class="d-flex justify-content-end align-items-center section-scroll">
                    <div class="text-center">
                        <img class="arrow-up" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                        <p class="section-name">Tin tức</p>
                        <img class="arrow-down" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                    </div>
                </div>

                <div class="d-flex align-items-center s5-carousel">

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

                            <a class="carousel-items" href="<?php the_permalink(); ?>">
                                <div class="image-container">
                                    <?php the_post_thumbnail('full'); ?>
                                </div>

                                <div class="d-flex flex-column align-items-center news-title">
                                    <p><?php the_title(); ?></p> 
                                </div>       
                            </a>

                    <?php endwhile; wp_reset_postdata(); ?>

                </div>
            </div>
        </section>
        <!-- end Tin tức -->

        <!-- Đơn vị -->
        <section class="section s6-background" id="section-6" data-anchor="section6">
            <div class="d-flex section-6">
                <div class="d-flex justify-content-end align-items-center section-scroll">
                    <div class="text-center">
                        <img class="arrow-up" src="<?php bloginfo('template_directory') ?>/images/arrow.svg" alt="arrow">
                        <p class="section-name">Đơn vị</p>
                    </div>
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1 organizer-container">
                    <div class="d-flex flex-column align-items-center organizer-top">
                        <h1 class="mb-3">Đơn vị tổ chức:</h1>
                        <div class="d-flex justify-content-evenly align-items-center w-100">

                        	<?php 
			                $image = get_field('img-logo');
			                if( !empty( $image ) ): ?>
			                    <img class="organizer-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			                <?php endif; ?>


			                <?php 
			                $image = get_field('img-logo2');
			                if( !empty( $image ) ): ?>
			                    <img class="organizer-logo mc-film-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			                <?php endif; ?>

			                <?php 
			                $image = get_field('img-logo3');
			                if( !empty( $image ) ): ?>
			                    <img class="organizer-logo ntertainment-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			                <?php endif; ?>

                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-center w-100">
                        <h1 class="mb-4">Đơn vị tài trợ:</h1>
                        <div class="d-flex justify-content-evenly align-items-center w-100 mb-5 organizer-bottom">

                        	<?php 
			                $image = get_field('img-logo4');
			                if( !empty( $image ) ): ?>
			                    <img class="organizer-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			                <?php endif; ?>

			                <?php 
			                $image = get_field('img-logo5');
			                if( !empty( $image ) ): ?>
			                    <img class="organizer-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			                <?php endif; ?>

			               	<?php 
			                $image = get_field('img-logo6');
			                if( !empty( $image ) ): ?>
			                    <img class="organizer-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			                <?php endif; ?>

                        </div>
                        <div class="d-flex justify-content-evenly align-items-center w-100 ob-bottom">

                        	<?php 
			                $image = get_field('img-logo7');
			                if( !empty( $image ) ): ?>
			                    <img class="organizer-logo oppo-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			                <?php endif; ?>

			                <?php 
			                $image = get_field('img-logo8');
			                if( !empty( $image ) ): ?>
			                    <img class="organizer-logo man-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			                <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end Đơn vị -->
    </div>

<?php get_footer(); ?>