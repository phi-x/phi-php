<?php

namespace Phi\Config;

abstract class AbstractSettings implements SettingsInterface
{
    public function __construct(array $options = [])
    {

        $this->setOptions($options);
    }
}
