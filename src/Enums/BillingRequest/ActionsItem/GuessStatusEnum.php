<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\BillingRequest\ActionsItem;

enum GuessStatusEnum: string
{
    case Failed = 'failed';
    case NotNeeded = 'not_needed';
    case Pending = 'pending';
    case Success = 'success';
}
