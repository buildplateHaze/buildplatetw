<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package buildplate_tw
 */

?>

<header id="masthead" class="bg-white border-b border-gray-200">
	<!-- Top Header Section -->
	<div class="py-3 px-4">
		<div class="flex items-center justify-between gap-2 md:gap-4 max-w-[1400px] mx-auto">
			<!-- Logo -->
			<div class="flex-shrink-0 w-32">
				<div class="logo">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?php bloginfo('name'); ?>
					</a>
				</div>
			</div>

			<!-- Search (expanded) -->
			<div class="search-container flex-1 mx-4">
				<?php get_search_form(); ?>
			</div>

			<!-- Right side icons -->
			<div class="flex items-center gap-2 md:gap-4 justify-end flex-shrink-0 w-32">
				<a href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard')); ?>" class="text-gray-700 hover:text-gray-900 relative">
					<span class="sr-only"><?php echo is_user_logged_in() ? 'My Account' : 'Sign in'; ?></span>
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
					</svg>
					<?php if (is_user_logged_in()) : ?>
						<span class="absolute -top-2 -right-2 bg-[#F1641E] w-2.5 h-2.5 rounded-full"></span>
					<?php endif; ?>
				</a>
				<a href="#" class="hidden md:block text-gray-700 hover:text-gray-900">
					<span class="sr-only">Favorites</span>
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
					</svg>
				</a>
				<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="text-gray-700 hover:text-gray-900 relative">
					<span class="sr-only">Cart</span>
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
					</svg>
					<?php if (WC()->cart->get_cart_contents_count() > 0) : ?>
						<span class="absolute -top-2 -right-2 bg-[#F1641E] text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">
							<?php echo WC()->cart->get_cart_contents_count(); ?>
						</span>
					<?php endif; ?>
				</a>
			</div>
		</div>
	</div>

	<!-- Categories Bar -->
	<div class="bg-white overflow-x-auto">
		<div class="max-w-[1400px] mx-auto px-4">
			<nav class="categories-nav" aria-label="<?php esc_attr_e('Categories Navigation', 'buildplatetw'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'categories-menu',
						'items_wrap'     => '<ul id="%1$s" class="flex items-center justify-center space-x-6 md:space-x-8 py-3" aria-label="Categories">%3$s</ul>',
						'container'      => false,
					)
				);
				?>
			</nav>
		</div>
	</div>
</header>
