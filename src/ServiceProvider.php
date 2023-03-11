<?php

declare(strict_types=1);

namespace PreemStudio\Passphrase;

use Illuminate\Contracts\Container\Container;
use League\CommonMark\Environment\Environment;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;
use PreemStudio\Jetpack\Package\Package;
use PreemStudio\Passphrase\Contracts\Generator;

final class ServiceProvider extends AbstractServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-passphrase')->hasConfigFile();
    }

    public function packageRegistered(): void
    {
        $this->app->singleton('passphrase.generator', function (Container $app): Environment {
            return $app->make($app->config->get('passphrase.generator'));
        });

        $this->app->alias('passphrase.generator', Generator::class);
    }

    public function provides(): array
    {
        return ['passphrase.generator'];
    }
}
