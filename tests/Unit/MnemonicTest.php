<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Unit;

use BaseCodeOy\Passphrase\Mnemonic;

it('should generate a random passphrase', function ($method): void {
    expect(\explode(' ', (string) Mnemonic::{$method}()->generate(12)))->toHaveCount(12);
    expect(\explode(' ', (string) Mnemonic::{$method}()->generate(24)))->toHaveCount(24);
})->with([
    'useChineseSimplified',
    'useChineseTraditional',
    'useCzech',
    'useEnglish',
    'useFrench',
    'useItalian',
    'useJapanese',
    'useKorean',
    'useSpanish',
]);
