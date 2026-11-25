<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest\ActionsItem;

enum StatusEnum: string
{
    case Completed = 'completed';
    case Pending = 'pending';
}
