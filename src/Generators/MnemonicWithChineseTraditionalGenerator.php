<?php

declare(strict_types=1);

namespace PreemStudio\Passphrase\Generators;

use Illuminate\Config\Repository;
use PreemStudio\Passphrase\Contracts\Generator;
use PreemStudio\Passphrase\Mnemonic;

final class MnemonicWithChineseTraditionalGenerator implements Generator
{
    public function __construct(private readonly Repository $config)
    {
        //
    }

    public function generate(): string
    {
        return Mnemonic::useChineseTraditional()->generate($this->config->get('passphrase.wordCount'));
    }
}
