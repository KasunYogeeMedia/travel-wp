<?php
/*
Template Name: API
*/

get_header();

function wl_hotels($searchKeyword) {
    $searchKeyword = 'hilton';
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
         'numberposts' =>-1,
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

get_footer();
 ?>
