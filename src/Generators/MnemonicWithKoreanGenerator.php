<?php

declare(strict_types=1);

namespace BaseCodeOy\Passphrase\Generators;

use BaseCodeOy\Passphrase\Contracts\Generator;
use BaseCodeOy\Passphrase\Mnemonic;
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
