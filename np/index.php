<?php get_header(); ?>

  <main id="primary" class="entry-content" role="main"><!-- main #primary .entry-content -->

    <div class="container wrapper"><!-- .container .wrapper -->

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content' );

      endwhile; else :

        get_template_part( 'template-parts/content', 'none' );

      endif; ?>


      <!-- <p>Template: index.php</p> -->

<?php get_footer(); ?>