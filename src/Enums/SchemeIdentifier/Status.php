<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\SchemeIdentifier;

enum Status: string
{
    case Active = 'active';
    case Pending = 'pending';
}
