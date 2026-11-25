<?php

declare(strict_types=1);

namespace GoCardlessSDK\Enums\Export;

enum ExportType: string
{
    case AppConnectedOrganisations = 'app_connected_organisations';
    case AuthorisationRequests = 'authorisation_requests';
    case CustomerBankAccounts = 'customer_bank_accounts';
    case CustomersIndex = 'customers_index';
    case EventsIndex = 'events_index';
    case GcInvalidAuthorisationRequests = 'gc_invalid_authorisation_requests';
    case MandateEvents = 'mandate_events';
    case OrganisationAuthorisations = 'organisation_authorisations';
    case OutboundPaymentsIndex = 'outbound_payments_index';
    case PartnerFees = 'partner_fees';
    case PaymentAccountStatement = 'payment_account_statement';
    case PaymentAccountTransactions = 'payment_account_transactions';
    case PaymentEvents = 'payment_events';
    case PaymentsImportTemplate = 'payments_import_template';
    case PaymentsIndex = 'payments_index';
    case PayoutEvents = 'payout_events';
    case PayoutEventsBreakdown = 'payout_events_breakdown';
    case PayoutEventsReconciliation = 'payout_events_reconciliation';
    case PayoutTransactionsBreakdown = 'payout_transactions_breakdown';
    case PayoutTransactionsReconciliation = 'payout_transactions_reconciliation';
    case PayoutsIndex = 'payouts_index';
    case RefundEvents = 'refund_events';
    case RefundsIndex = 'refunds_index';
    case SubscriptionEvents = 'subscription_events';
    case SubscriptionsIndex = 'subscriptions_index';
    case Users = 'users';
}
