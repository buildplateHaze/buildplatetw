<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package buildplate_tw
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	if (is_home() || is_front_page()) {
		get_template_part('home');
	} else {
		if (have_posts()) :
			while (have_posts()) :
				the_post();
				get_template_part('template-parts/content', get_post_type());
			endwhile;

			buildplatetw_the_posts_navigation();
		else :
			get_template_part('template-parts/content', 'none');
		endif;
	}
	?>
</main>

<?php
get_footer();
