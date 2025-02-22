<?php

declare(strict_types=1);

use Phi\Concretes\Autoloader;
use Phi\Concretes\AutoloaderInit;

require_once __DIR__.'/core/Concretes/AutoloaderInit.php';

return AutoloaderInit::getAutoloader(then: static function (Autoloader $autoloader) {
    $autoloader
        ->setNamespace('Phi', ['core', 'components'])
        ->useExtension('.phi')
        ->useFile('phi')
        ->register();
});
