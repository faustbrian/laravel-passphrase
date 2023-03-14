<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use PreemStudio\Passphrase\Generators\UniqueThreeCharacterListGenerator;

it('should generate a string', function () {
    expect(resolve(UniqueThreeCharacterListGenerator::class)->generate())->toBeString();
});
