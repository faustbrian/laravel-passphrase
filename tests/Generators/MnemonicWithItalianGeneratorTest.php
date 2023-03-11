<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Passphrase\Generators\MnemonicWithItalianGenerator;

it('should generate a string', function () {
    expect(resolve(MnemonicWithItalianGenerator::class)->generate())->toBeString();
});
