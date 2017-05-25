<?php
/* Template Name: Product Types */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="container">
        <header class="page-header">

          <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			  </header><!-- .page-header -->

<?php

$args = array(
    'type'                     => 'post',
    'child_of'                 => 0,
    'parent'                   => '',
    'orderby'                  => 'name',
    'order'                    => 'ASC',
    'hide_empty'               => 1,
    'hierarchical'             => 1,
    'exclude'                  => '',
    'include'                  => '',
    'number'                   => '',
    'taxonomy'                 => 'product-type',
    'pad_counts'               => false 

    ); 
$categories = get_categories( $args );
foreach ( $categories as $cat ) {


$posts_array = get_posts(
    array(
        'posts_per_page' => -1,
        'post_type' => 'product-type',
        'tax_query' => array(
            array(
                'taxonomy' => 'product-type',
                'field' => 'name',
                'terms' => $cat->do,
            )
        )
    )
);
 print_r( $posts_array ); 
}






?>


      </div>
    </main>
  </div>

<?php get_footer(); ?>