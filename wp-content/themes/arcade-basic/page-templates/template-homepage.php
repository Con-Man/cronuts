<?php
/**
 * Template Name: Homepage
 *
 */

get_header(); 
?>
<div class="homepage-content">

	<div class="row">
			<div class="col-md-12 hfeed">
			
					<!-- <h1 class="pull-left"><i class="fa fa-video-camera"></i>&nbsp;<?php the_title(); ?></h1> -->
					</br></br>

					<!-- Displays Content -->
				
					<?php if (have_posts()) : while (have_posts()) : the_post();?>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
					

		
				<?php

				// check if the repeater field has rows of data
				if( have_rows('videos') ):

				 	// loop through the rows of data
				    while ( have_rows('videos') ) : the_row();
				?>
				<div class=" videos col-md-6">
				        <!-- display a sub field value -->
						<div class="video_name">
						<h1>
							<?php
							 $video_name = the_sub_field('video_name');
							 ?>
						</h1>
						 </div>

						 <div class="youtube_video">
							<?php 
							$video_name = the_sub_field('youtube_embed_code');
							?>
						</div>
				</div>		
				<?php
				    endwhile;

				else :

				    // no rows found

				endif;

				?>			







</div>
<?php

get_footer();