<?php
/*
Template Name: Global
*/
get_header();  ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the JSON data from the "formData" input
  $json_data = $_POST["formData"];
  // Decode the JSON data into a PHP object
  $data = json_decode($json_data);
  // Output the data as a debug message
  var_dump($data);
}
?>


<!-- ////////////////Global page content Start////////////////// -->

<div class="global_content">
    <?php the_content() ?>
</div>

<!-- ////////////////Global page content End////////////////// -->

<?php get_footer(); ?>