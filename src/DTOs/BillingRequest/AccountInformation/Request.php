<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\AccountInformation;

/**
 * BillingRequestAccountInformationRequest
 *
 * Request for account information
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country_code',
        'scopes',
    ];

    /**
     * [ISO 3166-1 alpha-2 code.](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
     */
    public string $country_code;
    /**
     * List of scopes for the account information request
     */
    public \GoCardlessSDK\Collections\BillingRequest\AccountInformation\Request\ScopesCollection $scopes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country_code' => is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
