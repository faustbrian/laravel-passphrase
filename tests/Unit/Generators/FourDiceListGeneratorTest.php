<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit\Generators;

use BaseCodeOy\Passphrase\Generators\FourDiceListGenerator;

it('should generate a string', function (): void {
    expect(resolve(FourDiceListGenerator::class)->generate())->toBeString();
});
