<?php

declare(strict_types=1);

namespace BombenProdukt\Passphrase\Generators;

use BombenProdukt\Passphrase\Contracts\Generator;
use BombenProdukt\Passphrase\Mnemonic;
use Illuminate\Config\Repository;

final class MnemonicWithSpanishGenerator implements Generator
{
    public function __construct(private readonly Repository $config)
    {
        //
    }

    public function generate(): string
    {
        return Mnemonic::useSpanish()->generate($this->config->get('passphrase.wordCount'));
    }
}
