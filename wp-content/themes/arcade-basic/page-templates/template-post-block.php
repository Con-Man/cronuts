<?php
/**
 * Template Name: Post Block
 *
 * Description: A full width page template that will display 4 posts in a block without any sidebars
 *
 * @since 1.0.3
 */
if ( ! is_front_page() )
	get_header(); ?>

	<div class="container from-the-blog">
		<div class="row">
			<div id="primary" class="col-md-12 hfeed">
				<div class="page-header clearfix">
					<h1 class="pull-left"><i class="fa fa-comment"></i>&nbsp;<?php the_title(); ?></h1>

				</div>

				<div class="row">
					<div class="col-md-6">
					<h1 style="text-align:center;">From the Site</h1></br>
					<?php
					$bavotasan_post_block_query = new WP_Query( array(
						'posts_per_page' => 4,
						'ignore_sticky_posts' => 1,
						'no_found_rows' => true,
					) );

					while ( $bavotasan_post_block_query->have_posts() ) : $bavotasan_post_block_query->the_post();
						global $bavotasan_custom_excerpt_length;
						$home_page_post = false;
					    $bavotasan_custom_excerpt_length = 20;
						if ( 1 > $bavotasan_post_block_query->current_post ) {
							$home_page_post = true;
							echo '<div class="col-md-6">';
							$bavotasan_custom_excerpt_length = 50;
						}
						if ( 1 == $bavotasan_post_block_query->current_post )
							echo '<div class="col-md-6">';

						get_template_part( 'content' );

						if ( 1 > $bavotasan_post_block_query->current_post )
							echo '</div>';

						if ( 3 == $bavotasan_post_block_query->current_post )
							echo '</div>';
					endwhile;
					?>
					</div>
				</div>
					<div col-md-6>
					<h1 style="text-align:center;">From Twitter</h1></br>
					<a class="twitter-timeline" href="https://twitter.com/CronutsComedy" data-widget-id="521521021375881216">Tweets by @CronutsComedy</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
			</div>
		</div>
	</div>

<?php if ( ! is_front_page() ) get_footer(); ?>