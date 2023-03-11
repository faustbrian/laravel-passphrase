<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Passphrase\Generators\FiveDiceListGenerator;

it('should generate a string', function () {
    expect(resolve(FiveDiceListGenerator::class)->generate())->toBeString();
});
