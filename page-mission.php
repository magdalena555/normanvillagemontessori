<?php

/*
	Template Name: page-mission
*/

get_header();  ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
		<?php if ( has_post_thumbnail() ) : ?>
		    <?php
		    //get the image
		    $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
		<?php endif;  ?>
		<!-- mission header -->
		<div class="header-container top">
			<div class=" gallery-header" style="background-image: url('<?php echo $feat_image_url ;?>');">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="overlay"></div>
		</div>
		<!-- mission main -->
		<section class="mission-page">
			<!-- mission statement -->
			<div class="mission-statement">
				<div class="body-wrapper">
					
					<div class="statement">
						<?php the_field('mission-statement-text'); ?>
						</div>
					</div>
				
			</div>
			<!-- how learning happens -->
			<div class="learning-section">
				<h2 class="learning-happens"><?php the_field('learning-happens-title'); ?></h2>
				<div class="learning-container body-wrapper">
				
					<!-- learning happens-repeater-field -->
					<?php if( have_rows('learning-box') ): ?>
					 
					    <?php while(the_repeater_field('learning-box')): ?>

					    	<?php $image = get_sub_field('learning-image'); ?>
							<div class="learning-box">
								<div class="learning-image">
									<img width="150"  src="<?php echo $image['sizes'] ['about'] ; ?>" alt="<?php echo $image['alt'] ?>" />
								</div>
								<div class="learning-content">
									<h3>
										<?php the_sub_field('learning-title'); ?>
									</h3>
									
									<?php the_sub_field('learning-text'); ?>
								</div>
								

							</div>
					    <?php endwhile; ?> 

						
					<?php endif; ?>

				</div> <!-- end of learning container -->
				<div class="pdf">
					<h3><?php the_field('learning-pdf-link'); ?></h3>
				</div>
		
			</div>
			
		</section>

	<?php endwhile; // end the loop?>
<?php get_footer(); ?>