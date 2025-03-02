<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
/**
 * @var $css_class_field
 * @var $css_class_half_field
 * @var $land_area_is_slider
 */
$request_min_land_area = isset($_GET['min-land-area']) ? ere_clean(wp_unslash($_GET['min-land-area']))  : '';
$request_max_land_area = isset($_GET['max-land-area']) ? ere_clean(wp_unslash($_GET['max-land-area']))  : '';
$measurement_units_land_area=ere_get_measurement_units_land_area();
?>
<?php if (filter_var($land_area_is_slider, FILTER_VALIDATE_BOOLEAN)): ?>
    <?php
    $min_land_area = ere_get_option('property_land_slider_min',0);
    $max_land_area = ere_get_option('property_land_slider_max',1000);
    if (!empty($request_min_land_area) && !empty($request_max_land_area)) {
        $min_land_area_change = $request_min_land_area;
        $max_land_area_change = $request_max_land_area;
    } else {
        $min_land_area_change = $min_land_area;
        $max_land_area_change = $max_land_area;
    }
    ?>
<div class="<?php echo esc_attr($css_class_field); ?> form-group">
    <div class="ere-sliderbar-land-area ere-sliderbar-filter"
         data-min-default="<?php echo esc_attr($min_land_area) ?>"
         data-max-default="<?php echo esc_attr($max_land_area) ?>"
         data-min="<?php echo esc_attr($min_land_area_change); ?>"
         data-max="<?php echo esc_attr($max_land_area_change); ?>">
        <div class="title-slider-filter">
            <span><?php echo esc_html__('Land Area', 'essential-real-estate') ?> [</span><span
                    class="min-value"><?php echo esc_html(ere_get_format_number($min_land_area_change))  ?></span>
            - <span
                    class="max-value"><?php echo esc_html(ere_get_format_number($max_land_area_change))  ?></span><span>]
            <?php echo wp_kses_post($measurement_units_land_area).'</span>'; ?>
            <input type="hidden" name="min-land-area" class="min-input-request" value="<?php echo esc_attr($min_land_area_change) ?>">
            <input type="hidden" name="max-land-area" class="max-input-request" value="<?php echo esc_attr($max_land_area_change) ?>">
        </div>
        <div class="sidebar-filter">
        </div>
    </div>
</div>

<?php else: ?>
<div class="<?php echo esc_attr($css_class_half_field); ?> form-group">
    <select name="min-land-area" title="<?php echo esc_attr__('Min Land Area Size', 'essential-real-estate') ?>"
            class="search-field form-control" data-default-value="">
        <option value="">
            <?php echo esc_html__('Min Land Area', 'essential-real-estate') ?>
        </option>
        <?php
        $property_land_dropdown_min = ere_get_option('property_land_dropdown_min', '0,100,300,500,700,900,1100,1300,1500,1700,1900');
        $property_land_array = explode(',', $property_land_dropdown_min);
        ?>
        <?php if (is_array($property_land_array) && !empty($property_land_array) ): ?>
            <?php foreach ($property_land_array as $n) : ?>
                <option <?php selected($request_min_land_area,$n) ?> value="<?php echo esc_attr($n)?>"><?php echo wp_kses_post(sprintf('%s %s',ere_get_format_number($n), $measurement_units_land_area)) ?></option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>
</div>
<div class="<?php echo esc_attr($css_class_half_field); ?> form-group">
    <select name="max-land-area" title="<?php echo esc_attr__('Max Land Area Size', 'essential-real-estate') ?>"
            class="search-field form-control" data-default-value="">
        <option value="">
            <?php echo esc_html__('Max Land Area', 'essential-real-estate') ?>
        </option>
        <?php
        $property_land_dropdown_max = ere_get_option('property_land_dropdown_max', '200,400,600,800,1000,1200,1400,1600,1800,2000');
        $property_land_array = explode(',', $property_land_dropdown_max);
        ?>
        <?php if (is_array($property_land_array) && !empty($property_land_array) ): ?>
            <?php foreach ($property_land_array as $n) : ?>
                <option <?php selected($request_max_land_area,$n) ?> value="<?php echo esc_attr($n)?>"><?php echo wp_kses_post(sprintf('%s %s',ere_get_format_number($n), $measurement_units_land_area)) ?></option>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>
</div>
<?php endif; ?>