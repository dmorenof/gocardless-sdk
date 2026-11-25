<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions;

final class ActionsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the associated [creditor](https://docs.gocardless.com/docs/api-reference/creditor). Only required if your account manages multiple creditors.
     * Example: "CR123"
     */
    public string $creditor;
    /**
     * ID of the [customer](https://docs.gocardless.com/docs/api-reference/customer) against which this request should be made.
     * Example: "CU123"
     */
    public string $customer;
    /**
     * (Optional) ID of the [customer_bank_account](https://docs.gocardless.com/docs/api-reference/customer-bank-account) against which this request should be made.
     *
     * Example: "BA123"
     */
    public string $customer_bank_account;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creditor' => is_string($value) ? $this->creditor = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_bank_account' => is_string($value) ? $this->customer_bank_account = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
