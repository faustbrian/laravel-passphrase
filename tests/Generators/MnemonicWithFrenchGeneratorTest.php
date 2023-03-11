<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Passphrase\Generators\MnemonicWithFrenchGenerator;

it('should generate a string', function () {
    expect(resolve(MnemonicWithFrenchGenerator::class)->generate())->toBeString();
});
