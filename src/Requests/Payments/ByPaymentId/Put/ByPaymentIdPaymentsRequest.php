<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Payments\ByPaymentId\Put;

final class ByPaymentIdPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * On failure, automatically retry the payment using [intelligent retries](https://docs.gocardless.com/docs/optimise/reduced-failed-payments-with-success-plus). Default is `false`. <p class="notice"><strong>Important</strong>: To be able to use intelligent retries, Success+ needs to be enabled in [GoCardless dashboard](https://manage.gocardless.com/success-plus). </p>
     */
    public bool $retry_if_possible;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'retry_if_possible' => is_bool($value) ? $this->retry_if_possible = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
