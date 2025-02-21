<?php

declare(strict_types=1);

use Phi\Concretes\Autoloader;

require_once __DIR__.'/core/Concretes/Autoloader.php';

$phiLoader = (new Autoloader(__DIR__))
    ->setNamespace('Phi', ['core', 'components'])
    ->useExtension('.phi')
    ->useFile('phi')
    ->register();

return $phiLoader;
