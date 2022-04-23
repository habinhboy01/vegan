    <footer class="position-fixed d-flex">
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/vendors/scrolloverflow.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/dist/fullpage.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/script.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/hpc-script.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/mnc.js"></script>
</body>

</html>