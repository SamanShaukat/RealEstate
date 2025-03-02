<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * @var $css_class_field
 * @var $request_bedrooms
 */
$request_bedrooms = isset($_GET['bedrooms']) ? ere_clean(wp_unslash($_GET['bedrooms']))  : '';
$bedrooms_list = ere_get_option('bedrooms_list','1,2,3,4,5,6,7,8,9,10');
$bedrooms_array = explode( ',', $bedrooms_list );
?>
<div class="<?php echo esc_attr($css_class_field); ?> form-group">
    <select name="bedrooms" title="<?php esc_attr_e('Property Bedrooms', 'essential-real-estate') ?>"
            class="search-field form-control" data-default-value="">
        <option value="">
            <?php esc_html_e('Any Bedrooms', 'essential-real-estate') ?>
        </option>
	    <?php if (is_array($bedrooms_array) && !empty($bedrooms_array) ): ?>
		    <?php foreach ($bedrooms_array as $n) : ?>
			    <option <?php selected($request_bedrooms,$n) ?> value="<?php echo esc_attr($n)?>"><?php echo esc_html($n)?></option>
		    <?php endforeach; ?>
	    <?php endif; ?>
    </select>
</div>