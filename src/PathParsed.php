<?php

namespace Phi;

class PathParsed
{
    /**
     * Create a new parsed path
     *
     * @param  array  $info  The path parsed info
     */
    public function __construct(array $info)
    {
        $this->info = $info;
    }

    /**
     * @var array The path parsed info
     */
    protected array $info;

    /**
     * Give the path info
     *
     * @param  array  $info  The path parsed info
     * @param  null|string  $name  The info index
     * @return mixed
     */
    public function info(?string $name = null)
    {
        return isset($name) ? ($this->info[$name] ?? null) : $this->info;
    }

    /**
     * Give the path info value by index
     *
     * @param  string  $name  The info index
     * @return mixed
     */
    public function __get($name)
    {
        return $this->info($name);
    }
}
