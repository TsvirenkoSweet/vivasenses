<?php get_header(); ?>
<section class="section section_product-course">
	<div class="product-course_outer container">
		<?php 
		$terms = get_field('preSaleCat');
		if( $terms ): ?>
			<ul class="products">
				<?php
				$args = array( 'post_type' => 'product', 'posts_per_page' => 2, 'product_cat' => $terms->slug, 'orderby' => array( 'meta_value_num' => 'DESC' ) );
				$loop = new WP_Query( $args );
				
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
				
				$categorySlug = '';
				foreach ( $product->category_ids as $catId ) {

					$categoryArray = [];
					if ($catId == 17 || $catId == 18) {
						$categoryArray = get_term_by( 'id', $catId, 'product_cat', 'ARRAY_A' );
						$categorySlug = $categoryArray['slug'];
					}
				} 
				// echo '<pre> categorySlug' , var_dump($categorySlug) , '</pre>'; 
				?>
					<li class="product type-product">
						<div class="product_inner">
							<div class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
								<?php woocommerce_show_product_sale_flash( $post, $product ); ?>
								<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'full'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
								<h2 class="woocommerce-loop-product__title"><?php echo mb_strtolower($loop->post->post_title, 'UTF-8'); ?></h2>
								<div class="product_buy-course">
									<div class="product_buy-course-text">
										<?php 
										echo $categorySlug == "kurs-na-nedelyu" ? "Купить курс на неделю" : "Купить курс на 1,5 месяца";
										?>
									</div>
								</div>
								<span class="price"><?php echo $product->get_price_html(); ?></span>
							</div>
							<form class="cart" action="" method="post" enctype="multipart/form-data">
		
								<div class="quantity" style="display: none">
									<label class="screen-reader-text" for="quantity_5e82bf941268f"></label>
									<input type="number" id="quantity_5e82bf941268f" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Кол-во" size="4" placeholder="" inputmode="numeric">
								</div>
						
								<button type="submit" name="add-to-cart" value="<?php echo $product->get_id(); ?>" class="single_add_to_cart_button button alt">В корзину</button>

							</form>
							<?php 
							// woocommerce_template_loop_add_to_cart( $loop->post, $product ); 
							?>
						</div>
					</li>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</ul><!--/.products-->
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>