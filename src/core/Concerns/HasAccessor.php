<?php

declare(strict_types=1);

namespace Phi\Concerns;

use Phi\Di\NotFoundException;
use Phi\Di\Reflector;
use Phi\Di\Singleton;

trait HasAccessor
{
    /**
     * Access object properties using get methods or property value
     *
     * @throws NotFoundException When property is not accessible
     */
    public function __get(string $name): mixed
    {
        if (method_exists($this, $method = 'get'.ucfirst($name))) {
            /** @var mixed $result */
            $result = Singleton::getContainer()->invoke([$this, $method]);
        } elseif (property_exists($this, $name)) {
            /** @var mixed $result */
            $result = Reflector::getPropertyValue($this, $name);
        } else {
            throw NotFoundException::new('Unable to get property %s.', [$name]);
        }

        return $result;
    }

    /**
     * Check the existence of a property from get methods or property value
     */
    public function __isset(string $name): bool
    {
        if (method_exists($this, $method = 'get'.ucfirst($name)) && Singleton::getContainer()->invoke([$this, $method]) !== null) {
            return true;
        }

        return property_exists($this, $name) && isset($this->$name);
    }
}
