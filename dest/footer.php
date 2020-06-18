		<?php 
			if ( is_front_page() ) { 
				get_template_part( 'inc/footer', 'home' );
			} 
			elseif ( is_page_template( 'template-product-categories.php' ) ) { 
				get_template_part( 'inc/footer', 'product-categories' );
			}
			else { 
				get_template_part( 'inc/footer', 'main' );
			}
		?>

		<?php wp_footer(); ?>


	</body>
</html>
