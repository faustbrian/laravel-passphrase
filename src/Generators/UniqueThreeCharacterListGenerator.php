<?php

declare(strict_types=1);

namespace BaseCodeOy\Passphrase\Generators;

use BaseCodeOy\Passphrase\Contracts\Generator;
use BaseCodeOy\Passphrase\EFF;
use Illuminate\Config\Repository;

final class UniqueThreeCharacterListGenerator implements Generator
{
    public function __construct(private readonly Repository $config)
    {
        //
    }

    public function generate(): string
    {
        return EFF::useUniqueThreeCharacterList()->generate($this->config->get('passphrase.wordCount'));
    }
}
