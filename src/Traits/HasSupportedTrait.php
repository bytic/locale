<?php

namespace Nip\Locale\Traits;

use DirectoryIterator;

/**
 * Trait HasSupportedTrait
 * @package Nip\Locale\Traits
 */
trait HasSupportedTrait
{
    protected $supported;

    public function getSupported()
    {
        if (!$this->supported) {
            $iterator = new DirectoryIterator($this->getDataFolder());
            foreach ($iterator as $file) {
                if ($file->isFile()) {
                    $fileName = $file->getFilename();
                    if (substr($fileName, 0, 1) != '_') {
                        $name = str_replace('.php', '', $fileName);
                        $this->supported[] = $name;
                    }
                }
            }
        }
        return $this->supported;
    }

    /**
     * @param $name
     * @return bool
     */
    public function isSupported($name)
    {
        return $this->hasDataFile($name);
    }
}
