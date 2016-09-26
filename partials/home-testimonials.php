<!-- start of testimonials -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="testimonial-wrapper">
	<div class="testimonials">
	    <?php $image = get_field('testimonial-image'); ?>

	    <div class=" gallery-background"  style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
	        
	        	<h2 ><?php the_field('testimonials-title'); ?></h2>
	            
	        <div class="quote-carousel" data-flickity >
		        <?php if( have_rows('testimonials-content') ): ?>
	                <?php while(the_repeater_field('testimonials-content')): ?>

	                	<div class=" carousel-cell">
	                		<p><?php the_sub_field('testimonial-quote'); ?></p>
							<p class="name"><?php the_sub_field('testimonial-name'); ?>	</p>
	                	</div>
	                <?php endwhile; ?> 
		        <?php endif; ?>
	        </div>    
	    </div>   
	</div>
	<div class="filter"></div>    
</div>

<?php endwhile; // end the loop?>
<!-- end of testimonials -->