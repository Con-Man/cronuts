<?php
/**
 * Template Name: Contact
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
					<div class="col-md-6"><?php the_content(); ?></div>
					<?php endwhile; endif; ?>

			</div>
			<div class="col-md-6">
				<div class="google-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90830.28452608091!2d-63.62294745!3d44.64923070000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b5a211407dbfac1%3A0x666be3a6438b2ddc!2sHalifax%2C+NS!5e0!3m2!1sen!2sca!4v1413232539970" width="400" height="300" frameborder="0" style="border:0"></iframe>
				</div>
				</br>
				<div class="contact_information">
					<i class="fa fa-map-marker" style="color:#EF36A2;"></i>&nbsp;City: Halifax, NS
					</br>
					<i class="fa fa-envelope" style="color:#EF36A2;"></i>&nbsp;cronuts@cronutscomedy.com
				</div>	
			</div>
</div>

<?php

get_footer();