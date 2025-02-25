<?php

declare(strict_types=1);

use Phi\Pm\Autoloader;
use Phi\Pm\AutoloaderInit;

require_once __DIR__.'/pm/AutoloaderInit.php';

return AutoloaderInit::getAutoloader(then: static function (Autoloader $autoloader) {
    $autoloader
        ->setNamespace('Phi', ['core', 'components'])
        ->setNamespace('Phi\Exceptions', 'exceptions')
        ->setNamespace('Phi\Di', 'di')
        ->setNamespace('Phi\Pm', 'pm')
        ->useExtension('.phi')
        ->useFile('phi')
        ->register();
});
