<?php
/**
 * @var $css_class_field
 * @var $css_class_half_field
 * @var $area_is_slider
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
$request_min_area = isset($_GET['min-area']) ? ere_clean(wp_unslash($_GET['min-area']))  : '';
$request_max_area = isset($_GET['max-area']) ? ere_clean(wp_unslash($_GET['max-area']))  : '';
$measurement_units = ere_get_measurement_units();
?>
<?php if (filter_var($area_is_slider, FILTER_VALIDATE_BOOLEAN)): ?>
    <?php
    $min_area = ere_get_option('property_size_slider_min', 0);
    $max_area = ere_get_option('property_size_slider_max', 1000);
    if (!empty($request_min_area) && !empty($request_max_area)) {
        $min_area_change = $request_min_area;
        $max_area_change = $request_max_area;
    } else {
        $min_area_change = $min_area;
        $max_area_change = $max_area;
    }
    ?>
    <div class="<?php echo esc_attr($css_class_field); ?> form-group">
        <div class="ere-sliderbar-area ere-sliderbar-filter"
             data-min-default="<?php echo esc_attr($min_area) ?>"
             data-max-default="<?php echo esc_attr($max_area) ?>"
             data-min="<?php echo esc_attr($min_area_change) ?>"
             data-max="<?php echo esc_attr($max_area_change); ?>">
            <div class="title-slider-filter">
                <span><?php echo esc_html__('Size', 'essential-real-estate') ?> [</span><span
                        class="min-value"><?php echo ere_get_format_number($min_area_change) ?></span> - <span
                        class="max-value"><?php echo ere_get_format_number($max_area_change) ?></span><span>]
                    <?php echo wp_kses_post($measurement_units) . '</span>'; ?>
                    <input type="hidden" name="min-area" class="min-input-request" value="<?php echo esc_attr($min_area_change) ?>">
				<input type="hidden" name="max-area" class="max-input-request" value="<?php echo esc_attr($max_area_change) ?>">
            </div>
            <div class="sidebar-filter">
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="<?php echo esc_attr($css_class_half_field); ?> form-group">
        <select name="min-area" title="<?php echo esc_attr__('Min Size', 'essential-real-estate') ?>"
                class="search-field form-control" data-default-value="">
            <option value="">
                <?php echo esc_html__('Min Size', 'essential-real-estate') ?>
            </option>
            <?php
            $property_size_dropdown_min = ere_get_option('property_size_dropdown_min', '0,100,300,500,700,900,1100,1300,1500,1700,1900');
            $property_size_array = explode(',', $property_size_dropdown_min);
            ?>
            <?php if (is_array($property_size_array) && !empty($property_size_array) ): ?>
                <?php foreach ($property_size_array as $n) : ?>
                    <option <?php selected($request_min_area,$n) ?> value="<?php echo esc_attr($n)?>"><?php echo wp_kses_post(sprintf( '%s %s',ere_get_format_number($n), $measurement_units))?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </div>
    <div class="<?php echo esc_attr($css_class_half_field); ?> form-group">
        <select name="max-area" title="<?php echo esc_attr__('Max Size', 'essential-real-estate') ?>"
                class="search-field form-control" data-default-value="">
            <option value="">
                <?php echo esc_html__('Max Size', 'essential-real-estate') ?>
            </option>
            <?php
            $property_size_dropdown_max = ere_get_option('property_size_dropdown_max', '200,400,600,800,1000,1200,1400,1600,1800,2000');
            $property_size_array = explode(',', $property_size_dropdown_max);
            ?>
            <?php if (is_array($property_size_array) && !empty($property_size_array) ): ?>
                <?php foreach ($property_size_array as $n) : ?>
                    <option <?php selected($request_max_area,$n) ?> value="<?php echo esc_attr($n)?>"><?php echo wp_kses_post(sprintf( '%s %s',ere_get_format_number($n), $measurement_units))?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </div>
<?php endif; ?>