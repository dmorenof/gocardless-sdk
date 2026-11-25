<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Creditor;

/**
 * Creditor Bank Accounts
 *
 * Creditor Bank Accounts hold the bank details of a [creditor](https://docs.gocardless.com/docs/api-reference/creditor). These are the bank accounts which your [payouts](https://docs.gocardless.com/docs/api-reference/payout) will be sent to.
 *
 * Note that creditor bank accounts must be unique, and so you will encounter a `bank_account_exists` error if you try to create a duplicate bank account. You may wish to handle this by updating the existing record instead, the ID of which will be provided as `links[creditor_bank_account]` in the error response.
 *
 * <p class="restricted-notice"><strong>Restricted</strong>: This API is not available for partner integrations.</p>
 */
final class BankAccount extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Name of the account holder, as known by the bank. Usually this is the same as the name stored with the linked [creditor](https://docs.gocardless.com/docs/api-reference/creditor). This field will be transliterated, upcased and truncated to 18 characters.
     */
    public string $account_holder_name;
    /**
     * The last few digits of the account number. Currently 4 digits for NZD bank accounts and 2 digits for other currencies.
     */
    public ?string $account_number_ending;
    public \GoCardlessSDK\Enums\Creditor\BankAccountAccountType $account_type;
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
    public \GoCardlessSDK\DTOs\Creditor\BankAccountLinks $links;
    public \GoCardlessSDK\DTOs\Customer\Metadata $metadata;
    public \GoCardlessSDK\Enums\Creditor\BankAccountVerificationStatus $verification_status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_number_ending' => $value === null || is_string($value) ? $this->account_number_ending = $value : parent::assignMember($name, $value),
            'account_type' => is_string($value) ? $this->account_type = \GoCardlessSDK\Enums\Creditor\BankAccountAccountType::from($value) : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'country_code' => $value === null || is_string($value) ? $this->country_code = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Creditor\BankAccountLinks($value) : parent::assignMember($name, $value),
            'verification_status' => is_string($value) ? $this->verification_status = \GoCardlessSDK\Enums\Creditor\BankAccountVerificationStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
