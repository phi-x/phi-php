<?php

declare(strict_types=1);

namespace Phi\Config;

interface SettingsArrayInterface extends \Countable, \IteratorAggregate, SettingsOffsetsInterface
{
    public function count(): int;

    public function getIterator(): \Traversable;
}
