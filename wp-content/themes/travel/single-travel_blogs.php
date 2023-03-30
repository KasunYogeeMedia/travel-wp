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

                        <div class="center-paragraph">
                            <p><?php the_field('center_description'); ?></p>
                        </div>

                        <div class="row last-section-post">
                            <div class="col-xm-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                                <div class="last-para-pp">
                                    <p class="first">
                                        <?php the_field('bottom_description'); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-xm-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="post1-right-images">
                                    <img src="<?php the_field('bottom_image_1'); ?>" alt="<?php the_title(); ?>" class="imgp-1">
                                    <?php
                                    $image2 = get_field('bottom_image_2');
                                    if (!empty($image2)) : ?>
                                        <img src="<?php the_field('bottom_image_2'); ?>" alt="<?php echo $image2; ?>" class="imgp-1 mt-3">
                                    <?php endif; ?>
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