<?php
$bio = get_sub_field('bio');
$heading_text = get_sub_field('heading_text');
$subtitle = get_sub_field('subtitle');
$image = get_sub_field('image');
?>

<section class="about-section py-5 text-white">
    <div class="container py-md-5">
        <div class="row align-items-center gy-4">

            <div class="col-12 col-md-6 pe-md-5">
                <?php if ( $bio ) : ?>
                    <span class="text-uppercase tracking-wider small opacity-75 d-block mb-2">
                        <?php echo esc_html( $bio ); ?>
                    </span>
                <?php endif; ?>

                <?php if ( $heading_text ) : ?>
                    <h2 class="display-5 fw-normal mb-4" style="font-family: serif;">
                        <?php echo esc_html( $heading_text ); ?>
                    </h2>
                <?php endif; ?>

                <?php if ( $subtitle ) : ?>
                    <p class="lead fs-6 lh-lg mb-4 opacity-90">
                        <?php echo esc_html( $subtitle ); ?>
                    </p>
                <?php endif; ?>

                <a href="#" class="btn btn-outline-light px-4 py-2 text-capitalize" style="font-size: 0.9rem;">
                    About Us
                </a>
            </div>

            <div class="col-12 col-md-6">
                <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>"
                         alt="<?php echo esc_attr( $image['alt'] ? $image['alt'] : $heading_text ); ?>"
                         class="img-fluid rounded-3 shadow-sm w-100"
                         style="object-fit: cover; max-height: 450px;">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>