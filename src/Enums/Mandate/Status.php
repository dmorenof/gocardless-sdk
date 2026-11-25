<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Mandate;

enum Status: string
{
    case Active = 'active';
    case Blocked = 'blocked';
    case Cancelled = 'cancelled';
    case Consumed = 'consumed';
    case Expired = 'expired';
    case Failed = 'failed';
    case PendingCustomerApproval = 'pending_customer_approval';
    case PendingSubmission = 'pending_submission';
    case Submitted = 'submitted';
    case SuspendedByPayer = 'suspended_by_payer';
}
