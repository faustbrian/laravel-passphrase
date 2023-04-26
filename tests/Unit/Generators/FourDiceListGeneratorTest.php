<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use BombenProdukt\Passphrase\Generators\FourDiceListGenerator;

it('should generate a string', function (): void {
    expect(resolve(FourDiceListGenerator::class)->generate())->toBeString();
});
