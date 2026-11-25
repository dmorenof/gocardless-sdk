<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\InstalmentSchedule;

enum Status: string
{
    case Active = 'active';
    case Cancelled = 'cancelled';
    case Completed = 'completed';
    case CreationFailed = 'creation_failed';
    case Errored = 'errored';
    case Pending = 'pending';
}
