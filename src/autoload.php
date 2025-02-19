<?php

declare(strict_types=1);

use Phi\Concretes\Autoloader;

require_once __DIR__.'/Concretes/Autoloader.php';

$phiLoader = (new Autoloader)->register();

$phiLoader->loadFile('phi');

return $phiLoader;
