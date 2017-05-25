<?php
/* Template Name: Front Page */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section class="home-hero">
      <div class="logo">
      </div>
    </section>
      <section class="product-info container">
        <h2>Shop Stuff</h2>

          <!--Getting the Taxonomy Terms to Display Product Types -->
          <?php $product_types = get_terms(array (
            'taxonomy'=>'product-type',
            'hide_empty'=> 0
          )); 
          if (!empty($product_types) && !is_wp_error($product_types)) : ?>

        <div class="product-type-items">
          <?php foreach ( $product_types as $product_type ) : ?>
          <div class="single-product-type">
          <p><?php echo $product_type->description; ?></p>
          <a href="<?php echo get_term_link($product_type); ?>">
          <h3><?php echo $product_type->name; ?> Stuff</h3>
          </a>
          </div>
          <?php endforeach; ?>
        </div>
          <?php endif; ?>
      </section>

      <section class="latest-blog-posts container">
        <div class="container">
          <h2>Inhabitent Journal</h2>

          <!--The Query Loop for Blog Posts-->

            <ul><?php
           $posts = new WP_Query( 'posts_per_page=3&order=DES' ); ?>
           <?php if ( $posts->have_posts() ) : ?>
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <li><div class="thumbnail-container"><?php the_post_thumbnail(); ?></div>
                <div class="post-info-container">
                  <span class="post-metadata">
                <?php the_time('F jS, Y'); ?> / <?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
                </span>
                <h3><?php the_title(); ?></h3>
                <a class="read-more" href="<?php the_permalink() ?>">Read Entry</a>
                </div>
                <?php endwhile; ?>
                </li>

                <?php the_posts_navigation(); ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                        <h2>Nothing found!</h2>
            <?php endif; ?>
            </ul>
        </div>
      </section>
      <section class="adventures container">
        <h2>Latest Adventures</h2>
        <p class="More Adventures"></p>
      </section>
</div>

<?php get_footer(); ?>