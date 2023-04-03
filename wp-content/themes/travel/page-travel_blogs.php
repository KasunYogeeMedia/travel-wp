<?php
/*
Template Name: Travels
*/
?>
<?php get_header();  ?>

<section class="top_banner">
    <div class="container-fluid ss-2">
        <div class="banner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/inc/img/blogs.jpg)">
            <h1 class="centered">Travel Blog</h1>
        </div>
    </div>
</section>
<section class="steps-2 mt-2">
    <div class="container">
        <div class="step2-chance">
            <div class="container-fluid mt-4">
                <div class="steps2-images">
                    <div class="row">
                        <?php
                        $args = array('post_type' => 'travel_blogs', 'posts_per_page' => 10);
                        $the_query = new WP_Query($args);
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="card card-action">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="Perfect Itinerary">
                                        </a>
                                        <div class="card-overlay">
                                            <div class="card-body">
                                                <div class="text">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <h3 class="countries-name"><?php the_title(); ?></h3>
                                                    </a>
                                                    <p class="countries-para"><?php the_field('hover_description'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        <?php else :  ?>
                            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>