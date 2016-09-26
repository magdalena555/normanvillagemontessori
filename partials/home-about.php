
<!-- start of about -->
<section class="about " id="mission">
	<div class="body-wrapper">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


		  	<h1 class="reveal"><?php the_field('about-title'); ?></h1>
		  	<hr>
		  	<div class="about-description reveal">
		  		<?php the_field('about-description'); ?>
		  	</div>
		  	

			<div class="topics-container reveal">
				<!-- about-topics-repeater-field -->
				<?php if( have_rows('about-topics') ): ?>
				 
				    <?php while(the_repeater_field('about-topics')): ?>

				        <?php $image = get_sub_field('about-topics-image'); ?>
				       
					
							<div class="topics-box">
								<div class="topics-image">
									<img width="150"  src="<?php echo $image['sizes'] ['about'] ; ?>" alt="<?php echo $image['alt'] ?>" />
								</div>

								<p><?php the_sub_field('about-topics-title'); ?></p>
							</div>
							
				
			
				    <?php endwhile; ?>
				<?php endif; ?>
			</div>
			<!-- button -->
			<?php $page_id = 6; ?>
			<a class="button" href="<?php echo get_permalink( $page_id ); ?>">
				<p><?php the_field('about-button'); ?></p>
			</a>
			

		<?php endwhile; // end the loop?>
	</div>
</section>
<!-- end of about -->

