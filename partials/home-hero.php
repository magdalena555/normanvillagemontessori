
<!-- start of hero -->
<section class="hero-wrapper">
	<section class="hero carousel " data-flickity >
		<?php if( have_rows('hero-images') ): ?>

		 	<!-- This makes a image variable -->
		    <?php while ( have_rows('hero-images') ) : the_row();
		 		$image = get_sub_field('hero-image');
		 	?>
			 	<div class="  hero-gallery carousel-cell" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
			 		
			 	</div>
				
		 	<?php endwhile; ?> 

		<?php endif; ?>

	</section>
	<div class="hero-container">
			<div class="hero-filter"></div>
		
		<div class="hero-content ">
			<h1><?php the_field('hero-title'); ?></h1>
			<hr>
			<h2><?php the_field('hero-subtitle'); ?></h2>
			<a href="#mission">
				<i  class="fa fa-chevron-down animated flash infinite" aria-hidden="true"></i>
			</a>
		</div>

	</div>
</section>
<!-- end of hero -->

 
