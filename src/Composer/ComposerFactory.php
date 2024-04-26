<?php

declare(strict_types=1);

namespace GMTA\Velocita\Composer\Composer;

use Composer\Factory;

class ComposerFactory extends Factory
{
    /**
     * Exposes the protected Factory::getHomeDir().
     */
    public static function getComposerHomeDir(): string
    {
        return parent::getHomeDir();
    }
}
