<?php

declare(strict_types=1);

namespace BombenProdukt\Passphrase;

use Illuminate\Contracts\Container\Container;
use League\CommonMark\Environment\Environment;
use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;
use BombenProdukt\Passphrase\Contracts\Generator;

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
