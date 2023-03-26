<?php

declare(strict_types=1);

use ComposerUnused\ComposerUnused\Configuration\Configuration;
use ComposerUnused\ComposerUnused\Configuration\NamedFilter;
use ComposerUnused\ComposerUnused\Configuration\PatternFilter;
use Webmozart\Glob\Glob;

return static function (Configuration $config): Configuration {
    // Set an additional list of named filter.
    // $config->addNamedFilter(NamedFilter::fromString('symfony/config'));

    // Set an additional list of pattern filter.
    // $config->addPatternFilter(PatternFilter::fromString('/symfony-.*/'));

    // Set an additional list of files for composer-unused to parse for given dependency.
    $files = [
        ...Glob::glob(__DIR__.'/vendor/laravel/laravel/app/**.php'),
        ...Glob::glob(__DIR__.'/vendor/laravel/laravel/bootstrap/**.php'),
        ...Glob::glob(__DIR__.'/vendor/laravel/laravel/config/**.php'),
        ...Glob::glob(__DIR__.'/vendor/laravel/laravel/database/**.php'),
        ...Glob::glob(__DIR__.'/vendor/laravel/laravel/lang/**.php'),
        ...Glob::glob(__DIR__.'/vendor/laravel/laravel/public/**.php'),
        ...Glob::glob(__DIR__.'/vendor/laravel/laravel/routes/**.php'),
        ...Glob::glob(__DIR__.'/vendor/laravel/laravel/tests/**.php'),
    ];

    // Return configuration.
    return $config->setAdditionalFilesFor('mjamilasfihani/laravel-devkit', $files);
};
