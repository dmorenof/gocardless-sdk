<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\MandateImportEntries\Post\MandateImportEntries;

final class BankAccountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account_holder_name',
    ];

    /**
     * Name of the account holder, as known by the bank. The full name provided when the customer is created is stored and is available via the API, but is transliterated, upcased, and truncated to 18 characters in bank submissions. This field is required unless the request includes a [customer bank account token](https://docs.gocardless.com/docs/collect-payments/integration-types/javascript-drop-in-flow).
     */
    public string $account_holder_name;
    /**
     * Bank account number - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $account_number;
    public \GoCardlessSDK\Enums\Customer\BankAccountAccountType $account_type;
    /**
     * Bank code - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $bank_code;
    /**
     * Branch code - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $branch_code;
    /**
     * [ISO 3166-1 alpha-2 code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements). Defaults to the country code of the `iban` if supplied, otherwise is required.
     */
    public ?string $country_code;
    /**
     * International Bank Account Number. Alternatively you can provide [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details). IBANs are not accepted for Swedish bank accounts denominated in SEK - you must supply [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details#sweden).
     */
    public ?string $iban;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_number' => $value === null || is_string($value) ? $this->account_number = $value : parent::assignMember($name, $value),
            'account_type' => is_string($value) ? $this->account_type = \GoCardlessSDK\Enums\Customer\BankAccountAccountType::from($value) : parent::assignMember($name, $value),
            'bank_code' => $value === null || is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'branch_code' => $value === null || is_string($value) ? $this->branch_code = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'iban' => $value === null || is_string($value) ? $this->iban = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
