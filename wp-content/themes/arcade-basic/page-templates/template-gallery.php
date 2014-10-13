<?php
/**
 * Template Name: Gallery
 *
 */

get_header(); 
?>
<div class="container">

	<div class="row">
			<div id="primary" class="col-md-12 hfeed">
				<div class="page-header clearfix">
					<h1 class="pull-left"><i class="fa fa-camera"></i>&nbsp;<?php the_title(); ?></h1>
					</br></br>
				</div>	
					<!-- Displays Content -->
				
					<?php if (have_posts()) : while (have_posts()) : the_post();?>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>

			</div>
			<?php
					$args = array( 'post_type' => 'gallery', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
			?>
				<?php

					// check if the repeater field has rows of data
					if( have_rows('gallery') ):

					 	// loop through the rows of data
					    while ( have_rows('gallery') ) : the_row();
					?>
					<div id="gallery" class="col-md-3">
					        <!-- display a sub field value -->

								<?php 

										$image = get_sub_field('image_gallery');

										if( !empty($image) ): ?>

											<a class="fancybox" rel="group" href="<?php echo $image['url']; ?>"><img class="gallery_image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

									<?php endif; ?>
							
					</div>		
					<?php
					    endwhile;

					else :

					    // no rows found

					endif;

					?>		


			<?php
					endwhile;
			?>
	
</div>

<?php

get_footer();