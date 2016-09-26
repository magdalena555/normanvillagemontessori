<!-- start of teachers -->
<section class="teachers">
	<div class="body-wrapper">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


		  	<h2 class="reveal"><?php the_field('teachers-section-title'); ?></h2>
		  	

			<div class="teachers-container">
				
				<?php if( have_rows('teachers-one') ): ?>
				 
				    <?php while(the_repeater_field('teachers-one')): ?>

				        <?php $image = get_sub_field('about-topics-image'); ?>
						<div class="teachers-section top-teacher reveal">
							<div class="teachers-content teachers1">
								<h3><?php the_sub_field('teachers-one-name'); ?></h3>
								<div class="teachers-one-description">
									<?php the_sub_field('teachers-one-description'); ?>	
								</div>
							</div>
							
							<div class="teachers-image ">
								<?php $image = get_sub_field('teachers-one-image'); ?>
								<img width="450" src="<?php echo $image['sizes'] ['teachers'] ; ?>" alt="<?php echo $image['alt'] ?>" />
							</div>
						</div>
				    <?php endwhile; ?> 
					<!-- end of teachers-one while-->
					
				<?php endif; ?>
				<!-- end of teachers-one if-->

				<!-- end of teachers-one if-->
			</div>		

		<?php endwhile; // end the loop?>
	</div>
	
</section>
<!-- end of teachers -->