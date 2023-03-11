<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Passphrase\Generators\MnemonicWithKoreanGenerator;

it('should generate a string', function () {
    expect(resolve(MnemonicWithKoreanGenerator::class)->generate())->toBeString();
});
