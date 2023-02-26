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
<section class="footer-links">

	<div class="row">
		<div class="col-sm-12 col-md-3 col-lg-3">
			<div class="s-1">
				<div class="social-lofo-des">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo-footer.svg" alt="" class="footer-logo"> -->
					<!-- <h2>Logo Here</h2> -->
					<h2><img class="travel-logo2" src="<?php echo get_template_directory_uri(); ?>/inc/img/travel-logo2.png" alt=""></h2>
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
						<ul>
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


						</ul>
					</div>
				</div>

			</div>

		</div>
		<div class="col-sm-12 col-md-3 col-lg-3">
			<div class="s-1">
				<h3>Recent News</h3>
				<div class="social">
					<ul>
						<li>
							<p><i class="fas fa-leaf-maple"></i>Blog Title 01</p>
						</li>
						<li>
							<p><i class="fas fa-leaf-maple"></i>Blog Title 02</p>
						</li>
						<li>
							<p><i class="fas fa-leaf-maple"></i>Blog Title 03</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-3 col-lg-3">
			<div class="s-1">
				<h3>Contact Us</h3>
				<div class="social">
					<p class="p-12">Yogee Media, 123</p>
					<p class="p-13">Wijeya Road, Gampaha</p>
					<ul>
						<li>
							<p><i class="far fa-envelope"></i><span>Wijeya Road, gampaha</span></p>
						</li>
						<li>
							<p><i class="fas fa-phone"></i><span>+41 888 963 55</span></p>
						</li>

						<li>
							<p><i class="fas fa-fax"></i><span>+41 789 562 74</span></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer End -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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