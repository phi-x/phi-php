<?php

namespace Phi;

use Phi\Console\Utils\Color;

class Installer
{
    const string NAME = 'Phi (Φ)';

    public static function postInstall(): void
    {
        self::printMessage('📥 '.static::NAME.' has been installed successfully!', 'blue');
        // TODO: Setup Phi
    }

    public static function postUpdate(): void
    {
        self::printMessage('🔄 '.static::NAME.' has been updated successfully!', 'yellow');
        // TODO: Update Phi
    }

    private static function printMessage(string $message, string $color = 'green'): void
    {
        echo Color::format($color, $message).PHP_EOL;
    }
}
