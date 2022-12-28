<?php

namespace Magarrent\FaviconGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Magarrent\FaviconGenerator\Commands\FaviconGeneratorCommand;

class FaviconGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('favicon-generator')
            ->hasConfigFile()
            ->hasCommand(FaviconGeneratorCommand::class);
    }
}
