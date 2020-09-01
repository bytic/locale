<?php

namespace Nip;

use Nip\Locale\Locale;

if (!function_exists('locale')) {
    /**
     * Get Locale
     * @return Locale
     */
    function locale()
    {
        return app('locale');
    }
}