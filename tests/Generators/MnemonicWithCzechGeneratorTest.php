<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Passphrase\Generators\MnemonicWithCzechGenerator;

it('should generate a string', function () {
    expect(resolve(MnemonicWithCzechGenerator::class)->generate())->toBeString();
});
