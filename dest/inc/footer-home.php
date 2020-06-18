		<!-- footer-nav -->
		<section class="section slide fullpage_section  footer-gallery" data-anchor="gallery">
			<div class="footer-gallery_tablecell">
				<div class="footer-gallery_item quality_one" data-quality="one">
					<a href="/blog"><div class="footer-gallery_heading">Блог</div></a>

					<div class="footer-gallery_photo footer-gallery_photo-one"
						style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl7-im1.png');"></div>
				</div>
				<div class="footer-gallery_item quality_two" data-quality="two">
					<a href="/blog"><div class="footer-gallery_heading">Блог</div></a>

					<div class="footer-gallery_photo footer-gallery_photo-two"
						style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl7-im2.png');"></div>
				</div>
				<div class="footer-gallery_item quality_three" data-quality="three">
					<a href="#"><div class="footer-gallery_heading">документы</div></a>
					<div class="footer-gallery_photo"></div>
				</div>
				<div class="footer-gallery_item quality_four" data-quality="four">
					<a href="#"><div class="footer-gallery_heading">исследования</div></a>
					<div class="footer-gallery_photo footer-gallery_photo-four"
						style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl7-im3.png');"></div>
				</div>
				<div class="footer-gallery_item quality_five" data-quality="five">
					<a href="/blog"><div class="footer-gallery_heading">
						<div class="footer-gallery_icon">
							<svg class="section-how_advantages-icon"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_heart"></use></svg>
						</div>
						<div>блог</div></div></a>
					<div class="footer-gallery_photo"></div>
				</div>
				<div class="footer-gallery_item quality_six" data-quality="six">
					<a href="/o-nas">
						<div class="footer-gallery_heading">О нас</div>
						<div class="footer-gallery_photo footer-gallery_photo-six"
						style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/images/bl7-im4.png');"></div>
					</a>
				</div>
				<div class="footer-gallery_item quality_seven" data-quality="seven">
					<a href="#"><div class="footer-gallery_heading"></div></a>
					<div class="footer-gallery_photo"></div>
				</div>
			</div>
			<div class="footer-gallery-nav">

			</div>
			<footer class="main-footer">
				<div class="container main-footer_inner">
					<nav class="main-footer_nav">
						<?php wp_nav_menu( array( 'theme_location' => 'extra-menu', 'menu_class' => 'main-footer_nav-wrapper' ) ); ?>
					</nav>
					<?php $phones = get_field('telefony', 'option'); ?>
					<div class="main-footer_contacts">
						<div class="footer-contacts_line-1">
							<div class="footer-contacts_phone"><?php echo $phones["telefon_1"]; ?></div>
							<div class="footer-contacts_phone"><?php echo $phones["telefon_2"]; ?></div>
							<div class="footer-contacts_media-item icon_use">
								<a href="<?php the_field('ssylka_na_instagram', 'option'); ?>">
									<svg class="icon-media icon-insta"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_insta"></use></svg>
								</a>
							</div>
							<div class="footer-contacts_media-item icon_use">
								<a href="<?php the_field('ssylka_na_facebook', 'option'); ?>">
									<svg class="icon-media icon-insta"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_fb"></use></svg>
								</a>
							</div>
						</div>
						<div class="footer-contacts_line-2">
							<div class="footer-contacts_address"><?php the_field('adres', 'option'); ?></div>
						</div>

					</div>
				</div>
			</footer>

		</section>
		<!-- footer -->
	</div>
	<!-- menu -->
	<div class="menu_wrapper">
		<div class="menu_shadow-overlay close-trigger"></div>
		<div class="menu_outer ">
			<div class="container">
				<nav class="menu_inner">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'menu nav-menu', 'items_wrap' => '<ul id="%1$s" class="%2$s"><li><svg class="icon-close-nav menu_close close-trigger"><use xlink:href="https://vivassense.com/wp-content/themes/html5blank-stable/img/svg/sprite.svg#viva_esc"></use></svg></li>%3$s</ul>' ) ); ?>
				</nav>
			</div>
		</div>
	</div>
	<!-- move to top btn -->
	<div class="footer-contacts_line-3">
		<svg class="icon-up"><use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.svg#viva_icon-up"></use></svg>
	</div>

	<!-- popups -->
	<div class="popup-contact__form"> <?php echo do_shortcode('[contact-form-7 id="363" title="contact form home page"]') ?> </div>
	<div class="popup-product_wrapper">

		<?php
		$args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'vzroslaya-seriya', 'orderby' => array( 'meta_value_num' => 'DESC' ) );
		$loop = new WP_Query( $args );
		$i = 1;
		while ( $loop->have_posts() ) : $loop->the_post(); 
			global $product;
			if ( !in_array(17, $product->category_ids, TRUE) ) { continue; }
			$productTitle = mb_strtolower($product->name, 'UTF-8'); ?>
			<div class="popup-product" id="<?php echo 'popup-bl3-img' . $i; ?>">
				<!-- popup nav -->
				<?php get_template_part( 'inc/main', 'product-nav' ); ?>
				<!-- content container -->
				<div class="popup-product_content">
					<div class="popup-product_main-content">
						<div class="popup-product_main-header">
							<div class="popup-product_main-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/viva_one.svg" alt="" class="heart_popup">
							</div>
							<span><?php echo $productTitle ?></span>
						</div>
						<style>
							.popup-product_img-overlay.tb<?php echo $i; ?>-hide {
									background-image: url('<?php the_field('img_home_big', $product->get_id()); ?>');
								}
							@media (max-width: 1279px) {
								.popup-product_img-overlay.tb<?php echo $i; ?>-hide {
									background-image: url('<?php the_field('img_home_small', $product->get_id()); ?>')!important;
								}
							}
						</style>
						<div class="popup-product_img-overlay tb<?php echo $i; ?>-hide"></div>
						<div class="popup-content_inner">
							<div class="popup-product_main-subheader"><?php echo $product->description; ?></div>
							<div class="popup-product_main-description_outer">
								<?php get_template_part( 'inc/main', 'product-sidebar' ); ?>
								<div class="popup-product_main-description">
									<div class="column"> <?php the_field('leftSideText', $product->get_id()); ?> </div>
									<div class="column"> <?php the_field('rightSideText', $product->get_id()); ?> </div>
								</div>
							</div>
							<div class="popup_active-btn">
								<a href="<?php the_field('link_to_two_product', $product->get_id()); ?>"> <button class="btn btn-green">Купить</button></a>
							</div>
						</div>
					</div>
				</div>
				<!-- how work -->
				<?php include( locate_template( 'inc/main-product-how-work.php', false, false ) );  ?>
			</div>
			<?php
			$i++;
		endwhile;
		wp_reset_query(); ?>
		<?php
		$args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'product_cat' => 'detskaya-seriya', 'orderby' => array( 'meta_value_num' => 'DESC' ) );
		$loop = new WP_Query( $args );
		$i = 1;
		while ( $loop->have_posts() ) : $loop->the_post(); 
			global $product;
			if ( !in_array(17, $product->category_ids, TRUE) ) { continue; }
			$productTitle = mb_strtolower($product->name, 'UTF-8'); ?>
			<div class="popup-product" data-popup-id="<?php echo $i; ?>">
				<!-- popup nav -->
				<?php get_template_part( 'inc/main', 'product-nav' ); ?>
				<!-- content container -->
				<div class="popup-product_content">
					<div class="popup-product_main-content">
						<div class="popup-product_main-header">
							<div class="popup-product_main-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/viva_one.svg" alt="" class="heart_popup">
							</div>
							<span><?php echo $productTitle ?></span>
						</div>
						<style>
							.popup-product_img-overlay.tbk<?php echo $i; ?>-hide {
									background-image: url('<?php the_field('img_home_big', $product->get_id()); ?>');
								}
							@media (max-width: 1279px) {
								.popup-product_img-overlay.tbk<?php echo $i; ?>-hide {
									background-image: url('<?php the_field('img_home_small', $product->get_id()); ?>')!important;
								}
							}
						</style>
						<div class="popup-product_img-overlay tbk<?php echo $i; ?>-hide"></div>
						<div class="popup-content_inner">
							<div class="popup-product_main-subheader"><?php echo $product->description; ?></div>
							<div class="popup-product_main-description_outer">
								<sidebar class="popup-product_sidebar-nav">
								
								</sidebar>
								<div class="popup-product_main-description">
									<div class="column"> <?php the_field('leftSideText', $product->get_id()); ?> </div>
									<div class="column"> <?php the_field('rightSideText', $product->get_id()); ?> </div>
								</div>
							</div>
							<div class="popup_active-btn">
								<a href="<?php the_field('link_to_two_product', $product->get_id()); ?>"> <button class="btn btn-green">Купить</button></a>
							</div>
						</div>
					</div>
				</div>
				<!-- how work -->
				<?php include( locate_template( 'inc/main-product-how-work.php', false, false ) );  ?>
			</div>
			<?php
			$i++;
		endwhile;
		wp_reset_query(); ?>
	</div>
</div>

<!-- Load Scripts Start -->
<script>
	var scr = {
		"scripts": [{
			"src": "<?php echo get_template_directory_uri(); ?>/js/libs.min.js",
			"async": false
		}, {
			"src": "<?php echo get_template_directory_uri(); ?>/js/home.min.js",
			"async": false
		}, ]
	};
	! function (t, n, r) {
		"use strict";
		var c = function (t) {
			if ("[object Array]" !== Object.prototype.toString.call(t)) return !1;
			for (var r = 0; r < t.length; r++) {
				var c = n.createElement("script"),
					e = t[r];
				c.src = e.src, c.async = e.async, n.body.appendChild(c)
			}
			return !0
		};
		t.addEventListener ? t.addEventListener("load", function () {
			c(r.scripts);
		}, !1) : t.attachEvent ? t.attachEvent("onload", function () {
			c(r.scripts)
		}) : t.onload = function () {
			c(r.scripts)
		}
	}(window, document, scr);
</script>