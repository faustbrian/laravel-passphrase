<?php

declare(strict_types=1);

namespace BaseCodeOy\Passphrase\Contracts;

interface Generator
{
    public function generate(): string;
}
