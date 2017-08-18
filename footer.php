<!-- FOOTER -->
<footer class="main_footer bg_dark">
    <div class="container">
        <div >
            &copy; <?php echo $today = date("Y");  ?> <?php echo  get_bloginfo('name'); ?>
            <div class="social">
                <ul>
                    <!--  Подлключение Telegram  -->
                    <?php if ( have_posts() ) : query_posts('p=27');
                        while (have_posts()) : the_post(); ?>
                            <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>

                        <?php endwhile; endif; wp_reset_query(); ?>

                    <!--  Подлключение facebook  -->
                    <?php if ( have_posts() ) : query_posts('p=32');
                        while (have_posts()) : the_post(); ?>
                            <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>

                        <?php endwhile; endif; wp_reset_query(); ?>

                    <!--  Подлключение twitter  -->
                    <?php if ( have_posts() ) : query_posts('p=35');
                        while (have_posts()) : the_post(); ?>
                            <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>

                        <?php endwhile; endif; wp_reset_query(); ?>

                    <!--  Подлключение skype  -->
                    <?php if ( have_posts() ) : query_posts('p=38');
                        while (have_posts()) : the_post(); ?>
                            <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>

                        <?php endwhile; endif; wp_reset_query(); ?>
                    <!--  Подлключение github  -->
                    <?php if ( have_posts() ) : query_posts('p=40');
                        while (have_posts()) : the_post(); ?>
                            <li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>

                        <?php endwhile; endif; wp_reset_query(); ?>

                </ul>
            </div>
        </div>


    </div>
</footer>
<div class="hidden"></div>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/respond/respond.min.js"></script>
<![endif]-->


<!-- Подключенные скрипты-->

<script src="<?php echo get_template_directory_uri(); ?>/https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/parallax/parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/mixitup/mixitup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/scroll2id/PageScroll2id.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/waypoints/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/animate/animate-css.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/jqBootstrapValidation/jqBootstrapValidation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>