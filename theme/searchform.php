<?php
/**
 * The template for displaying search forms
 *
 * @package buildplate_tw
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="sr-only">
        <?php _e('Search for:', 'buildplatetw'); ?>
    </label>
    <input type="search" 
           class="search-field" 
           placeholder="<?php echo esc_attr_x('Search...', 'placeholder', 'buildplatetw'); ?>"
           value="<?php echo get_search_query(); ?>" 
           name="s" />
    <button type="submit" class="search-submit">
        <span class="sr-only"><?php echo esc_attr_x('Search', 'submit button', 'buildplatetw'); ?></span>
    </button>
</form> 