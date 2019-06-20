<?php

namespace OffbeatWP\Polylang\Helpers;

class ViewHelpers
{

    public function langSwitcher($args = [])
    {
        if (!function_exists('pll_the_languages')) {
            return __('Polylang langSwitcher does not exists');
        }
        return pll_the_languages($args);
    }

    public function currentLang($field = 'slug')
    {
        if (!function_exists('pll_current_language')) {
            return __('Polylang currentLang does not exists');
        }
        return pll_current_language($field);

    }


}