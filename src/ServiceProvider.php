<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Passphrase;

use BaseCodeOy\Crate\Package\AbstractServiceProvider;
use BaseCodeOy\Passphrase\Contracts\Generator;
use Illuminate\Contracts\Container\Container;
use League\CommonMark\Environment\Environment;

final class ServiceProvider extends AbstractServiceProvider
{
    #[\Override()]
    public function packageRegistered(): void
    {
        $this->app->singleton('passphrase.generator', fn (Container $container): Environment => $container->make($container->config->get('passphrase.generator')));

        $this->app->alias('passphrase.generator', Generator::class);
    }

    #[\Override()]
    public function provides(): array
    {
        return ['passphrase.generator'];
    }
}
