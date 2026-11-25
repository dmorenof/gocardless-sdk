<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Verification Details
 *
 * Verification details represent any information needed by GoCardless to verify a creditor.
 *
 * <p class="restricted-notice"><strong>Restricted</strong>:
 *   These endpoints are restricted to customers who want to collect their merchant's
 *   verification details and pass them to GoCardless via our API. Please <a href="mailto:help&#64;gocardless.com">get in
 *   touch</a> if you wish to enable this feature on your
 *   account.</p>
 */
final class VerificationDetail extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address_line1',
        'address_line2',
        'address_line3',
        'city',
        'company_number',
        'country_code',
        'description',
        'directors',
        'links',
        'name',
        'postal_code',
        'region',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The first line of the company's address.
     */
    public string $address_line1;
    /**
     * The second line of the company's address.
     */
    public ?string $address_line2;
    /**
     * The third line of the company's address.
     */
    public ?string $address_line3;
    /**
     * The city of the company's address.
     */
    public string $city;
    /**
     * The company's registration number.
     */
    public string $company_number;
    /**
     * The country code of the company's address.
     */
    public string $country_code;
    /**
     * A summary describing what the company does.
     */
    public string $description;
    /**
     * The company's directors.
     */
    public \GoCardlessSDK\Collections\VerificationDetail\DirectorsCollection $directors;
    public \GoCardlessSDK\DTOs\VerificationDetail\Links $links;
    /**
     * The company's legal name.
     */
    public string $name;
    /**
     * The company's postal code.
     */
    public string $postal_code;
    /**
     * The region of the company's address.
     */
    public ?string $region;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1' => is_string($value) ? $this->address_line1 = $value : parent::assignMember($name, $value),
            'address_line2' => $value === null || is_string($value) ? $this->address_line2 = $value : parent::assignMember($name, $value),
            'address_line3' => $value === null || is_string($value) ? $this->address_line3 = $value : parent::assignMember($name, $value),
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'company_number' => is_string($value) ? $this->company_number = $value : parent::assignMember($name, $value),
            'country_code' => is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'directors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->directors = new \GoCardlessSDK\Collections\VerificationDetail\DirectorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \GoCardlessSDK\DTOs\VerificationDetail\Director::class)) : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\VerificationDetail\Links($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'postal_code' => is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'region' => $value === null || is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
