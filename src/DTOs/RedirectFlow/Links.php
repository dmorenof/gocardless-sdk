<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\RedirectFlow;

/**
 * RedirectFlowLinks
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of [billing request](https://docs.gocardless.com/docs/api-reference/billing-request) that a redirect flow can create.<br />**Note**: The redirect flow will only create a billing request in the event the redirect flow is eligible to send the payer down this new and improved flow
     * Example: "BR123"
     */
    public string $billing_request;
    /**
     * The [creditor](https://docs.gocardless.com/docs/api-reference/creditor) for whom the mandate will be created. The `name` of the creditor will be displayed on the payment page.
     * Example: "CR123"
     */
    public string $creditor;
    /**
     * ID of [customer](https://docs.gocardless.com/docs/api-reference/customer) created by this redirect flow.<br/>**Note**: this property will not be present until the redirect flow has been successfully completed.
     * Example: "CU123"
     */
    public string $customer;
    /**
     * ID of [customer bank account](https://docs.gocardless.com/docs/api-reference/customer-bank-account) created by this redirect flow.<br/>**Note**: this property will not be present until the redirect flow has been successfully completed.
     * Example: "BA123"
     */
    public string $customer_bank_account;
    /**
     * ID of [mandate](https://docs.gocardless.com/docs/api-reference/mandate) created by this redirect flow.<br/>**Note**: this property will not be present until the redirect flow has been successfully completed.
     * Example: "MD123"
     */
    public string $mandate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_request' => is_string($value) ? $this->billing_request = $value : parent::assignMember($name, $value),
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_bank_account' => is_string($value) ? $this->customer_bank_account = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
