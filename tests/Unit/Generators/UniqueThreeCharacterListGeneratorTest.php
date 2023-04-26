<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use BombenProdukt\Passphrase\Generators\UniqueThreeCharacterListGenerator;

it('should generate a string', function (): void {
    expect(resolve(UniqueThreeCharacterListGenerator::class)->generate())->toBeString();
});
