<?php /* Template Name: Страница Блога */ get_header(); ?>
<div class="container">
	<h1>Блог</h1>
</div>
<?php
 
$currentPage = get_query_var('paged');
 
 
// General arguments
 
$posts = new WP_Query(array(
    'post_type' => 'post', // Default or custom post type
    'posts_per_page' => 10, // Max number of posts per page
    'paged' => $currentPage
));
 
// Top pagination (pagination arguments)
 
echo "<div class='page-nav-container'>" . paginate_links(array(
    'total' => $posts->max_num_pages,
    'prev_text' => __('Back'),
    'next_text' => __('Next')
)) . "</div>";
 
 
// Content display
echo "<div class='posts-container'>";
if ($posts->have_posts()) :
    while ($posts->have_posts()) :
		$posts->the_post();
		$post_slug = get_post_field( 'post_name', get_post() );
		$siteUrl = get_site_url();
		$url = $siteUrl . "/" . $post_slug; ?>
		<div class="post-wrap">
			<a href="<?php echo $url ?>">
				<div class="img-wrap">
					<?php echo get_the_post_thumbnail( $posts->ID, array(588, 300), array('class' => 'blog-image') ); ?>
				</div>
			</a>
			<h2 class="title"><?php the_title(); ?></h2>
			<div class="excerpt"><?php the_excerpt(); ?></div>
			<div class="btn-wrap">
				<a href="<?php echo $url ?>" class="btn-read-more"> Читать дальше </a>
			</div>
		</div>
		<?php
    endwhile;
endif;
echo "</div>";
// Bottom pagination (pagination arguments)
 
echo "<div class='page-nav-container'>" . paginate_links(array(
    'total' => $posts->max_num_pages,
    'prev_text' => __('Back'),
    'next_text' => __('Next')
)) . "</div>";
 
?>

<?php get_template_part( 'inc/blog', 'footer' ); ?>

<?php get_footer(); ?>