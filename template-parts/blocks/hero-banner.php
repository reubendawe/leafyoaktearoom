<?php
$background_image = get_sub_field('background_image');
$wysiwyg = get_sub_field('wysiwyg');
$content_width = get_sub_field('content_width');

$within_container = get_sub_field('within_container');
if ($within_container) {
    $container = 'container-md';
    $shift_text = 'shift-text';
} else {
    $container = '';
    $shift_text = '';
}
$has_background = get_sub_field('has_background');

if ($has_background) {
    $small_coloured_background = 'small-coloured-background';
} else {
    $small_coloured_background = '';
}

?>
<div class="<?php echo $small_coloured_background; ?>">
    <section class="hero-banner <?php echo $container; ?>">
        <div class="image-wrapper">
            <?php $background_image_id = $background_image['ID'];
            echo wp_get_attachment_image($background_image_id, 'full', false, array('class' => 'w-100 h-100 object-cover', 'data-sizes' => 'auto')); ?>
        </div>
        <div class="container-md">
            <div class="content-wrapper bg-mf-blue <?php echo $shift_text; ?>">
                <?php echo $wysiwyg ?>
            </div>
        </div>
    </section>
</div>