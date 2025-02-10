<?php

namespace Phi;

class Application extends Program
{
    /**
     * @param  null|array<string>  $argv
     **/
    public function run(?array $argv = null): never
    {
        /** @var array<string> */
        $args = $argv ?? $_SERVER['argv'] ?? [];
        $code = $this->execute($args);

        exit($code);
    }
}
