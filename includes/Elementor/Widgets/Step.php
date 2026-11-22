<?php

namespace AEF\Elementor\Widgets;

use Elementor\Widget_Base;

class Step extends Widget_Base
{
    public function get_name()
    {
        return 'amelia_form_step';
    }
    public function get_title()
    {
        return 'Amelia Form Step';
    }
    public function get_icon()
    {
        return 'eicon-steps';
    }
    public function get_categories()
    {
        return ['general'];
    }

    protected function render()
    {
        echo '<div class="aef-step">';
        echo '<div class="aef-step-content">';
        echo '</div>';
        echo '</div>';
    }
}
