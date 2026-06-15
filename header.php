<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mikrofill' ); ?></a>

<div class="container">
	<header id="masthead" class="site-header row">
		<div class="site-branding col-auto me-auto">

        <div class="logo-wrapper" style="height: 42px;">
            <?php the_custom_logo(); ?>
        </div>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation col">
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
		</nav><!-- #site-navigation -->

    <div class="col-auto ms-auto d-none d-lg-block">
        <a href="tel:03452606020">
            <span class="call-icon">About Us</span>
        </a>
        <a href="mailto:sales@mikrofill.com">
            <span class="email-icon">Menu</span>
        </a>
        <a href="#">
            <span class="faq">FAQ</span>
        </a>
        <a href="#">
            <span class="contact">Contact</span>
        </a>
        <a href="#">
            <span class="vouchers-and-offers">Vouchers and Offers</span>
        </a>
        <a href="#">
            <span class="reserve">Reserve</span>
        </a>
    </div>

	</header><!-- #masthead -->
</div>
