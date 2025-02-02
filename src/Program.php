<?php

namespace Phi;

class Program
{
    public function execute(array $args): int
    {
        $args = array_slice($args, 1);

        dump($args);

        return 0;
    }
}
