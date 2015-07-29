<?php
/**
 * Template Name: InPicture
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage twentythirteen
 * @since twentythirteen
 */

get_header(); ?>
	<div class="bgslider newsslider">
		<div style="background-color: #171717;" class="inside">
			<img class="homebg" src="/wp-content/themes/twentytwelve/images/service/service.jpg" alt="">
			<div class="servicetext textwrapper">
				<h3 class="title">SERVICES</h3>
			</div>
		</div>
	</div>
	<div style="color:#fff;"class="servicepost" id="content">
		<?php $args = array( 'post_type' => 'services', 'posts_per_page' => -1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<a rel="<?php the_ID(); ?>" class="serviceposts" style="text-decoration:none;" href="<?php the_permalink(); ?>" >
				<div class="postwrapper post">
					<h1 class="entry-title">
						<?php the_title(); ?>
					</h1>
					<div class="sfouter">
						<div class="servicefeature">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<?php the_excerpt(); ?>
				</div>
			</a>
		<?php endwhile; // end of the loop. ?>
	</div>

<?php get_footer(); ?>