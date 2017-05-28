<?php
/**
 * The template for displaying adventure archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

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

			<?php /* Start the Loop */ ?>
      <div class="adventure-grid">
			  <?php while ( have_posts() ) : the_post(); ?>
        <div class="adventure-grid-item">
          <div class="adventure-image-container">
            <?php the_post_thumbnail( 'full' ); ?>
          </div>
          <div class="adventure-story-info">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
          </div>
          </div>
			      <?php endwhile; ?>

			      <?php the_posts_navigation(); ?>

		        <?php else : ?>

			      <?php get_template_part( 'template-parts/content', 'none' ); ?>

		        <?php endif; ?>
          </div>
  

      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
