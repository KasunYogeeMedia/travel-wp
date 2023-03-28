<?php
/*
Template Name: Home
*/
get_header();  ?>

<!-- ////////////////Home page content Start////////////////// -->

<!-- hero section start -->
<section class="hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/banner.jpg);">
    <div class="hero_sec">
        <div class="hero_inn">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="hero_cap mt-0 mt-md-5 d-none">
                            <!-- <span class="lg_text text-light">Plan your dream vacation</span> -->
                            <span class="main-title lg_text text-light" id="text"></span>
                            <h2 class="sm_text text-light">in 3 simple steps</h2>
                            <a class="btn text-uppercase bg-light mt-3" href="form-1/">PLAN YOUR ADVENTURE</a>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-4 mt-sm-0">
                        <div class="img">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/video.png"
                                alt="Perfect Itinerary">
                            <h2 class="text-uppercase click">click here for video guide</h2>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn_popup" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fa fa-play-circle fa-5x" aria-hidden="true"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe width="100%" height="auto"
                                                src="https://www.youtube.com/embed/3SsK-cxlj_w"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- sample status page start -->
<section class="sample-staus">
    <div class="container-fluid">
        <div class="sample-status-top">
            <div class="status-content text-center">
                HERE IS HOW YOU DO IT
            </div>
        </div>

        <div class="sample-status-bottom">
            <div class="row pb-3 card-row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mb-4 cardContent">
                    <div class="card text-center">
                        <card class="body">
                            <div class="card-icon">
                                <span><i class="fas fa-swimming-pool"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">01.Enter your trip details with your preferences</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Officiis ex consequatur minus atque!</p>

                            <div class="read-more">
                                <a href="about/"><button class="btn">READ MORE</button></a>
                            </div>
                        </card>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mb-4 cardContent">
                    <div class="card text-center">
                        <card class="body">
                            <div class="card-icon">
                                <span><i class="fab fa-first-order-alt"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">02.We will list your accomodation and excursions</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Officiis ex consequatur minus atque!</p>

                            <div class="read-more">
                                <a href="about/"><button class="btn">READ MORE</button></a>
                            </div>
                        </card>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mb-4 cardContent">
                    <div class="card text-center">
                        <card class="body">
                            <div class="card-icon">
                                <span><i class="fas fa-umbrella-beach"></i></span>
                            </div>
                            <h4 class="font-weight-bold pb-2">03.Click the confirm button and get ready for your
                                trip!</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Officiis ex consequatur minus atque!</p>

                            <div class="read-more">
                                <a href="about/"><button class="btn">READ MORE</button></a>
                            </div>
                        </card>
                    </div>
                </div>
            </div>
        </div>

        <div class="lower-button">
            <button onclick="location.href='form-1/';" class="btn-lower">START PLANNING NOW</button>
        </div>
    </div>

</section>
<!-- sample status page end -->

<section class="wrapper2 top">
    <div class="container-fluid wrap-2">
        <div class="bag-image"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/testimonials.jpg);"></div>

    </div>
    <div class="text">
        <div class="line">

        </div>
        <div class="heading">
            <h5 class="wrapper-main-text">AT THE HEART OF COMMUNICATION</h5>
            <h2>People say</h2>
        </div>

        <div class="para">
            <p class="form-para">""I recently used this travel itinerary website to plan my latest vacation and I have
                to say I was thoroughly impressed. The website was user-friendly and easy to navigate, letting me enter
                all my trip details and preferences with ease. With just a few clicks, I was able to create a
                comprehensive itinerary that included all my desired activities and accommodations. The
                website also offered helpful recommendations for excursions and dining options in each
                location I was visiting. The final details page was especially helpful, allowing me to review
                everything and make any necessary changes before confirming my bookings. Overall, I would highly
                recommend this travel itinerary website to anyone looking for a seamless and
                stress-free way to plan their next vacation."</p><br>

            <div class="box flex">
                <div class="box-img">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/kate-palmer-150x150.jpg"
                            alt="Perfect Itinerary">
                    </div>
                    <div class="name">
                        <h5>Billy San Diego</h5>
                        <!-- <H5>IDAHO</H5> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="steps-2">
    <div class="container-fluid">
        <div class="step2-chance">
            <div class="steps2-title">
                <p class="title-step2">TRAVEL BLOGS</p>
                <P class="title-description2">
                    where to next?
                </P>
            </div>

            <div class="container-fluid mt-4">
                <div class="steps2-images">
                    <div class="row">
                        <!-- <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-action">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/coronavirus-rome-trapped-in-the-most-beautiful-city-in-the-worldromenew.jpg" class="card-img-top" alt="Perfect Itinerary">
                                <div class="card-overlay">
                                    <div class="card-body">
                                        <div class="text">
                                            <a href="blog/">
                                                <h3 class="countries-name">Rome</h3>
                                            </a>
                                            <p class="countries-para"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero distinctio
                                                tenetur placeat qui pariatur facilis soluta autem quos aliquam velit natus ipsa,
                                                enim accusantium quae similique, consectetur earum? Minima, explicabo? </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <?php
                        $args = array('post_type' => 'travel_blogs', 'posts_per_page' => 6);
                        $the_query = new WP_Query($args);
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-action">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top"
                                        alt="Perfect Itinerary">
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

<section class="partners">
    <div class="container-fluid d-2">
        <div class="row our-partners">

            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="partners-left">
                    <div class="partners-description">
                        <h2>We Work With the Best Partners</h2>
                        <p>Our travel itinerary website partners with some of the best travel providers in the industry
                            to
                            offer our users unbeatable deals and incredible experiences. From excursions to boutique
                            hotels, our partners span the globe and offer a wide range of choices for any travel style
                            or
                            budget. Our travel partners are hand-picked for their quality and reputation in the
                            industry,
                            ensuring that our users have the best possible travel experience from start to finish. By
                            partnering with leading providers, we are able to offer exclusive discounts and unbeatable
                            value on food, accommodations, transportation, and activities. No matter where your travels
                            take you, our travel partners are there to make your journey unforgettable.</p>
                        <div class="button-part">
                            <a href="http://travel-wp.test/about/"><button class="button-partners">READ
                                    MORE</button></a>
                        </div>

                    </div>
                </div>

            </div>


            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="partners-right">
                    <div class="row r-1">
                        <div class="col logos-s">
                            <a
                                href="https://www.booking.com/index.en-gb.html?label=gen173nr-1BCAEoggI46AdIM1gEaIUBiAEBmAEJuAEXyAEM2AEB6AEBiAIBqAIDuAKZm_KeBsACAdICJDJmMWZhMDA3LWE2NDYtNGM1YS1hZDM4LWE4ZmRkNjE1NTllNtgCBeACAQ&sid=8ad28074e6722df796d09bab274ec954&keep_landing=1&sb_price_type=total&"><img
                                    src="<?php echo get_template_directory_uri(); ?>/inc/img/247454a990efac1952e44dddbf30c58677aa0fd8.png"
                                    alt="Perfect Itinerary" class="logo-s1"></a>
                        </div>
                        <div class="col logos-s">
                            <a href="https://tourscanner.com/"> <img
                                    src="<?php echo get_template_directory_uri(); ?>/inc/img/Logo-icon-500x500.png"
                                    alt="Perfect Itinerary" class="logo-s2"></a>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>

<!-- ////////////////Home page content End////////////////// -->

<?php get_footer(); ?>