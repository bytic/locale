<?php

namespace Nip\Locale\Tests\Traits;

use Nip\Locale\Locale;
use Nip\Locale\Tests\AbstractTest;

/**
 * Class HasSupportedTraitTest
 * @package Nip\Locale\Tests\Traits
 */
class HasSupportedTraitTest extends AbstractTest
{

    public function testGetSupported()
    {
        $locale = new Locale();
        $supported = $locale->getSupported();

        self::assertCount(6, $supported);
        self::assertContains('ro', $supported);
        self::assertContains('en', $supported);
    }
}
