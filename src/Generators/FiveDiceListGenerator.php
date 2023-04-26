<?php

declare(strict_types=1);

namespace BombenProdukt\Passphrase\Generators;

use BombenProdukt\Passphrase\Contracts\Generator;
use BombenProdukt\Passphrase\EFF;
use Illuminate\Config\Repository;

final class FiveDiceListGenerator implements Generator
{
    public function __construct(private readonly Repository $config)
    {
        //
    }

    public function generate(): string
    {
        return EFF::useFiveDiceList()->generate($this->config->get('passphrase.wordCount'));
    }
}
