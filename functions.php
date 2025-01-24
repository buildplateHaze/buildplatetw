<?php
/**
 * Buildplate TW functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package buildplate_tw
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function buildplatetw_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_theme_textdomain( 'buildplatetw', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'buildplatetw' ),
            'footer' => esc_html__( 'Footer Menu', 'buildplatetw' ),
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    // Add WooCommerce support
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'buildplatetw_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function buildplatetw_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'buildplatetw_content_width', 1400 );
}
add_action( 'after_setup_theme', 'buildplatetw_content_width', 0 );

/**
 * Register widget area.
 */
function buildplatetw_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'buildplatetw' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'buildplatetw' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'buildplatetw_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function buildplatetw_scripts() {
    wp_enqueue_style( 'buildplatetw-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_script( 'buildplatetw-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'buildplatetw_scripts' );

/**
 * Set up the WordPress core custom header feature.
 */
function buildplatetw_custom_header_setup() {
    add_theme_support(
        'custom-header',
        apply_filters(
            'buildplatetw_custom_header_args',
            array(
                'default-image'      => '',
                'default-text-color' => '000000',
                'width'             => 1400,
                'height'            => 250,
                'flex-height'       => true,
                'wp-head-callback'   => 'buildplatetw_header_style',
            )
        )
    );
}
add_action( 'after_setup_theme', 'buildplatetw_custom_header_setup' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Set up the front page programmatically
 */
function buildplatetw_setup_front_page() {
    $front_page_id = get_option('page_on_front');
    if (!$front_page_id) {
        $front_page = array(
            'post_title'    => 'Home',
            'post_content'  => '',
            'post_status'   => 'publish',
            'post_type'     => 'page'
        );
        
        $front_page_id = wp_insert_post($front_page);
        
        update_option('show_on_front', 'page');
        update_option('page_on_front', $front_page_id);
    }
}
add_action('after_switch_theme', 'buildplatetw_setup_front_page'); 