#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/bootstrap/app.php';

putenv('PHP_CS_FIXER_IGNORE_ENV=1');

return (new MattAllan\LaravelCodeStyle\Config())
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(app_path())
            ->in(config_path())
            ->in(database_path('factories'))
            ->in(database_path('seeders'))
            ->in(resource_path('lang'))
            ->in(base_path('routes'))
            ->in(base_path('tests'))
    )
    ->setRules([
        '@Laravel' => true,
    ]);
