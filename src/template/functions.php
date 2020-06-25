<?php

function add_enqueue_styles()
{
    wp_enqueue_style('theme_style',  get_template_directory_uri() . '/style.css', 1);
    wp_enqueue_style('uikit_css',  'https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css');
    wp_enqueue_style('google_font',  'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Poppins:wght@400;500;600;800&display=swap');
    wp_enqueue_script('uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js', array(), false, true);

}


add_action('wp_enqueue_scripts', 'add_enqueue_styles', 1);

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style('wp-emoji-release');
   }
   add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css' );


   /**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
//Remove Gutenberg Block Library CSS from loading on the frontend

/*********************************************
 *               Blocks Styling               *
 **********************************************/
function am_enqueue_admin_styles()
{
    wp_enqueue_style('uikit_css',  'https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css');
    wp_enqueue_style('google_font',  'https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap');
    wp_enqueue_style('theme_style',  get_template_directory_uri() . '/style.css');

    wp_enqueue_script('uikit_js', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js', array(), false, true);
}
add_action('admin_enqueue_scripts', 'am_enqueue_admin_styles');

/**
 * Custom block category
 */

function my_blocks_plugin_block_categories($categories)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'custom_blocks',
                'title' => __('Custom Blocks', 'mydomain'),
                // 'icon'  => 'wordpress',
            ),
        )
    );
}
add_filter('block_categories', 'my_blocks_plugin_block_categories', 10, 2);

/*********************************************
 *               Adding Blocks                *
 **********************************************/
add_action('acf/init', 'my_acf_init');
function my_acf_init()
{
    // check function exists
    if (function_exists('acf_register_block')) {
        add_guttenberg_block('wideslider');
        add_guttenberg_block('doublecard');
        add_guttenberg_block('longcard');
        add_guttenberg_block('musthave');
        add_guttenberg_block('categories');
        add_guttenberg_block('contact');
        add_guttenberg_block('brands');
        add_guttenberg_block('testimonials');
        
        // add_guttenberg_block('gridicon');
        // add_guttenberg_block('grid');
        // add_guttenberg_block('card');
        // add_guttenberg_block('block360');
        // add_guttenberg_block('galleryslider');
        // add_guttenberg_block('quote');
        // add_guttenberg_block('heroslider');
        // add_guttenberg_block('according');
        // add_guttenberg_block('contactform');
        // add_guttenberg_block('testimonials');
        // add_guttenberg_block('quote');
        // add_guttenberg_block('certification');
        // add_guttenberg_block('cta');
        // add_guttenberg_block('products');
        // add_guttenberg_block('reach');
    }
}

function add_guttenberg_block($blockname)
{
    // register card block
    acf_register_block(array(
        'name'                => $blockname,
        'title'                => __($blockname),
        'description'        => __('A custom block.'),
        'render_callback'    => 'section_block_callback',
        'category'            => 'custom_blocks',
        'icon'                => 'admin-comments',
        // 'keywords'            => array($block_name),
    ));
}

/*********************************************
 *               Blocks Callback              *
 **********************************************/
function section_block_callback($block)
{
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    // include a template part from within the "template-parts/block" folder
    if (file_exists(get_theme_file_path("block/{$slug}.php"))) {
        include(get_theme_file_path("block/{$slug}.php"));
    }
}
/*********************************************
 *               ACF Theme Settings           *
 **********************************************/
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'    => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));
}
function pippin_login_form_shortcode( $atts, $content = null ) {
 
	extract( shortcode_atts( array(
      'redirect' => ''
      ), $atts ) );
 
	if (!is_user_logged_in()) {
		if($redirect) {
			$redirect_url = $redirect;
		} else {
			$redirect_url = get_permalink();
		}
		$form = wp_login_form(array('echo' => false, 'redirect' => $redirect_url ));
	} 
	return $form;
}
add_shortcode('loginform', 'pippin_login_form_shortcode');

function debug_to_console( $data ) {
    if ( is_array( $data ) )
     $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
     else
     $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
    echo $output;
    }

// function wordpress_cart(){
//     global $woocommerce;
//     debug('hey');
// return 'hey';
// }
// add_shortcode('cartdata', 'wordpress_cart');
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'shop',
		'id'            => 'shop',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );



?>