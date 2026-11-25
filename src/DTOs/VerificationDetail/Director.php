<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\VerificationDetail;

/**
 * VerificationDetailDirector
 *
 * A primary director of the company represented by the creditor.
 */
final class Director extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'city',
    'country_code',
    'date_of_birth',
    'family_name',
    'given_name',
    'postal_code',
    'street',
];

    /**
     * The city of the person's address.
     * Example: "London"
     */
    public string $city;
    /**
     * [ISO 3166-1 alpha-2 code.](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
     * Example: "GB"
     */
    public string $country_code;
    /**
     * The person's date of birth.
     * Example: "1986-02-19"
     */
    public string $date_of_birth;
    /**
     * The person's family name.
     * Example: "Jones"
     */
    public string $family_name;
    /**
     * The person's given name.
     * Example: "Tom"
     */
    public string $given_name;
    /**
     * The person's postal code.
     * Example: "EC1V 7LQ"
     */
    public string $postal_code;
    /**
     * The street of the person's address.
     */
    public string $street;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country_code' => is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'date_of_birth' => is_string($value) ? $this->date_of_birth = $value : parent::assignMember($name, $value),
            'family_name' => is_string($value) ? $this->family_name = $value : parent::assignMember($name, $value),
            'given_name' => is_string($value) ? $this->given_name = $value : parent::assignMember($name, $value),
            'postal_code' => is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'street' => is_string($value) ? $this->street = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
