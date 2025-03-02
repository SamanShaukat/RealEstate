<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * @var $css_class_field
 */
$request_rooms = isset($_GET['rooms']) ? ere_clean(wp_unslash($_GET['rooms']))  : '';
$rooms_list = ere_get_option('rooms_list','1,2,3,4,5,6,7,8,9,10');
$rooms_array = explode( ',', $rooms_list );
?>
<div class="<?php echo esc_attr($css_class_field); ?> form-group">
    <select name="rooms" title="<?php esc_attr_e('Property Rooms', 'essential-real-estate') ?>"
            class="search-field form-control" data-default-value="">
        <option value="">
            <?php esc_html_e('Any Rooms', 'essential-real-estate') ?>
        </option>
	    <?php if (is_array($rooms_array) && !empty($rooms_array) ): ?>
		    <?php foreach ($rooms_array as $n) : ?>
			    <option <?php selected($request_rooms,$n) ?> value="<?php echo esc_attr($n)?>"><?php echo esc_html($n)?></option>
		    <?php endforeach; ?>
	    <?php endif; ?>
    </select>
</div>