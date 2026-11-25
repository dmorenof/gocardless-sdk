<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Event;

enum ResourceType: string
{
    case BillingRequests = 'billing_requests';
    case Creditors = 'creditors';
    case Customers = 'customers';
    case Exports = 'exports';
    case InstalmentSchedules = 'instalment_schedules';
    case Mandates = 'mandates';
    case Organisations = 'organisations';
    case OutboundPayments = 'outbound_payments';
    case PayerAuthorisations = 'payer_authorisations';
    case PaymentAccountTransactions = 'payment_account_transactions';
    case Payments = 'payments';
    case Payouts = 'payouts';
    case Refunds = 'refunds';
    case SchemeIdentifiers = 'scheme_identifiers';
    case Subscriptions = 'subscriptions';
}
