<!-- start of videos -->
<section class="videos">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h2 class="reveal"><?php the_field('video-title'); ?></h2>
		<div class="embed-container">
			<?php the_field('video-main'); ?>			

		</div>

		<p><?php the_field('video-credits'); ?></p>



	<?php endwhile; // end the loop?>
</section>
<!-- end of videos -->