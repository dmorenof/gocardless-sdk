<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\ActionsItem\CollectCustomerDetails;

final class IncompleteFieldsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\Collections\StringCollection $customer;
    public \GoCardlessSDK\Collections\StringCollection $customer_billing_detail;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->customer = new \GoCardlessSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'customer_billing_detail' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->customer_billing_detail = new \GoCardlessSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
