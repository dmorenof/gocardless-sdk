<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Bank;

enum AccountHolderVerificationStatus: string
{
    case Completed = 'completed';
    case Pending = 'pending';
}
