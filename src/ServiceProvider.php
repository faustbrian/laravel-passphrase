<?php

declare(strict_types=1);

namespace BaseCodeOy\Passphrase;

use BaseCodeOy\PackagePowerPack\Package\AbstractServiceProvider;
use BaseCodeOy\Passphrase\Contracts\Generator;
use Illuminate\Contracts\Container\Container;
use League\CommonMark\Environment\Environment;

final class ServiceProvider extends AbstractServiceProvider
{
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
