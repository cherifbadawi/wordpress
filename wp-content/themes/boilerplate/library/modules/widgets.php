<?php

/**
 * Disable Default Widgets from WordPress admin.
 *
 * @return void
 */
add_action('widgets_init', function () use ($config) {
    foreach ($config['widgets']['widgets'] as $widget) {
        unregister_widget($widget);
    }
}, 1);

/**
 * Filters that allow shortcodes in text widgets.
 */
if ($config['widgets']['shortcodes']) {
    add_filter('widget_text', 'shortcode_unautop');
    add_filter('widget_text', 'do_shortcode');
}
