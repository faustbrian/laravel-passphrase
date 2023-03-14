<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use PreemStudio\Passphrase\Generators\MnemonicWithFrenchGenerator;

it('should generate a string', function () {
    expect(resolve(MnemonicWithFrenchGenerator::class)->generate())->toBeString();
});
