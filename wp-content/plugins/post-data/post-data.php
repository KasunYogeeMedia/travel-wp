<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://geekmac.online
 * @since             1.0.0
 * @package           Post_Data
 *
 * @wordpress-plugin
 * Plugin Name:       Wolf API
 * Plugin URI:        https://yogeemedia.com
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Mac Wolf
 * Author URI:        https://geekmac.online
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       post-data
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'POST_DATA_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-post-data-activator.php
 */
function activate_post_data() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-post-data-activator.php';
	Post_Data_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-post-data-deactivator.php
 */
function deactivate_post_data() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-post-data-deactivator.php';
	Post_Data_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_post_data' );
register_deactivation_hook( __FILE__, 'deactivate_post_data' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-post-data.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_post_data() {

	$plugin = new Post_Data();
	$plugin->run();

}
run_post_data();

function wl_hotels($searchKeyword) {
    
   $args = array(
    'post_type' => 'hotel', // replace with your custom post type slug
    's' => $searchKeyword, // search keyword
    'posts_per_page' => -1 // get all matching posts
  );
  

    $posts = get_posts($args);

    $data = [];
    $i = 0;

    foreach($posts as $post) {
        $data[$i]['id'] = $post->ID;
        $data[$i]['name'] = $post->post_title;
        $data[$i]['latitude '] = get_field('field_64098068609ff');
        $data[$i]['longitude '] = get_field('field_640980b160a00');
        //$data[$i]['location'] = $location;
        $data[$i]['address'] = get_field('field_6409811d60a01');
        $data[$i]['hotline'] = get_field('field_6409844d6870d');
        $data[$i]['email'] = get_field('field_64098ec8e4360');
        $data[$i]['ratings'] = get_field('field_64098eeee4361');
        $data[$i]['price_range'] = get_field('field_6409910da7c60');
        $data[$i]['description'] = get_field('field_6409914af77ca');
        $data[$i]['stars'] = get_field('field_64099164f77cb');
        $data[$i]['featured_image']['large'] = get_the_post_thumbnail_url($post->ID, 'large');
        $i++;
    }

    return $data;
}


// Used in this video https://www.youtube.com/watch?v=76sJL9fd12Y
function wl_excursion() {
    $args = [
        'numberposts' => 99999,
        'post_type' => 'excursion'
    ];

    $posts = get_posts($args);

    $data = [];
    $i = 0;

    foreach($posts as $post) {
        $data[$i]['id'] = $post->ID;
        $data[$i]['name'] = $post->post_title;
        $data[$i]['latitude '] = get_field('field_6409b1e7aca3e');
        $data[$i]['longitude '] = get_field('field_6409b1e7b04b1');
        //$data[$i]['location'] = $location;
        $data[$i]['address'] = get_field('field_6409b1e7b424b');
        $data[$i]['hotline'] = get_field('field_6409b1e7b79ed');
        $data[$i]['email'] = get_field('field_6409b1e7bb62b');
        $data[$i]['ratings'] = get_field('field_6409b1e7befa5');
        $data[$i]['price_range'] = get_field('field_6409b1e7c2976');
        $data[$i]['description'] = get_field('field_6409b1e7c6364');
        $data[$i]['stars'] = get_field('field_6409b1e7c9dd9');
        $data[$i]['featured_image']['large'] = get_the_post_thumbnail_url($post->ID, 'large');
        $i++;
    }

    return $data;
}

add_action('rest_api_init', function() {
    register_rest_route('api', 'hotels', [
        'methods' => 'GET',
        'callback' => 'wl_hotels',
    ]);

    
    // Used in this video: https://www.youtube.com/watch?v=76sJL9fd12Y  
    register_rest_route('api', 'excursions', [
        'methods' => 'GET',
        'callback' => 'wl_excursion',
    ]);
});
