<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use BaseCodeOy\Passphrase\Generators\MnemonicWithCzechGenerator;

it('should generate a string', function (): void {
    expect(resolve(MnemonicWithCzechGenerator::class)->generate())->toBeString();
});
