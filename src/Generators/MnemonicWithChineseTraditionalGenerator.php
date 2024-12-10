<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Passphrase\Generators;

use BaseCodeOy\Passphrase\Contracts\Generator;
use BaseCodeOy\Passphrase\Mnemonic;
use Illuminate\Config\Repository;

final readonly class MnemonicWithChineseTraditionalGenerator implements Generator
{
    public function __construct(
        private Repository $configRepository,
    ) {
        //
    }

    #[\Override()]
    public function generate(): string
    {
        return Mnemonic::useChineseTraditional()->generate($this->configRepository->get('passphrase.wordCount'));
    }
}
