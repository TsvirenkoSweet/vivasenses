<?php get_header(); ?>
	<main role="main">
		<section>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail()) : ?>
						<?php the_post_thumbnail();  ?>
					<?php endif; ?>
					<div class="container">
						<div class="time-container">
							<time datetime="<?php the_time('d m Y'); ?>" class="date"><?php the_time('d m Y'); ?> </time>
						</div>
						<h1> <?php the_title(); ?> </h1>
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>
			<?php else: ?>
				<article>
					<div class="container">
						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
					</div>
				</article>
			<?php endif; ?>
		</section>
	</main>
	<?php get_template_part( 'inc/blog', 'footer' ); ?>
<?php get_footer(); ?>
