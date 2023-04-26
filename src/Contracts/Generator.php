<?php

declare(strict_types=1);

namespace BombenProdukt\Passphrase\Contracts;

interface Generator
{
    public function generate(): string;
}
