<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Passphrase\Generators\FiveDiceListGenerator;

return [
    /*
    |--------------------------------------------------------------------------
    | Generator Implementation
    |--------------------------------------------------------------------------
    |
    | This option specifies the generator to be used for invite codes.
    |
    */

    'generator' => FiveDiceListGenerator::class,

    /*
    |--------------------------------------------------------------------------
    | Generator Word Count
    |--------------------------------------------------------------------------
    |
    | This option specifies the number of words to be used for invite codes.
    |
    */

    'wordCount' => 12,
];
