<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\ActionsItem;

/**
 * Additional parameters to help complete the collect_customer_details action
 */
final class CustomerDetailsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Default customer country code, as determined by scheme and payer location
     */
    public ?string $default_country_code;
    public \GoCardlessSDK\DTOs\BillingRequest\ActionsItem\CollectCustomerDetails\IncompleteFieldsDTO $incomplete_fields;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default_country_code' => $value === null || is_string($value) ? $this->default_country_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
