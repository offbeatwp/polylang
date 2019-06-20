<?php
namespace OffbeatWP\Polylang\Helpers;

class ViewHelpers
{

    public function langSwitcher($args = [])
    {
        if (!function_exists('polylang_langSwitcher')) {
            return __('Polylang langSwitcher does not exists');
        }
        return pll_the_languages($args);
    }
}