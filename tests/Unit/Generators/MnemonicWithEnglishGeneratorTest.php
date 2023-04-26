<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use BombenProdukt\Passphrase\Generators\MnemonicWithEnglishGenerator;

it('should generate a string', function (): void {
    expect(resolve(MnemonicWithEnglishGenerator::class)->generate())->toBeString();
});
