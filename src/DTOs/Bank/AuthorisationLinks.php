<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Bank;

/**
 * BankAuthorisationLinks
 */
final class AuthorisationLinks extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the [billing request](https://docs.gocardless.com/docs/api-reference/billing-request) against which this authorisation was created.
     * Example: "BRQ123"
     */
    public string $billing_request;
    /**
     * ID of the [institution](https://docs.gocardless.com/docs/api-reference/institution) against which this authorisation was created.
     * Example: "monzo"
     */
    public string $institution;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_request' => is_string($value) ? $this->billing_request = $value : parent::assignMember($name, $value),
            'institution' => is_string($value) ? $this->institution = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
