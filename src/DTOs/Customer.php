<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Customers
 *
 * Customer objects hold the contact details for a customer. A customer can have several [customer bank accounts](https://docs.gocardless.com/docs/api-reference/customer-bank-account), which in turn can have several Direct Debit [mandates](https://docs.gocardless.com/docs/api-reference/mandate).
 */
final class Customer extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'address_line1' => [
        'maxLength' => 255,
    ],
    'address_line2' => [
        'maxLength' => 255,
    ],
    'address_line3' => [
        'maxLength' => 255,
    ],
    'city' => [
        'maxLength' => 255,
    ],
    'company_name' => [
        'maxLength' => 255,
    ],
    'country_code' => [
        'maxLength' => 2,
    ],
    'danish_identity_number' => [
        'maxLength' => 10,
    ],
    'email' => [
        'maxLength' => 255,
    ],
    'family_name' => [
        'maxLength' => 255,
    ],
    'given_name' => [
        'maxLength' => 255,
    ],
    'language' => [
        'maxLength' => 2,
    ],
    'phone_number' => [
        'maxLength' => 30,
    ],
    'postal_code' => [
        'maxLength' => 20,
    ],
    'region' => [
        'maxLength' => 255,
    ],
    'swedish_identity_number' => [
        'maxLength' => 12,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The first line of the customer's address.
     */
    public ?string $address_line1 {
        set {
            $this->assigning('address_line1', $value);
            $this->address_line1 = $value;
        }
    }
    /**
     * The second line of the customer's address.
     */
    public ?string $address_line2 {
        set {
            $this->assigning('address_line2', $value);
            $this->address_line2 = $value;
        }
    }
    /**
     * The third line of the customer's address.
     */
    public ?string $address_line3 {
        set {
            $this->assigning('address_line3', $value);
            $this->address_line3 = $value;
        }
    }
    /**
     * The city of the customer's address.
     */
    public ?string $city {
        set {
            $this->assigning('city', $value);
            $this->city = $value;
        }
    }
    /**
     * Customer's company name. Required unless a `given_name` and `family_name` are provided. For Canadian customers, the use of a `company_name` value will mean that any mandate created from this customer will be considered to be a "Business PAD" (otherwise, any mandate will be considered to be a "Personal PAD").
     */
    public ?string $company_name {
        set {
            $this->assigning('company_name', $value);
            $this->company_name = $value;
        }
    }
    /**
     * [ISO 3166-1 alpha-2 code.](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
     */
    public ?string $country_code {
        set {
            $this->assigning('country_code', $value);
            $this->country_code = $value;
        }
    }
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * For Danish customers only. The civic/company number (CPR or CVR) of the customer. Must be supplied if the customer's bank account is denominated in Danish krone (DKK).
     */
    public ?string $danish_identity_number {
        set {
            $this->assigning('danish_identity_number', $value);
            $this->danish_identity_number = $value;
        }
    }
    /**
     * Customer's email address. Required in most cases, as this allows GoCardless to send notifications to this customer.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * Customer's surname. Required unless a `company_name` is provided.
     */
    public ?string $family_name {
        set {
            $this->assigning('family_name', $value);
            $this->family_name = $value;
        }
    }
    /**
     * Customer's first name. Required unless a `company_name` is provided.
     */
    public ?string $given_name {
        set {
            $this->assigning('given_name', $value);
            $this->given_name = $value;
        }
    }
    /**
     * Unique identifier, beginning with "CU".
     */
    public string $id;
    /**
     * [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) code. Used as the language for notification emails sent by GoCardless if your organisation does not send its own (see [compliance requirements](https://docs.gocardless.com/docs/api-reference/compliance-requirements)). Currently only "en", "fr", "de", "pt", "es", "it", "nl", "da", "nb", "sl", "sv" are supported. If this is not provided, the language will be chosen based on the `country_code` (if supplied) or default to "en".
     */
    public ?string $language {
        set {
            $this->assigning('language', $value);
            $this->language = $value;
        }
    }
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    /**
     * [ITU E.123](https://en.wikipedia.org/wiki/E.123) formatted phone number, including country code.
     */
    public ?string $phone_number {
        set {
            $this->assigning('phone_number', $value);
            $this->phone_number = $value;
        }
    }
    /**
     * The customer's postal code.
     */
    public ?string $postal_code {
        set {
            $this->assigning('postal_code', $value);
            $this->postal_code = $value;
        }
    }
    /**
     * The customer's address region, county or department. For US customers a 2 letter [ISO3166-2:US](https://en.wikipedia.org/wiki/ISO_3166-2:US) state code is required (e.g. `CA` for California).
     */
    public ?string $region {
        set {
            $this->assigning('region', $value);
            $this->region = $value;
        }
    }
    /**
     * For Swedish customers only. The civic/company number (personnummer, samordningsnummer, or organisationsnummer) of the customer. Must be supplied if the customer's bank account is denominated in Swedish krona (SEK). This field cannot be changed once it has been set.
     */
    public ?string $swedish_identity_number {
        set {
            $this->assigning('swedish_identity_number', $value);
            $this->swedish_identity_number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address_line1' => $value === null || is_string($value) ? $this->address_line1 = $value : parent::assignMember($name, $value),
            'address_line2' => $value === null || is_string($value) ? $this->address_line2 = $value : parent::assignMember($name, $value),
            'address_line3' => $value === null || is_string($value) ? $this->address_line3 = $value : parent::assignMember($name, $value),
            'city' => $value === null || is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'company_name' => $value === null || is_string($value) ? $this->company_name = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'danish_identity_number' => $value === null || is_string($value) ? $this->danish_identity_number = $value : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'family_name' => $value === null || is_string($value) ? $this->family_name = $value : parent::assignMember($name, $value),
            'given_name' => $value === null || is_string($value) ? $this->given_name = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'language' => $value === null || is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'phone_number' => $value === null || is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            'postal_code' => $value === null || is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'region' => $value === null || is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'swedish_identity_number' => $value === null || is_string($value) ? $this->swedish_identity_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
