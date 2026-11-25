<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * BillingRequestMandateRequestLinks
 */
final class MandateRequestLinks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * (Optional) ID of the [mandate](https://docs.gocardless.com/docs/api-reference/mandate) that was created from this mandate request. this mandate request.
     *
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
