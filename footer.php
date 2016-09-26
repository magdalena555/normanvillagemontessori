
<section class="footer-section">

		<section class="contact">
			<div class="body-wrapper">
				<h2 class="reveal">
					<?php the_field('footer-contact-title', 'option'); ?>
				</h2>
				<hr>
				<h3 class="reveal">
					<?php the_field('footer-contact-subtitle', 'option'); ?>
				</h3>
				
					<?php the_field('footer-contact-form', 'option'); ?>
			</div>
			
		</section>
		<footer>
			<div class="body-wrapper">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="footer-wrapper">
					<!-- options acf !!!!!!-->
					<?php $image = get_field('footer-image', 'option'); ?>
					<?php $page_id = 4; ?>
					<div class="footer-image-container">
						<div class="footer-image reveal">
							<img width="300"  src="<?php echo $image ['sizes']['logo'] ?>"> 
						</div>
					</div>
					<div class=" width footer-content reveal">
						<?php the_field('footer-content', 'option'); ?>
					</div>
					
				</div>
				
				<?php endwhile; // end the loop?>
			</div>
			
		</footer>
		<section class="footer2">
			<?php the_field('footer-credits', 'option'); ?>
		</section>
	

</section>


<script src="https://use.fontawesome.com/3f79cc383c.js"></script>



<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>