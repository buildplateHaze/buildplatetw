<?php
/**
 * The template for displaying all pages
 *
 * @package buildplate_tw
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while (have_posts()) :
		the_post();
		get_template_part('template-parts/content', 'page');
	endwhile;
	?>
</main>

<?php
get_footer();
