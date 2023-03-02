<?php
/*
Template Name: Contact
*/
get_header();  ?>

<!-- ////////////////Contact page content Start////////////////// -->
<!-- banner -->
<section class="top_banner">
    <div class="container-fluid ss-2">
        <div class="banner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/inc/img/contact_banner.jpg)">
            <h1 class="centered">Contact Us </h1>
        </div>
    </div>
</section>

<section class="contact-main-description">
    <div class="container">
        <div class="main-content-contact">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/header_default.png" alt="Perfect Itinerary">
            <div class="main-title-contact text-center">
                <h2 class="text-center">Contact Us</h2>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quidem hic modi adipisci ab corrupti odio, sapiente consequatur impedit quas voluptatem blanditiis corporis porro beatae vero at voluptates, et nulla!</p>
            </div>

        </div>
    </div>
</section>

<!-- <section class="our-details">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="l-s">
                    <h3>Our Location</h3>
                    <div class="locations">
                        <i class="fas fa-map-marker-alt"></i>
                        <ul>
                            <li>
                                <p>Yogee Media</p>
                            </li>
                            <li>
                                <p>Wijeya Road, Gampaha</p>
                            </li>
                            <a href="https://goo.gl/maps/71o742mdZb73BQwa7" target="_blank">view on map</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="l-s">
                    <h3>Our Location</h3>
                    <div class="locations">
                        <i class="fas fa-map-marker-alt"></i>
                        <ul>
                            <li>
                                <p>Yogee Media</p>
                            </li>
                            <li>
                                <p>Wijeya Road, Gampaha</p>
                            </li>
                            <a href="https://goo.gl/maps/71o742mdZb73BQwa7" target="_blank">view on map</a>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="l-s">
                    <h3>Our Location</h3>
                    <div class="locations">
                        <i class="fas fa-map-marker-alt"></i>
                        <ul>
                            <li>
                                <p>Yogee Media</p>
                            </li>
                            <li>
                                <p>Wijeya Road, Gampaha</p>
                            </li>
                            <a href="https://goo.gl/maps/71o742mdZb73BQwa7" target="_blank">view on map</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="l-s">
                    <h3>Our Location</h3>
                    <div class="locations">
                        <i class="fas fa-map-marker-alt"></i>
                        <ul>
                            <li>
                                <p>Yogee Media</p>
                            </li>
                            <li>
                                <p>Wijeya Road, Gampaha</p>
                            </li>
                            <a href="https://goo.gl/maps/71o742mdZb73BQwa7" target="_blank">view on map</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="Map-Area">
    <div class="container bg-gray">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5">
                <div class="contact-info">
                    <div class="contact-form-main">
                        <h2>Send a Message</h2>
                        <p>Providing you have any questions don’t hesitate to contact our team. We are always here to answer your questions.</p>
                    </div>
                    <div class="contact-form">

                        <?php echo apply_shortcodes('[contact-form-7 id="1234" title="Contact form 1"]'); ?>

                        <!-- <form action="/action_page.php">
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>
                            <button type="submit" class="btn btn-default mt-3">Submit</button>
                        </form> -->
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-7 col-lg-7">
                <div class="map">
                    <div class="contact_img" style="background-image:url(<?php echo get_template_directory_uri(); ?>/inc/img/contact_image.jpg)">
                    </div>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.3072558260296!2d79.99263001370609!3d7.090337394879447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fbed59abfe0b%3A0x156c4d8153c22b78!2sYogee%20Media%20(Pvt)%20Ltd.!5e0!3m2!1sen!2slk!4v1674483937676!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ////////////////Contact page content End////////////////// -->

<?php get_footer(); ?>