<?php

/*
	Template Name: page-activities
*/

get_header();  ?>


    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
		<?php if ( has_post_thumbnail() ) : ?>
		    <?php
		    //get the image
		    $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
		<?php endif;  ?>
		<!-- activity header -->
		<div class="header-container top">
			<div class=" gallery-header" style="background-image: url('<?php echo $feat_image_url ;?>');">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="overlay"></div>
		</div>
		<!-- activity page main -->
		<section class="activities-page">

			<div class="activities-page-container">
				<!-- about-topics-repeater-field -->
				<?php if( have_rows('activity-page-content') ): ?>
				 
				<?php while(the_repeater_field('activity-page-content')): ?>

				<?php $image = get_sub_field('activity-page-image'); ?>
				       
				<!-- activity box -->
				<div class="activities-box">
					<div class="wrapper">
						<div class="activity-content-wrapper">
							<div class="activity-page-image">
								<img width="400"  src="<?php echo $image['sizes'] ['activities-page'] ; ?>" alt="<?php echo $image['alt'] ?>" />
							</div>
							<div class="activity-page-content">
								<h3><?php the_sub_field('activity-page-title'); ?>
								
								</h3>
								<hr>
								<h4><?php the_sub_field('activity-page-text'); ?></h4>
								
							</div>
						</div>
						
					</div>

				</div>   
				       
				<?php endwhile; ?> 

				<?php endif; ?>
			</div>
		</section>


    <?php endwhile; // end the loop?>




<?php get_footer(); ?>