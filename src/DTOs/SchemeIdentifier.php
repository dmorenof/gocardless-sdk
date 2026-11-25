<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Scheme Identifiers
 *
 * This represents a scheme identifier (e.g. a SUN in Bacs or a CID in SEPA). Scheme identifiers are used to specify the beneficiary name that appears on customers' bank statements.
 *
 */
final class SchemeIdentifier extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address_line1',
        'address_line2',
        'address_line3',
        'can_specify_mandate_reference',
        'city',
        'country_code',
        'created_at',
        'currency',
        'email',
        'id',
        'minimum_advance_notice',
        'name',
        'phone_number',
        'postal_code',
        'reference',
        'region',
        'scheme',
        'status',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The first line of the scheme identifier's support address.
     */
    public ?string $address_line1;
    /**
     * The second line of the scheme identifier's support address.
     */
    public ?string $address_line2;
    /**
     * The third line of the scheme identifier's support address.
     */
    public ?string $address_line3;
    /**
     * Whether a custom reference can be submitted for mandates using this scheme identifier.
     */
    public bool $can_specify_mandate_reference;
    /**
     * The city of the scheme identifier's support address.
     */
    public ?string $city;
    /**
     * [ISO 3166-1 alpha-2 code.](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
     */
    public ?string $country_code;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    public \GoCardlessSDK\Enums\SchemeIdentifier\Currency $currency;
    /**
     * Scheme identifier's support email address.
     */
    public ?string $email;
    /**
     * Unique identifier, usually beginning with "SU".
     */
    public string $id;
    /**
     * The minimum interval, in working days, between the sending of a pre-notification to the customer, and the charge date of a payment using this scheme identifier.
     *
     * By default, GoCardless sends these notifications automatically. Please see our [compliance requirements](https://docs.gocardless.com/docs/api-reference/compliance-requirements) for more details.
     */
    public int $minimum_advance_notice;
    /**
     * The name which appears on customers' bank statements. This should usually be the merchant's trading name.
     */
    public string $name;
    /**
     * Scheme identifier's support phone number.
     */
    public ?string $phone_number;
    /**
     * The scheme identifier's support postal code.
     */
    public ?string $postal_code;
    /**
     * The scheme-unique identifier against which payments are submitted.
     */
    public ?string $reference;
    /**
     * The scheme identifier's support address region, county or department.
     */
    public ?string $region;
    public \GoCardlessSDK\Enums\SchemeIdentifier\Scheme $scheme;
    public \GoCardlessSDK\Enums\SchemeIdentifier\Status $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1' => $value === null || is_string($value) ? $this->address_line1 = $value : parent::assignMember($name, $value),
            'address_line2' => $value === null || is_string($value) ? $this->address_line2 = $value : parent::assignMember($name, $value),
            'address_line3' => $value === null || is_string($value) ? $this->address_line3 = $value : parent::assignMember($name, $value),
            'can_specify_mandate_reference' => is_bool($value) ? $this->can_specify_mandate_reference = $value : parent::assignMember($name, $value),
            'city' => $value === null || is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\SchemeIdentifier\Currency::from($value) : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'minimum_advance_notice' => is_int($value) ? $this->minimum_advance_notice = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone_number' => $value === null || is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            'postal_code' => $value === null || is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'region' => $value === null || is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'scheme' => is_string($value) ? $this->scheme = \GoCardlessSDK\Enums\SchemeIdentifier\Scheme::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \GoCardlessSDK\Enums\SchemeIdentifier\Status::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
