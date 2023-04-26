<?php

declare(strict_types=1);

namespace BombenProdukt\Passphrase\Generators;

use BombenProdukt\Passphrase\Contracts\Generator;
use BombenProdukt\Passphrase\Mnemonic;
use Illuminate\Config\Repository;

final class MnemonicWithKoreanGenerator implements Generator
{
    public function __construct(private readonly Repository $config)
    {
        //
    }

    public function generate(): string
    {
        return Mnemonic::useKorean()->generate($this->config->get('passphrase.wordCount'));
    }
}
