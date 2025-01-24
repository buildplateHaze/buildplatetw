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
	<div class="max-w-[1400px] mx-auto px-4 py-3">
		<div class="flex items-center justify-between gap-4">
			<!-- Logo -->
			<div class="w-48 flex items-center">
				<?php
				$custom_logo_id = get_theme_mod('custom_logo');
				if ($custom_logo_id) {
					$logo_url = wp_get_attachment_url($custom_logo_id);
					if ($logo_url) {
						printf(
							'<a href="%1$s" class="block"><img src="%2$s" alt="%3$s" class="w-48 h-auto" style="image-rendering: -webkit-optimize-contrast;"></a>',
							esc_url(home_url('/')),
							esc_url($logo_url),
							esc_attr(get_bloginfo('name'))
						);
					}
				}
				if (!$custom_logo_id || !$logo_url) {
					printf(
						'<a href="%1$s" class="text-xl font-bold text-[#F1641E]">%2$s</a>',
						esc_url(home_url('/')),
						'Buildplate'
					);
				}
				?>
			</div>

			<!-- Search -->
			<div class="flex-1 mx-4">
				<?php get_search_form(); ?>
			</div>

			<!-- Icons -->
			<div class="w-32 flex items-center justify-end gap-4">
				<a href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard')); ?>" class="text-gray-700 hover:text-gray-900">
					<span class="sr-only">Account</span>
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
				</a>
				<a href="#" class="text-gray-700 hover:text-gray-900">
					<span class="sr-only">Favorites</span>
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
				</a>
				<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="text-gray-700 hover:text-gray-900">
					<span class="sr-only">Cart</span>
					<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
				</a>
			</div>
		</div>
	</div>

	<!-- Categories Menu -->
	<div class="border-t border-gray-200">
		<div class="max-w-[1400px] mx-auto px-4">
			<nav class="py-3">
				<?php
				wp_nav_menu([
					'theme_location' => 'menu-1',
					'menu_id' => 'categories-menu',
					'items_wrap' => '<ul id="%1$s" class="flex items-center justify-center gap-8">%3$s</ul>',
					'container' => false,
				]);
				?>
			</nav>
		</div>
	</div>
</header>
