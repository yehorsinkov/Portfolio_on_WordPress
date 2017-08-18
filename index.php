<?php get_header();?>
	<!-- ABOUT -->
	<section id="about" class="s_about bg_white" >
		<div class="section_header">
			<h2><?php echo get_cat_name( 2 ) ?></h2>
			<div class="s_descr_wrap">
				<div class="s_descr"> <?php echo category_description( 2 ); ?> </div>
			</div>
		</div>
		<div class="section_content">
			<div class="container">
				<div class="row">

                    <?php if ( have_posts() ): query_posts('p=15') ;
                        while (have_posts()): the_post();?>
                    <div class="col-md-4 about_center col-md-push-4">
<!--                        <h3>--><?php //the_excerpt()?><!--</h3>-->
						<div class="person">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a   class="popup" href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                    echo $large_image_url[0] ?>">
                                    <?php the_post_thumbnail(array(2800, 280)); ?>
                                </a>
                            <?php endif; ?>
						</div>
					</div>
					<div class="col-md-4 about_left col-md-pull-4">
						<h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
					</div>
                        <?php endwhile; endif; wp_reset_query(); ?>

                            <div class="col-md-4 about_right">
                                <?php if ( have_posts() ) : query_posts('p=22');
                                    while (have_posts()) : the_post(); ?>
                                <h3><?php the_title(); ?></h3>
                                <h2><?php echo  get_bloginfo('name'); ?></h2>
                                <?php the_content(); ?>
                                <?php endwhile; endif; wp_reset_query(); ?>
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
			</div>
		</div>		
	</section>
	<!-- STANDART -->
	<section id="standart" class="s_standart bg_light" >
		<div class="section_header">
			<h2><?php echo get_cat_name( 4 ) ?></h2>
			<div class="s_descr_wrap">
				<div class="s_descr"> <?php echo category_description( 4 ); ?> </div>
			</div>
		</div>		
		<div class="section_content">
			<div class="container">
				<div class="row">

					<div class="col-md-6 col-sm-6  left " >
						<h3 class="title_left"><?php echo get_cat_name( 5 ) ?></h3>
						<div>
							<div class="left_box">
                                <?php if ( have_posts() ) : query_posts('p=46');
                                    while (have_posts()) : the_post(); ?>
								<h3 class="text_left"><?php the_title(); ?><span class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></span> </h3>
                                <?php the_content(); ?>
                                <?php endwhile; endif; wp_reset_query(); ?>
							</div>
						</div>
						<div >
							<div class="left_box">
                                <?php if ( have_posts() ) : query_posts('p=52');
                                    while (have_posts()) : the_post(); ?>
                                        <h3 class="text_left"><?php the_title(); ?><span class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></span> </h3>
                                        <?php the_content(); ?>
                                    <?php endwhile; endif; wp_reset_query(); ?>
							</div>
						</div>
						<div >
                            <div class="left_box">
                                <?php if ( have_posts() ) : query_posts('p=54');
                                    while (have_posts()) : the_post(); ?>
                                        <h3 class="text_left"><?php the_title(); ?><span class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></span> </h3>
                                        <?php the_content(); ?>
                                    <?php endwhile; endif; wp_reset_query(); ?>
                            </div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6  right">
						<h3 class="title_right"><?php echo get_cat_name( 6 ) ?></h3>
						<div >
							<div class="right_box">
                                <?php if ( have_posts() ) : query_posts('p=56');
                                    while (have_posts()) : the_post(); ?>
                                        <h3 class="text_right"><span class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></span><?php the_title(); ?> </h3>
                                        <?php the_content(); ?>
                                    <?php endwhile; endif; wp_reset_query(); ?>
							</div>
						</div>
						<div >
							<div class="right_box">
                                <?php if ( have_posts() ) : query_posts('p=58');
                                    while (have_posts()) : the_post(); ?>

                                        <h3 class="text_right"><span class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></span><?php the_title(); ?> </h3>
                                        <?php the_content(); ?>
                                    <?php endwhile; endif; wp_reset_query(); ?>
							</div>
						</div>
						<div >
							<div class="right_box">
                                <?php if ( have_posts() ) : query_posts('p=60');
                                    while (have_posts()) : the_post(); ?>
                                        <h3 class="text_right"><span class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></span><?php the_title(); ?> </h3>
                                        <?php the_content(); ?>
                                    <?php endwhile; endif; wp_reset_query(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- PORTFOLIO -->
	<section id="portfolio" class="s_portfolio bg_dark" >
		<div class="section_header">
			<h2><?php echo get_cat_name( 7 ) ?></h2>
			<div class="s_descr_wrap">
				<div class="s_descr"><?php echo category_description( 7 ); ?> </div>
			</div>
		</div>
		<div class="section_content">
			<div class="container">
				<div class="row">
					<div class="filter_div controls">
						<ul>
							<li class="filter active" data-filter="all">Все работы</li>
							<li class="filter" data-filter=".imposition">Верстка</li>
							<li class="filter" data-filter=".development">Разработка</li>
						</ul>
					</div>
					<div id="portfolio_grid">
                        <?php if ( have_posts() ) : query_posts('cat=7');
                            while (have_posts()) : the_post(); ?>
                                <div class="mix col-md-4 col-sm-6 col-xs-12  portfolio_item
                                <?php $tags = wp_get_post_tags($post->ID);
                                if ($tags) {
                                    foreach($tags as $tag) {
                                        echo ' ' . $tag->name ;}
                                }?>">
                                    <?php the_post_thumbnail(array(400, 300)); ?>
                                    <div class="port_item_cont">
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                        echo $large_image_url[0] ?>" class="popup_content">Посмотреть</a>
                                    </div>
                                    <div class="hidden">
                                        <div class="podrt_descr">
                                            <div class="modal-box-content">
                                                <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                                <h3><?php the_title(); ?></h3>
                                                <?php the_content(); ?>
                                                <?php the_post_thumbnail(array(400, 300)); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; endif; wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>			
	</section>
	<!-- CONTACT -->
	<section id="contact" class="s_contact bg_light" >
		<div class="section_header">
			<h2><?php echo get_cat_name( 11 ) ?></h2>
			<div class="s_descr_wrap">
				<div class="s_descr"><?php echo category_description( 11 ); ?> </div>
			</div>
		</div>
			
		<div class="section_content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 ">
						<div class="contact_box">
                            <?php if ( have_posts() ) : query_posts('p=96');
                                while (have_posts()) : the_post(); ?>

							<span class="contant_icon icon-basic-smartphone"></span>
							<h3><?php the_title(); ?></h3>
                                    <a href="tel:+380937003875"> <?php $options = get_option( 'sample_theme_options' );
                                        echo $options['phonetext']; ?> </a>
                                <?php endwhile; endif; wp_reset_query(); ?>
						</div>
						<div class="contact_box">
                            <?php if ( have_posts() ) : query_posts('p=102');
                                while (have_posts()) : the_post(); ?>
							<span class="contant_icon icon-basic-webpage-img-txt"></span>
							<h3><?php the_title(); ?></h3>
							<a href="sinkovdevelop.com" target="_blank"> <?php $options = get_option( 'sample_theme_options' );
                                echo $options['sitetext']; ?> </a>
                                <?php endwhile; endif; wp_reset_query(); ?>
						</div>
						<div class="contact_box">
                            <?php if ( have_posts() ) : query_posts('p=104');
                                while (have_posts()) : the_post(); ?>
							<span class="contant_icon icon-basic-geolocalize-01"></span>
							<h3><?php the_title(); ?></h3>
							<p><?php $options = get_option( 'sample_theme_options' );
                                echo $options['addresstext']; ?></p>
                                <?php endwhile; endif; wp_reset_query(); ?>
						</div>
					    </div>
					<div class="col-md-6  col-sm-6">
						<form id="form" action="https://formspree.io/egorkatornado@gmail.com" class="main_form" novalidate target="_blank" method="post">
							<label class="form-group">
								<span class="color_element">*</span> Ваше имя:
								<input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" required />
								<span class="help-block text-danger"></span>
							</label>
							<label class="form-group">
								<span class="color_element">*</span> Ваш E-mail:
								<input type="email" name="email" placeholder="Ваш E-mail" data-validation-required-message="Не корректно введен E-mail" required />
								<span class="help-block text-danger"></span>
							</label>
							<label class="form-group">
								<span class="color_element">*</span> Ваше сообщение:
								<textarea name="message" placeholder="Ваше сообщение" data-validation-required-message="Вы не ввели сообщение" required></textarea>
								<span class="help-block text-danger"></span>
							</label>
							<button>Отправить</button>
						</form>
				</div>
			</div>
		</div>		
	</section>

<?php get_footer();?>