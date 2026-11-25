<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * BillingRequestLinks
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * (Optional) ID of associated account information request
     * Example: "AIR123"
     */
    public string $account_information_request;
    /**
     * (Optional) ID of the [bank authorisation](https://docs.gocardless.com/docs/api-reference/bank-authorisation) that was used to verify this request.
     */
    public string $bank_authorisation;
    /**
     * ID of the associated [creditor](https://docs.gocardless.com/docs/api-reference/creditor).
     * Example: "CR123"
     */
    public string $creditor;
    /**
     * ID of the [customer](https://docs.gocardless.com/docs/api-reference/customer) that will be used for this request
     * Example: "CU123"
     */
    public string $customer;
    /**
     * (Optional) ID of the [customer_bank_account](https://docs.gocardless.com/docs/api-reference/customer-bank-account) that will be used for this request
     * Example: "BA123"
     */
    public string $customer_bank_account;
    /**
     * ID of the customer billing detail that will be used for this request
     */
    public string $customer_billing_detail;
    /**
     * (Optional) ID of the associated instalment schedule request
     * Example: "ISR123"
     */
    public string $instalment_schedule_request;
    /**
     * (Optional) ID of the [instalment_schedule](https://docs.gocardless.com/docs/api-reference/instalment-schedule) that was created from this instalment schedule request.
     * Example: "IS123"
     */
    public string $instalment_schedule_request_instalment_schedule;
    /**
     * (Optional) ID of the associated mandate request
     * Example: "MRQ123"
     */
    public string $mandate_request;
    /**
     * (Optional) ID of the [mandate](https://docs.gocardless.com/docs/api-reference/mandate) that was created from this mandate request. this mandate request.
     * Example: "MD123"
     */
    public string $mandate_request_mandate;
    /**
     * ID of the associated organisation.
     * Example: "OR123"
     */
    public string $organisation;
    /**
     * (Optional) ID of the associated payment provider
     * Example: "PP123"
     */
    public string $payment_provider;
    /**
     * (Optional) ID of the associated payment request
     * Example: "PRQ123"
     */
    public string $payment_request;
    /**
     * (Optional) ID of the [payment](https://docs.gocardless.com/docs/api-reference/payment) that was created from this payment request.
     * Example: "PM123"
     */
    public string $payment_request_payment;
    /**
     * (Optional) ID of the associated subscription request
     * Example: "SBR123"
     */
    public string $subscription_request;
    /**
     * (Optional) ID of the [subscription](https://docs.gocardless.com/docs/api-reference/subscription) that was created from this subscription request.
     * Example: "SB123"
     */
    public string $subscription_request_subscription;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_information_request' => is_string($value) ? $this->account_information_request = $value : parent::assignMember($name, $value),
            'bank_authorisation' => is_string($value) ? $this->bank_authorisation = $value : parent::assignMember($name, $value),
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_bank_account' => is_string($value) ? $this->customer_bank_account = $value : parent::assignMember($name, $value),
            'customer_billing_detail' => is_string($value) ? $this->customer_billing_detail = $value : parent::assignMember($name, $value),
            'instalment_schedule_request' => is_string($value) ? $this->instalment_schedule_request = $value : parent::assignMember($name, $value),
            'instalment_schedule_request_instalment_schedule' => is_string($value) ? $this->instalment_schedule_request_instalment_schedule = $value : parent::assignMember($name, $value),
            'mandate_request' => is_string($value) ? $this->mandate_request = $value : parent::assignMember($name, $value),
            'mandate_request_mandate' => is_string($value) ? $this->mandate_request_mandate = $value : parent::assignMember($name, $value),
            'organisation' => is_string($value) ? $this->organisation = $value : parent::assignMember($name, $value),
            'payment_provider' => is_string($value) ? $this->payment_provider = $value : parent::assignMember($name, $value),
            'payment_request' => is_string($value) ? $this->payment_request = $value : parent::assignMember($name, $value),
            'payment_request_payment' => is_string($value) ? $this->payment_request_payment = $value : parent::assignMember($name, $value),
            'subscription_request' => is_string($value) ? $this->subscription_request = $value : parent::assignMember($name, $value),
            'subscription_request_subscription' => is_string($value) ? $this->subscription_request_subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
