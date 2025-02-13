<?php

declare(strict_types=1);

use Phi\Autoloader;

require_once __DIR__.DIRECTORY_SEPARATOR.'Autoloader.php';

$phiLoader = (new Autoloader)->register();

$phiLoader->loadFile('phi');

return $phiLoader;
