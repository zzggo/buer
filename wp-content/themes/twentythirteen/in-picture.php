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
<body <?php body_class(); ?>>
	<div class="content">
		<section id="pictureone" class="pictureone">
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen'); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
			<div class="inside">
				<h1>What does Bu Er means</h1>
				<h3>ISSUE 4  |  Feb. 2015</h3>
				<p>Bu Er is a Hindu-Buddhist concept meaning “not-two”. We borrow the term to denote our mission. Living in a time of global exchange, we wish to move away from a world that is divided into disparate countries, and away from the ‘East-West’ paradigm. Focusing on China, we do this by engaging her ancient heritage and multi-faceted worldview with global relevance, such that we can begin to uncover what the Chinese nation may provide, and formulate a cultural narrative that acts as one part of a new, cross-cultural dialogue. </p>
			</div>
		
		</section>
		<section class="pastissue">
			<div class="pastissuetop">
				<h1>PAST ISSUES</h1>
				<div class="line"></div>	
				<p> We Are a Off and On-line Student Project where a truly global interchange of creative and <br>intellectual ideas is made possible for the first time.</p>
			</div>
			<div class="issuecontent">
				<div class="issueleft"></div>
				<div class="issueright"></div>			
			</div>
		</section>
	</div>
</body>
