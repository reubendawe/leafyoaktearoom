<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header py-3 text-white">
    <div class="container-fluid px-md-5">
        <div class="row align-items-center gy-3">

            <div class="col-6 col-lg-3 text-start">
                <div class="header-logo-wrapper">
<!--                    --><?php //if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
<!--                        --><?php //the_custom_logo(); ?>
<!--                    --><?php //else : ?>
<!--                        <a class="header-logo-text" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">-->
<!--                            --><?php //bloginfo( 'name' ); ?>
<!--                        </a>-->
<!--                    --><?php //endif; ?>
                </div>
            </div>

            <div class="col-6 d-lg-none text-end">
                <button class="btn btn-outline-light border-0" type="button" data-bs-toggle="collapse" data-bs-target="#headerNavbar" aria-controls="headerNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list fs-2"></i>
                </button>
            </div>

            <div class="col-12 col-lg-9 collapse d-lg-flex justify-content-lg-end align-items-center" id="headerNavbar">

                <nav class="main-navigation me-lg-4 my-3 my-lg-0 w-100 text-center text-lg-end">
                    <ul class="list-inline mb-0 d-flex flex-column flex-lg-row justify-content-center justify-content-lg-end align-items-center gap-3 gap-lg-4">
                        <li class="list-inline-item m-0"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">About us</a></li>
                        <li class="list-inline-item m-0"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">Menu</a></li>
                        <li class="list-inline-item m-0"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">FAQ</a></li>
                        <li class="list-inline-item m-0"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">Contact</a></li>
                        <li class="list-inline-item m-0"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">Vouchers and Offers</a></li>
                    </ul>
                </nav>

                <div class="text-center text-lg-end mt-2 mt-lg-0">
                    <a href="#" class="btn btn-header-reserve px-4 py-2 rounded-2 text-capitalize">
                        Reserve
                    </a>
                </div>

            </div>

        </div>
    </div>
</header>

<main class="site-content">