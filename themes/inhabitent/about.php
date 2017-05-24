<?php /* Template Name: About */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

       <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'page' );
        endwhile;
        ?>

        <div class="about-info container"><h2>Our Story</h2><p><?php echo CFS()->get( 'our_story' ); ?></p></div>
        <div class="about-info container"><h2>Our Team</h2><p><?php echo CFS()->get( 'our_team' ); ?></p></div>

    </main><!-- .site-main -->
</div>

<?php get_footer(); ?>