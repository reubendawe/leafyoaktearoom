<?php $i = 0;
if (have_rows('flexible_content')) :
    while (have_rows('flexible_content')) : the_row();

        $layout = get_row_layout();
        $margin_top = get_sub_field('margin_top');
        $margin_bottom = get_sub_field('margin_bottom');
        $padding_top = get_sub_field('padding_top');
        $padding_bottom = get_sub_field('padding_bottom');
        $background_colour = get_sub_field('background_colour');
        $margin_style = '';
        $padding_style = '';
        $background_style = '';

        $layout_hyphen = ucwords(str_replace('_', '-', $layout));
        $layout_id = $layout_hyphen . '-' . $i;

        if ($margin_top) {
            $margin_style .= "margin-top: {$margin_top}px;";
        }
        if ($margin_bottom) {
            $margin_style .= "margin-bottom: {$margin_bottom}px;";
        }
        if ($padding_top) {
            $padding_style .= "padding-top: {$padding_top}px;";
        }
        if ($padding_bottom) {
            $padding_style .= "padding-bottom: {$padding_bottom}px;";
        }
        if ($background_colour) {
            $background_style .= "background-color: {$background_colour};";
        }
        ?>

        <div<?php if ($margin_style) {
            echo ' style="' . esc_attr($margin_style) . '"';
        } ?>>
            <div class="<?php echo $layout ?>" id="<?php echo $layout_id; ?>" <?php if ($padding_style) {
                echo ' style="' . esc_attr($padding_style . $background_style) . '"';
            } ?> >
                <?php
                $template_file = str_replace('_', '-', $layout);
                get_template_part('template-parts/blocks/' . $template_file);
                ?>
            </div>
        </div>

        <?php $i++; endwhile;
endif; ?>