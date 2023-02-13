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
                        <div class="hero_cap mt-0 mt-md-5">
                            <span class="lg_text text-light">Plan your dream vacation</span>
                            <h2 class="sm_text text-light">in 3 simple steps</h2>
                            <a class="btn text-uppercase bg-light mt-3" href="form-1/">PLAN YOUR ADVENTURE</a>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-4 mt-sm-0">
                        <div class="img">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/video.png" alt="">
                            <h2 class="text-uppercase click">click here for video guide</h2>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn_popup" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa fa-play-circle fa-5x" aria-hidden="true"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/3SsK-cxlj_w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                                <a href="#"><button class="btn">READ MORE</button></a>
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
                                <a href="#"><button class="btn">READ MORE</button></a>
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
                                <a href="#"><button class="btn">READ MORE</button></a>
                            </div>
                        </card>
                    </div>
                </div>
            </div>
        </div>

        <div class="lower-button">
            <button class="btn-lower">START PLANNING NOW</button>
        </div>
    </div>

</section>
<!-- sample status page end -->

<section class="wrapper2 top">
    <div class="container-fluid">
        <div class="bag-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/inc/img/testimonials.jpg);"></div>

    </div>
    <div class="text">
        <div class="heading">
            <h5 class="wrapper-main-text">AT THE HEART OF COMMUNICATION</h5>
            <h2>People say</h2>
        </div>

        <div class="para">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias deleniti, expedita labore
                iste, reiciendis quos laboriosam temporibus sed blanditiis, pariatur totam itaque placeat
                suscipit. Magni nam tempore voluptates exercitationem quae!</p>

            <div class="box flex">
                <div class="box-img">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/kate-palmer-150x150.jpg" alt="">
                    </div>
                    <div class="name">
                        <h5>KATE PALMER</h5>
                        <H5>IDAHO</H5>
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
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/coronavirus-rome-trapped-in-the-most-beautiful-city-in-the-worldromenew.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <a href="blogpage1.html">
                                    <h3 class="countries-name">Rome</h3>
                                </a>
                                <p class="countries-para"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero distinctio
                                    tenetur placeat qui pariatur facilis soluta autem quos aliquam velit natus ipsa,
                                    enim accusantium quae similique, consectetur earum? Minima, explicabo? </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/HDR-Photography-Beautiful-Paris-Presetpro.com_-1024x683new.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <a href="">
                                    <h3 class="countries-name">Paris</h3>
                                </a>
                                <p class="countries-para"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero distinctio
                                    tenetur placeat qui pariatur facilis soluta autem quos aliquam velit natus ipsa,
                                    enim accusantium quae similique, consectetur earum? Minima, explicabo? </p>
                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/2968902_17101113310057652035dubainew.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <a href="">
                                    <h3 class="countries-name">Dubai</h3>
                                </a>
                                <p class="countries-para"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero distinctio
                                    tenetur placeat qui pariatur facilis soluta autem quos aliquam velit natus ipsa,
                                    enim accusantium quae similique, consectetur earum? Minima, explicabo? </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-4">
                <div class="steps2-images">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/photo-1555109307-f7d9da25c244newyorknew.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <a href="">
                                    <h3 class="countries-name">NYC</h3>
                                </a>
                                <p class="countries-para"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero distinctio
                                    tenetur placeat qui pariatur facilis soluta autem quos aliquam velit natus ipsa,
                                    enim accusantium quae similique, consectetur earum? Minima, explicabo? </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/London-Eye-Pictures-720x404londonnew.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <a href="">
                                    <h3 class="countries-name">London</h3>
                                </a>
                                <p class="countries-para"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero distinctio
                                    tenetur placeat qui pariatur facilis soluta autem quos aliquam velit natus ipsa,
                                    enim accusantium quae similique, consectetur earum? Minima, explicabo? </p>
                            </div>
                        </div>

                    </div>

                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/aa43530936bcbc9f6c9bc4d0c2c12474ohunew.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <a href="">
                                    <h3 class="countries-name">Oahu</h3>
                                </a>
                                <p class="countries-para"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero distinctio
                                    tenetur placeat qui pariatur facilis soluta autem quos aliquam velit natus ipsa,
                                    enim accusantium quae similique, consectetur earum? Minima, explicabo? </p>
                            </div>
                        </div>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, nobis assumenda sunt
                            possimus qui cum nisi, nostrum similique iste aut facilis ipsa maxime enim dolorum
                            ducimus. Voluptatum voluptate voluptates at?</p>
                        <div class="button-part">
                            <a href="#"><button class="button-partners">READ MORE</button></a>
                        </div>

                    </div>
                </div>

            </div>


            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="partners-right">
                    <div class="row r-1">
                        <div class="col logos-s">
                            <a href="https://www.booking.com/index.en-gb.html?label=gen173nr-1BCAEoggI46AdIM1gEaIUBiAEBmAEJuAEXyAEM2AEB6AEBiAIBqAIDuAKZm_KeBsACAdICJDJmMWZhMDA3LWE2NDYtNGM1YS1hZDM4LWE4ZmRkNjE1NTllNtgCBeACAQ&sid=8ad28074e6722df796d09bab274ec954&keep_landing=1&sb_price_type=total&"><img src="<?php echo get_template_directory_uri(); ?>/inc/img/247454a990efac1952e44dddbf30c58677aa0fd8.png" alt="" class="logo-s1"></a>
                        </div>
                        <div class="col logos-s">
                            <a href="https://tourscanner.com/"> <img src="<?php echo get_template_directory_uri(); ?>/inc/img/Logo-icon-500x500.png" alt="" class="logo-s2"></a>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>

<!-- ////////////////Home page content End////////////////// -->

<?php get_footer(); ?>