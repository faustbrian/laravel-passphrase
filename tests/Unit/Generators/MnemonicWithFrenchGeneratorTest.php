<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use BaseCodeOy\Passphrase\Generators\MnemonicWithFrenchGenerator;

it('should generate a string', function (): void {
    expect(resolve(MnemonicWithFrenchGenerator::class)->generate())->toBeString();
});
