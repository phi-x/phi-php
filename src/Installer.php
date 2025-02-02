<?php

namespace Phi;

class Installer
{
    const string NAME = 'Phi (Φ)';

    public static function postInstall(): void
    {
        self::printMessage('📥 '.static::NAME.' has been installed successfully!');
        // TODO: Setup Phi
    }

    public static function postUpdate(): void
    {
        self::printMessage('🔄 '.static::NAME.' has been updated successfully!', 'yellow');
        // TODO: Update Phi
    }

    private static function printMessage(string $message, string $color = 'green'): void
    {
        $colors = [
            'green' => "\033[0;32m",
            'yellow' => "\033[0;33m",
            'blue' => "\033[0;34m",
            'reset' => "\033[0m",
        ];

        $colorCode = isset($colors[$color]) ? $colors[$color] : $colors['reset'];

        echo $colorCode.$message.$colors['reset'].PHP_EOL;
    }
}
