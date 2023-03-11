<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Passphrase\Generators\MnemonicWithChineseTraditionalGenerator;

it('should generate a string', function () {
    expect(resolve(MnemonicWithChineseTraditionalGenerator::class)->generate())->toBeString();
});
