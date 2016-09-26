<?php

/*
	Template Name: page-gallery
*/

get_header();  ?>

	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="gallery top">
				<?php $image = get_field('gallery-header-image'); ?>
				<!-- gallery header -->
				<div class="header-container">
					<div class=" gallery-header" style="background-image: url('<?php echo $image['sizes'] ['hero-small'] ; ?>');">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="overlay"></div>
				</div>
				
				<!-- gallery main -->
				<div class="gallery-container parent-container">
		
					<?php if( have_rows('gallery-images') ): ?>
					 
						<?php while(the_repeater_field('gallery-images')): ?>

						<?php $image = get_sub_field('gallery-image'); ?>

										
					    <a  title="<?php the_sub_field('image-title'); ?>"  href="<?php echo $image['sizes']['gallery']; ?>" >
					       
					        <div class=" gallery-image" style="background-image: url('<?php echo $image['sizes'] ['gallery'] ; ?>');">
					        </div>
					        <div class="overlay"></div>
					    </a>
									   
						<?php endwhile; ?>
					<?php endif; ?>
				</div>  
			</div>
			
	    <?php endwhile; // end the loop?>

<?php get_footer(); ?>