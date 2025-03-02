<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * @var $css_class_field
 */
$request_label = isset($_GET['label']) ? ere_clean(wp_unslash($_GET['label']))  : '';
?>
<div class="<?php echo esc_attr($css_class_field); ?> form-group">
    <select name="label" title="<?php esc_attr_e('Property Label', 'essential-real-estate') ?>"
            class="search-field form-control" data-default-value="">
        <?php ere_get_taxonomy_slug('property-label', $request_label); ?>
        <option value="" <?php selected('',$request_label); ?>>
            <?php esc_html_e('All Labels', 'essential-real-estate') ?></option>
    </select>
</div>