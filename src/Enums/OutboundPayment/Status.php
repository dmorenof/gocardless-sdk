<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\OutboundPayment;

enum Status: string
{
    case Cancelled = 'cancelled';
    case Executed = 'executed';
    case Executing = 'executing';
    case Failed = 'failed';
    case PendingApproval = 'pending_approval';
    case Scheduled = 'scheduled';
    case Verifying = 'verifying';
}
