<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Refund;

enum Status: string
{
    case Bounced = 'bounced';
    case Cancelled = 'cancelled';
    case Created = 'created';
    case FundsReturned = 'funds_returned';
    case Paid = 'paid';
    case PendingSubmission = 'pending_submission';
    case Submitted = 'submitted';
}
