<?php

namespace AEF\Elementor\Widgets;

use Elementor\Widget_Base;

if (! defined('ABSPATH')) {
    exit;
}

class Form extends Widget_Base
{

    public function get_name()
    {
        return 'amelia_booking_form';
    }

    public function get_title()
    {
        return __('Amelia Booking Form', 'amelia-elementor-forms');
    }

    public function get_icon()
    {
        return 'eicon-form-horizontal';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function render()
    {
?>
        <div class="aef-booking-form" data-aef-form>
            <div class="aef-steps">
                <?php
                echo \Elementor\Plugin::$instance->frontend
                    ->get_builder_content_for_display($this->get_id());
                ?>
            </div>

            <div class="aef-navigation">
                <button type="button" class="aef-prev" style="display:none;">
                    <?php esc_html_e('Previous', 'amelia-elementor-forms'); ?>
                </button>

                <button type="button" class="aef-next">
                    <?php esc_html_e('Next', 'amelia-elementor-forms'); ?>
                </button>
            </div>
        </div>
<?php
    }
}
