<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Payout;

enum ItemType: string
{
    case AppFee = 'app_fee';
    case GocardlessFee = 'gocardless_fee';
    case PaymentChargedBack = 'payment_charged_back';
    case PaymentFailed = 'payment_failed';
    case PaymentPaidOut = 'payment_paid_out';
    case PaymentRefunded = 'payment_refunded';
    case Refund = 'refund';
    case RefundFundsReturned = 'refund_funds_returned';
    case RevenueShare = 'revenue_share';
    case SurchargeFee = 'surcharge_fee';
}
