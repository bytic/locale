<?php

namespace Nip\Locale\Tests;

use Nip\Locale\Locale;

/**
 * Class LocaleTest
 * @package Nip\Locale\Tests
 */
class LocaleTest extends AbstractTest
{
    public function test_getOption()
    {
        $locale = new Locale();
        static::assertSame('d/m/Y H:m', $locale->getOption(['time','dateTimeFormat'], 'ro_RO'));
        static::assertSame('H:m', $locale->getOption(['time','timeFormat'], 'ro_RO'));
    }
}
