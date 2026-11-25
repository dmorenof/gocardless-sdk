<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\MandatePdfs\Post;

final class MandatePdfsRequest extends \Dmorenof\SdkRuntime\DTO
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
        'postal_code' => [
            'maxLength' => 20,
        ],
        'region' => [
            'maxLength' => 255,
        ],
    ];

    /**
     * Name of the account holder, as known by the bank. Usually this matches the name of the [customer](https://docs.gocardless.com/docs/api-reference/customer). This field cannot exceed 18 characters.
     */
    public ?string $account_holder_name;
    /**
     * Bank account number - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $account_number;
    public \GoCardlessSDK\Enums\Mandate\PdfAccountType $account_type;
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
     * Bank code - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $bank_code;
    /**
     * SWIFT BIC. Will be derived automatically if a valid `iban` or [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) are provided.
     */
    public ?string $bic;
    /**
     * Branch code - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $branch_code;
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
     * The customer's company name. Used to populate the "Customer Name or Company name" field on the PDF.
     */
    public ?string $company_name;
    /**
     * [ISO 3166-1](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements) alpha-2 code. Required if providing local details.
     */
    public ?string $country_code;
    /**
     * For Danish customers only. The civic/company number (CPR or CVR) of the customer. Should only be supplied for Betalingsservice mandates.
     */
    public ?string $danish_identity_number;
    /**
     * The customer's family name (i.e. last name). Used to populate the "Customer Name or Company name" field on the PDF. Ignored if `company_name` is provided.
     */
    public ?string $family_name;
    /**
     * The customer's given name (i.e. first name). Used to populate the "Customer Name or Company name" field on the PDF. Ignored if `company_name` is provided.
     */
    public ?string $given_name;
    /**
     * International Bank Account Number. Alternatively you can provide [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details). IBANs cannot be provided for Autogiro mandates.
     */
    public ?string $iban;
    public \GoCardlessSDK\Requests\MandatePdfs\Post\MandatePdfs\PdfsLinksRequest $links;
    /**
     * Unique 6 to 18 character reference. This may be left blank at the point of signing.
     */
    public ?string $mandate_reference;
    /**
     * For American customers only. IP address of the computer used by the customer to set up the mandate. This is required in order to create compliant Mandate PDFs according to the ACH scheme rules.
     */
    public ?string $payer_ip_address;
    /**
     * The customer phone number. Should only be provided for BECS NZ mandates.
     */
    public ?string $phone_number;
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
     * Direct Debit scheme. Can be supplied or automatically detected from the bank account details provided. If you do not provide a scheme, you must provide either a mandate, an `iban`, or [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) including a `country_code`.
     */
    public ?string $scheme;
    /**
     * If provided, a form will be generated with this date and no signature field.
     * Format: date
     */
    public ?string $signature_date;
    public \GoCardlessSDK\DTOs\Mandate\OneOfPdfSubscriptionAmount $subscription_amount;
    public \GoCardlessSDK\Enums\Mandate\PdfSubscriptionFrequency $subscription_frequency;
    /**
     * For Swedish customers only. The civic/company number (personnummer, samordningsnummer, or organisationsnummer) of the customer. Should only be supplied for Autogiro mandates.
     */
    public ?string $swedish_identity_number;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_name' => $value === null || is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_number' => $value === null || is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'account_type' => is_string($value) ? $this->account_type = \GoCardlessSDK\Enums\Mandate\PdfAccountType::from($value) : parent::assignMember($name, $value),
            'address_line1' => $value === null || is_string($value) ? $this->address_line1 = $value : parent::assignMember($name, $value),
            'address_line2' => $value === null || is_string($value) ? $this->address_line2 = $value : parent::assignMember($name, $value),
            'address_line3' => $value === null || is_string($value) ? $this->address_line3 = $value : parent::assignMember($name, $value),
            'bank_code' => $value === null || is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'bic' => $value === null || is_string($value) ? $this->bic = $value : parent::assignMember($name, $value),
            'branch_code' => $value === null || is_string($value) ? $this->branch_code = $value : parent::assignMember($name, $value),
            'city' => $value === null || is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'company_name' => $value === null || is_string($value) ? $this->company_name = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'danish_identity_number' => $value === null || is_string($value) ? $this->danish_identity_number = $value : parent::assignMember($name, $value),
            'family_name' => $value === null || is_string($value) ? $this->family_name = $value : parent::assignMember($name, $value),
            'given_name' => $value === null || is_string($value) ? $this->given_name = $value : parent::assignMember($name, $value),
            'iban' => $value === null || is_string($value) ? $this->iban = $value : parent::assignMember($name, $value),
            'mandate_reference' => $value === null || is_string($value) ? $this->mandate_reference = $value : parent::assignMember($name, $value),
            'payer_ip_address' => $value === null || is_string($value) ? $this->payer_ip_address = $value : parent::assignMember($name, $value),
            'phone_number' => $value === null || is_string($value) ? $this->phone_number = $value : parent::assignMember($name, $value),
            'postal_code' => $value === null || is_string($value) ? $this->postal_code = $value : parent::assignMember($name, $value),
            'region' => $value === null || is_string($value) ? $this->region = $value : parent::assignMember($name, $value),
            'scheme' => $value === null || is_string($value) ? $this->scheme = $value : parent::assignMember($name, $value),
            'signature_date' => $value === null || is_string($value) ? $this->signature_date = $value : parent::assignMember($name, $value),
            'subscription_frequency' => is_string($value) ? $this->subscription_frequency = \GoCardlessSDK\Enums\Mandate\PdfSubscriptionFrequency::from($value) : parent::assignMember($name, $value),
            'swedish_identity_number' => $value === null || is_string($value) ? $this->swedish_identity_number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
