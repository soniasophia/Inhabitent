<?php
/* Template Name: Product Types */

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

<section class="product-grid container">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="product-grid-item">
            <div class="product-item-thumbnail">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
            </div>
            <p class="product-item-text">
              <?php the_title(); ?>
              <span>......</span>
              <?php echo CFS()->get( 'price' ); ?>
            </p>
          </div>
      
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</section>
      </div>
    </main>
  </div>

<?php get_footer(); ?>