<?php

namespace Nip\Locale;

use Nip\Container\ServiceProvider\AbstractSignatureServiceProvider;

/**
 * Class LocaleServiceProvider
 * @package Nip\Mail
 */
class LocaleServiceProvider extends AbstractSignatureServiceProvider
{

    /**
     * @inheritdoc
     */
    public function register()
    {
        $this->registerLocale();
    }

    protected function registerLocale()
    {
        $this->getContainer()->singleton('locale', Locale::class);
    }

    /**
     * @inheritdoc
     */
    public function provides()
    {
        return ['locale'];
    }
}
