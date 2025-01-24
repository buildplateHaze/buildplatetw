<?php
/**
 * Template part for displaying homepage content
 *
 * @package buildplate_tw
 */
?>

<div class="bg-gray-50 min-h-screen">
    <!-- Hero Section -->
    <section class="relative bg-white border-b">
        <div class="max-w-[1400px] mx-auto px-4 py-12 md:py-16">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                        Custom PC Builds for Every Need
                    </h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Find your perfect custom PC build or sell your creation to enthusiasts worldwide.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="bg-[#F1641E] text-white px-6 py-3 rounded-full font-medium hover:bg-[#E74C19] transition-colors">
                            Start Shopping
                        </a>
                        <a href="#" class="border-2 border-gray-900 text-gray-900 px-6 py-3 rounded-full font-medium hover:bg-gray-100 transition-colors">
                            Become a Seller
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/hero-pc.jpg" 
                         alt="Custom PC Build" 
                         class="rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="py-12 bg-white">
        <div class="max-w-[1400px] mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Popular Categories</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <?php
                $categories = array(
                    array('Gaming PCs', 'gaming-icon.svg'),
                    array('Workstations', 'workstation-icon.svg'),
                    array('Budget Builds', 'budget-icon.svg'),
                    array('High-End Builds', 'premium-icon.svg'),
                );

                foreach ($categories as $category) :
                ?>
                <a href="#" class="group">
                    <div class="bg-gray-50 rounded-lg p-6 text-center hover:bg-gray-100 transition-colors">
                        <div class="w-16 h-16 mx-auto mb-4 bg-white rounded-full flex items-center justify-center shadow-sm group-hover:scale-110 transition-transform">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/' . $category[1]); ?>" 
                                 alt="<?php echo esc_attr($category[0]); ?>"
                                 class="w-8 h-8">
                        </div>
                        <h3 class="font-medium text-gray-900"><?php echo esc_html($category[0]); ?></h3>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-12">
        <div class="max-w-[1400px] mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Featured Builds</h2>
                <a href="#" class="text-[#F1641E] hover:text-[#E74C19] font-medium">View All</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                // Query featured products
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 4,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_visibility',
                            'field'    => 'name',
                            'terms'    => 'featured',
                        ),
                    ),
                );
                $featured_products = new WP_Query($args);

                if ($featured_products->have_posts()) :
                    while ($featured_products->have_posts()) : $featured_products->the_post();
                        global $product;
                        ?>
                        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                            <a href="<?php the_permalink(); ?>" class="block">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" 
                                         alt="<?php the_title(); ?>"
                                         class="w-full h-48 object-cover rounded-t-lg">
                                <?php endif; ?>
                                <div class="p-4">
                                    <h3 class="font-medium text-gray-900 mb-2"><?php the_title(); ?></h3>
                                    <div class="flex justify-between items-center">
                                        <span class="text-lg font-bold text-gray-900">
                                            <?php echo $product->get_price_html(); ?>
                                        </span>
                                        <div class="flex items-center text-sm text-gray-500">
                                            <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <?php echo $product->get_average_rating(); ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-12 bg-white">
        <div class="max-w-[1400px] mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Why Choose Buildplate</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-[#F1641E] bg-opacity-10 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-[#F1641E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Verified Builders</h3>
                    <p class="text-gray-600">All our builders are vetted and verified for quality assurance.</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-[#F1641E] bg-opacity-10 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-[#F1641E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Fast Delivery</h3>
                    <p class="text-gray-600">Quick and secure shipping for all custom builds.</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-[#F1641E] bg-opacity-10 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-[#F1641E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Secure Payments</h3>
                    <p class="text-gray-600">Safe and secure payment processing for all transactions.</p>
                </div>
            </div>
        </div>
    </section>
</div> 