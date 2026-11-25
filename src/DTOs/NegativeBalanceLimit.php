<?php

declare(strict_types=1);

namespace GoCardlessSDK\DTOs;

/**
 * Negative Balance Limit
 *
 * The negative balance limit is a threshold for the creditor balance beyond which refunds are not permitted. The default limit is zero — refunds are not permitted if the creditor has a negative balance. The limit can be changed on a per-creditor basis.
 *
 */
final class NegativeBalanceLimit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'balance_limit',
    'created_at',
    'currency',
    'id',
    'links',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The limit amount in pence (e.g. 10000 for a -100 GBP limit).
     */
    public int $balance_limit;
    /**
     * Fixed [timestamp](https://docs.gocardless.com/docs/api-reference/data-conventions#dates-and-times), recording when this limit was created.
     * Format: date-time
     */
    public string $created_at;
    public \GoCardlessSDK\Enums\NegativeBalanceLimit\Currency $currency;
    /**
     * Unique identifier, beginning with "NBL".
     */
    public string $id;
    public \GoCardlessSDK\DTOs\NegativeBalanceLimit\Links $links;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'balance_limit' => is_int($value) ? $this->balance_limit = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = \GoCardlessSDK\Enums\NegativeBalanceLimit\Currency::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'links' => $value instanceof \stdClass ? $this->links = new \GoCardlessSDK\DTOs\NegativeBalanceLimit\Links($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
