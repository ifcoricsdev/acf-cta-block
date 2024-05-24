<?php
// Get field values
$cta_text = get_field('cta_text') ?: 'Default CTA Text';
$cta_link = get_field('cta_link') ?: '#';
$background_color = get_field('background_color') ?: '#ffffff';
$padding = get_field('padding') ?: '10px';
$margin = get_field('margin') ?: '10px';
$alignment = get_field('alignment') ?: 'center';
?>

<div class="cta-block" style="
    background-color: <?php echo esc_attr($background_color); ?>;
    padding: <?php echo esc_attr($padding); ?>;
    margin: <?php echo esc_attr($margin); ?>;
    text-align: <?php echo esc_attr($alignment); ?>;
">
    <a href="<?php echo esc_url($cta_link); ?>" class="cta-link"><?php echo esc_html($cta_text); ?></a>
</div>

<style>
.cta-block {
    display: flex;
    justify-content: <?php echo esc_attr($alignment); ?>;
}
.cta-link {
    text-decoration: none;
    color: inherit;
}
</style>
