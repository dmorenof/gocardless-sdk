<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\ByBillingRequestId\Actions\SelectInstitution\Post;

final class BillingRequestsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'country_code',
    'institution',
];

    /**
     * [ISO 3166-1](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements) alpha-2 code. The country code of the institution. If nothing is provided, institutions with the country code 'GB' are returned by default.
     */
    public string $country_code;
    /**
     * The unique identifier for this institution
     */
    public string $institution;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country_code' => is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'institution' => is_string($value) ? $this->institution = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
