<?php

namespace Kanekescom\Larament;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaramentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('larament')
            ->hasInstallCommand(function ($command) {
                $command
                    ->startWith(function ($command) {
                        $command->info('Hello, and welcome to my great laravel package!');
                    })
                    ->askToStarRepoOnGitHub('kanekescom/larament')
                    ->endWith(function ($command) {
                        $command->info('Have a great day!');
                    });
            });
    }
}
