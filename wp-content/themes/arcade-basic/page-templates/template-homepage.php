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
			







</div>
<?php

get_footer();