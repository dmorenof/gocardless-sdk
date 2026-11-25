<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\BillingRequests\CreateWithActions\Post\BillingRequestWithActions\Actions\CollectCustomerDetails;

final class BillingDetailRequest extends \Dmorenof\SdkRuntime\DTO
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
        'country_code' => [
            'maxLength' => 2,
        ],
        'danish_identity_number' => [
            'maxLength' => 10,
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
     * [ISO 3166-1 alpha-2 code.](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
     */
    public ?string $country_code {
        set {
            $this->assigning('country_code', $value);
            $this->country_code = $value;
        }
    }
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
     * For ACH customers only. Required for ACH customers. A string containing the IP address of the payer to whom the mandate belongs (i.e. as a result of their completion of a mandate setup flow in their browser).
     *
     * Not required for creating offline mandates where `authorisation_source` is set to telephone or paper.
     *
     */
    public ?string $ip_address;
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
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'danish_identity_number' => $value === null || is_string($value) ? $this->danish_identity_number = $value : parent::assignMember($name, $value),
            'ip_address' => $value === null || is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'postal_code' => $value === null || is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'region' => $value === null || is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'swedish_identity_number' => $value === null || is_string($value) ? $this->swedish_identity_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
