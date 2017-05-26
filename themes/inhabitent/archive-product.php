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
				<h1>Shop Stuff</h1>

				<?php $product_types = get_terms(array (
            'taxonomy'=>'product-type',
            'hide_empty'=> 0
          )); 
          if (!empty($product_types) && !is_wp_error($product_types)) : ?>

        <div class="product-type-categories">
          <?php foreach ( $product_types as $product_type ) : ?>
            
          <a href="<?php echo get_term_link($product_type); ?>">
          <h3><?php echo $product_type->name; ?></h3>
          </a>
          <?php endforeach; ?>
        </div>
          <?php endif; ?>

				<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="product-archive">
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
			</div>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_footer(); ?>
