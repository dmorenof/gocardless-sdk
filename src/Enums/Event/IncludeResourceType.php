<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Event;

enum IncludeResourceType: string
{
    case BillingRequest = 'billing_request';
    case Creditor = 'creditor';
    case Customer = 'customer';
    case InstalmentSchedule = 'instalment_schedule';
    case Mandate = 'mandate';
    case OutboundPayment = 'outbound_payment';
    case PayerAuthorisation = 'payer_authorisation';
    case Payment = 'payment';
    case PaymentAccountTransaction = 'payment_account_transaction';
    case Payout = 'payout';
    case Refund = 'refund';
    case SchemeIdentifier = 'scheme_identifier';
    case Subscription = 'subscription';
}
