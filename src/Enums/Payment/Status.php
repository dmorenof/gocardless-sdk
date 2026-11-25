<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Payment;

enum Status: string
{
    case Cancelled = 'cancelled';
    case ChargedBack = 'charged_back';
    case Confirmed = 'confirmed';
    case CustomerApprovalDenied = 'customer_approval_denied';
    case Failed = 'failed';
    case PaidOut = 'paid_out';
    case PendingCustomerApproval = 'pending_customer_approval';
    case PendingSubmission = 'pending_submission';
    case Submitted = 'submitted';
}
