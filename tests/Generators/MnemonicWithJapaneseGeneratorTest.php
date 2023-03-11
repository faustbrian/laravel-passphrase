<?php

declare(strict_types=1);

namespace Tests;

use PreemStudio\Passphrase\Generators\MnemonicWithJapaneseGenerator;

it('should generate a string', function () {
    expect(resolve(MnemonicWithJapaneseGenerator::class)->generate())->toBeString();
});
