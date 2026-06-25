</main><footer class="site-footer py-5 text-white">
    <div class="container">

        <div class="row align-items-center gy-4 mb-4">

            <div class="col-12 col-lg-3 text-center text-lg-start">
                <div class="footer-logo-wrapper d-flex align-items-center justify-content-center justify-content-lg-start" style="height: 42px;">
<!--                    --><?php //if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
<!--                        --><?php //the_custom_logo(); ?>
<!--                    --><?php //else : ?>
<!--                        <a class="text-white text-decoration-none fs-3 fw-serif" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">-->
<!--                            --><?php //bloginfo( 'name' ); ?>
<!--                        </a>-->
<!--                    --><?php //endif; ?>
                </div>
            </div>

            <div class="col-12 col-lg-6 text-center">
                <nav class="footer-navigation">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mx-3"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">About us</a></li>
                        <li class="list-inline-item mx-3"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">Menu</a></li>
                        <li class="list-inline-item mx-3"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">Contact</a></li>
                        <li class="list-inline-item mx-3"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">FAQ</a></li>
                        <li class="list-inline-item mx-3"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">Vouchers and offers</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-12 col-lg-3 text-center text-lg-end">
                <div class="footer-socials fs-4">
                    <a href="#" class="text-white mx-2 opacity-90" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white mx-2 opacity-90" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

        </div>

        <hr class="border-white opacity-20 my-4">

        <div class="row align-items-center gy-3 pt-2 small opacity-75">

            <div class="col-12 col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
            </div>

            <div class="col-12 col-md-6 text-center text-md-end">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-3"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">Privacy policy</a></li>
                    <li class="list-inline-item me-3"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">Terms of service</a></li>
                    <li class="list-inline-item"><a href="#" class="text-white text-decoration-none opacity-90 hover-opacity-100">Cookie settings</a></li>
                </ul>
            </div>

        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>