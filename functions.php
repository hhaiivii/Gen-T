function enqueue_custom_styles() {
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
