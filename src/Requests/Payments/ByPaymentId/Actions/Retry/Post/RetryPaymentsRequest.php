<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Payments\ByPaymentId\Actions\Retry\Post;

final class RetryPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A future date on which the payment should be collected. If not specified, the payment will be collected as soon as possible. If the value is before the [mandate](https://docs.gocardless.com/docs/api-reference/mandate)'s `next_possible_charge_date` creation will fail. If the value is not a working day it will be rolled forwards to the next available one.
     * Format: date
     */
    public ?string $charge_date;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'charge_date' => $value === null || is_string($value) ? $this->charge_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
