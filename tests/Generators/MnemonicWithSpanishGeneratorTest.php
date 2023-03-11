<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Passphrase\Generators\MnemonicWithSpanishGenerator;

it('should generate a string', function () {
    expect(resolve(MnemonicWithSpanishGenerator::class)->generate())->toBeString();
});
