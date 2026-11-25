<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Balances
 *
 * Returns the balances for a creditor. These balances are the same as what’s shown in the dashboard with one exception (mentioned below under balance_type).
 *
 * These balances will typically be 3-5 minutes old. The balance amounts likely won’t match what’s shown in the dashboard as the dashboard balances are updated much less frequently (once per day).
 */
final class Balance extends \Dmorenof\SdkRuntime\DTO
{
    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The total amount in the balance, defined as the sum of all debits subtracted from the sum of all credits,
     * in the lowest denomination for the currency (e.g. pence in GBP, cents in EUR).
     */
    public int $amount;
    public \GoCardlessSDK\Enums\Balance\BalanceType $balance_type;
    public \GoCardlessSDK\Enums\Balance\Currency $currency;
    /**
     * Dynamic [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times) recording when this resource was last updated.
     * Format: date-time
     */
    public string $last_updated_at;
    public \GoCardlessSDK\DTOs\Balance\Links $links;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'balance_type' => is_string($value) ? $this->balance_type = \GoCardlessSDK\Enums\Balance\BalanceType::from($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\Balance\Currency::from($value) : parent::assignMember($name, $value),
            'last_updated_at' => is_string($value) ? $this->last_updated_at = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\Balance\Links($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
