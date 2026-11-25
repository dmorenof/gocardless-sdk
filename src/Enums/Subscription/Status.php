<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Subscription;

enum Status: string
{
    case Active = 'active';
    case Cancelled = 'cancelled';
    case CustomerApprovalDenied = 'customer_approval_denied';
    case Finished = 'finished';
    case Paused = 'paused';
    case PendingCustomerApproval = 'pending_customer_approval';
}
