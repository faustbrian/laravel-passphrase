<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Jetpack\Tests\AbstractTestCase;
use PreemStudio\Passphrase\ServiceProvider;

abstract class TestCase extends AbstractTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            ServiceProvider::class,
        ];
    }
}
