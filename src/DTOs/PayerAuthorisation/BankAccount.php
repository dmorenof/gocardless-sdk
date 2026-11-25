<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\PayerAuthorisation;

/**
 * PayerAuthorisationBankAccount
 *
 * All details required for the creation of a
 * [Customer Bank Account](https://docs.gocardless.com/docs/api-reference/customer-bank-account).
 */
final class BankAccount extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Name of the account holder, as known by the bank. The full name provided when the customer is created is stored and is available via the API, but is transliterated, upcased, and truncated to 18 characters in bank submissions. This field is required unless the request includes a [customer bank account token](https://docs.gocardless.com/docs/collect-payments/integration-types/javascript-drop-in-flow).
     */
    public string $account_holder_name;
    /**
     * Bank account number - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $account_number;
    /**
     * The last few digits of the account number. Currently 4 digits for NZD bank accounts and 2 digits for other currencies.
     */
    public ?string $account_number_ending;
    /**
     * Account number suffix (only for bank accounts denominated in NZD) - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details#new-zealand) for more information.
     * Example: "00"
     */
    public ?string $account_number_suffix;
    public \GoCardlessSDK\Enums\Customer\BankAccountAccountType $account_type;
    /**
     * Bank code - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $bank_code;
    /**
     * Name of bank, taken from the bank details.
     */
    public ?string $bank_name;
    /**
     * Branch code - see [local details](https://docs.gocardless.com/docs/api-reference/local-bank-details) for more information. Alternatively you can provide an `iban`.
     */
    public ?string $branch_code;
    /**
     * [ISO 3166-1 alpha-2 code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements). Defaults to the country code of the `iban` if supplied, otherwise is required.
     */
    public ?string $country_code;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. Currently "AUD", "CAD", "DKK", "EUR", "GBP", "NZD", "SEK" and "USD" are supported.
     */
    public ?string $currency;
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
            'account_number_ending' => $value === null || is_string($value) ? $this->account_number_ending = $value : parent::assignMember($name, $value),
            'account_number_suffix' => $value === null || is_string($value) ? $this->account_number_suffix = $value : parent::assignMember($name, $value),
            'account_type' => is_string($value) ? $this->account_type = \GoCardlessSDK\Enums\Customer\BankAccountAccountType::from($value) : parent::assignMember($name, $value),
            'bank_code' => $value === null || is_string($value) ? $this->bank_code = $value : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'branch_code' => $value === null || is_string($value) ? $this->branch_code = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'iban' => $value === null || is_string($value) ? $this->iban = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
