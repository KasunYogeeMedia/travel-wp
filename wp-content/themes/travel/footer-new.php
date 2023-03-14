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