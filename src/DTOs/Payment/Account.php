<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs\Payment;

/**
 * Payment Accounts
 *
 * Access the details of bank accounts provided for you by GoCardless that are used to fund [Outbound Payments](https://docs.gocardless.com/docs/api-reference/outbound-payment).
 */
final class Account extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Current balance on a payment account in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     * It is time-sensitive as it is ever changing.
     */
    public int $account_balance;
    /**
     * Name of the account holder, as known by the bank. Usually this is the same as the name stored with the linked [creditor](https://docs.gocardless.com/docs/api-reference/creditor). This field will be transliterated, upcased and truncated to 18 characters.
     */
    public string $account_holder_name;
    /**
     * The last few digits of the account number. Currently 4 digits for NZD bank accounts and 2 digits for other currencies.
     */
    public ?string $account_number_ending;
    /**
     * Name of bank, taken from the bank details.
     */
    public ?string $bank_name;
    /**
     * [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. Currently "AUD", "CAD", "DKK", "EUR", "GBP", "NZD", "SEK" and "USD" are supported.
     */
    public ?string $currency;
    /**
     * Unique identifier, beginning with "BA".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\Payment\AccountLinks $links;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_balance' => is_int($value) ? $this->account_balance = $value : parent::assignMember($name, $value),
            'account_holder_name' => is_string($value) ? $this->account_holder_name = $value : parent::assignMember($name, $value),
            'account_number_ending' => $value === null || is_string($value) ? $this->account_number_ending = $value : parent::assignMember($name, $value),
            'bank_name' => $value === null || is_string($value) ? $this->bank_name = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Payment\AccountLinks($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
