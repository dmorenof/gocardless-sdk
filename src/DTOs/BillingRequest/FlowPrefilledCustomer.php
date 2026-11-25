<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest;

/**
 * BillingRequestFlowPrefilledCustomer
 *
 * Customer information used to prefill the payment page so your customer doesn't have to re-type details you already hold about them. It will be stored unvalidated and the customer will be able to review and amend it before completing the form.
 */
final class FlowPrefilledCustomer extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The first line of the customer's address.
     * Example: "221B Baker Street"
     */
    public ?string $address_line1;
    /**
     * The second line of the customer's address.
     * Example: "Marylebone"
     */
    public ?string $address_line2;
    /**
     * The third line of the customer's address.
     * Example: "City of Westminster"
     */
    public ?string $address_line3;
    /**
     * The city of the customer's address.
     * Example: "London"
     */
    public ?string $city;
    /**
     * Customer's company name. Company name should only be provided if `given_name` and `family_name` are null.
     * Example: "Hamilton Trading Ltd."
     */
    public ?string $company_name;
    /**
     * [ISO 3166-1 alpha-2 code.](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
     * Example: "GB"
     */
    public ?string $country_code;
    /**
     * For Danish customers only. The civic/company number (CPR or CVR) of the customer.
     * Example: "220550-6218"
     */
    public ?string $danish_identity_number;
    /**
     * Customer's email address.
     * Example: "user&#64;example.com"
     */
    public ?string $email;
    /**
     * Customer's surname.
     * Example: "Osborne"
     */
    public ?string $family_name;
    /**
     * Customer's first name.
     * Example: "Frank"
     */
    public ?string $given_name;
    /**
     * [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) code. Used as the language for the payment page.
     * Example: "en"
     */
    public ?string $language;
    /**
     * The customer's phone number.
     * Example: "+44 20 1234 5678"
     */
    public ?string $phone_number;
    /**
     * The customer's postal code.
     * Example: "NW1 6XE"
     */
    public ?string $postal_code;
    /**
     * The customer's address region, county or department.
     * Example: "Greater London"
     */
    public ?string $region;
    /**
     * For Swedish customers only. The civic/company number (personnummer, samordningsnummer, or organisationsnummer) of the customer.
     * Example: "556564-5404"
     */
    public ?string $swedish_identity_number;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1' => $value === null || is_string($value) ? $this->address_line1 = $value : parent::assignMember($name, $value),
            'address_line2' => $value === null || is_string($value) ? $this->address_line2 = $value : parent::assignMember($name, $value),
            'address_line3' => $value === null || is_string($value) ? $this->address_line3 = $value : parent::assignMember($name, $value),
            'city' => $value === null || is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'company_name' => $value === null || is_string($value) ? $this->company_name = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'danish_identity_number' => $value === null || is_string($value) ? $this->danish_identity_number = $value : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'family_name' => $value === null || is_string($value) ? $this->family_name = $value : parent::assignMember($name, $value),
            'given_name' => $value === null || is_string($value) ? $this->given_name = $value : parent::assignMember($name, $value),
            'language' => $value === null || is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'phone_number' => $value === null || is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            'postal_code' => $value === null || is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'region' => $value === null || is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'swedish_identity_number' => $value === null || is_string($value) ? $this->swedish_identity_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
