<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Customer;

/**
 * Customer Bank Accounts
 *
 * Customer Bank Accounts hold the bank details of a [customer](https://docs.gocardless.com/docs/api-reference/customer). They always belong to a [customer](https://docs.gocardless.com/docs/api-reference/customer), and may be linked to several Direct Debit [mandates](https://docs.gocardless.com/docs/api-reference/mandate).
 *
 * Note that customer bank accounts must be unique, and so you will encounter a `bank_account_exists` error if you try to create a duplicate bank account. You may wish to handle this by updating the existing record instead, the ID of which will be provided as `links[customer_bank_account]` in the error response.
 *
 * _Note:_ To ensure the customer's bank accounts are valid, verify them first
 * using
 * [bank_details_lookups](https://docs.gocardless.com/docs/api-reference/bank-details-lookup#perform-a-bank-details-lookup),
 * before proceeding with creating the accounts
 */
final class BankAccount extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Name of the account holder, as known by the bank. The full name provided when the customer is created is stored and is available via the API, but is transliterated, upcased, and truncated to 18 characters in bank submissions. This field is required unless the request includes a [customer bank account token](https://docs.gocardless.com/docs/collect-payments/integration-types/javascript-drop-in-flow).
     */
    public string $account_holder_name;
    /**
     * The last few digits of the account number. Currently 4 digits for NZD bank accounts and 2 digits for other currencies.
     */
    public ?string $account_number_ending;
    public \GoCardlessSDK\Enums\Customer\BankAccountAccountType $account_type;
    /**
     * A token to uniquely refer to a set of bank account details. This feature is still in early access and is only available for certain organisations.
     */
    public ?string $bank_account_token;
    /**
     * Name of bank, taken from the bank details.
     */
    public ?string $bank_name;
    /**
     * [ISO 3166-1 alpha-2 code](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements). Defaults to the country code of the `iban` if supplied, otherwise is required.
     */
    public ?string $country_code;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this resource was created.
     * Format: date-time
     */
    public string $created_at;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. Currently "AUD", "CAD", "DKK", "EUR", "GBP", "NZD", "SEK" and "USD" are supported.
     */
    public ?string $currency;
    /**
     * Boolean value showing whether the bank account is enabled or disabled.
     */
    public bool $enabled;
    /**
     * Unique identifier, beginning with "BA".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\Customer\BankAccountLinks $links;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    public \GoCardlessSDK\Enums\Customer\BankAccountPayerNameVerificationResult $payer_name_verification_result;
    /**
     * Whether this customer bank account is registered as a trusted recipient for Outbound Payments. Only present when the feature is enabled for the organisation.
     */
    public bool $trusted_recipient;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_number_ending' => $value === null || is_string($value) ? $this->account_number_ending = $value : parent::assignMember($name, $value),
            'account_type' => is_string($value) ? $this->account_type = \GoCardlessSDK\Enums\Customer\BankAccountAccountType::from($value) : parent::assignMember($name, $value),
            'bank_account_token' => $value === null || is_string($value) ? $this->bank_account_token = $value : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Customer\BankAccountLinks($value) : parent::assignMember($name, $value),
            'payer_name_verification_result' => is_string($value) ? $this->payer_name_verification_result = \GoCardlessSDK\Enums\Customer\BankAccountPayerNameVerificationResult::from($value) : parent::assignMember($name, $value),
            'trusted_recipient' => is_bool($value) ? $this->trusted_recipient = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
