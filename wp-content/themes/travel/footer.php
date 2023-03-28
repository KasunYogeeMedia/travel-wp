<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel
 */

?>
<!-- Footer start -->
<footer id="footer">
	<section class="footer-links border-top">

		<div class="row">
			<div class="col-sm-12 col-md-3 col-lg-3">
				<div class="s-1">
					<div class="social-lofo-des">
						<h2><img class="travel-logo2" src="<?php the_field('footer_logo', 'option'); ?>" alt=""></h2>
						<p>All hotels and vacation rental properties listed on this website are independently owned and
							operated. Accepted payment methods:</p>
						<img src="<?php echo get_template_directory_uri(); ?>/inc/img/payments.png" alt="" class="payment-image">
						<p class="note">Note: multi-currency is performed via addon, which is NOT included into the
							theme.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3">
				<div class="s-1">
					<div class="s-11">
						<h3>Our Pages</h3>
						<div class="social">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'footer_menu',
								'container' => false,
								'menu_class' => 'footer_menu',
								'fallback_cb' => '__return_false'
							));
							?>
							<!-- <ul>
						<li>
							<p>Plan</p>
						</li>
						<li>
							<p>About Us</p>
						</li>
						<li>
							<p>Promotion</p>
						</li>
						<li>
							<p>English</p>
						</li>
						<li>
							<p>USD</p>
						</li>
					</ul> -->
						</div>
					</div>

				</div>

			</div>
			<div class="col-sm-12 col-md-3 col-lg-3">
				<div class="s-1">
					<h3>Recent News</h3>
					<div class="social">
						<ul>
							<?php
							$args = array('post_type' => 'travel_blogs', 'posts_per_page' => 10);
							$the_query = new WP_Query($args);
							?>
							<?php if ($the_query->have_posts()) : ?>
								<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
									<li>
										<p><a href="<?php the_permalink(); ?>" class="text-muted"><i class="fas fa-leaf-maple"></i><?php the_title(); ?></a></p>
									</li>
								<?php endwhile;
								wp_reset_postdata(); ?>
							<?php else :  ?>
								<p><?php _e('Sorry, There is no posts yet.'); ?></p>
							<?php endif; ?>

						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3">
				<div class="s-1">
					<h3>Contact Us</h3>
					<div class="social">
						<!-- <p class="p-12">Yogee Media, 123</p>
				<p class="p-13">Wijeya Road, Gampaha</p> -->
						<ul>
							<?php
							$email = get_field('email_address', 'option');
							?>
							<?php if ($email) : ?>
								<li>
									<p><a class="text-muted" href="mailto:<?php echo $email; ?>"><i class="far fa-envelope"></i><span><?php echo $email; ?></span></a></p>
								</li>
							<?php endif; ?>
							<?php
							$mobile_no = get_field('mobile_number', 'option');
							?>
							<?php if ($mobile_no) : ?>
								<li>
									<p><a href="tel:<?php echo $mobile_no; ?>" class="text-muted"><i class="fas fa-phone"></i><span><?php echo $mobile_no; ?></span></a></p>
								</li>
							<?php endif; ?>
							<?php
							$land_number = get_field('land_number', 'option');
							?>
							<?php if ($land_number) : ?>
								<li>
									<p><a href="tel:<?php echo $land_number; ?>" class="text-muted"><i class="fas fa-fax"></i><span><?php echo $land_number; ?></span></a></p>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-section">
		<div class="container-fluid">
			<div class="row">
				<div class="footer-content text-center">
					<p class="mb-0">copyrights @ <script>
							document.write(new Date().getFullYear())
						</script> Perfect Itinerary. All rights reserved</p>
				</div>
			</div>
		</div>
	</section>
</footer>

<!-- Footer End -->


<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script> -->


<script src="<?php echo get_template_directory_uri(); ?>/inc/js/script.js"></script>

<?php wp_footer(); ?>

<script type="text/javascript">
	var i = 0,
		text;
	text = "Plan your dream vacation"


	function typing() {
		if (i < text.length) {
			document.getElementById("text").innerHTML += text.charAt(i);
			i++;
			setTimeout(typing, 100);
		}
	}

	typing();


</script>
</body>

</html>