<?php
/**
 * The template for displaying all single product posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

    <h2 class="price">$<?php echo CFS()->get( 'price' ); ?></h2>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

      

		<?php endwhile; // End of the loop. ?>

      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>