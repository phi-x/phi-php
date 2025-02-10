<?php

namespace Phi;

use Phi\Console\Utils\Input;
use Phi\Console\Utils\Output;

class Program
{
    /**
     * @param  null|array<string>  $argv
     **/
    public function execute(array $args): int
    {
        $args = array_slice($args, 1);

        if (! count($args)) {
            $input = Input::scan('❯ ');
            Output::print($input);
        }

        return 0;
    }
}
