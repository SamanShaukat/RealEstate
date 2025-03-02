<?php
// Do not allow directly accessing this file.
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
/**
 * @var $data array
 */
?>
<ul class="ere__single-agency-meta">
    <?php foreach ($data as $k =>  $v): ?>
        <li class="<?php echo esc_attr($k)?>">
            <span class="ere__label"><?php echo esc_html($v['label'])?>:</span>
            <span class="ere__value"><?php echo esc_html($v['value'])?></span>
        </li>
    <?php endforeach; ?>
</ul>
