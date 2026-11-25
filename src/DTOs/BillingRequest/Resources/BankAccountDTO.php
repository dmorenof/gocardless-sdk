<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\BillingRequest\Resources;

/**
 * Embedded customer bank account, only if a bank account is linked
 */
final class BankAccountDTO extends \Dmorenof\SdkRuntime\DTO
{
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
     * Example: "BARCLAYS BANK PLC"
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
            default => parent::assignMember($name, $value),
        };
    }
}
