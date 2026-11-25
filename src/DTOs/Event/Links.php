<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Event;

/**
 * EventLinks
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of a [bank authorisation](https://docs.gocardless.com/docs/api-reference/bank-authorisation).
     * Example: "BAU123"
     */
    public string $bank_authorisation;
    /**
     * ID of a [billing request](https://docs.gocardless.com/docs/api-reference/billing-request).
     * Example: "BRQ123"
     */
    public string $billing_request;
    /**
     * ID of a [billing request flow](https://docs.gocardless.com/docs/api-reference/billing-request-flow).
     * Example: "BRF123"
     */
    public string $billing_request_flow;
    /**
     * If `resource_type` is `creditor`, this is the ID of the [creditor](https://docs.gocardless.com/docs/api-reference/creditor) which has been updated.
     * Example: "CR123"
     */
    public string $creditor;
    /**
     * ID of a [customer](https://docs.gocardless.com/docs/api-reference/customer).
     * Example: "CU123"
     */
    public string $customer;
    /**
     * ID of a [customer bank account](https://docs.gocardless.com/docs/api-reference/customer-bank-account).
     * Example: "BA123"
     */
    public string $customer_bank_account;
    /**
     * If `resource_type` is `instalment_schedule`, this is the ID of the [instalment schedule](https://docs.gocardless.com/docs/api-reference/instalment-schedule) which has been updated.
     * Example: "IS123"
     */
    public string $instalment_schedule;
    /**
     * If `resource_type` is `mandates`, this is the ID of the [mandate](https://docs.gocardless.com/docs/api-reference/mandate) which has been updated.
     * Example: "MD123"
     */
    public string $mandate;
    /**
     * This is the id of the mandate request associated to this event
     * Example: "MRQ123"
     */
    public string $mandate_request;
    /**
     * If `resource_type` is `billing_requests`, this is the ID of the [mandate](https://docs.gocardless.com/docs/api-reference/mandate) which has been created.
     * Example: "MD123"
     */
    public string $mandate_request_mandate;
    /**
     * This is only included for mandate transfer events, when it is the ID of the [customer bank account](https://docs.gocardless.com/docs/api-reference/customer-bank-account) which the mandate is being transferred to.
     * Example: "BA123"
     */
    public string $new_customer_bank_account;
    /**
     * This is only included for mandate replaced events, when it is the ID of the new [mandate](https://docs.gocardless.com/docs/api-reference/mandate) that replaces the existing mandate.
     * Example: "MD123"
     */
    public string $new_mandate;
    /**
     * If the event is included in a [webhook](https://docs.gocardless.com/docs/api-reference/webhooks) to an [OAuth app](https://docs.gocardless.com/docs/api-reference/oauth-reference), this is the ID of the account to which it belongs.
     * Example: "OR123"
     */
    public string $organisation;
    /**
     * If `resource_type` is `outbound_payments`, this is the ID of the outbound_payment which has been updated.
     * Example: "OUT123"
     */
    public string $outbound_payment;
    /**
     * If this event was caused by another, this is the ID of the cause. For example, if a mandate is cancelled it automatically cancels all pending payments associated with it; in this case, the payment cancellation events would have the ID of the mandate cancellation event in this field.
     * Example: "EV123"
     */
    public string $parent_event;
    /**
     * ID of a [payer authorisation](https://docs.gocardless.com/docs/api-reference/payer-authorisation).
     * Example: "PAU123"
     */
    public string $payer_authorisation;
    /**
     * If `resource_type` is `payments`, this is the ID of the [payment](https://docs.gocardless.com/docs/api-reference/payment) which has been updated.
     * Example: "PM123"
     */
    public string $payment;
    /**
     * If `resource_type` is `payment_account_transaction`, this is the ID of a transaction which has been recorded on the payment account.
     * Example: "PATR123"
     */
    public string $payment_account_transaction;
    /**
     * If `resource_type` is `billing_requests`, this is the ID of the [payment](https://docs.gocardless.com/docs/api-reference/payment) which has been created for Pay by Bank.
     * Example: "PM123"
     */
    public string $payment_request_payment;
    /**
     * If `resource_type` is `payouts`, this is the ID of the [payout](https://docs.gocardless.com/docs/api-reference/payout) which has been updated.
     * Example: "PO123"
     */
    public string $payout;
    /**
     * This is only included for mandate transfer events, when it is the ID of the [customer bank account](https://docs.gocardless.com/docs/api-reference/customer-bank-account) which the mandate is being transferred from.
     * Example: "BA123"
     */
    public string $previous_customer_bank_account;
    /**
     * If `resource_type` is `refunds`, this is the ID of the [refund](https://docs.gocardless.com/docs/api-reference/refund) which has been updated.
     * Example: "RF123"
     */
    public string $refund;
    /**
     * If `resource_type` is `scheme_identifiers`, this is the ID of the [scheme_identifier](https://docs.gocardless.com/docs/api-reference/scheme-identifier) which has been updated.
     * Example: "SU123"
     */
    public string $scheme_identifier;
    /**
     * If `resource_type` is `subscription`, this is the ID of the [subscription](https://docs.gocardless.com/docs/api-reference/subscription) which has been updated.
     * Example: "SB123"
     */
    public string $subscription;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_authorisation' => is_string($value) ? $this->bank_authorisation = $value : parent::assignMember($name, $value),
            'billing_request' => is_string($value) ? $this->billing_request = $value : parent::assignMember($name, $value),
            'billing_request_flow' => is_string($value) ? $this->billing_request_flow = $value : parent::assignMember($name, $value),
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_bank_account' => is_string($value) ? $this->customer_bank_account = $value : parent::assignMember($name, $value),
            'instalment_schedule' => is_string($value) ? $this->instalment_schedule = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            'mandate_request' => is_string($value) ? $this->mandate_request = $value : parent::assignMember($name, $value),
            'mandate_request_mandate' => is_string($value) ? $this->mandate_request_mandate = $value : parent::assignMember($name, $value),
            'new_customer_bank_account' => is_string($value) ? $this->new_customer_bank_account = $value : parent::assignMember($name, $value),
            'new_mandate' => is_string($value) ? $this->new_mandate = $value : parent::assignMember($name, $value),
            'organisation' => is_string($value) ? $this->organisation = $value : parent::assignMember($name, $value),
            'outbound_payment' => is_string($value) ? $this->outbound_payment = $value : parent::assignMember($name, $value),
            'parent_event' => is_string($value) ? $this->parent_event = $value : parent::assignMember($name, $value),
            'payer_authorisation' => is_string($value) ? $this->payer_authorisation = $value : parent::assignMember($name, $value),
            'payment' => is_string($value) ? $this->payment = $value : parent::assignMember($name, $value),
            'payment_account_transaction' => is_string($value) ? $this->payment_account_transaction = $value : parent::assignMember($name, $value),
            'payment_request_payment' => is_string($value) ? $this->payment_request_payment = $value : parent::assignMember($name, $value),
            'payout' => is_string($value) ? $this->payout = $value : parent::assignMember($name, $value),
            'previous_customer_bank_account' => is_string($value) ? $this->previous_customer_bank_account = $value : parent::assignMember($name, $value),
            'refund' => is_string($value) ? $this->refund = $value : parent::assignMember($name, $value),
            'scheme_identifier' => is_string($value) ? $this->scheme_identifier = $value : parent::assignMember($name, $value),
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
