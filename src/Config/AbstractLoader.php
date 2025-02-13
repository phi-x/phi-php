<?php

declare(strict_types=1);

namespace Phi\Config;

abstract class AbstractLoader implements LoaderInterface
{
    public function __construct(string $root)
    {

        $this->setRoot($root);
    }
}
