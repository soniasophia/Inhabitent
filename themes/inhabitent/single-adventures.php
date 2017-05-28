<?php
/**
 * The template for displaying all single adventure posts.
 *
 * @package Inhabitent_Theme
 */


get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="product-image-container">
  
          <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail( 'large' ); ?>
          <?php endif; ?>
          </div>

        <div class="product-content-container">
          <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          <?php the_author( '<p class="author">', 'By </p>' ) ?>
          </header><!-- .entry-header -->

        <div class="entry-content">
          <?php the_content(); ?>

        <?php get_template_part( 'template-parts/content', 'socials' ); ?>

        <?php
          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
            'after' => '</div>',
          ) );
        ?>
  <?php endwhile; // End of the loop. ?>
        </div>
    </div><!-- .entry-content -->
  </div>
</article><!-- #post-## -->
</main>
</div>
</div>

<?php get_footer(); ?>