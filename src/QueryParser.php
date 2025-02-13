<?php

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
