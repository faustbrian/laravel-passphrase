<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use PreemStudio\Passphrase\Generators\MnemonicWithEnglishGenerator;

it('should generate a string', function () {
    expect(resolve(MnemonicWithEnglishGenerator::class)->generate())->toBeString();
});
