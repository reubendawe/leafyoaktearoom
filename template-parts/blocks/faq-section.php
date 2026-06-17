<section class="faq-section text-center">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-8">
                <h2 class="faq-main-title">Frequently Asked Questions</h2>
                <p class="faq-subtitle">Find answers to what you need to know</p>
            </div>
        </div>

        <div class="row g-4 faq-grid justify-content-center">
            <?php if( have_rows('faq_items') ): ?>
                <?php while( have_rows('faq_items') ) : the_row();
                    $icon = get_sub_field('item_icon');
                    $question = get_sub_field('item_question');
                    $answer = get_sub_field('item_answer');
                    ?>
                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                        <?php if($icon): ?>
                            <div class="faq-icon-wrapper mb-3">
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" width="32" height="32" />
                            </div>
                        <?php endif; ?>

                        <h3 class="faq-question"><?php echo esc_html($question); ?></h3>
                        <p class="faq-answer"><?php echo esc_html($answer); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="row justify-content-center faq-footer-row">
            <div class="col-12 col-md-6">
                <h4 class="faq-footer-title"><?php the_field('faq_footer_title') ?: print('Still have questions?'); ?></h4>
                <p class="faq-footer-subtitle"><?php the_field('faq_footer_text') ?: print('Reach out to us directly.'); ?></p>
                <a href="<?php the_field('faq_button_link') ?: print('#'); ?>" class="btn btn-outline-custom">
                    <?php the_field('faq_button_label') ?: print('Contact'); ?>
                </a>
            </div>
        </div>

    </div>
</section>