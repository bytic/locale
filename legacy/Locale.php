<?php

/** @noinspection PhpClassNamingConventionInspection
 * Class Nip_Locale
 */
class Nip_Locale extends \Nip\Locale\Locale
{
    /**
     * @return mixed
     */
    public static function instance()
    {
        return app('locale');
    }
}
