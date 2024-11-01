<?php get_header(); ?>

  <main id="primary" class="entry-content" role="main"><!-- main #primary .entry-content -->

    <div class="container wrapper"><!-- .container .wrapper -->

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'front-page' );

      endwhile; else :

        get_template_part( 'template-parts/content', 'none' );

      endif; ?>


      <!-- <p>Template: front-page.php</p> -->

<?php get_footer(); ?>