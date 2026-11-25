<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Event;

/**
 * EventLinked
 */
final class Linked extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A list of billing requests linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Event\Linked\BillingRequestsCollection $billing_requests;
    /**
     * A list of creditors linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Creditor\MultiResource\Response\CreditorsCollection $creditors;
    /**
     * A list of customers linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Customer\MultiResource\Response\CustomersCollection $customers;
    /**
     * A list of instalment schedules linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Event\Linked\InstalmentSchedulesCollection $instalment_schedules;
    /**
     * A list of mandates linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Event\Linked\MandatesCollection $mandates;
    /**
     * A list of outbound payments linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Event\Linked\OutboundPaymentsCollection $outbound_payments;
    /**
     * A list of payer authorisations linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Event\Linked\PayerAuthorisationsCollection $payer_authorisations;
    /**
     * A list of payment account transactions linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Event\Linked\AccountTransactionsCollection $payment_account_transactions;
    /**
     * A list of payments linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Event\Linked\PaymentsCollection $payments;
    /**
     * A list of payouts linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Event\Linked\PayoutsCollection $payouts;
    /**
     * A list of refunds linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Event\Linked\RefundsCollection $refunds;
    /**
     * A list of scheme identifiers linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Event\Linked\SchemeIdentifiersCollection $scheme_identifiers;
    /**
     * A list of subscriptions linked to the events returned in the list of events.
     */
    public \GoCardlessSDK\Collections\Event\Linked\SubscriptionsCollection $subscriptions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_requests' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->billing_requests = new \GoCardlessSDK\Collections\Event\Linked\BillingRequestsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\BillingRequest::class)) : parent::assignMember($name, $value),
            'creditors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->creditors = new \GoCardlessSDK\Collections\Creditor\MultiResource\Response\CreditorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Creditor::class)) : parent::assignMember($name, $value),
            'customers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->customers = new \GoCardlessSDK\Collections\Customer\MultiResource\Response\CustomersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Customer::class)) : parent::assignMember($name, $value),
            'instalment_schedules' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->instalment_schedules = new \GoCardlessSDK\Collections\Event\Linked\InstalmentSchedulesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\InstalmentSchedule::class)) : parent::assignMember($name, $value),
            'mandates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->mandates = new \GoCardlessSDK\Collections\Event\Linked\MandatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Mandate::class)) : parent::assignMember($name, $value),
            'outbound_payments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->outbound_payments = new \GoCardlessSDK\Collections\Event\Linked\OutboundPaymentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\OutboundPayment::class)) : parent::assignMember($name, $value),
            'payer_authorisations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->payer_authorisations = new \GoCardlessSDK\Collections\Event\Linked\PayerAuthorisationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\PayerAuthorisation::class)) : parent::assignMember($name, $value),
            'payment_account_transactions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->payment_account_transactions = new \GoCardlessSDK\Collections\Event\Linked\AccountTransactionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Payment\AccountTransaction::class)) : parent::assignMember($name, $value),
            'payments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->payments = new \GoCardlessSDK\Collections\Event\Linked\PaymentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Payment::class)) : parent::assignMember($name, $value),
            'payouts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->payouts = new \GoCardlessSDK\Collections\Event\Linked\PayoutsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Payout::class)) : parent::assignMember($name, $value),
            'refunds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->refunds = new \GoCardlessSDK\Collections\Event\Linked\RefundsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Refund::class)) : parent::assignMember($name, $value),
            'scheme_identifiers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->scheme_identifiers = new \GoCardlessSDK\Collections\Event\Linked\SchemeIdentifiersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\SchemeIdentifier::class)) : parent::assignMember($name, $value),
            'subscriptions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->subscriptions = new \GoCardlessSDK\Collections\Event\Linked\SubscriptionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\Subscription::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
