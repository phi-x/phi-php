<?php

declare(strict_types=1);

namespace Phi;

class Autoloader
{
    public function register(): static
    {
        spl_autoload_register($this->autoload(...));

        return $this;
    }

    public function unregister(): static
    {
        spl_autoload_register($this->autoload(...));

        return $this;
    }

    public function autoload(string $class): bool
    {
        $exts = $this->autoloadExtensions();

        if (str_starts_with($class, __NAMESPACE__.'\\')) {
            return $this->loadClass($class, $exts);
        }

        return false;
    }

    public function loadClass(string $class, string $exts): bool
    {
        /*
        $namespace = __NAMESPACE__;
        $directory = __DIR__.DIRECTORY_SEPARATOR;
        $extension = '.'.pathinfo(__FILE__, PATHINFO_EXTENSION);
        if (preg_match("/^$namespace\\\(?P<name>.*)$/", $name, $matches)) {
            if (is_file($file = $directory.str_replace('\\', DIRECTORY_SEPARATOR, $matches['name']).$extension)) {
                if (is_readable($file)) {
                    require_once $file;
                }
            }
        }
        */

        $name = substr($class, strlen(__NAMESPACE__.'\\'));

        foreach (explode(',', $exts) as $ext) {
            if ($this->loadFile($name, $ext)) {
                if (! class_exists($class) && ! interface_exists($class) && ! trait_exists($class) && ! enum_exists($class)) {
                    throw new \RuntimeException("$class not found.");

                    return false;
                }

                return true;
            }
        }

        return false;
    }

    public function loadFile(string $name, string $ext = '.php'): bool
    {
        if (is_file($file = __DIR__.DIRECTORY_SEPARATOR.str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $name).$ext)) {
            include_once $file;

            return true;
        }

        return false;
    }

    public function autoloadExtensions(): string
    {
        $exts = explode(',', spl_autoload_extensions());

        $exts[] = '.phi';

        return spl_autoload_extensions(implode(',', $exts));
    }
}

$phiLoader = (new Autoloader)->register();

$phiLoader->loadFile('phi');

return $phiLoader;
