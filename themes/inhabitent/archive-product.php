<?php
/**
 * The template for displaying the "product" post type archive page.
 *
 * @package Inhabitent_Theme
 */

 get_header(); ?>

 <!-- REST OF PAGE MARKUP AND PHP HERE -->

 	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="container">

		
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<section class="product-grid container">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="product-grid-item">
            <div class="product-item-thumbnail">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
            </div>
            <p class="product-item-text">
              <?php the_title(); ?>
              <span>......</span>
              <?php echo CFS()->get( 'price' ); ?>
            </p>
          </div>
      </section>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

 <?php get_footer(); ?>
