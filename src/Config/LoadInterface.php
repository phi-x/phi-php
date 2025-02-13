<?php

namespace Phi\Config;

interface LoadInterface
{
    /**
     * Load a configuration file
     *
     * @param  string  $file  The file to load
     * @return Settings The configuration options
     */
    public function load(string $file): SettingsInterface;
}
