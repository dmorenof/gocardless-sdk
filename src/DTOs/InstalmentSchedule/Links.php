<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\InstalmentSchedule;

/**
 * InstalmentScheduleLinks
 *
 * Links to associated objects
 */
final class Links extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customer',
        'mandate',
    ];

    /**
     * ID of the associated [customer](https://docs.gocardless.com/docs/api-reference/customer).
     */
    public string $customer;
    /**
     * ID of the associated [mandate](https://docs.gocardless.com/docs/api-reference/mandate) which the instalment schedule will create payments against.
     */
    public string $mandate;
    /**
     * Array of IDs of the associated [payments](https://docs.gocardless.com/docs/api-reference/payment)
     */
    public \GoCardlessSDK\Collections\StringCollection $payments;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            'payments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->payments = new \GoCardlessSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
