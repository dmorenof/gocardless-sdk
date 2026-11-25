<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Block;

enum ReferenceType: string
{
    case Customer = 'customer';
    case Mandate = 'mandate';
}
