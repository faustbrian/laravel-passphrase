<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use BaseCodeOy\Passphrase\Generators\MnemonicWithSpanishGenerator;

it('should generate a string', function (): void {
    expect(resolve(MnemonicWithSpanishGenerator::class)->generate())->toBeString();
});
