#!/usr/bin/env php
<?php

$bin = realpath(__DIR__.'/bin/phi');

$contents = file_get_contents($bin);
$contents = preg_replace('{^#!/.+\r?\n<\?(php)?}', '', $contents, 1, $replaced);

if ($replaced) {
    $contents = strtr($contents, [
        '__FILE__' => var_export($bin, true),
        '__DIR__' => var_export(dirname($bin), true),
    ]);
    eval($contents);
    exit(0);
}

include $bin;
exit;
