<?php

declare(strict_types=1);

namespace PreemStudio\Passphrase\Contracts;

interface Generator
{
    public function generate(): string;
}
