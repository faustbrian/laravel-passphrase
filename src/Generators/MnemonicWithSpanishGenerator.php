<?php

declare(strict_types=1);

namespace PreemStudio\Passphrase\Generators;

use Illuminate\Config\Repository;
use PreemStudio\Passphrase\Contracts\Generator;
use PreemStudio\Passphrase\Mnemonic;

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
