<?php

/**
 * Plugin Name: Amelia Elementor Booking Forms
 * Plugin URI: https://condixia.com
 * Author: Mahim Zaman (Condixia)
 * Author URI: https://mahimzaman.com
 * Description: Custom multistep booking forms for Amelia using Elementor.
 * Version: 0.1.0
 * Text Domain: amelia-elementor-forms
 */

if (! defined('ABSPATH')) {
    exit;
}

define('AEF_PATH', plugin_dir_path(__FILE__));
define('AEF_URL', plugin_dir_url(__FILE__));

/**
 * Load plugin only after Elementor is ready
 */
add_action('elementor/init', function () {

    // Safety: Elementor not active
    if (! class_exists('\Elementor\Widget_Base')) {
        return;
    }

    require_once AEF_PATH . 'includes/Elementor/Widgets/Form.php';
    require_once AEF_PATH . 'includes/Elementor/Widgets/Step.php';

    add_action('elementor/widgets/register', function ($widgets_manager) {
        $widgets_manager->register(new \AEF\Elementor\Widgets\Form());
        $widgets_manager->register(new \AEF\Elementor\Widgets\Step());
    });
});
