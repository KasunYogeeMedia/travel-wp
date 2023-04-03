<?php get_header();  ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="top_banner">
            <div class="container-fluid ss-2">
                <?php
                $image = get_field('inner_banner');
                if (!empty($image)) : ?>
                    <div class="banner" style="background-image:url(<?php echo $image['url']; ?>);">
                        <h1 class="centered"><?php the_title(); ?></h1>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- single travel page contents -->
        <section class="blogpage1">
            <div class="container-fluid blog1">
                <div class="blog-image text-center">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Perfect Itinerary" class="img-fluid rome">
                    <div class="blog1page-news">
                        <h4 class="blog-image-title"><?php the_title(); ?></h4>
                        <p class="blogpage1-date"><?php echo get_the_date('j F, Y'); ?></p>

                        <div class="blogpost1">
                            <div class="row blog-post1-rr">
                                <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="sub-title-post1">
                                        <h2 class="sub-title-p"><?php the_field('inner_title'); ?></h2>
                                        <p class="sub-title-para-p"><?php the_field('hover_description'); ?></p>
                                    </div>
                                </div>

                                <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="sub-title-post2">
                                        <p class="sub-title-para-p"><?php the_field('top_right_description_'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <!-- <div class="center-paragraph">
                            <p class="h4"><?php the_field('center_description'); ?></p>
                        </div> -->

                        <div class="row last-section-post">
                            <div class="col-sm-12 col-md-8">
                                <?php the_content(); ?>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-5 mt-md-0 ">
                                <div class="blog-slidebar">
                                    <h3 class="mb-3">Recent Travel Blogs</h3>
                                    <div class="post_sec">
                                        <?php
                                        $args = array('post_type' => 'travel_blogs', 'posts_per_page' => 10);
                                        $the_query = new WP_Query($args);
                                        ?>
                                        <?php if ($the_query->have_posts()) : ?>
                                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                <div class="row mt-3 border-bottom pb-2">
                                                    <div class="col-5">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-7">
                                                        <div class="">
                                                            <p><a href="<?php the_permalink(); ?>" class="text-muted"><?php the_title(); ?></a></p>
                                                        </div>
                                                        <div class="post_desc">
                                                            <?php
                                                            $content = mb_strimwidth(wp_strip_all_tags(get_the_content()), 0, 50, '...');
                                                            ?>
                                                            <p class="text-small"><?php echo $content; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile;
                                            wp_reset_postdata(); ?>
                                        <?php else :  ?>
                                            <p><?php _e('Sorry, There is no posts yet.'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- single travel page contents -->
    <?php endwhile;
else : ?>
    <p>
        <?php _e('Sorry, no records matched your criteria.'); ?>
    </p>
<?php endif; ?>

<?php get_footer(); ?>