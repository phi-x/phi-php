<?php

declare(strict_types=1);

namespace Phi;

interface QueryParser
{
    /**
     * Parse the parser query
     *
     * @return namespace\QueryParsed
     */
    public function parse(): QueryParsed;
}
