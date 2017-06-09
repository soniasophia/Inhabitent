<?php /* Template Name: About */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <div class="about-header"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></div>
        
       <?php
        while ( have_posts() ) : the_post();
        endwhile;
        ?>
        <div class="about-info container"><h2>Our Story</h2><p><?php echo CFS()->get( 'our_story' ); ?></p></div>
        <div class="about-info container"><h2>Our Team</h2><p><?php echo CFS()->get( 'our_team' ); ?></p></div>

    </main><!-- .site-main -->
</div>

<?php get_footer(); ?>



