<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html">
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
	
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '852757391534816');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=852757391534816&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
	
</head>

<body <?php body_class(); ?>>

  <header class="site-header" role="banner"><!-- #header .site-header -->

    <div class="site-header__banner"><!-- .site-header__banner -->

      <div class="site-header__logo"><!-- .site-header__logo -->

        <?php
          if ( function_exists( 'northpoint_custom_logo' ) ) {
            echo theme_get_custom_np_logo();
          }
        ?>


      </div><!-- end .site-header__logo -->

      <div class="site-header__site-title"><!-- .site-header__site-title -->

        <h1><a href="<?php echo get_home_url(); ?>/">The North Point</a></h1>
        <h2>Portland, Maine</h2>
        <p>35 Exchange St.</p>
        <p><a title="call us" href="tel:207-899-3778">207-899-3778</a></p>

      </div><!-- end .site-header__site-title -->



<?php /*
       * #This was code to include the "Order Now" button in the header. Removed 01/19/24 as per Dan Talmatch
       * 
        <div class="site-header__order-here"><!-- .site-header__order-here -->

        <button class="button button-order">
          <a title="order now" target="_blank" href="https://www.carhopme.com/r/1752/restaurants/delivery/American/The-North-Point-Portland/">order here</a>
        </button>

        <!-- <button class="button button-2">
          <a title="something else" href="#">Button 2</a>
        </button> -->

      </div><!-- end .site-header__order-here -->
*/ ?>


    </div><!-- end .site-header__banner -->

    <nav class="site-header__primary-nav"><!-- nav .site-header__primary-nav -->

      <?php
          if( has_nav_menu( 'primary' ) ){
            wp_nav_menu([
              'theme-location'      =>  'primary',
              'menu_class'          =>  'site-header__primary-nav__links',
              'container'           =>  'ul',
              'container_class'     =>  'site-header__primary-nav',
              'walker'              =>  new NP_My_Walker_Menu(),
              'depth'               =>  1,
              'show_carets'         =>  false
              // when depth set to 0 = unlimited sub-menus avail
              // since depth only 1 - no carets needed
            ]);
          }
        ?>

    </nav><!-- end nav .site-header__primary-nav -->

  </header><!-- end #header .site-header -->
