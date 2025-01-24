<?php
/**
 * The front page template file
 *
 * This template is identical to home.php to maintain consistency
 * when either a static front page or latest posts is selected.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package buildplate_tw
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="max-w-[1400px] mx-auto px-4 py-8">
        <!-- Hero Section -->
        <section class="hero-section mb-16">
            <div class="bg-gray-100 rounded-lg p-8">
                <h1 class="text-4xl font-bold mb-4">Custom Builds Marketplace</h1>
                <p class="text-xl text-gray-600">Find unique and custom-built products from talented creators</p>
            </div>
        </section>

        <!-- Main Categories -->
        <section class="categories mb-16">
            <h2 class="text-2xl font-bold mb-6">Browse Categories</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <?php
                $categories = array(
                    'Accessories',
                    'Art & Collectibles',
                    'Baby',
                    'Bags & Purses',
                    'Bath & Beauty',
                    'Books, Movies & Music',
                    'Clothing',
                    'Craft Supplies & Tools',
                    'Electronics & Accessories',
                    'Gifts',
                    'Home & Living',
                    'Jewelry'
                );

                foreach ($categories as $category) :
                    $slug = sanitize_title($category);
                ?>
                    <a href="<?php echo esc_url(home_url('/product-category/' . $slug)); ?>" 
                       class="block p-4 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
                        <h3 class="text-lg font-semibold"><?php echo esc_html($category); ?></h3>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Featured Products -->
        <?php if (class_exists('WooCommerce')) : ?>
            <section class="featured-products mb-16">
                <h2 class="text-2xl font-bold mb-6">Featured Products</h2>
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                
                $products = new WP_Query($args);
                
                if ($products->have_posts()) :
                    echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">';
                    while ($products->have_posts()) : $products->the_post();
                        wc_get_template_part('content', 'product');
                    endwhile;
                    echo '</div>';
                endif;
                
                wp_reset_postdata();
                ?>
            </section>
        <?php endif; ?>

        <!-- Call to Action -->
        <section class="cta bg-gray-100 rounded-lg p-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Start Your Custom Build Shop</h2>
            <p class="text-xl text-gray-600 mb-6">Join our marketplace and start selling today</p>
            <a href="<?php echo esc_url(home_url('/register')); ?>" 
               class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                Get Started
            </a>
        </section>
    </div>
</main>

<?php
get_footer();