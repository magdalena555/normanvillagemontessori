
<!-- start of activities -->
<section class="activities " id="activities">
	<div class="body-wrapper">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h2 class="reveal"><?php the_field('activities-title'); ?></h2>
			<div class="activities-container reveal">
				<!-- about-topics-repeater-field -->
				<?php if( have_rows('activities-box') ): ?>
				 
				    <?php while(the_repeater_field('activities-box')): ?>

				        <?php $image = get_sub_field('activities-image'); ?>
				       
					
							<div class="activities-box reveal ">


								<a  class="image-popup-no-margins" href="<?php echo $image['sizes'] ['activities'] ; ?>" >
						           <img class="grow" width="350"  src="<?php echo $image['sizes'] ['teachers'] ; ?>" alt="<?php echo $image['alt'] ?>" />
							   		<div class="filter">
							   			<div class="activities-content">
							   				<p><?php the_sub_field('activities-topic'); ?>
							   					
							   				</p>
							   				<hr>
							   			</div>
							   		</div>
								   
								</a>

							
						       
								
							</div>
						    
				       
				    <?php endwhile; ?> 

					</div>

				  </div>
				<?php endif; ?>
			</div>
			
			<?php $page_id = 8; ?>
			<a class="button" href="<?php echo get_permalink( $page_id ); ?>">
				<p><?php the_field('activities-button'); ?></p>
			</a>
			
		<?php endwhile; // end the loop?>	
	</div>
	
</section>
  <!-- end of activities -->