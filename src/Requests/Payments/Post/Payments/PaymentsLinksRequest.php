<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Payments\Post\Payments;

final class PaymentsLinksRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'mandate',
];

    /**
     * ID of the [mandate](https://docs.gocardless.com/docs/api-reference/mandate) against which this payment should be collected.
     * Example: "MD123"
     */
    public string $mandate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
