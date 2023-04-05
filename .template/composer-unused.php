<?php

declare(strict_types=1);

use ComposerUnused\ComposerUnused\Configuration\Configuration;
use ComposerUnused\ComposerUnused\Configuration\NamedFilter;
use ComposerUnused\ComposerUnused\Configuration\PatternFilter;
use Webmozart\Glob\Glob;

return static fn (Configuration $config): Configuration => $config
    // ->addNamedFilter(NamedFilter::fromString('symfony/config'))
    // ->addPatternFilter(PatternFilter::fromString('/symfony-.*/'))
    ->setAdditionalFilesFor('username/repository', [
        ...Glob::glob(__DIR__.'/app/**.php'),
        ...Glob::glob(__DIR__.'/config/**.php'),
        ...Glob::glob(__DIR__.'/database/**.php'),
        ...Glob::glob(__DIR__.'/routes/**.php'),
        ...Glob::glob(__DIR__.'/tests/**.php'),
    ]);
