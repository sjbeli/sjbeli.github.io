<article id="post-<?php the_ID(); ?>" <?php post_class( 'hide-title-front-page' ); ?>>

        <div class="site-title<?php
          // if there is NOT a custom logo, add class 'no-logo' right here
          if ( ! has_custom_logo() ) {?> no-logo<?php } ?>">

          <!-- Don't need the page-title on the front-page. Block editor takes care of things nicely! -->
          <!-- <?php the_title( '<h1>', '</h1>' ); ?> -->

        </div><!-- .site-title -->

      <?php the_content(); ?>

      </article>