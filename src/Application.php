<?php

namespace Phi;

use Phi\Console\Input;
use Phi\Console\Output;

class Application extends Program
{
    /**
     * @param  null|array<string>  $args
     **/
    public function execute(array $args, Input $input, Output $output): int
    {
        $output::print("Project: $this->name\n\t$this->description".PHP_EOL);

        if (! count($args)) {
            $code = $input::scan('❯ ');
            $output::print($code);
        }

        return 0;
    }
}
