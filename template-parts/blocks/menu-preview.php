<section class="menu-preview text-center">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-8">
                <h2 class="menu-main-title">Leafy Oak Tea Room Menu</h2>
                <p class="menu-subtitle">Discover what we've carefully selected and prepared fresh each day for you</p>
            </div>
        </div>

        <div class="row g-4 menu-grid justify-content-center">
            <?php if( have_rows('menu_preview_items') ): ?>
                <?php while( have_rows('menu_preview_items') ) : the_row();
                    $icon = get_sub_field('menu_icon');
                    $heading = get_sub_field('menu_heading');
                    $text = get_sub_field('menu_text');
                    ?>
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                        <?php if($icon): ?>
                            <div class="menu-icon-wrapper mb-3">
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" width="32" height="32" />
                            </div>
                        <?php endif; ?>

                        <h3 class="menu-question"><?php echo esc_html($heading); ?></h3>
                        <p class="menu-answer"><?php echo esc_html($heading); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="row justify-content-center menu-footer-row">
            <div class="col-12 col-md-6">
                <a href="<?php the_field('menu_button_link') ?: print('#'); ?>" class="btn btn-outline-custom">
                    <?php the_field('menu_button_label') ?: print('Contact'); ?>
                </a>
            </div>
        </div>

    </div>
</section>