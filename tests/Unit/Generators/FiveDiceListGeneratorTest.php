<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use PreemStudio\Passphrase\Generators\FiveDiceListGenerator;

it('should generate a string', function (): void {
    expect(resolve(FiveDiceListGenerator::class)->generate())->toBeString();
});
