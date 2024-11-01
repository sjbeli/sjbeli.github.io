<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="site-title<?php
          // if there is NOT a custom logo, add class 'no-logo' right here
          if ( ! has_custom_logo() ) {?> no-logo<?php } ?>">

          <?php the_title( '<h1>', '</h1>' ); ?>


        </div><!-- .site-title -->

      <?php the_content(); ?>

      </article>