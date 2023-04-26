<?php

declare(strict_types=1);

use BombenProdukt\Passphrase\Generators\FiveDiceListGenerator;

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
