<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Balance;

enum BalanceType: string
{
    case ConfirmedFunds = 'confirmed_funds';
    case PendingPaymentsSubmitted = 'pending_payments_submitted';
    case PendingPayouts = 'pending_payouts';
}
