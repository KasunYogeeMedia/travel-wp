<?php

/**
 * travel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package travel
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function travel_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on travel, use a find and replace
		* to change 'travel' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('travel', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'travel'),
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'travel_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
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
}
add_action('after_setup_theme', 'travel_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function travel_content_width()
{
	$GLOBALS['content_width'] = apply_filters('travel_content_width', 640);
}
add_action('after_setup_theme', 'travel_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function travel_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'travel'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'travel'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'travel_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function travel_scripts()
{
	wp_enqueue_style('travel-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('travel-style', 'rtl', 'replace');

	wp_enqueue_script('travel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'travel_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
	private $current_item;
	private $dropdown_menu_alignment_values = [
		'dropdown-menu-start',
		'dropdown-menu-end',
		'dropdown-menu-sm-start',
		'dropdown-menu-sm-end',
		'dropdown-menu-md-start',
		'dropdown-menu-md-end',
		'dropdown-menu-lg-start',
		'dropdown-menu-lg-end',
		'dropdown-menu-xl-start',
		'dropdown-menu-xl-end',
		'dropdown-menu-xxl-start',
		'dropdown-menu-xxl-end'
	];

	function start_lvl(&$output, $depth = 0, $args = null)
	{
		$dropdown_menu_class[] = '';
		foreach ($this->current_item->classes as $class) {
			if (in_array($class, $this->dropdown_menu_alignment_values)) {
				$dropdown_menu_class[] = $class;
			}
		}
		$indent = str_repeat("\t", $depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " depth_$depth\">\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		$this->current_item = $item;

		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = 'nav-item';
		$classes[] = 'nav-item-' . $item->ID;
		if ($depth && $args->walker->has_children) {
			$classes[] = 'dropdown-menu dropdown-menu-end';
		}

		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

		$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

		$active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
		$nav_link_class = ($depth > 0) ? 'dropdown-item ' : 'nav-link ';
		$attributes .= ($args->walker->has_children) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
}
// register a new menu in header
register_nav_menu('main-menu', 'Main menu');

function get_api_data()
{
	$api_key = "E64AD6845F1C447FA768AA345CD76731";
	$url = "https://api.content.tripadvisor.com/api/v1/location/search";

	// Set parameters for the search
	$params = array(
		"key" => $api_key,
		"searchQuery" => "kandy",
		"category" => "hotels",
		"language" => "en",

	);

	// Build query string
	$query_string = http_build_query($params);

	// Make request to API
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url . "?" . $query_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);

	// Parse JSON response
	$results = json_decode($response);

	// Process results
	return $results;
}
// Travels Custom post type function
add_action('pre_get_posts', 'add_my_post_types_to_query');

function add_my_post_types_to_query($query)
{
	if (is_home() && $query->is_main_query())
		$query->set('post_type', array('post', 'travel_blogs'));
	return $query;
}

if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}

// Register the menu in footer
function register_footer_menu()
{
	register_nav_menu('footer_menu', __('Footer Menu'));
}
add_action('init', 'register_footer_menu');

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyCDY5NB991GzLR9RMnH2usCDgpONPdq2Mo' );
  }
  
  add_action('acf/init', 'my_acf_init');

  add_action( 'wp_ajax_my_custom_ajax_endpoint', 'my_custom_ajax_endpoint' );
  add_action( 'wp_ajax_nopriv_my_custom_ajax_endpoint', 'my_custom_ajax_endpoint' );

  add_action( 'wp_ajax_my_custom_ajax_endpoint1', 'my_custom_ajax_endpoint1' );
  add_action( 'wp_ajax_nopriv_my_custom_ajax_endpoint1', 'my_custom_ajax_endpoint1' );

	function my_custom_ajax_endpoint() {
		$custom_post_data = get_custom_post_type_data();
		//echo json_encode($custom_post_data);
		wp_send_json_success( $custom_post_data );
		wp_die();
	}

	function my_custom_ajax_endpoint1() {
		$custom_post_data = get_custom_post_type_data1();
		//echo json_encode($custom_post_data);
		wp_send_json_success( $custom_post_data );
		wp_die();
	}

  function get_custom_post_type_data() {
    $search_keyword = $_POST['search_keyword'];
	$args = array(
	 'post_type' => 'hotel', // replace with your custom post type slug
	 's' => $search_keyword, // search keyword
	 'posts_per_page' => -1 // get all matching posts
   );
   
 
	 $posts = get_posts($args);
 
	 $data = [];
	 $i = 0;
 
	 foreach($posts as $post) {
		 $data[$i]['id'] = $post->ID;
		 $data[$i]['name'] = $post->post_title;
		 $data[$i]['latitude '] = get_field('field_64098068609ff', $post->ID);
		 $data[$i]['longitude '] = get_field('field_640980b160a00', $post->ID);
		 $data[$i]['location'] = get_field('field_640d58a3b833e', $post->ID);
		 $data[$i]['address'] = get_field('field_6409811d60a01', $post->ID);
		 $data[$i]['hotline'] = get_field('field_6409844d6870d', $post->ID);
		 $data[$i]['email'] = get_field('field_64098ec8e4360', $post->ID);
		 $data[$i]['ratings'] = get_field('field_64098eeee4361', $post->ID);
		 $data[$i]['price_range'] = get_field('field_6409910da7c60', $post->ID);
		 $data[$i]['description'] = get_field('field_6409914af77ca', $post->ID);
		 $data[$i]['stars'] = get_field('field_64099164f77cb', $post->ID);
		 $data[$i]['featured_image']['large'] = get_the_post_thumbnail_url($post->ID, 'large');
		 $i++;
	 }
 
	 wp_reset_postdata();
    
	 echo json_encode($data);
	 wp_die();
 }
 
 function get_custom_post_type_data1() {
    $search_keyword = $_POST['search_keyword'];
	$args = array(
	 'post_type' => 'excursion', // replace with your custom post type slug
	 's' => $search_keyword, // search keyword
	 'posts_per_page' => -1 // get all matching posts
   );
   
 
	 $posts = get_posts($args);
 
	 $data = [];
	 $i = 0;
 
	 foreach($posts as $post) {
		 $data[$i]['id'] = $post->ID;
		 $data[$i]['name'] = $post->post_title;
		 $data[$i]['latitude '] = get_field('field_6409b1e7aca3e', $post->ID);
		 $data[$i]['longitude '] = get_field('field_6409b1e7b04b1', $post->ID);
		 $data[$i]['location'] = get_field('field_640d58cbdc41a', $post->ID);
		 $data[$i]['address'] = get_field('field_6409b1e7b424b', $post->ID);
		 $data[$i]['hotline'] = get_field('field_6409b1e7b79ed', $post->ID);
		 $data[$i]['email'] = get_field('field_6409b1e7bb62b', $post->ID);
		 $data[$i]['ratings'] = get_field('field_6409b1e7befa5', $post->ID);
		 $data[$i]['price_range'] = get_field('field_6409b1e7c2976', $post->ID);
		 $data[$i]['description'] = get_field('field_6409b1e7c6364', $post->ID);
		 $data[$i]['stars'] = get_field('field_6409b1e7c9dd9', $post->ID);
		 $data[$i]['featured_image']['large'] = get_the_post_thumbnail_url($post->ID, 'large');
		 $i++;
	 }
 
	 wp_reset_postdata();
    
	 echo json_encode($data);
	 wp_die();
 }

 function enqueue_jspdf() {
	wp_enqueue_script( 'jspdf', 'https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js', array(), '2.3.1', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_jspdf' );
