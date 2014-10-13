<?php
/**
 * Template Name: About
 *
 */

get_header(); 
?>
<div class="container">

	<div class="row">
			<div id="primary" class="col-md-12 hfeed">
				<div class="page-header clearfix">
					<h1 class="pull-left"><i class="fa fa-users"></i>&nbsp;<?php the_title(); ?></h1>
					</br></br>
				</div>	
					<!-- Displays Content -->
				
					<?php if (have_posts()) : while (have_posts()) : the_post();?>
					<div class="page_content"><?php the_content(); ?></div>
					<?php endwhile; endif; ?>

			</div>
					
				<div class="row col-md-12">
					<?php

					// check if the repeater field has rows of data
					if( have_rows('team_member') ):

					 	// loop through the rows of data
					    while ( have_rows('team_member') ) : the_row();
					?>
					<div class="team_member col-md-6 pull-left">
				
					        <!-- display a sub field value -->
						
							<h1 class="team_member_name">
								<?php
									$team_member_name = the_sub_field('team_member_name');
								 ?>
							</h1>
							</br>
						
							<div class="team_member_image">
								<?php 

									$image = get_sub_field('headshot');

									if( !empty($image) ): ?>

										<a class="fancybox" href="<?php echo $image['url']; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

								<?php endif; ?>
							</div>
							

							<h4 class="team_member_position">
							<?php 
								$position = the_sub_field('position');
							?>
							</h4>

							<h4 class="team_member_hometown"><i class="fa fa-map-marker" style="color:#EF36A2;"></i>&nbsp;Hometown: 
								<?php 
									$hometown = the_sub_field('hometown');
								?>
							</h4>

							<div class="team_member_blurb">
								<?php 
									$member_blurb = the_sub_field('member_blurb');
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